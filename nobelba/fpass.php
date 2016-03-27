<?php
require_once('/wamp/www/nobelba/common/define.php');
require_once('/wamp/www/nobelba/common/SmartySetup.class.php');
require_once('/wamp/www/nobelba_data/common/DbMgr.php');
//require('/wamp/www/nobelba/MyLogPHP/MyLogPHP.class.php');



session_start();

if (isset($_POST['btncont'])){
	 
}





$smartyObj = new SmartySetup();

$smartyObj->display('fpass.tpl');

?>