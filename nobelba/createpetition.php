<?php
require_once('/wamp/www/nobelba/common/define.php');
require_once('/wamp/www/nobelba/common/SmartySetup.class.php');
require_once('/wamp/www/nobelba_data/common/DbMgr.php');
//require('/wamp/www/nobelba/MyLogPHP/MyLogPHP.class.php');

/** 
session_start();

//require_once('/wamp/www/DemoRest/common/define.php');
require_once('/wamp/www/nobelba_data/common/DbMgr.php');
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

$smartyObj = new SmartySetup();

$smartyObj->display('createpetition.tpl');

?>