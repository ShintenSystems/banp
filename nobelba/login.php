<?php
require_once('/wamp/www/banp/nobelba/common/define.php');
require_once('/wamp/www/banp/nobelba/common/SmartySetup.class.php');
require_once('/wamp/www/banp/nobelba_data/common/DbMgr.php');
require('/wamp/www/banp/nobelba/master_register.php');
//require_once('/wamp/www/banp/nobelba/index.php');
//require('/wamp/www/banp/nobelba/MyLogPHP/MyLogPHP.class.php');

session_start();

//Default Value Declaration
$errorMessage = "";
$Flag_InvalidUsername =0;
$userregister_flag=0;
if($_SESSION["EMAIIL_ID"] !=NULL) {
// Show Create Petition 
	$smartyObj = new SmartySetup();
    $smartyObj->display('createpetition.tpl');
} else {

// Login
if (isset($_POST["btnlogin"])) {
  if (!empty($_POST['emailid']) && !empty($_POST['password'])) {
		$emailid = $_POST["emailid"];
		$sql = 'SELECT EMAIL, PASSWORD,PHONE_NO,STATUS FROM user_detail WHERE EMAIL = ?';
		try {
		$dbh = DbMgr::getDB();
		$stmt = $dbh->prepare($sql);
		$ret = $stmt->execute(array($emailid));
		if (!$ret) {
		   print("Authentication Error");
		   exit();
		}
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $data =   array($result ['EMAIL'],$result['PASSWORD'],$result['PHONE_NO'],$result['STATUS']);
		} catch (Exception $e) {
		  print('Error:'.$e->getMessage());
		  die();
	    }

		if (($_POST["password"]  == $result['PASSWORD'] )&& ($_POST["emailid"]  == $result['EMAIL']) && ($result['STATUS']== 1))  {
		session_regenerate_id(true);
		$_SESSION["EMAIIL_ID"] = $_POST["emailid"];
		$_SESSION["PH_NO"] = $result["PHONE_NO"];
		$var=$_SESSION["EMAIIL_ID"];
		header("Location:createpetition.php?email_id=".$_SESSION["EMAIIL_ID"]."");
		//$smartyObj = new SmartySetup();
      	//$smartyObj->display('createpetitionsdd.tpl');
		} else {
		$Flag_InvalidUsername =1;
		$smartyObj = new SmartySetup();
		$smartyObj->assign( 'shown_invaliduser', $Flag_InvalidUsername);
		$smartyObj->assign('is_userregister', $userregister_flag);
		$smartyObj->display('login.tpl');
		}
 } 
} 
// New Registration
elseif (isset($_POST["btnregister"])) {
    $userregister_flag=0;
    echo "This flag value before Registration" .$userregister_flag. "<br/>";
	$userrreg =  new MASTERREGISTER();
	$userregister_flag = $userrreg->registerusermaster($userregister_flag);
	$smartyObj = new SmartySetup();
	$smartyObj->assign( 'shown_invaliduser', $Flag_InvalidUsername);
	$smartyObj->assign('is_userregister', $userregister_flag);
	$smartyObj->display('login.tpl');
	//echo $userregister_flag;
} else { 
//echo "This flag value After Registration" .$userregister_flag. "<br/>";
$smartyObj = new SmartySetup();
$_SESSION['EMAIIL_ID'] = "";
$smartyObj->assign( 'shown_invaliduser', $Flag_InvalidUsername);
$smartyObj->assign('is_userregister', $userregister_flag);
$smartyObj->display('login.tpl');
 }
}
?>