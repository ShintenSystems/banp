<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 23:12:23
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\dailytransaction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1671755d5cf99dd8305-83667892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ecd2bb12dc592e90505c3a9e86549389b8273e4' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\dailytransaction.tpl',
      1 => 1442326336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671755d5cf99dd8305-83667892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d5cf99eaf0b8_15035528',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d5cf99eaf0b8_15035528')) {function content_55d5cf99eaf0b8_15035528($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="css/common.css" type="text/css" />
<link rel="stylesheet" href="calendar/calendar.css" type="text/css" />
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/common.js"><?php echo '</script'; ?>
>
<title>Shin Restaurant</title>
<!--[if lt IE 7]>
<?php echo '<script'; ?>
 src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body>
<div id="top">
   <div id="header">
      <h1><a href="admin.php">Shin Restaurant</a></h1>
      <div id="pr">
         <p>Shinten Restaurant Administration Screen</p>
      <!-- /#pr --></div>
   <!-- /#header --></div>
   <div id="menu">
      <ul>
         <li><a href="admin.php" class="active">Home</a></li>
         <li><a href="dailytransaction.php">Daily Transaction</a></li>
         <li><a href="master.php">Master Data</a></li>
         <li><a href="monthly.php">Monthly Profit</a></li>
         <li><a href="reports.php">Reports</a></li>
		  <li><a href="sendreport.php">Send Report</a></li>
	      </ul>
   </div>
   <div id="topicPath">
      <a href="admin.php">Home</a> &raquo; Daily Transaction Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
         <h2>Daily Transaction Data Registration</h2>
<form name="admin" method="post">
<br>

<div id="master_menu">
      <ul>
         <li><a href="vendor_transaction.php" class="active">Vendor Transaction</a></li>
         <li><a href="order_transaction.php">Order Transaction</a></li>
         
  	      </ul>
   </div>
   <br>
<br/>
<br>
From Date: <input type="date" name="fromData" value="">  To Date:<input type="date" name="toDate" value="">
<input type="submit" name="submit" value="Search">
</form>	

<br><br>

<h4>Order Detail</h4>        
  <table summary="">
            <tr><th>Date</th><th>No.Of Lunch</th><th>No.Of Dinner</th><th>Payment Received</th></tr>
            <tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
			<tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
			<tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
            <tr><td><b>Total</b></td><td><b>30</b></td><td><b>60</b></td><td><b>60000</b></td></tr>
            
</table>
		 
<br> <br>

<h4>Baito Detail</h4>        
  <table summary="">
            <tr><th>Date</th><th>No.Of Lunch</th><th>No.Of Dinner</th><th>Payment Received</th></tr>
            <tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
			<tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
			<tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
            <tr><td><b>Total</b></td><td><b>30</b></td><td><b>60</b></td><td><b>60000</b></td></tr>
            
</table>
		 
<br> <br>		 
<h4>Cook Detail</h4>        
  <table summary="">
            <tr><th>Date</th><th>No.Of Lunch</th><th>No.Of Dinner</th><th>Payment Received</th></tr>
            <tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
			<tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
			<tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
            <tr><td><b>Total</b></td><td><b>30</b></td><td><b>60</b></td><td><b>60000</b></td></tr>
            
</table>

<br> <br>
<h4>Supplier Details</h4>        
  <table summary="">
            <tr><th>Date</th><th>No.Of Lunch</th><th>No.Of Dinner</th><th>Payment Received</th></tr>
            <tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
			<tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
			<tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
            <tr><td><b>Total</b></td><td><b>30</b></td><td><b>60</b></td><td><b>60000</b></td></tr>
            
</table>
<br> <br>
<h4>Total Expenses</h4>        
  <table summary="">
            <tr><th>Date</th><th>No.Of Lunch</th><th>No.Of Dinner</th><th>Payment Received</th></tr>
            <tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
			<tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
			<tr><td>2015/8/11</td><td>10</td><td>20</td><td>20000</td></tr>
            <tr><td><b>Total</b></td><td><b>30</b></td><td><b>60</b></td><td><b>60000</b></td></tr>
            
</table>

	 
<br> <br>	


 </body>
	 
       <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
