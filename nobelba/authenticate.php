
<?php
require_once('/wamp/www/banp/nobelba_data/common/DbMgr.php');

 if (!empty($_GET["email"]) && !empty($_GET["key"])) {
		$emailid =$_GET["email"];
		$aut_key= $_GET["key"];
		$sql = 'SELECT EMAIL, activation FROM user_detail WHERE EMAIL = ?';
		try {
		$dbh = DbMgr::getDB();
		$stmt = $dbh->prepare($sql);
		$ret = $stmt->execute(array($emailid));
		if (!$ret) {
		   print("Authentication Error");
		   exit();
		}
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $data =   array($result ['EMAIL'],$result['activation']);
		} catch (Exception $e) {
		  print('Error:'.$e->getMessage());
		  die();
	    }
		if (($_GET["email"]  == $result ['EMAIL'] )&& ($_GET["key"]  == $result['activation']))  {
		
		$sqlstatus = "UPDATE user_detail SET status='1' WHERE activation='$aut_key'";
		try {
		$dbh1 = DbMgr::getDB();
		$stmt1 = $dbh1->prepare($sqlstatus);
		$ret1 = $stmt1->execute();
		if (!$ret) {
		   print("Authentication Error");
		   exit();
		}
       
		} catch (Exception $e) {
		  print('Error:'.$e->getMessage());
		  die();
	    }
		header("Location: ./login.php");
		} else {
		
		echo "Oops !Your account could not be activated. Please recheck the link or contact the system administrator.";
		}	
		
		
		
		
 }	























?>


