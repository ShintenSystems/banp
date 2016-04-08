<?php
require_once('/wamp/www/banp/nobelba/common/define.php');
require_once('/wamp/www/banp/nobelba/common/SmartySetup.class.php');
require_once('/wamp/www/banp/nobelba_data/common/DbMgr.php');
//require('/wamp/www/banp/nobelba/MyLogPHP/MyLogPHP.class.php');

session_start();
$_SESSION['EMAIIL_ID'] = $_SESSION['EMAIIL_ID'];
/*
	$sql1 = "select `country`,count(*) as NoPeople from `user_detail` group by `country` ";
	
  //echo $sql1;
  	try {
	$dbh1 = DbMgr::getDB();
	$stmt1 = $dbh1->prepare($sql1);
	$ret1 = $stmt1->execute();
        if (!$ret1) {
          print("Error in Selection");
          exit();
        }

    } catch (Exception $e) {
	print('Error:'.$e->getMessage());
       die();
    }  
 $countryarray = array();
 $peoplearray= array();
 while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
           $countryarray[]= $row['country'];
          $country_separated = implode(",", $countryarray);

		  
		  $peoplearray [] = $row['NoPeople'];
		   $pepole_separated = implode(",", $peoplearray);
  }
*/
$smartyObj = new SmartySetup();
//$smartyObj->assign( 'country', $countryarray);
//$smartyObj->assign( 'people', $peoplearray);
$smartyObj->display('index.tpl');

?>