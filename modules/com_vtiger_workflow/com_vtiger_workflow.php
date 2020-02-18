<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
class com_vtiger_workflow extends CRMEntity {

	public $table_name = 'com_vtiger_workflows';
	public $table_index= 'workflow_id';
	public $default_order_by = 'summary';
	public $default_sort_order='ASC';

	/**
	 * Track the viewing of a detail record.
	 * params $user_id - The user that is viewing the record.
	 */
	public function track_view($user_id, $current_module, $id = '') {
	}

	public function create_export_query($where) {
		global $adb;
		$search_type = vtlib_purify($_REQUEST['search_type']);
		$filters = isset(($_REQUEST['filters'])) ? vtlib_purify($_REQUEST['filters']) : '';
		if ($search_type=='includesearch' && $filters!='') {
			$filters = json_decode($filters, true);
			$conds = '';
			if (json_last_error() == JSON_ERROR_NONE && count($filters)>0) {
				$conds = $params = array();
				foreach ($filters as $filter) {
					switch ($filter['path']) {
						case 'Module':
							if (!empty($filter['value']) && $filter['value'] != 'all') {
								$conds[] = 'module_name=?';
								$params[] = $filter['value'];
							}
							break;
						case 'Description':
							if (!empty($filter['value'])) {
								$conds[] = 'summary like ?';
								$params[] = '%' . $filter['value'] . '%';
							}
							break;
						case 'Purpose':
							if (!empty($filter['value'])) {
								$conds[] = 'purpose like ?';
								$params[] = '%' . $filter['value'] . '%';
							}
							break;
						case 'Trigger':
							if (!empty($filter['value']) && $filter['value'] != 'all') {
								$conds[] = 'execution_condition=?';
								$params[] = $filter['value'];
							}
							break;
						default:
					}
				}
				if (count($conds)>0) {
					$conds = 'where '.$adb->convert2Sql(implode(' and ', $conds), $params);
				} else {
					$conds = '';
				}
			}
			return 'select * from com_vtiger_workflows '.$conds;
		} else {
			return 'select * from com_vtiger_workflows where 1 ';
		}
	}

	/**
	 * @param String $module - module name for which query needs to be generated.
	 * @param Users $user - user for which query needs to be generated.
	 * @return String Access control Query for the user.
	 */
	public function getNonAdminAccessControlQuery($module, $user, $scope = '') {
		$userprivs = $user->getPrivileges();
		$query = ' ';
		if (!$userprivs->isAdmin()) {
			$query = ' and false ';
		}
		return $query;
	}
}
?>