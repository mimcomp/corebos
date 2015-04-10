<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
/*********************************************************************************
 * $Header:  \modules\com_vtiger_workflow\language\hu_hu.lang.php - 9:46 2011.11.12. $
 * Description:  Defines the Hungarian language pack for the com_vtiger_workflow module vtiger 5.3.x
 * All Rights Reserved.
 * Contributor(s): Istvan Holbok,  e-mail: holbok@gmail.com , mobil: +3670-3420900 , Skype: holboki
 ********************************************************************************/
$mod_strings = array(
	'VTEmailTask' => 'Email küldés',
	'VTEntityMethodTask' => 'Egyedi funkció meghívása',
	'VTCreateTodoTask' => 'Teendő létrehozása',
	'VTCreateEventTask' => 'Esemény létrehozása',
	'VTSMSTask' => 'SMS Küldés',
	'LBL_EDIT_TASK' => 'Feladat szerkesztése',
	'LBL_EDIT_TASK_TITLE' => 'Létező Feladat szerkesztése vagy egy Új Feladat létrehozása',
	'LBL_EDIT_WORKFLOW' => 'Automatikus Művelet Szerkesztése',
	'LBL_EDIT_WORKFLOW_TITLE' => 'Létező Automatikus Művelet szerkesztése vagy egy Új Automatikus Művelet létrehozása',
	'LBL_FROM_TEMPLATE' => 'Sablonnak',
	'LBL_NEW_WORKFLOW' => 'Új Automatikus Művelet',
	'LBL_NEW_TEMPLATE' => 'Mentés Sablonként',
	'LBL_CREATE_WORKFLOW_FOR' => 'Automatikus Művelet Létrehozása neki',
	'LBL_FOR_MODULE' => 'Modulnak',
	'LBL_CHOOSE_A_TEMPLATE' => 'Válassz egy Sablont',
	'LBL_VALIDATION_MISSING_MANDATORY_FIELDS' => 'Üres kötelező mezők vannak ott.',
	'LBL_VALIDATION_INVALID_DATE_RANGE' => 'A Kezdés dátum/idő nagyobb, mint a Befejezés dátum/idő',
	'LBL_ERROR_NO_WORKFLOW' => 'Az igényelt Automatikus Művelet nem létezik',
	'LBL_ERROR_NO_TASK' => 'Az igényelt Feladat nem létezik',
	'LBL_ERROR_NOT_ADMIN' => 'Nincs hozzáférésed ehhez a modulhoz, mivel nem vagy admin felhasználó',
	'LBL_CREATE_WORKFLOW' => 'Új Automatikus Művelet',
	'LBL_WORKFLOW_LIST' => 'Automatikus Műveletek Listája',
	'LBL_AVAILABLE_WORKLIST_LIST' => 'Elérhető Automatikus Műveletek',
	'LBL_LOADING' => 'Betöltés...',
	'LBL_VALIDATION_ERROR' => 'Érvényesítési hiba',
	'LBL_SELECT_OPTION_DOTDOTDOT' => 'Opció kiválasztása...',
	'LBL_WORKFLOW_NOTE_CRON_CONFIG' => 'Megjegyzés: az Automatikus Műveletek időzítőt (cron script) be kell állítani.',
	'LBL_NO_TEMPLATES' => 'Nincsenek Sablonok',
	'LBL_SELECT' => 'Kiválasztás',
	'LBL_MESSAGE' => 'Üzenet',
	'LBL_SET_FIELD_VALUES' => 'Add meg a mezők értékeit',
	'LBL_ADD_FIELD' => 'Add meg a mezőt',
	'LBL_USE_FIELD_VALUE_DASHDASH' => '-- Mező érték használata --',
	'LBL_USE_FUNCTION_DASHDASH' => '-- Függvény használata --',
	'LBL_RAW_TEXT' => 'Nyers szöveg',
	'LBL_FIELD' => 'Mező',
	'LBL_EXPRESSION' => 'Kifejezés',
	'LBL_SET_EXPRESSION' => 'Kifejezést megad',
	'LBL_MANUAL' => 'Rendszer',
	'LBL_NEW_CONDITION_GROUP_BUTTON_LABEL' => 'Új Feltétel csoport',
	'VTUpdateFieldsTask' => 'Mezők frissítése',
	'LBL_VALIDATION_DUPLICATE_FIELDNAMES' => 'Ugyanazt a mezőt egynél többször választottad.',
	'LBL_VALIDATION_INVALID_FIELD_VALUES' => 'Érvénytelen mező érték',
	'LBL_CREATE_ENTITY_NOTE_ORDER_MATTERS' => 'Megjegyzés: A kifejezéseket abban a sorrendben értékeljük ki, ahogy a mezők értéket kapnak.											Tehát légy biztos abban, hogy a mezők már azelőtt kaptak értéket, mielőtt egy kifejezésben használnád őket.',
	'LBL_SET_VALUE' => 'Érték megadása',
	'LBL_EMAIL_RECIPIENT' => 'Címzett',
	'LBL_EMAIL_CC' => 'CC',
	'LBL_EMAIL_BCC' => 'BCC',
	'LBL_EMAIL_SUBJECT' => 'Tárgysor',
        'LBL_EMAIL_FROMNAME' => 'From Name',
        'LBL_EMAIL_FROMEMAIL' => 'From Email',
	'LBL_WORKFLOW_NOTE_EVENT_TASK_TIMEZONE' => 'Megjegyzés: Minden dátumot, időpontot és az ismétlődéssel kapcsolatos információt beállítottuk az eseményhez,											és ezt a config.inc.php-ben megadott alapértelmezett időzónához viszonyítva fogjuk használni.',
	'Select Meta Variables' => 'Válassz Meta váltózókat',
	'Current Date' => 'Aktuális dátum',
	'Current Time' => 'Aktuális idő',
	'System Timezone' => 'Rendszer időzóna',
	'CRM Detail View URL' => 'CRM Részletes adatok nézet URL',
	'Portal Detail View URL' => 'Ügyfél Portál Részletes adatok nézet URL',
	'Site Url' => 'URL (CRM)',
	'Portal Url' => 'Ügyfél Portál URL',
	'Workflow' => 'Munkafolyamat',
	'VTCreateEntityTask' => 'Entitás létrehozása',
	'LBL_ENTITY_TYPE' => 'Entitás típus',
	'LBL_SELECT_ENTITY_TYPE' => '--Válassz entitás típust--',
	'LBL_NO_ENTITIES_FOUND' => 'Nem találtunk létrehozható entitást',
	'LBL_Module' => 'Modul',
	'LBL_Description' => 'Leírás',
	'LBL_Tools' => 'Eszközök',
	'LBL_Recepient' => 'Címzett',
	'LBL_CC' => 'Másolatot kap',
	'LBL_BCC' => 'Rejtett másolatot kap',
	'LBL_Subject' => 'Tárgysor',
	'LBL_PARENT_OWNER' => 'Szülő rekord tulajdonosa',
	'LBL_SPECIAL_OPTIONS' => 'Különleges opciók',
	'CBTagTask' => 'Add/Delete Tag',
	'Add Tag' => 'Add Tag',
	'Delete Tag' => 'Delete Tag',
	'Tags' => 'Tags',
	'ForAllUsers' => 'For All Users',
	'ForCurrentUser' => 'Only For Current User',
	'CBRelateSales' => 'Relate Product/Service',
	'Relate Product' => 'Relate Product',
	'Relate Service' => 'Relate Service',
	'Relate with AccountVendor' => 'Relate with Account/Vendor',
	'Relate with Contact' => 'Relate with Contact',
	'LBL_HELPDESK_SUPPORT_EMAILID' => 'Ügyfélszolgálat E-mail címe',
	'LBL_HELPDESK_SUPPORT_NAME' => 'Ügyfélszolgálat E-mail feladó neve',
	'LBL_ORGANIZATION_LOGO' => 'Cég Logo',
	'LBL_RUN_WORKFLOW' => 'Run Workflow',
	'LBL_AT_TIME' => 'At Time',
	'LBL_HOURLY' => 'Hourly',
	'LBL_DAILY' => 'Daily',
	'LBL_WEEKLY' => 'Weekly',
	'LBL_ON_THESE_DAYS' => 'On these days',
	'LBL_MONTHLY_BY_DATE' => 'Monthly by Date',
	'LBL_MONTHLY_BY_WEEKDAY' => 'Monthly by Weekday',
	'LBL_YEARLY' => 'Yearly',
	'LBL_SPECIFIC_DATE' => 'On Specific Date',
	'LBL_CHOOSE_DATE' => 'Choose Date',
	'LBL_SELECT_MONTH_AND_DAY' => 'Select Month and Date',
	'LBL_SELECTED_DATES' => 'Selected Dates',
	'LBL_EXCEEDING_MAXIMUM_LIMIT' => 'Maximum limit exceeded',
	'LBL_NEXT_TRIGGER_TIME' => 'Next trigger time on',
	'LBL_MESSAGE' => 'Message',
	'UpdateInventoryProducts On Every Save' => 'Update Product Inventory',
	'Send Email to user when Notifyowner is True' => 'Send Email to user when Notifyowner is True',
	'Send Email to user when Portal User is True' => 'Send Email to user when Portal User is True',
	'Send Email to users on Potential creation' => 'Send Email to users on Potential creation',
	'Workflow for Contact Creation or Modification' => 'Send Email to Contact with Portal Login information',
	'Workflow for Ticket Created from Portal' => 'Workflow for Ticket Created from Portal',
	'Workflow for Ticket Updated from Portal' => 'Workflow for Ticket Updated from Portal',
	'Workflow for Ticket Change, not from the Portal' => 'Workflow for Ticket Change, not from the Portal',
	'Workflow for Events when Send Notification is True' => 'Workflow for Events when Send Notification is True',
	'Workflow for Calendar Todos when Send Notification is True' => 'Workflow for Calendar Todos when Send Notification is True',
	'Calculate or Update forecast amount' => 'Calculate or Update forecast amount',
	'LBL_METHOD_NAME' => 'Method Name',
	'NO_METHOD_AVAILABLE' => 'No method is available for this module.'
);
?>