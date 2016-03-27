<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-06 14:07:28
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\supplier_master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:584255d5a5ae78f382-10261279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a328e2325c6ca8e258184b36a5a0fae17bfd8a61' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\supplier_master.tpl',
      1 => 1444108046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '584255d5a5ae78f382-10261279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d5a5ae8816b0_03000544',
  'variables' => 
  array (
    'is_suppliermastermsg_shown' => 0,
    'is_operation_shown' => 0,
    'supplier_updset' => 0,
    'supplierdata' => 0,
    'userdata_json' => 0,
    'userdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d5a5ae8816b0_03000544')) {function content_55d5a5ae8816b0_03000544($_smarty_tpl) {?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Master Data</a> &raquo; Supplier Master Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
	  
	  <?php if (($_smarty_tpl->tpl_vars['is_suppliermastermsg_shown']->value!=0)) {?>	
	    <h7>Supplier Master Data Register Successfully!</h7>   
 	     <?php }?>
		 
 <?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==0)) {?>			 
         <h2>Supplier Master Data Registration</h2>
<form name="sup_reg" method="POST" action="supplier_master.php?operation=0">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" >User Master</a></li>
         <li><a href="cook_master.php?operation=0">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0" class="active">Supplier Master</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br>
<!--Supplier ID: <input type="text" required name="supid" value="">  <br/><br/> -->
<fieldset>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">
	<tbody>
		
		<tr>
			<td>Supplier Name:</td>
			<td><input type="text" required name="sname" value="">  </td>
		</tr>
		<tr>
			<td>Supply Material:</td>
			<td><input type="text" required name="smaterial" value=""> <br/></td>
		</tr>
		<tr>
			<td>Delivery Date:</td>
			<td><input style="width:170px;" type="date" name="ddate" value=""> </td>
		</tr>

<br/>
</tbody>
</table>
</div>
<br/><br/>
<input type="submit" name="supplier_register" value="Register">  
<input type="reset" name="clear" value="Clear">
 <!--  <input type="submit" name="submit" value="Clear">-->
 </fieldset>
</form>	
<?php }?>


<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==1)) {?>			 
         <h2>Supplier Master Data Update</h2>
<form name="sup_upd" method="POST" action="supplier_master.php">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" >User Master</a></li>
         <li><a href="cook_master.php?operation=0">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0" class="active">Supplier Master</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br>
<!--Supplier ID: <input type="text" required name="supid" value="">  <br/><br/> -->
<fieldset>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">
	<tbody>
			<?php  $_smarty_tpl->tpl_vars['supplierdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplierdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supplier_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplierdata']->key => $_smarty_tpl->tpl_vars['supplierdata']->value) {
$_smarty_tpl->tpl_vars['supplierdata']->_loop = true;
?>
			<tr>
		
			
			
			
			<td><input type="hidden" name="supid" value="<?php echo $_smarty_tpl->tpl_vars['supplierdata']->value['s_ID'];?>
"></td>
		<tr>
		
		<tr>
			<td>Supplier Name:</td>
			<td><input type="text" required name="sname" value="<?php echo $_smarty_tpl->tpl_vars['supplierdata']->value['s_name'];?>
">  </td>
		</tr>
		<tr>
			<td>Supply Material:</td>
			<td><input type="text" required name="smaterial" value="<?php echo $_smarty_tpl->tpl_vars['supplierdata']->value['s_material'];?>
"> <br/></td>
		</tr>
		<tr>
			<td>Delivery Date:</td>
			<td><input style="width:170px;" type="date" name="ddate" value="<?php echo $_smarty_tpl->tpl_vars['supplierdata']->value['d_date'];?>
"> </td>
		</tr>
<?php } ?>
<br/>
</tbody>
</table>
</div>
<br/><br/>
<input type="submit" name="supplier_update" value="Update">  
<input type="reset" name="clear" value="Clear">
 <!--  <input type="submit" name="submit" value="Clear">-->
 </fieldset>
</form>
<?php }?>



<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==2)) {?>			 

         <h2>Supplier Master Data Delete</h2>
<form name="sup_del" method="POST" action="supplier_master.php">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" >User Master</a></li>
         <li><a href="cook_master.php?operation=0">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0" class="active">Supplier Master</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br>
<!--Supplier ID: <input type="text" required name="supid" value="">  <br/><br/> -->
<fieldset>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['supplierdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplierdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supplier_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplierdata']->key => $_smarty_tpl->tpl_vars['supplierdata']->value) {
$_smarty_tpl->tpl_vars['supplierdata']->_loop = true;
?>
			<tr>
		
		
			
			<td><input type="hidden" name="supid" value="<?php echo $_smarty_tpl->tpl_vars['supplierdata']->value['s_ID'];?>
"></td>
		<tr>
		<tr>
			<td>Supplier Name:</td>
			<td><input type="text" required name="sname" value="<?php echo $_smarty_tpl->tpl_vars['supplierdata']->value['s_name'];?>
">  </td>
		</tr>
		<tr>
			<td>Supply Material:</td>
			<td><input type="text" required name="smaterial" value="<?php echo $_smarty_tpl->tpl_vars['supplierdata']->value['s_material'];?>
"> <br/></td>
		</tr>
		<tr>
			<td>Delivery Date:</td>
			<td><input style="width:170px;" type="date" name="ddate" value="<?php echo $_smarty_tpl->tpl_vars['supplierdata']->value['d_date'];?>
"> </td>
		</tr>
<?php } ?>
<br/>
</tbody>
</table>
</div>
<br/><br/>
<input type="submit" name="supplier_del" value="Delete">  
<input type="reset" name="clear" value="Clear">
 <!--  <input type="submit" name="submit" value="Clear">-->
 </fieldset>
</form>
<?php }?>

<br/><br/>
<h4>User Master</h4>        
  <table summary="">
             <tr><th>No</th><th style = "display:none" >Supplier ID</th><th>Supplier Name</th><th>Supply Material</th><th>Delivery Date</th><th>Payment Pending</th><th>Paid Amount</th><th>Operation</th></tr>
           <?php  $_smarty_tpl->tpl_vars['userdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['userdata_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userdata']->key => $_smarty_tpl->tpl_vars['userdata']->value) {
$_smarty_tpl->tpl_vars['userdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->number;?>
</td>
			<td style = "display:none" ><?php echo $_smarty_tpl->tpl_vars['userdata']->value->s_ID;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->s_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->s_material;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->d_date;?>
</td>
			
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->payment_pen;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->pd_amount;?>
</td>
			
			<td><a href="supplier_master.php?operation=1&sid=<?php echo $_smarty_tpl->tpl_vars['userdata']->value->s_ID;?>
">Edit</a> <a href="supplier_master.php?operation=2&sid=<?php echo $_smarty_tpl->tpl_vars['userdata']->value->s_ID;?>
">Delete</a></td></tr>
			<?php } ?>
            
</table>
		 
	 
<br> <br>	



 </body>
	 
       <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
