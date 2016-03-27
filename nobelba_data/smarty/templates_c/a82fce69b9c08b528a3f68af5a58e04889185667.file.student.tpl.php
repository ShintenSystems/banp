<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-12 15:06:49
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\student.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22375561b4df99b5458-83799926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a82fce69b9c08b528a3f68af5a58e04889185667' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\student.tpl',
      1 => 1444629952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22375561b4df99b5458-83799926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oneweekago_date' => 0,
    'today_date' => 0,
    'is_alldata_shown' => 0,
    'orderdata_json' => 0,
    'orderdata' => 0,
    'oneweekorder_json' => 0,
    'weekorderdata' => 0,
    'workerdata_json' => 0,
    'workerdata' => 0,
    'oneweekworker_json' => 0,
    'oneweekworkerdata' => 0,
    'cookdata_json' => 0,
    'cookdata' => 0,
    'oneweekcook_json' => 0,
    'weekcookdata' => 0,
    'supplierkdata_json' => 0,
    'supplierdata' => 0,
    'oneweeksupplier_json' => 0,
    'weeksupplierdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561b4dfa1a2f80_29915483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561b4dfa1a2f80_29915483')) {function content_561b4dfa1a2f80_29915483($_smarty_tpl) {?>




	



<body>





<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






   <div id="topicPath">
      <a href="admin.php">Home</a> &raquo; Home Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
         <h2>Home Data Registration</h2>
		 
<form name="admin" method="post" action="admin.php">






<br>
From Date: <input type="date" id="fromDate" name="fromDate" value="<?php echo $_smarty_tpl->tpl_vars['oneweekago_date']->value;?>
"> 
To Date:<input type="date" id="toDate" name="toDate" value="<?php echo $_smarty_tpl->tpl_vars['today_date']->value;?>
">


<input type="submit" name="search_home" value="Search">
</form>	

	
<br><br>

<h4>Order Detail</h4>   



 <table summary="">
            <tr><th>Date</th><th>No.Of Lunch</th><th>No.Of Dinner</th><th>Payment Received</th></tr>
        
		<?php if (($_smarty_tpl->tpl_vars['is_alldata_shown']->value!=0)) {?> 
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
		<?php if (($_smarty_tpl->tpl_vars['is_alldata_shown']->value==0)) {?>
		<?php  $_smarty_tpl->tpl_vars['weekorderdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weekorderdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['oneweekorder_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weekorderdata']->key => $_smarty_tpl->tpl_vars['weekorderdata']->value) {
$_smarty_tpl->tpl_vars['weekorderdata']->_loop = true;
?>
		
			<tr><td><?php echo $_smarty_tpl->tpl_vars['weekorderdata']->value->u_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['weekorderdata']->value->n_lunch;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['weekorderdata']->value->n_dinner;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['weekorderdata']->value->p_received;?>
</td>

		
		<?php } ?>  
		<?php }?>
            
</table>
   
   
   
   <br> <br>

<h4>Baito Detail</h4>        
  <table summary="">
            <tr><th>Date</th><th>First Name</th><th>Last Name</th><th>Date of Joining</th><th>Payment Pending</th><th>Payment Done</th> </tr>
          
                
		  <?php if (($_smarty_tpl->tpl_vars['is_alldata_shown']->value!=0)) {?>
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
		
		<?php if (($_smarty_tpl->tpl_vars['is_alldata_shown']->value==0)) {?>
		 <?php  $_smarty_tpl->tpl_vars['oneweekworkerdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneweekworkerdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['oneweekworker_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneweekworkerdata']->key => $_smarty_tpl->tpl_vars['oneweekworkerdata']->value) {
$_smarty_tpl->tpl_vars['oneweekworkerdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['oneweekworkerdata']->value->w_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['oneweekworkerdata']->value->f_name;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['oneweekworkerdata']->value->l_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['oneweekworkerdata']->value->j_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['oneweekworkerdata']->value->p_pending;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['oneweekworkerdata']->value->p_amount;?>
</td>
		<?php } ?>  
		<?php }?>
		
</table>
		 
<br> <br>
   <h4>Cook Detail</h4>        
  <table summary="">
            <tr><th>Date</th><th>First Name</th><th>Last Name</th><th>Date of Joining</th><th>Payment Pending</th><th>Payment Done</th> </tr>
             
			  <?php if (($_smarty_tpl->tpl_vars['is_alldata_shown']->value!=0)) {?>
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
		
		<?php if (($_smarty_tpl->tpl_vars['is_alldata_shown']->value==0)) {?>
		<?php  $_smarty_tpl->tpl_vars['weekcookdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weekcookdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['oneweekcook_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weekcookdata']->key => $_smarty_tpl->tpl_vars['weekcookdata']->value) {
$_smarty_tpl->tpl_vars['weekcookdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['weekcookdata']->value->c_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['weekcookdata']->value->f_name;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['weekcookdata']->value->l_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['weekcookdata']->value->j_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['weekcookdata']->value->p_pending;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['weekcookdata']->value->p_amount;?>
</td>
		<?php } ?>  
		<?php }?>
</table>

<br> <br>
   
   
   <h4>Supplier Details</h4>        
  <table summary="">
            <tr><th>Date</th><th>Supplier Name</th><th>Delivery Date</th><th>Payment Pending</th><th>Payment Done</th></tr>
             <?php if (($_smarty_tpl->tpl_vars['is_alldata_shown']->value!=0)) {?>
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
		
		
		<?php if (($_smarty_tpl->tpl_vars['is_alldata_shown']->value==0)) {?>
		<?php  $_smarty_tpl->tpl_vars['weeksupplierdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weeksupplierdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['oneweeksupplier_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weeksupplierdata']->key => $_smarty_tpl->tpl_vars['weeksupplierdata']->value) {
$_smarty_tpl->tpl_vars['weeksupplierdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['weeksupplierdata']->value->s_date;?>
</td>
			 <td><?php echo $_smarty_tpl->tpl_vars['weeksupplierdata']->value->s_name;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['weeksupplierdata']->value->d_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['weeksupplierdata']->value->p_pending;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['weeksupplierdata']->value->p_amount;?>
</td>
		
		<?php } ?>  
		<?php }?>
</table>
<br> <br>
   
     
   
<br> <br>	


 </body>
	 
    <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
