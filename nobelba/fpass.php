<?php
require_once('/wamp/www/banp/nobelba/common/define.php');
require_once('/wamp/www/banp/nobelba/common/SmartySetup.class.php');
require_once('/wamp/www/banp/nobelba_data/common/DbMgr.php');
//require('/wamp/www/banp/nobelba/MyLogPHP/MyLogPHP.class.php');



session_start();
$Flag_InvalidEmail =0;
$Flag_ValidEmailSucess=0;



if (isset($_POST['btncont']))
{
	 if (!empty($_POST["femail"])) {
   	$f_email = $_POST['femail'];
	
	
	//Check if the user exist or not  
	$sqluserexist = 'SELECT email,password FROM user_detail WHERE email = ?';
	
	try {
	$dbh = DbMgr::getDB();
	$stmt = $dbh->prepare($sqluserexist);
	$ret = $stmt->execute(array($f_email));
		if (!$ret) {
          print("Authentication Error");
          exit();
        }
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $data =   array($result ['email'],$result ['password']);
    } catch (Exception $e) {
		print('Error:'.$e->getMessage());
		die();
    }
	
	if (($_POST["femail"]  == $result['email']))  {
	
	
	
	//Start Email Sending
	//Send Email for Authentication 
	require "phpmailer/class.phpmailer.php"; 
	//$Auth_URL = "http://nobelprize.aimjapan.org/authenticate.php/sjeiw7w829290102929";
	// Instantiate Class
	try {     
    $mail = new PHPMailer();  
    $mail->IsSMTP();                  // Sets up a SMTP connection  
    $mail->SMTPAuth = true;           // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";        // Connect using a TLS connection  
    $mail->Host = "smtp.lolipop.jp";  //SMTP server address
    $mail->Port = 465;  			  //SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "yogesh@shintensystems.com"; // Your full Address
    $mail->Password   = "yogesh1123"; // Your Email password
	$mail->From       = "admin@nobelprizetobrambedkar.com";
	$mail->Subject  = "Password Details";
	$body             = ' Jai Bhim!! <br /><br />
	Thank you for Forgot Password <br /><br />
	User ID ='.$result ['email'].' <br />
    Password ='.$result ['password'].' <br /><br />
	
	Regards <br />
	Team AIM Japan <br />
	http://nobelprize.aimjapan.org/ <br />
	';
    $to = $_POST["femail"];
	$mail->AddAddress($to);
	$mail->MsgHTML($body);
	$mail->Send(); 
	
	$Flag_ValidEmailSucess=1;
	
    } catch (phpmailerException $e) {
	echo $e->errorMessage();
    }
	
	
	//End Email Sending
	
	
	
	
	
	
	}  else {
		$Flag_InvalidEmail =1;
	 echo "The email ID you have entered does not exist";
	}
	
	
}
else {
	 echo "Please Enter Valid Email Address";
	}
//print_r ($data);

}
  

$smartyObj = new SmartySetup();
$smartyObj->assign( 'shown_invalidemail', $Flag_InvalidEmail);
$smartyObj->assign( 'shown_validemail_Sucess', $Flag_ValidEmailSucess);
$smartyObj->display('fpass.tpl');

?>