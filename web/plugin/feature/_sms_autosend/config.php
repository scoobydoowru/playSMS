<?php
/*
 * Created on Apr 30, 2008
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

// insert to left menu array
$menutab_feature = $core_config['menu']['main_tab']['feature'];
$arr_menu[$menutab_feature][] = array("index.php?app=menu&inc=feature_sms_autosend&op=sms_autosend_list", _('Manage autosend'));

?>
