<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-06 14:06:21
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\cook_master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2815755d5a6086b9214-23370399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5655f85123361270c4cf730f2d5d3664ed9ea6bf' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\cook_master.tpl',
      1 => 1444107978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2815755d5a6086b9214-23370399',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d5a6087edbe0_74626879',
  'variables' => 
  array (
    'is_cookmastermsg_shown' => 0,
    'is_operation_shown' => 0,
    'cook_updset' => 0,
    'cookdata' => 0,
    'userdata_json' => 0,
    'userdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d5a6087edbe0_74626879')) {function content_55d5a6087edbe0_74626879($_smarty_tpl) {?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Master Data</a> &raquo; Cook Master Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
	  <?php if (($_smarty_tpl->tpl_vars['is_cookmastermsg_shown']->value!=0)) {?>	
	    <h7>Cook Master Data Register Successfully!</h7>   
 	     <?php }?>
		 
	<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==0)) {?>			 	 
         <h2>Cook Master Data Registration</h2>
<form name="cook_reg" method="POST" action="cook_master.php?operation=0">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" >User Master</a></li>
         <li><a href="cook_master.php?operation=0" class="active">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0">Supplier Master</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br/>
<!--<br>CookMasterID: <input type="text" required name="cookmasterid" value="">  <br/><br/> -->


<fieldset>
<br/>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">

	<tbody >



		<tr  style= "border-collapse">
		<td >First Name:</td>
			<td><input type="text" required name="fname" value=""> </td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" required name="lname" value=""></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input style="width:170px;" type="date" required name="dob" value=""> </td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" required name="address" value=""></td>
		</tr>
		<tr>
			<td>Contact No:</td>
			<td><input type="text" required name="contactno" value=""> </td>
		</tr>
		<tr>
			<td>Monthly Salary:</td>
			<td><input type="text" name="monthlysal" value=""></td>
		</tr>
		<tr>
			<td>Joining Date: </td>
			<td><input style="width:170px;" type="date" name="joindate" value=""></td>
		</tr>
		
		<tr>
		<td>Current Status:</td>
		<td><select name="currentstatus" id="currentstatusid" onChange="getSelect(0,this.value)" style="width: 172px;">
			<option value="Active">Active</option>
            <option value="NotActive">Not Active</option>
			<option value="OnLeave">On Leave</option>
            </select></td>
			</tr>
	</tbody>
</table>
</div>
<br/><br/><br/><br/>
<input type="submit" name="register_cook" value="Register"> 
<input type="reset" name="clear" value="Clear">

</fieldset>
</form>	
<?php }?>



<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==1)) {?>			 
        <h2>Cook Master Data Update</h2>
<form name="cook_upd" method="POST" action="cook_master.php">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" >User Master</a></li>
         <li><a href="cook_master.php?operation=0" class="active">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0">Supplier Master</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br/>
<!--<br>CookMasterID: <input type="text" required name="cookmasterid" value="">  <br/><br/> -->


<fieldset>
<br/>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">

	<tbody >


<?php  $_smarty_tpl->tpl_vars['cookdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cookdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cook_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cookdata']->key => $_smarty_tpl->tpl_vars['cookdata']->value) {
$_smarty_tpl->tpl_vars['cookdata']->_loop = true;
?>
<tr>
		
			<td><input type="hidden" name="cookmasterid" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['cm_ID'];?>
"> </td>
		</tr>
		<tr>
		<td >First Name:</td>
			<td><input type="text" required name="fname" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['f_name'];?>
"> </td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" required name="lname" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['l_name'];?>
"></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input style="width:170px;" type="date" required name="dob" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['d_ob'];?>
"> </td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" required name="address" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['addr'];?>
"></td>
		</tr>
		<tr>
			<td>Contact No:</td>
			<td><input type="text" required name="contactno" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['c_no'];?>
"> </td>
		</tr>
		<tr>
			<td>Monthly Salary:</td>
			<td><input type="text" name="monthlysal" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['m_salary'];?>
"></td>
		</tr>
		<tr>
			<td>Joining Date: </td>
			<td><input style="width:170px;" type="date" name="joindate" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['join_date'];?>
"></td>
		</tr>
		
		<tr>
		<td>Current Status:</td>
		<td><select name="currentstatus" id="currentstatusid" onChange="getSelect(0,this.value)" style="width: 172px;">
			<?php if ($_smarty_tpl->tpl_vars['cookdata']->value['c_status']=='Active') {?>
<option selected="true" value="Active">Active</option>
       <option  value="NotActive">Not Active</option>
<option value="OnLeave">On Leave</option>
<?php }?>

      <?php if ($_smarty_tpl->tpl_vars['cookdata']->value['c_status']=='NotActive') {?>
<option  value="Active">Active</option>
       <option selected="true" value="NotActive">Not Active</option>
<option value="OnLeave">On Leave</option>
<?php }?>

     <?php if ($_smarty_tpl->tpl_vars['cookdata']->value['c_status']=='OnLeave') {?>
<option  value="Active">Active</option>
       <option  value="NotActive">Not Active</option>
<option selected="true" value="OnLeave">On Leave</option>
<?php }?>  
            </select></td>
			</tr>
			<?php } ?>
	</tbody>
</table>
</div>
<br/><br/><br/><br/>
<input type="submit" name="update_cook" value="Update"> 
<input type="reset" name="clear" value="Clear">

</fieldset>
</form>	
<?php }?>



<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==2)) {?>		
 <h2>Cook Master Data Update</h2>
<form name="cook_del" method="POST" action="cook_master.php">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" >User Master</a></li>
         <li><a href="cook_master.php?operation=0" class="active">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0">Supplier Master</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br/>
<fieldset>
<br/>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">

	<tbody >


<?php  $_smarty_tpl->tpl_vars['cookdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cookdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cook_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cookdata']->key => $_smarty_tpl->tpl_vars['cookdata']->value) {
$_smarty_tpl->tpl_vars['cookdata']->_loop = true;
?>
<tr>
		
			<td><input type="hidden" name="cookmasterid" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['cm_ID'];?>
"> </td>
		</tr>
		<tr>
		<td >First Name:</td>
			<td><input type="text" required name="fname" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['f_name'];?>
"> </td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" required name="lname" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['l_name'];?>
"></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input style="width:170px;" type="date" required name="dob" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['d_ob'];?>
"> </td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" required name="address" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['addr'];?>
"></td>
		</tr>
		<tr>
			<td>Contact No:</td>
			<td><input type="text" required name="contactno" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['c_no'];?>
"> </td>
		</tr>
		<tr>
			<td>Monthly Salary:</td>
			<td><input type="text" name="monthlysal" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['m_salary'];?>
"></td>
		</tr>
		<tr>
			<td>Joining Date: </td>
			<td><input style="width:170px;" type="date" name="joindate" value="<?php echo $_smarty_tpl->tpl_vars['cookdata']->value['join_date'];?>
"></td>
		</tr>
		
		<tr>
		<td>Current Status:</td>
		<td><select name="currentstatus" id="currentstatusid" onChange="getSelect(0,this.value)" style="width: 172px;">
			<?php if ($_smarty_tpl->tpl_vars['cookdata']->value['c_status']=='Active') {?>
<option selected="true" value="Active">Active</option>
       <option  value="NotActive">Not Active</option>
<option value="OnLeave">On Leave</option>
<?php }?>

      <?php if ($_smarty_tpl->tpl_vars['cookdata']->value['c_status']=='NotActive') {?>
<option  value="Active">Active</option>
       <option selected="true" value="NotActive">Not Active</option>
<option value="OnLeave">On Leave</option>
<?php }?>

     <?php if ($_smarty_tpl->tpl_vars['cookdata']->value['c_status']=='OnLeave') {?>
<option  value="Active">Active</option>
       <option  value="NotActive">Not Active</option>
<option selected="true" value="OnLeave">On Leave</option>
<?php }?>  
            </select></td>
			</tr>
			<?php } ?>
	</tbody>
</table>
</div>
<br/><br/><br/><br/>
<input type="submit" name="delete_cook" value="Delete"> 
<input type="reset" name="clear" value="Clear">

</fieldset>
</form>	
<?php }?>
<br><br>

<h4>User Master</h4>        
  <table summary="">
            <tr><th>No</th><th style = "display:none" >CookMasterID</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Address</th><th>Contact No</th><th>Monthly Salary</th><th>Joining Date</th><th>Pending Payment</th><th>Paid Amount</th><th>Current Status</th><th>Operation</th></tr>
           <?php  $_smarty_tpl->tpl_vars['userdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['userdata_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userdata']->key => $_smarty_tpl->tpl_vars['userdata']->value) {
$_smarty_tpl->tpl_vars['userdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->number;?>
</td>
			 <td style = "display:none" ><?php echo $_smarty_tpl->tpl_vars['userdata']->value->cm_ID;?>
</td>  
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->f_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->l_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->d_ob;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->addr;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->c_no;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->m_salary;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->join_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->pen_payment;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->pd_amount;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->c_status;?>
</td>
			<td><a href="cook_master.php?operation=1&cmid=<?php echo $_smarty_tpl->tpl_vars['userdata']->value->cm_ID;?>
">Edit</a> <a href="cook_master.php?operation=2&cmid=<?php echo $_smarty_tpl->tpl_vars['userdata']->value->cm_ID;?>
">Delete</a></td></tr>
			<?php } ?>
            
</table>
		 
	 
<br> <br>	



 </body>
	 
       <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
