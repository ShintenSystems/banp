<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-13 17:23:26
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\order_transaction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:944555d5d2bc536da6-65247570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caa4072c77b9b977098e6308c618ab8282980e95' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\order_transaction.tpl',
      1 => 1455379916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '944555d5d2bc536da6-65247570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d5d2bc6196d2_30585778',
  'variables' => 
  array (
    'is_oedertxnmsg_shown' => 0,
    'is_operation_shown' => 0,
    'order_updset' => 0,
    'orderdata' => 0,
    'orderdata_json' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d5d2bc6196d2_30585778')) {function content_55d5d2bc6196d2_30585778($_smarty_tpl) {?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Daily Transaction</a> &raquo; Order Transaction Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
	  <?php if (($_smarty_tpl->tpl_vars['is_oedertxnmsg_shown']->value!=0)) {?>	
	    <h7>Order Transaction Data Register Successfully!</h7>   
 	     <?php }?>
		 <?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==0)) {?>
         <h2>Order Transaction Registration</h2>
<form name="order_reg" method="POST" action="order_transaction.php?operation=0">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="vendor_transaction.php?operation=0" >Vendor Transaction</a></li>
         <li><a href="order_transaction.php?operation=0" class="active">Order Transaction</a></li>
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
<tr  style= "border-collapse">
		<td>Number Of Lunch: </td>
			<td><input type="text" required name="nolunch" value=""> </td>
		</tr>
		<tr>
			<td>Number Of Dinner:</td>
			<td><input type="text" required name="nodinner" value=""></td>
		</tr>
		<tr>
			<td>Payment Received:</td>
			<td><input type="text"  name="payreceived" value="">  </td>
		</tr>
		</tbody>
</table>
</div>

<br/><br/>
<input type="submit" name="register_order"  value="Register">  
<input type="reset" name="clear" value="Clear"> 
<br/><br/>
</fieldset>
</form>	
<?php }?>


<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==1)) {?>	
         <h2>Order Transaction Update</h2>
<form name="order_upd" method="POST" action="order_transaction.php?">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="vendor_transaction.php?operation=0" >Vendor Transaction</a></li>
         <li><a href="order_transaction.php?operation=0" class="active">Order Transaction</a></li>
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
<?php  $_smarty_tpl->tpl_vars['orderdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderdata']->key => $_smarty_tpl->tpl_vars['orderdata']->value) {
$_smarty_tpl->tpl_vars['orderdata']->_loop = true;
?>

<tr>
		
			<td><input type="hidden" required name="orderid" value="<?php echo $_smarty_tpl->tpl_vars['orderdata']->value['o_id'];?>
"> </td>
		</tr>
<tr>
		<td>Number Of Lunch: </td>
			<td><input type="text" required name="nolunch" value="<?php echo $_smarty_tpl->tpl_vars['orderdata']->value['n_lunch'];?>
"> </td>
		</tr>
		<tr>
			<td>Number Of Dinner:</td>
			<td><input type="text" required name="nodinner" value="<?php echo $_smarty_tpl->tpl_vars['orderdata']->value['n_dinner'];?>
"></td>
		</tr>
		<tr>
			<td>Payment Received:</td>
			<td><input type="text"  name="payreceived" value="<?php echo $_smarty_tpl->tpl_vars['orderdata']->value['pay_received'];?>
">  </td>
		</tr>
		<?php } ?>
		</tbody>
</table>
</div>

<br/><br/>
<input type="submit" name="update_order"  value="Update">  
<input type="reset" name="clear" value="Clear"> 
<br/><br/>
</fieldset>
</form>	
<?php }?>



<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==2)) {?>		
<form name="order_del" method="POST" action="order_transaction.php?">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="vendor_transaction.php?operation=0" >Vendor Transaction</a></li>
         <li><a href="order_transaction.php?operation=0" class="active">Order Transaction</a></li>
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
<?php  $_smarty_tpl->tpl_vars['orderdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderdata']->key => $_smarty_tpl->tpl_vars['orderdata']->value) {
$_smarty_tpl->tpl_vars['orderdata']->_loop = true;
?>

<tr>
		
			<td><input type="hidden" required name="orderid" value="<?php echo $_smarty_tpl->tpl_vars['orderdata']->value['o_id'];?>
"> </td>
		</tr>
<tr>
		<td>Number Of Lunch: </td>
			<td><input type="text" required name="nolunch" value="<?php echo $_smarty_tpl->tpl_vars['orderdata']->value['n_lunch'];?>
"> </td>
		</tr>
		<tr>
			<td>Number Of Dinner:</td>
			<td><input type="text" required name="nodinner" value="<?php echo $_smarty_tpl->tpl_vars['orderdata']->value['n_dinner'];?>
"></td>
		</tr>
		<tr>
			<td>Payment Received:</td>
			<td><input type="text"  name="payreceived" value="<?php echo $_smarty_tpl->tpl_vars['orderdata']->value['pay_received'];?>
">  </td>
		</tr>
		<?php } ?>
		</tbody>
</table>
</div>

<br/><br/>
<input type="submit" name="delete_order"  value="Delete">  
<input type="reset" name="clear" value="Clear"> 
<br/><br/>
</fieldset>
</form>	
<?php }?>
<br><br>

<h4>Order Transaction Master</h4>        
  <table summary="">
            <tr><th>No</th><th style = "display:none" >Order Details Id</th><th>No Of Lunch</th><th>No Of Dinner</th><th>Payment Received</th><th>Order Date</th><th>Operation</th></tr>
			<?php  $_smarty_tpl->tpl_vars['orderdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['orderdata_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderdata']->key => $_smarty_tpl->tpl_vars['orderdata']->value) {
$_smarty_tpl->tpl_vars['orderdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['orderdata']->value->number;?>
</td>
			<td style = "display:none" ><?php echo $_smarty_tpl->tpl_vars['orderdata']->value->o_id;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['orderdata']->value->n_lunch;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['orderdata']->value->n_dinner;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['orderdata']->value->pay_received;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['orderdata']->value->o_date;?>
</td>
			<td><a href="order_transaction.php?operation=1&oid=<?php echo $_smarty_tpl->tpl_vars['orderdata']->value->o_id;?>
">Edit</a> <a href="order_transaction.php?operation=2&oid=<?php echo $_smarty_tpl->tpl_vars['orderdata']->value->o_id;?>
">Delete</a></td></tr> 
			<?php } ?>
 </table>
<br> <br>	
 </body>
	  <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
