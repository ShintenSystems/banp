<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-13 17:23:16
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\monthly.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1900555d720e8a27313-81895467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd07977223e7aba8a03933e15f3bae19e643d5434' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\monthly.tpl',
      1 => 1455379916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1900555d720e8a27313-81895467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d720e8a5de20_21775546',
  'variables' => 
  array (
    'onemonthago_date' => 0,
    'today_date' => 0,
    'is_monthdata_shown' => 0,
    'orderdata_json' => 0,
    'orderdata' => 0,
    'onemonthorder_json' => 0,
    'monthorderdata' => 0,
    'workerdata_json' => 0,
    'workerdata' => 0,
    'onemonthworker_json' => 0,
    'monthworkerdata' => 0,
    'cookdata_json' => 0,
    'cookdata' => 0,
    'onemonthcook_json' => 0,
    'monthcookdata' => 0,
    'supplierkdata_json' => 0,
    'supplierdata' => 0,
    'onemonthsupplier_json' => 0,
    'monthsupplierdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d720e8a5de20_21775546')) {function content_55d720e8a5de20_21775546($_smarty_tpl) {?>
<!--  <body onLoad="get_todaydate();"> -->

<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Home</a> &raquo; Monthly Profit Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
         <h2>Monthly Profit Data Registration</h2>
<form name="month" method="post" action="monthly.php">
<br>
From Date: <input type="date" name="fromDate" id="fromDate" value="<?php echo $_smarty_tpl->tpl_vars['onemonthago_date']->value;?>
" > 
To Date:<input type="date" name="toDate" id="toDate" value="<?php echo $_smarty_tpl->tpl_vars['today_date']->value;?>
">
<input type="submit" name="serch_month" value="Search">
</form>	

<br><br>

<h4>Order Detail</h4>   



 <table summary="">
            <tr><th>Date</th><th>No.Of Lunch</th><th>No.Of Dinner</th><th>Payment Received</th></tr>
			
			<?php if (($_smarty_tpl->tpl_vars['is_monthdata_shown']->value!=0)) {?> 
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
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['is_monthdata_shown']->value==0)) {?>
		<?php  $_smarty_tpl->tpl_vars['monthorderdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['monthorderdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['onemonthorder_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['monthorderdata']->key => $_smarty_tpl->tpl_vars['monthorderdata']->value) {
$_smarty_tpl->tpl_vars['monthorderdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['monthorderdata']->value->u_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['monthorderdata']->value->n_lunch;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['monthorderdata']->value->n_dinner;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['monthorderdata']->value->p_received;?>
</td>
	
		<?php } ?>  
		
           <?php }?> 
</table>
   
   
   
   <br> <br>

<h4>Baito Detail</h4>        
  <table summary="">
            <tr><th>Date</th><th>First Name</th><th>Last Name</th><th>Date of Joining</th><th>Payment Pending</th><th>Payment Done</th> </tr>
           
		   <?php if (($_smarty_tpl->tpl_vars['is_monthdata_shown']->value!=0)) {?> 
             <?php  $_smarty_tpl->tpl_vars['workerdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['workerdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['workerdata_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['workerdata']->key => $_smarty_tpl->tpl_vars['workerdata']->value) {
$_smarty_tpl->tpl_vars['workerdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['workerdata']->value->w_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['workerdata']->value->f_name;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['workerdata']->value->l_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['workerdata']->value->j_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['workerdata']->value->p_pending;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['workerdata']->value->p_amount;?>
</td>
		
			<?php } ?>  
			
			<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['is_monthdata_shown']->value==0)) {?>
			 <?php  $_smarty_tpl->tpl_vars['monthworkerdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['monthworkerdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['onemonthworker_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['monthworkerdata']->key => $_smarty_tpl->tpl_vars['monthworkerdata']->value) {
$_smarty_tpl->tpl_vars['monthworkerdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['monthworkerdata']->value->w_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['monthworkerdata']->value->f_name;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['monthworkerdata']->value->l_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['monthworkerdata']->value->j_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['monthworkerdata']->value->p_pending;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['monthworkerdata']->value->p_amount;?>
</td>
		
			<?php } ?> 
		<?php }?> 
		
		
</table>
		 
<br> <br>
   <h4>Cook Detail</h4>        
  <table summary="">
            <tr><th>Date</th><th>First Name</th><th>Last Name</th><th>Date of Joining</th><th>Payment Pending</th><th>Payment Done</th> </tr>
			
			<?php if (($_smarty_tpl->tpl_vars['is_monthdata_shown']->value!=0)) {?> 
             <?php  $_smarty_tpl->tpl_vars['cookdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cookdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['cookdata_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cookdata']->key => $_smarty_tpl->tpl_vars['cookdata']->value) {
$_smarty_tpl->tpl_vars['cookdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['cookdata']->value->c_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['cookdata']->value->f_name;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['cookdata']->value->l_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['cookdata']->value->j_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['cookdata']->value->p_pending;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['cookdata']->value->p_amount;?>
</td>
	
			<?php } ?>
            
			
			
			<?php }?>
		     <?php if (($_smarty_tpl->tpl_vars['is_monthdata_shown']->value==0)) {?>
			 <?php  $_smarty_tpl->tpl_vars['monthcookdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['monthcookdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['onemonthcook_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['monthcookdata']->key => $_smarty_tpl->tpl_vars['monthcookdata']->value) {
$_smarty_tpl->tpl_vars['monthcookdata']->_loop = true;
?>
			 <tr><td><?php echo $_smarty_tpl->tpl_vars['monthcookdata']->value->c_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['monthcookdata']->value->f_name;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['monthcookdata']->value->l_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['monthcookdata']->value->j_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['monthcookdata']->value->p_pending;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['monthcookdata']->value->p_amount;?>
</td>
	
			<?php } ?>			
			<?php }?> 
</table>

<br> <br>
   
   
   <h4>Supplier Details</h4>        
  <table summary="">
            <tr><th>Date</th><th>Supplier Name</th><th>Delivery Date</th><th>Payment Pending</th><th>Payment Done</th></tr>
            <?php if (($_smarty_tpl->tpl_vars['is_monthdata_shown']->value!=0)) {?> 
			
			
		    
             <?php  $_smarty_tpl->tpl_vars['supplierdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplierdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['supplierkdata_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplierdata']->key => $_smarty_tpl->tpl_vars['supplierdata']->value) {
$_smarty_tpl->tpl_vars['supplierdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['supplierdata']->value->s_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['supplierdata']->value->s_name;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['supplierdata']->value->d_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['supplierdata']->value->p_pending;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['supplierdata']->value->p_amount;?>
</td>
	
			<?php } ?>  
			
			
			
			<?php }?>
		    <?php if (($_smarty_tpl->tpl_vars['is_monthdata_shown']->value==0)) {?>
			
			 <?php  $_smarty_tpl->tpl_vars['monthsupplierdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['monthsupplierdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['onemonthsupplier_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['monthsupplierdata']->key => $_smarty_tpl->tpl_vars['monthsupplierdata']->value) {
$_smarty_tpl->tpl_vars['monthsupplierdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['monthsupplierdata']->value->s_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['monthsupplierdata']->value->s_name;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['monthsupplierdata']->value->d_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['monthsupplierdata']->value->p_pending;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['monthsupplierdata']->value->p_amount;?>
</td>
	
			<?php } ?>  
			<?php }?> 
			
</table>
<br> <br>


 </body>
	 
      <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
