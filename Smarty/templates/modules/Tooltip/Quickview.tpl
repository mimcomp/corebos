<script type="text/javascript" src="modules/Tooltip/TooltipSettings.js"></script>
{include file='SetMenu.tpl'}
<section role="dialog" tabindex="-1" class="slds-fade-in-open slds-modal_large slds-app-launcher" aria-labelledby="header43">
<div class="slds-modal__container slds-p-around_none">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
<tbody><tr>
	<td class="showPanelBg" style="padding: 10px;" valign="top" width="100%">
	<br>

	<div align=center>
		<table class="settingsSelUITopLine" border="0" cellpadding="5" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<td rowspan="2" valign="top" width="50"><img src="{'quickview.png'|@vtiger_imageurl:$THEME}" alt="{$MOD.Tooltip}" title="{$MOD.Tooltip}" border="0" height="48" width="48"></td>
				<td class="heading2" valign="bottom">
				<b><a href="index.php?module=Settings&action=ModuleManager&parenttab=Settings">{'VTLIB_LBL_MODULE_MANAGER'|@getTranslatedString:'Settings'}</a> > 
			<a href="index.php?module=Settings&action=ModuleManager&module_settings=true&formodule={$FORMODULE}&parenttab=Settings">{$FORMODULE|@getTranslatedString:$FORMODULE}</a> > 
				{$MOD.LBL_TOOLTIP_MANAGEMENT}
			</tr>
			<tr>
				<td class="small" valign="top">{$MOD.LBL_TOOLTIP_MANAGEMENT_DESCRIPTION}</td>
			</tr>
		</tbody>
		</table>
		<br>
		<input type="hidden" id="pick_module" value="{$MODULE}">
		<table border="0" cellpadding="10" cellspacing="0" width="100%">
		<tbody>
			<tr>
			<td>
			<table class="tableHeading" border="0" cellpadding="5" cellspacing="0" width="100%">
			<tbody><tr>
				<td width='20%'>
					<strong><span id="field_info">{$APP.LBL_SELECT} {$MOD.LBL_FIELD}: </span></strong>
				</td>
				<td id='pick_field_list'>
					{$FIELDNAMES}
				</td>
				</tr>
			</tbody>
			</table>
			<div id="fieldList">
			</div>
			</td>
			</tr>
			</table>
		</td>
		</tr>
		</table>
	</td>
	</tr>
	</table>
	</div>
	</td>
	</tr>
</tbody>
</table>
</div>
</section>