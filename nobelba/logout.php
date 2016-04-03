<?php
require_once('/wamp/www/banp/nobelba/common/define.php');
require_once('/wamp/www/banp/nobelba/common/SmartySetup.class.php');
require_once('/wamp/www/banp/nobelba_data/common/DbMgr.php');

session_start();
unset($_SESSION['EMAIIL_ID']);
session_destroy();
$_SESSION['EMAIIL_ID'] = "";
$smartyObj = new SmartySetup();
$smartyObj->assign( 'shown_invaliduser', 0);
$smartyObj->assign('is_userregister', 0);
$smartyObj->display('login.tpl');

//header("Location: login.php");
exit;
?>