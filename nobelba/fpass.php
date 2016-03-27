<?php
require_once('/wamp/www/banp/nobelba/common/define.php');
require_once('/wamp/www/banp/nobelba/common/SmartySetup.class.php');
require_once('/wamp/www/banp/nobelba_data/common/DbMgr.php');
//require('/wamp/www/banp/nobelba/MyLogPHP/MyLogPHP.class.php');



session_start();

if (isset($_POST['btncont'])){
	 
}





$smartyObj = new SmartySetup();

$smartyObj->display('fpass.tpl');

?>