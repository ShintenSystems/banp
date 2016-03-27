<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-13 17:23:21
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\vendor_transaction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2761255d5d2b6345630-77214534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46af74128c8e3b1b62f6c82442ef3b41223edcee' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\vendor_transaction.tpl',
      1 => 1455379917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2761255d5d2b6345630-77214534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d5d2b657fbb6_06764839',
  'variables' => 
  array (
    'is_vendertxnmsg_shown' => 0,
    'is_operation_shown' => 0,
    'vendor_updset' => 0,
    'vendordata' => 0,
    'usercook_json' => 0,
    'usercook' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d5d2b657fbb6_06764839')) {function content_55d5d2b657fbb6_06764839($_smarty_tpl) {?>
<body onLoad="get_vendor_id(0);">
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Daily Transaction</a> &raquo; Vendor Transaction Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
	  <?php if (($_smarty_tpl->tpl_vars['is_vendertxnmsg_shown']->value!=0)) {?>	
	    <h7>Vendor Transaction Register Successfully!</h7>   
 	     <?php }?>
		 
		 
		  <?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==0)) {?>
         <h2>Vendor Transaction Registration</h2>
		 
	 
<form name="venderform" id="venderform" method="POST"  action="vendor_transaction.php?operation=0">
<br>
 <div id="master_menu">
      <ul>
          <li><a href="vendor_transaction.php?operation=0" class="active">Vendor Transaction</a></li>
         <li><a href="order_transaction.php?operation=0">Order Transaction</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br>

<br><br>
<fieldset>
<br/>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">

	<tbody >



		<tr  style= "border-collapse">
		<td >Vendor Type:</td>
			<td><select id="ventype" name="ventype" onchange="get_vendor_id(this.value);" style="width: 172px;">
            <option value="" selected>Select Vendor Type</option>
			<option value="1">Cook Master</option>
			<option value="2">Part Time Master</option>
			<option value="3">Supplier Master</option>
</select> </td>
		</tr>
		<tr>
			<td>Vendor Id :</td>
			<td><select id="vendor_id_select" name="vendor_id_select" style="width: 172px;">
</select></td>
		</tr>
		
		<tr>
			<td>Transaction Date:</td>
			<td><input type="date" required name="txndate" value="" style="width: 172px;">  </td>
		</tr>
		
		<tr>
			<td>Payment Pending:</td>
			<td><input type="text" required name="paymentpen" value="">  </td>
		</tr>
		<tr>
			<td>Payment Done:</td>
			<td><input type="text" required name="paydone" value=""></td>
		</tr>
		<tr>
			<td>Payment Received:</td>
			<td><input id="payreceived"  type="text" name="payreceived" value="" > </td>
		</tr>
		</tbody>
		</div>
</table>
<br/><br/>
<input type="submit" name="register_ven" value="Register">    
<input type="reset" name="clear" value="Clear">
<br/><br/>
</fieldset>
</form>	
<?php }?>


  <?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==1)) {?>
  <h2>Vendor Transaction Update</h2>
		 
	 
<form name="updateform" id="updateform" method="POST"  action="vendor_transaction.php">
<br>
 <div id="master_menu">
      <ul>
          <li><a href="vendor_transaction.php?operation=0" class="active">Vendor Transaction</a></li>
         <li><a href="order_transaction.php?operation=0">Order Transaction</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br>

<br><br>
<fieldset>
<br/>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">

<tbody>

		<?php  $_smarty_tpl->tpl_vars['vendordata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendordata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendordata']->key => $_smarty_tpl->tpl_vars['vendordata']->value) {
$_smarty_tpl->tpl_vars['vendordata']->_loop = true;
?>
		
		<tr  style= "border-collapse">
		<td >Vendor Type:</td>
			<td><select id="ventype" name="ventype" onchange="get_vendor_id(this.value);" style="width: 172px;">
            
			<?php if ($_smarty_tpl->tpl_vars['vendordata']->value['txn_vtype']=='1') {?>
	        <option value="1"  selected="true" >Cook Master</option>
			<option value="2">Part Time Master</option>
			<option value="3">Supplier Master</option>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['vendordata']->value['txn_vtype']=='2') {?>
			<option value="1" >Cook Master</option>
			<option value="2" selected="true">Part Time Master</option>
			<option value="3">Supplier Master</option>
			<?php }?>

     <?php if ($_smarty_tpl->tpl_vars['vendordata']->value['txn_vtype']=='3') {?>
			<option value="1" >Cook Master</option>
			<option value="2">Part Time Master</option>
			<option value="3" selected="true">Supplier Master</option>
		<?php }?>  
			
			
</select> </td>
		</tr>
		<tr>
			<td>Vendor Id :</td>
			<td><select id="vendor_id_select" name="vendor_id_select" style="width: 172px;">
			
			<option value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_venid'];?>
"><?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_venid'];?>
</option>
		
</select></td>
		
		
		
		
		<tr>
			<td>Transaction Date:</td>
			<td><input type="date" required name="txndate" value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_date'];?>
" style="width: 172px;">  </td>
		</tr>
		
		<tr>
			<td>Payment Pending:</td>
			<td><input type="text" required name="paymentpen" value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_paypending'];?>
">  </td>
		</tr>
		<tr>
			<td>Payment Done:</td>
			<td><input type="text" required name="paydone" value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_paydone'];?>
"></td>
		</tr>
		<tr>
			<td>Payment Received:</td>
			<td><input id="payreceived"  type="text" name="payreceived" value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_payreceived'];?>
" > </td>
		</tr>
		<tr>
		
			<td><input type="hidden" required name="txnid" value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_id'];?>
"> </td>
		</tr>
	<?php } ?>
		</tbody>
		</div>
</table>
<br/><br/>
<input type="submit" name="update_ven" value="Update">    
<input type="reset" name="clear" value="Clear">
<br/><br/>
</fieldset>
</form>	
<?php }?>



<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==2)) {?>	
<h2>Vendor Transaction Delete</h2>
		 
	 
<form name="deleteform" id="deleteform" method="POST"  action="vendor_transaction.php">
<br>
 <div id="master_menu">
      <ul>
          <li><a href="vendor_transaction.php?operation=0" class="active">Vendor Transaction</a></li>
         <li><a href="order_transaction.php?operation=0">Order Transaction</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br>

<br><br>
<fieldset>
<br/>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">

	<tbody>

		<?php  $_smarty_tpl->tpl_vars['vendordata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendordata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendordata']->key => $_smarty_tpl->tpl_vars['vendordata']->value) {
$_smarty_tpl->tpl_vars['vendordata']->_loop = true;
?>
		
		<tr  style= "border-collapse">
		<td >Vendor Type:</td>
			<td><select id="ventype" name="ventype" onchange="get_vendor_id(this.value);" style="width: 172px;">
            <?php if ($_smarty_tpl->tpl_vars['vendordata']->value['txn_vtype']=='1') {?>
	        <option value="1"  selected="true" >Cook Master</option>
			<option value="2">Part Time Master</option>
			<option value="3">Supplier Master</option>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['vendordata']->value['txn_vtype']=='2') {?>
			<option value="1" >Cook Master</option>
			<option value="2" selected="true">Part Time Master</option>
			<option value="3">Supplier Master</option>
			<?php }?>

     <?php if ($_smarty_tpl->tpl_vars['vendordata']->value['txn_vtype']=='3') {?>
			<option value="1" >Cook Master</option>
			<option value="2">Part Time Master</option>
			<option value="3" selected="true">Supplier Master</option>
		<?php }?>  
</select> </td>
		</tr>
		<tr>
			<td>Vendor Id :</td>
			<td><select id="vendor_id_select" name="vendor_id_select" style="width: 172px;">
			<option value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_venid'];?>
"><?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_venid'];?>
</option>
</select></td>
		
		
		
		
		<tr>
			<td>Transaction Date:</td>
			<td><input type="date" required name="txndate" value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_date'];?>
" style="width: 172px;">  </td>
		</tr>
		
		<tr>
			<td>Payment Pending:</td>
			<td><input type="text" required name="paymentpen" value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_paypending'];?>
">  </td>
		</tr>
		<tr>
			<td>Payment Done:</td>
			<td><input type="text" required name="paydone" value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_paydone'];?>
"></td>
		</tr>
		<tr>
			<td>Payment Received:</td>
			<td><input id="payreceived"  type="text" name="payreceived" value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_payreceived'];?>
" > </td>
		</tr>
		<tr>
		
			<td><input type="hidden" required name="txnid" value="<?php echo $_smarty_tpl->tpl_vars['vendordata']->value['txn_id'];?>
"> </td>
		</tr>
	<?php } ?>
		</tbody>
		</div>
</table>
<br/><br/>
<input type="submit" name="delete_ven" value="Delete">    
<input type="reset" name="clear" value="Clear">
<br/><br/>
</fieldset>
</form>	
<?php }?>
<br><br>

<h4>Vendor Transaction Master</h4>        
  <table summary="">
            <tr><th>No</th><th style = "display:none" >Transaction Id</th><th>Transaction Date</th><th>Vendor Type</th><th>Vendor Id</th><th>Payment Pending</th><th>Payment Done</th><th>Payment Received</th><th>Operation</th></tr>
			<?php  $_smarty_tpl->tpl_vars['usercook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usercook']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['usercook_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usercook']->key => $_smarty_tpl->tpl_vars['usercook']->value) {
$_smarty_tpl->tpl_vars['usercook']->_loop = true;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['usercook']->value->number;?>
</td>
			<td style = "display:none" ><?php echo $_smarty_tpl->tpl_vars['usercook']->value->txn_id;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['usercook']->value->txn_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['usercook']->value->txn_vtype;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['usercook']->value->txn_venid;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['usercook']->value->txn_paypending;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['usercook']->value->txn_paydone;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['usercook']->value->txn_payreceived;?>
</td>  
			<td><a href="vendor_transaction.php?operation=1&tid=<?php echo $_smarty_tpl->tpl_vars['usercook']->value->txn_id;?>
">Edit</a> <a href="vendor_transaction.php?operation=2&tid=<?php echo $_smarty_tpl->tpl_vars['usercook']->value->txn_id;?>
">Delete</a></td></tr> 
			<?php } ?>
 </table>
<br> <br>	
 </body>
	 
       <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
