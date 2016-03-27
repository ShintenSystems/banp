<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-13 17:23:14
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2090255d71e59457752-44413263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caab19894633bec138fae04c37bf5a620a0bebe5' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\reports.tpl',
      1 => 1455379916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2090255d71e59457752-44413263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d71e59512f89_35803332',
  'variables' => 
  array (
    'is_msg_shown' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d71e59512f89_35803332')) {function content_55d71e59512f89_35803332($_smarty_tpl) {?>
<body onLoad="get_user_timzone();">
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Home</a> &raquo; Report Registration
   <!-- /#topicPath --></div>
   
   
     
   
   
   <div id="contents">
  
      <div id="main">
	     <?php if (($_smarty_tpl->tpl_vars['is_msg_shown']->value!=0)) {?>	
	    <h7>Report Generated Successfully</h7>   
 	     <?php }?>
         <h2>Report Data Registration</h2>
		
<form name="frmReport" method="post" action="reports.php">
<br>
From Date: <input type="date" name="fromData" value="">  To Date:<input type="date" name="toDate" value="">
<input type="submit" name="submit" value="Search">
<input type="submit" name="generate" value="Generate Report">
<input type="hidden" name="usertmz" id="usertmz" value=""/>
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
