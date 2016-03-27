<?php
require_once('/wamp/www/banp/nobelba_data/common/DbMgr.php');

//SignUp

class MASTERREGISTER
{
//**************** UserMaster Register **************
function registerusermaster()
{



	 if (!empty($_POST["inputemail"]) && !empty($_POST["inputpass"])) {

   	$newemail = $_POST['inputemail'];
	$newpassword = $_POST['inputpass'];
	$phoneNo = $_POST['inputph'];
	$sql = "INSERT INTO user_detail(email, password, phone_no) VALUES (
	'$newemail','$newpassword','$phoneNo')";
    echo $sql;
	try {
	$dbh = DbMgr::getDB();
	$stmt = $dbh->prepare($sql);
	$ret = $stmt->execute();
    if (!$ret) {
          print("Errro in Registraion");
          exit();
       } 
	} catch (Exception $e) {
	print('Error:'.$e->getMessage());
       die();
    }
		
  }
	


require "phpmailer/class.phpmailer.php"; 
{
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
	$mail->From       = "admin@nobel.com";
	//$mail->Subject  = "ShinRestTesting";
   $mail->Subject  = "Register Detail & Activation Link";
   $body             = '
    Email ID = '.$_POST['inputemail'].'<br />
 
    Phone = '.$_POST['inputph'].'<br />
 
    Password = '.$_POST['inputpass'].'<br />

';

 

  $to = $_POST["inputemail"];
	$mail->AddAddress($to);
	
	

	$mail->MsgHTML($body);
	

	
	 
$mail->Send(); 

	
	
 }
	 catch (phpmailerException $e) {
	echo $e->errorMessage();
}
	
}

// header("Location: login.html");
}
}

?>
