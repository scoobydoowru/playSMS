<?php
$db_query = "SELECT * FROM "._DB_PREF_."_gatewayClickatell_config";
$db_result = dba_query($db_query);
if ($db_row = dba_fetch_array($db_result)) {
    $clickatell_param['name']			= $db_row['cfg_name'];
    $clickatell_param['api_id']			= $db_row['cfg_api_id'];
    $clickatell_param['username']		= $db_row['cfg_username'];
    $clickatell_param['password']		= $db_row['cfg_password'];
    $clickatell_param['sender']			= $db_row['cfg_sender'];
    $clickatell_param['send_url']		= $db_row['cfg_send_url'];
    $clickatell_param['incoming_path']		= $db_row['cfg_incoming_path'];
    $clickatell_param['additional_param']	= $db_row['cfg_additional_param'];
}

if (! $clickatell_param['additional_param']) {
    $clickatell_param['additional_param'] = "deliv_ack=1&callback=3";
}

// save plugin's parameters or options in $core_config
$core_config['plugin']['clickatell'] = $clickatell_param;

//$gateway_number = $clickatell_param['sender'];

// insert to left menu array
if (isadmin()) {
    $arr_menu['Gateway'][] = array("index.php?app=menu&inc=gateway_clickatell&op=manage", _('Manage clickatell'));
}
?>