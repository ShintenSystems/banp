<?php
require_once('/wamp/www/banp/nobelba/common/define.php');
require_once('/wamp/www/banp/nobelba/common/SmartySetup.class.php');
require_once('/wamp/www/banp/nobelba_data/common/DbMgr.php');
//require_once('/wamp/www/banp/nobelba/login.php');
//require('/wamp/www/banp/nobelba/MyLogPHP/MyLogPHP.class.php');

//This is github test by Roshan 2016/03/27 

session_start();
/** 
session_start();

//require_once('/wamp/www/DemoRest/common/define.php');
require_once('/wamp/www/banp/nobelba_data/common/DbMgr.php');
session_start();
$errorMessage = "";
$Flag_InvalidUsername =0;
if (isset($_POST["btnlogin"])) {
  if (!empty($_POST['emailid']) && !empty($_POST['password'])) {
    $emailid = $_POST["emailid"];
    $sql = 'SELECT EMAIL, PASSWORD,PHONE_NO FROM user_detail
            WHERE EMAIL = ?';
			//echo $sql;
    try {
	$dbh = DbMgr::getDB();
	$stmt = $dbh->prepare($sql);
	$ret = $stmt->execute(array($emailid));
        if (!$ret) {
          print("Authentication Error");
          exit();
        }
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $data =   array($result ['EMAIL'],$result['PASSWORD'],$result['PHONE_NO']  );
    } catch (Exception $e) {
	print('Error:'.$e->getMessage());
       die();
    }
//	echo "test1";
 	if (($_POST["password"]  == $result['PASSWORD'] )&& ($_POST["emailid"]  == $result['EMAIL']))  {
//echo "test2";     
	 session_regenerate_id(true);
      $_SESSION["EMAIIL_ID"] = $_POST["emailid"];
	   $_SESSION["PH_NO"] = $result["PHONE_NO"];
	  $var=$_SESSION["EMAIIL_ID"];
 	//header("Location: ./createpetition.html");
    } 
	else {
		$Flag_InvalidUsername =1;
        echo "Invalid User Name & Password";
    }
  }

} else {

}
**/
//echo $_POST["validate"];

$path="";
$check_validation = 0;
$firstname = "";
$lastname="";
$emailid="";
$phoneno="";
$country="";
$state="";
$city="";
$qualification="";
$sign = '';
$filepath = "";
$message="";

if (isset($_POST["validate"])) {


if(!empty($_POST["validate"])) {
$check_validation = $_POST["validate"];
}

if(!empty($_POST["f_name"])) {
$firstname = $_POST["f_name"];
}

if(!empty($_POST["l_name"])) {
$lastname = $_POST["l_name"];
}
if(!empty($_POST["email_id"])) {
$emailid = $_POST["email_id"];
}
if(!empty($_POST["ph_no"])) {
$phoneno = $_POST["ph_no"];
}
if(!empty($_POST["country"])) {
$country = $_POST["country"];
}
if(!empty($_POST["state"])) {
$state = $_POST["state"];
}
if(!empty($_POST["city"])) {
$city = $_POST["city"];
}
if(!empty($_POST["quali_name"])) {
$qualification = $_POST["quali_name"];
}


$filepath ="SignImages/" .$firstname."_" .$lastname. ".png";




if(isset($_POST['hdnSignature'])){
	
 $sign = $_POST['hdnSignature'];
 $path = $filepath;
 $sign = base64_decode($sign); //convert base64
 file_put_contents($path, $sign); //save to file
}

if(!empty($_POST["comment"])) {
$message = $_POST["comment"];
}


$updsql = "UPDATE user_detail SET fname='$firstname', lname='$lastname', country='$country',state='$state',city='$city',qualification='$qualification',comment='$message',digital_sign='$path' WHERE email='$emailid'";
	
	
	try {
	$dbhupd = DbMgr::getDB();
	$stmtupd = $dbhupd->prepare($updsql);
	$retupd = $stmtupd->execute();
        if (!$retupd) {
          print("Error in Registration");
          exit();
        }

    } catch (Exception $e) {
	print('Error:'.$e->getMessage());
       die();
    }

}


$smartyObj = new SmartySetup();
$smartyObj->assign( 'flgValidation', $check_validation);
$smartyObj->assign( 'fname', $firstname);
$smartyObj->assign( 'lname', $lastname);
$smartyObj->assign( 'email', $emailid);
$smartyObj->assign( 'phno', $phoneno);
$smartyObj->assign( 'country', $country);
$smartyObj->assign( 'state', $state);
$smartyObj->assign( 'city', $city);
$smartyObj->assign( 'qualifi', $qualification);
//$smartyObj->assign( '$digitalsign', $sign);
$smartyObj->assign( 'signpath', $path);
$smartyObj->assign( 'msg', $message);
$smartyObj->display('createnomination.tpl');

/*
$_SESSION['EMAIIL_ID'] ="";
if ($_SESSION['EMAIIL_ID']) {
$smartyObj = new SmartySetup();
$smartyObj->display('createpetition.tpl');
} else {
$smartyObj = new SmartySetup();
$_SESSION['EMAIIL_ID'] = "";
$smartyObj->assign( 'shown_invaliduser', 0);
$smartyObj->assign('is_userregister', 0);
$smartyObj->display('login.tpl');
} */
?>