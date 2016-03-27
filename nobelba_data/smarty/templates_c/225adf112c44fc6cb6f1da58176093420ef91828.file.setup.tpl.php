<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-13 17:22:13
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4283560e36ddb92917-11810712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '225adf112c44fc6cb6f1da58176093420ef91828' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\setup.tpl',
      1 => 1455379917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4283560e36ddb92917-11810712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560e36ddc0bab0_25104006',
  'variables' => 
  array (
    'setup_data' => 0,
    'setupdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560e36ddc0bab0_25104006')) {function content_560e36ddc0bab0_25104006($_smarty_tpl) {?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Setup</a> &raquo; User Setup
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
	  

<h2>Setup</h2>
<form name="frmSetup" method="POST" action="setup.php?operation=0" enctype="multipart/form-data">

 


<br><br>
<fieldset>
<br/>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:700px;">
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['setupdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setupdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setup_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setupdata']->key => $_smarty_tpl->tpl_vars['setupdata']->value) {
$_smarty_tpl->tpl_vars['setupdata']->_loop = true;
?>
		<tr>
			<td>Restaurant Name:</td>
			<td><input type="text"  name="restname" value="<?php echo $_smarty_tpl->tpl_vars['setupdata']->value['rest_n'];?>
">   </td>
		</tr>
		<tr>
			<td>Restaurant Tag Line:</td>
			<td><input type="text"  name="resttagline" value="<?php echo $_smarty_tpl->tpl_vars['setupdata']->value['rest_tag'];?>
" ></td>
		</tr>
		<tr>
			<td>Restaurant Logo:</td>
		
   

			<td><input type="file" name="restlogo" size="40"  accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*"><img src=<?php echo $_SESSION['RESTLOGO'];?>
  width="22" height= "22"  /></td>
		
		
		</tr>
		<tr>
			<td >Select Color Theme :  </td>
			<td><select name="selecttheme" id="selecttheme"  style="width: 172px;">
					<?php if ($_smarty_tpl->tpl_vars['setupdata']->value['c_theme']=='Blue') {?>
			<option value="Blue" selected="true">Blue</option>
            <option value="Green">Green</option>
			<option value="Brown">Brown</option>
			<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['setupdata']->value['c_theme']=='Green') {?>
			<option value="Blue">Blue</option>
            <option value="Green"  selected="true">Green</option>
			<option value="Brown">Brown</option>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['setupdata']->value['c_theme']=='Brown') {?>
			<option value="Blue">Blue</option>
            <option value="Green" >Green</option>
			<option value="Brown" selected="true">Brown</option>
			<?php }?>
            </select></td>
			
			
		</tr>
		<tr>
			<td>Admin ID:</td>
		<td><input type="text"  name="adminid" value="<?php echo $_smarty_tpl->tpl_vars['setupdata']->value['a_id'];?>
">(If Change you need login again)</td>
			
            </select></td>
		</tr>
		<tr>
			<td>Admin Password:</td>
			<td><input type="password"  name="adminpwd" value="<?php echo $_smarty_tpl->tpl_vars['setupdata']->value['a_pass'];?>
" >(If Change you need login again)</td>
		</tr>
		<tr>
			<td>Admin Email Address:</td>
			<td><input type="text"  name="adminemail" value="<?php echo $_smarty_tpl->tpl_vars['setupdata']->value['a_email'];?>
"></td>
		</tr>
		<tr>
<td>Admin Avtar:</td>

<td>
 	
	<?php if ($_smarty_tpl->tpl_vars['setupdata']->value['avtar1']=='profile1.png') {?>
<input  name="profile1" value="profile1.png" type="checkbox" id="avtaar1" onClick="functionavtaar1();" checked />
<img src="images/avtar/profile1.png"  width="35" height= "35"  />
<input  name="profile1" value="profile2.png" type="checkbox"  id="avtaar2" onClick="functionavtaar2();"/> 
<img src="images/avtar/profile2.png" width="35" height= "35"/>
<input  name="profile1" value="profile3.png" type="checkbox"  id="avtaar3" onClick="functionavtaar3();"/> 
<img src="images/avtar/profile3.png" width="35" height= "35" />

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['setupdata']->value['avtar1']=='profile2.png') {?>
<input  name="profile1" value="profile1.png" type="checkbox" id="avtaar1" onClick="functionavtaar1();"  />
<img src="images/avtar/profile1.png"  width="35" height= "35"  />
<input  name="profile1" value="profile2.png" type="checkbox"  id="avtaar2" onClick="functionavtaar2();" checked/> 
<img src="images/avtar/profile2.png" width="35" height= "35"/>
<input  name="profile1" value="profile3.png" type="checkbox"  id="avtaar3" onClick="functionavtaar3();"/> 
<img src="images/avtar/profile3.png" width="35" height= "35" />

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['setupdata']->value['avtar1']=='profile3.png') {?>
<input  name="profile1" value="profile1.png" type="checkbox" id="avtaar1" onClick="functionavtaar1();"  />
<img src="images/avtar/profile1.png"  width="35" height= "35"  />
<input  name="profile1" value="profile2.png" type="checkbox"  id="avtaar2" onClick="functionavtaar2();" /> 
<img src="images/avtar/profile2.png" width="35" height= "35"/>
<input  name="profile1" value="profile3.png" type="checkbox"  id="avtaar3" onClick="functionavtaar3();" checked/> 
<img src="images/avtar/profile3.png" width="35" height= "35" />

<?php }?>
</td>


</tr>
		
		<tr>
			<td>Email Address to Send Report:</td>
			<td><input type="email"  name="emailsendreport" value="<?php echo $_smarty_tpl->tpl_vars['setupdata']->value['email_send'];?>
"></td>
		</tr>
		<?php } ?>
		</tbody>
</table>
</div>
<br/><br/>
<input type="submit" name="setup_save" id="save" value="Save" style="width:150px; height:40px;">    
<br/><br/>
</fieldset>
</form>	

<br> <br>	
 </body>
	 
      <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
