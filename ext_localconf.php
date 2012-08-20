<?php
if ( ! defined('TYPO3_MODE') ) {
	die ('Access denied.');
}

// add settings from ext_conf_template.txt
$confArr	= unserialize( $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['in2master'] );

if ( 1 == $confArr['enableMinimizedRTE'] ) {
	t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:in2master/Configuration/TSConfig/rte.ts">');
}

if ( 1 == $confArr['enableDefaultPageTSconfig'] ) {
	t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:in2master/Configuration/TSConfig/page.ts">');
}

if ( 1 == $confArr['enableDefaultUserTSconfig'] ) {
	t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:in2master/Configuration/TSConfig/user.ts">');
}

// nice to have
$TYPO3_CONF_VARS['BE']['accessListRenderMode'] = 'checkbox';
$TYPO3_CONF_VARS['BE']['explicitADmode'] = 'explicitAllow';
$TYPO3_CONF_VARS['BE']['forceCharset'] = 'utf-8';
$TYPO3_CONF_VARS['BE']['maxFileSize'] = '100000';
$TYPO3_CONF_VARS['BE']['sessionTimeout'] = '36000';
$TYPO3_CONF_VARS['BE']['warning_email_addr'] = 'service@in2code.de';
$TYPO3_CONF_VARS['BE']['warning_mode'] = '2';
$TYPO3_CONF_VARS['FE']['forceCharset'] = 'utf-8';
$TYPO3_CONF_VARS['FE']['permalogin'] = '1';
$TYPO3_CONF_VARS['GFX']['enable_typo3temp_db_tracking'] = true;
$TYPO3_CONF_VARS['GFX']['thumbnails_png'] = '3';
$TYPO3_CONF_VARS['SYS']['lang']['cache']['clear_menu'] = true;
$TYPO3_CONF_VARS['SYS']['loginCopyrightShowVersion'] = false;
$TYPO3_CONF_VARS['SYS']['maxFileNameLength'] = '255';
$TYPO3_CONF_VARS['SYS']['textfile_ext'] = 'txt,pdf,html,htm,css,inc,php,php3,tmpl,js,sql';

// helpers
// uncomment to direct BE users to the frontend for editing
// $TYPO3_CONF_VARS['BE']['interfaces'] = 'backend,frontend';

// peformance
$TYPO3_CONF_VARS['BE']['compressionLevel'] = '5';
$TYPO3_CONF_VARS['BE']['versionNumberInFilename'] = true;
$TYPO3_CONF_VARS['FE']['compressionLevel'] = '5';
$TYPO3_CONF_VARS['FE']['debug'] = false;
$TYPO3_CONF_VARS['FE']['versionNumberInFilename'] = true;
$TYPO3_CONF_VARS['SYS']['belogErrorReporting'] = false;
$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = '';
$TYPO3_CONF_VARS['SYS']['sqlDebug'] = false;
$TYPO3_CONF_VARS['SYS']['syslogErrorReporting'] = '0';
$TYPO3_CONF_VARS['SYS']['systemLogLevel'] = '4';

if ( 1 == $confArr['enableDeveloperMode'] ) {
	// TODO
	// create dev.ts
	// clear cache on every page load
	//
	// t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:in2master/Configuration/TSConfig/dev.ts">');
	// Seems not possible as the following needs to be in localconf.php directly for processing
	// $TYPO3_CONF_VARS['EXT']['extList'] .= ',func,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,lowlevel,beuser,info_pagetsconfig,reports,extension_builder';
	// $TYPO3_CONF_VARS['EXT']['extList_FE'] .= ',extension_builder';
	// $TYPO3_CONF_VARS['EXT']['extConf']['extension_builder'] = 'a:3:{s:15:"enableRoundtrip";s:1:"1";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}';
	$TYPO3_CONF_VARS['FE']['debug'] = true;
	$TYPO3_CONF_VARS['SYS']['belogErrorReporting'] = true;
	$TYPO3_CONF_VARS['SYS']['devIPmask'] = '192.168.*,127.0.0.1';
	$TYPO3_CONF_VARS['SYS']['displayErrors'] = '1';
	$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = true;
	$TYPO3_CONF_VARS['SYS']['loginCopyrightShowVersion'] = true;
	$TYPO3_CONF_VARS['SYS']['sqlDebug'] = '1';	
	$TYPO3_CONF_VARS['SYS']['syslogErrorReporting'] = '1';
	$TYPO3_CONF_VARS['SYS']['systemLog'] = 'error_log,,1';
	$TYPO3_CONF_VARS['SYS']['systemLogLevel'] = '1';
}

if ( 1 == $confArr['enableServerSample'] ) {
	$TYPO3_CONF_VARS['GFX']['gdlib_png'] = '1';
	$TYPO3_CONF_VARS['GFX']['im_combine_filename'] = 'composite';
	$TYPO3_CONF_VARS['GFX']['im_imvMaskState'] = '1';
	$TYPO3_CONF_VARS['GFX']['im_v5effects'] = '1';
}

// $TYPO3_CONF_VARS['EXT']['extConf']['realurl'] = 'a:5:{s:10:"configFile";s:35:"typo3conf/ext/in2master/realurl.php";s:14:"enableAutoConf";s:1:"0";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}';
$TYPO3_CONF_VARS['EXT']['extConf']['em'] = 'a:4:{s:14:"showOldModules";s:1:"0";s:14:"inlineToWindow";s:1:"0";s:19:"displayMyExtensions";s:1:"1";s:17:"selectedLanguages";s:0:"";}';

?>