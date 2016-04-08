<?php
require_once('/wamp/www/banp/nobelba/common/define.php');
require_once('/wamp/www/banp/nobelba/common/SmartySetup.class.php');
require_once('/wamp/www/banp/nobelba_data/common/DbMgr.php');
require_once('/wamp/www/banp/nobelba/phpmailer/class.phpmailer.php');

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

if(!empty($_POST["validate"]==1)) {
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
elseif(!empty($_POST["validate"]==2)) {
	 $rportTime= date("H:i:s");
	$sql = "select * from user_detail WHERE email='$emailid'";
	
	try {
	$dbhsql = DbMgr::getDB();
	$stmtsql= $dbhsql->prepare($sql);
	$retsql = $stmtsql->execute();
        if (!$retsql) {
          print("Error in Registration");
          exit();
        }

    } catch (Exception $e) {
	print('Error:'.$e->getMessage());
       die();
    }
	 $result = array();
	
	
	while ($row = $stmtsql->fetch(PDO::FETCH_ASSOC)) {

	$result[] = array(
   
    $p_fname=$row['fname'],
    $p_lname=$row['lname'],
    $p_email=$row['email'],
	//'d_ob'=>$row['password'],
    $p_phno=$row['phone_no'],
	$p_country=$row['country'],
	$p_state=$row['state'],
	$p_city=$row['city'],
	$p_quali=$row['qualification'],
	$p_comment=$row['comment'],
	$p_sign=$row['digital_sign'],
	$p_date=$row['date']
	
	
    );
  }
  
require('/wamp/www/banp/nobelba/fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFillColor(224,235,255);
$pdf->SetFont('Arial','B',16);		
$pdf->Cell(0,10," {$p_comment} ",0,1);
$pdf->Image("{$p_sign}",0,15,80,50);
$pdf->Cell(0,80,"{$p_fname} {$p_lname}",0,1);
$pdf->Cell(0,-60,"Phone No: {$p_phno}",0,1);
$dir='/wamp/www/banp/nobelba/Petition/';

$filename= ("{$p_fname}{$p_lname}") .'_Petition_'.date('Y_M_d-His',time($rportTime)).'.pdf';
$pdf->Output($dir.$filename);
//$pdf->Output();


try {   // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.lolipop.jp";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "yogesh@shintensystems.com"; // Your full Gmail address
    $mail->Password   = "yogesh1123"; // Your Gmail password
      
	
	$mail->From       = "Nobel@example.com";
    $mail->Subject  = "[".date('Ymd')."]Petition " ;
    $body             = ("This testing mail");
    @set_magic_quotes_runtime(false);
    ini_set('magic_quotes_runtime', 0);
    $mail->AddAttachment($dir.$filename);
    $to = $emailid;
	$mail->AddAddress($to);
	$mail->MsgHTML($body);
	$mail->Send(); 

    }


 catch (phpmailerException $e)
 {
	echo $e->errorMessage();
 }


	
}
	
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