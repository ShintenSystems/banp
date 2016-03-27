<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-28 10:28:25
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2669055e018fb18c253-73438678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da618eaec14596c794fc7614031339367cc1bd4' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\home.tpl',
      1 => 1440750497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2669055e018fb18c253-73438678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e018fb230373_21748690',
  'variables' => 
  array (
    'orderdata_json' => 0,
    'orderdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e018fb230373_21748690')) {function content_55e018fb230373_21748690($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	      </ul>
   </div>
   <div id="topicPath">
      <a href="admin.php">Home</a> &raquo; Home Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
         <h2>Home Data Registration</h2>
<form name="admin" method="post" action="home.php">
<br>
From Date: <input type="date" name="fromDate" value="">  To Date:<input type="date" name="toDate" value="">
<input type="submit" name="search_home" value="Search">
</form>	

<br><br>

<h4>Order Detail</h4>      

 <table summary="">
            <tr><th>Date</th><th>No.Of Lunch</th><th>No.Of Dinner</th><th>Payment Received</th></tr>
        <?php  $_smarty_tpl->tpl_vars['orderdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['orderdata_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderdata']->key => $_smarty_tpl->tpl_vars['orderdata']->value) {
$_smarty_tpl->tpl_vars['orderdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['orderdata']->value->u_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['orderdata']->value->n_lunch;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['orderdata']->value->n_dinner;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['orderdata']->value->p_received;?>
</td>

		
		<?php } ?>  
            
</table>


<br> <br>	


 </body>
	 
      <!-- /#main --></div>
      <div id="sub">
         <div class="section">
            <h3>Last Login</h3>
            <ul>
			  Hi Roshan<br>
			  Login  2015.08.13 2:00
			  Logout 2015.08.13 6:00
            </ul>
         <!-- /.section --></div>
         <div class="section">
            <h3>Recent Report</h3>
			<ul>
			  Check you Last Report
			</ul>
         <!-- /.section --></div>
      <!-- /#sub --></div>
      <div id="pageTop">
         <a href="#">Go To Top</a>
      <!-- /#pageTop --></div>
   <!-- /#contents --></div>
   <div id="footer">
      <div class="copyright">Copyright &copy; 2015 Shinten Systems All Rights Reserved.</div>
   <!-- /#footer --></div>
<!-- /#top --></div>
</body>
</html><?php }} ?>
