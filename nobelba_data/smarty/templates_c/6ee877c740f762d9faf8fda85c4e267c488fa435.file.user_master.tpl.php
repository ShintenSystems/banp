<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-13 17:23:20
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\user_master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:689855d5a60ca38ce9-46608439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ee877c740f762d9faf8fda85c4e267c488fa435' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\user_master.tpl',
      1 => 1455379917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '689855d5a60ca38ce9-46608439',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d5a60cb465a6_65149601',
  'variables' => 
  array (
    'is_usermastermsg_shown' => 0,
    'is_operation_shown' => 0,
    'user_updset' => 0,
    'userdata' => 0,
    'userdata_json' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d5a60cb465a6_65149601')) {function content_55d5a60cb465a6_65149601($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Master Data</a> &raquo; User Master Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
	   <?php if (($_smarty_tpl->tpl_vars['is_usermastermsg_shown']->value!=0)) {?>	
	    <h7>User Data Register Successfully!</h7>   
 	     <?php }?>
	<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==0)) {?>
         <h2>User Master Registration</h2>
<form name="user_reg" method="POST" action="user_master.php?operation=0">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" class="active">User Master</a></li>
         <li><a href="cook_master.php?operation=0">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0">Supplier Master</a></li>
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
		
		<tr>
			<td>UserID:</td>
			<td><input type="text" required name="newuserid" value="" onClick="Clear() id="txtuserID">   </td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" required name="newpassword" value="" onClick="Clear() id="txtPassword"></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" required name="lname" value="" onClick="Clear() id="txtlname"> </td>
		</tr>
		<tr>
			<td>First Name:</td>
			<td><input type="text" required name="fname" value="" onClick="Clear() id="txtfname"></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><select name="gender" id="genderid" onChange="getSelect(0,this.value)" style="width: 172px;">
			<option value="Male">Male</option>
            <option value="Female">Female</option>
            </select></td>
		</tr>
		</tbody>
</table>
</div>
<br/><br/>
<input type="submit" name="user_master_register" id="register" value="Register">    
<input type="reset" name="clear" value="Clear">
<br/><br/>
</fieldset>
</form>	
<?php }?>


<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==1)) {?>	

 <h2>User Master Update</h2>
<form name="user_upd" method="POST" action="user_master.php">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" class="active">User Master</a></li>
         <li><a href="cook_master.php?operation=0">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0">Supplier Master</a></li>
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
		<?php  $_smarty_tpl->tpl_vars['userdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userdata']->key => $_smarty_tpl->tpl_vars['userdata']->value) {
$_smarty_tpl->tpl_vars['userdata']->_loop = true;
?>
		
		<tr>
			
			<td><input type="hidden" required name="newuserid" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_ID'];?>
" onClick="Clear() id="txtuserID">   </td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" required name="newpassword" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['password'];?>
" onClick="Clear() id="txtPassword"></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" required name="lname" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['lastname'];?>
" onClick="Clear() id="txtlname"> </td>
		</tr>
		<tr>
			<td>First Name:</td>
			<td><input type="text" required name="fname" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['firstname'];?>
" onClick="Clear() id="txtfname"></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><select name="gender" id="genderid" onChange="getSelect(0,this.value)" style="width: 172px;">
			

      <?php if ($_smarty_tpl->tpl_vars['userdata']->value['gender']=='Male') {?>

 <option selected="true" value="Male">Male</option>
<option value="Female">Female</option>
<?php }?>

     <?php if ($_smarty_tpl->tpl_vars['userdata']->value['gender']=='Female') {?>

<option value="Male">Male</option>
<option selected="true" value="Female">Female</option>
<?php }?>  
            </select></td>
		</tr>
		<?php } ?>
		</tbody>
</table>
</div>
<br/><br/>
<input type="submit" name="user_master_Update" id="update" value="Update">    
<input type="reset" name="clear" value="Clear">
<br/><br/>
</fieldset>
</form>	
<?php }?>



<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==2)) {?>	
 <h2>User Master Delete</h2>
<form name="user_del" method="POST" action="user_master.php">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" class="active">User Master</a></li>
         <li><a href="cook_master.php?operation=0">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0">Supplier Master</a></li>
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
		<?php  $_smarty_tpl->tpl_vars['userdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userdata']->key => $_smarty_tpl->tpl_vars['userdata']->value) {
$_smarty_tpl->tpl_vars['userdata']->_loop = true;
?>
		
		<tr>
			
			<td><input type="hidden" required name="newuserid" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_ID'];?>
" onClick="Clear() id="txtuserID">   </td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" required name="newpassword" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['password'];?>
" onClick="Clear() id="txtPassword"></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" required name="lname" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['lastname'];?>
" onClick="Clear() id="txtlname"> </td>
		</tr>
		<tr>
			<td>First Name:</td>
			<td><input type="text" required name="fname" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['firstname'];?>
" onClick="Clear() id="txtfname"></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><select name="gender" id="genderid" onChange="getSelect(0,this.value)" style="width: 172px;">
		  <?php if ($_smarty_tpl->tpl_vars['userdata']->value['gender']=='Male') {?>

 <option selected="true" value="Male">Male</option>
<option value="Female">Female</option>
<?php }?>

     <?php if ($_smarty_tpl->tpl_vars['userdata']->value['gender']=='Female') {?>

<option value="Male">Male</option>
<option selected="true" value="Female">Female</option>
<?php }?>  
            </select></td>
		</tr>
		<?php } ?>
		</tbody>
</table>
</div>
<br/><br/>
<input type="submit" name="user_master_delete" id="delete" value="Delete">    
<input type="reset" name="clear" value="Clear">
<br/><br/>
</fieldset>
</form>	
<?php }?>
<br><br>

<h4>User Master</h4>        
  <table summary="">
            <tr><th>No</th><th>UserID</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Operation</th></tr>
			<?php  $_smarty_tpl->tpl_vars['userdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['userdata_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userdata']->key => $_smarty_tpl->tpl_vars['userdata']->value) {
$_smarty_tpl->tpl_vars['userdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->number;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->user_ID;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->firstname;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->lastname;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->gender;?>
</td>
			<td><a href="user_master.php?operation=1&uid=<?php echo $_smarty_tpl->tpl_vars['userdata']->value->user_ID;?>
">Edit</a> <a href="user_master.php?operation=2&uid=<?php echo $_smarty_tpl->tpl_vars['userdata']->value->user_ID;?>
">Delete</a></td></tr>
			<?php } ?>
 </table>
<br> <br>	
 </body>
	 
      <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
