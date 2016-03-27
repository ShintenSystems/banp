<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-28 20:16:41
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165035608ce7f8e1fc3-85521244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62416c0ac2cfdedafba62413ff7889affabcba9' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\edit.tpl',
      1 => 1443438999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165035608ce7f8e1fc3-85521244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5608ce7f9fb407_03178054',
  'variables' => 
  array (
    'supplier_edit' => 0,
    'supplierdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5608ce7f9fb407_03178054')) {function content_5608ce7f9fb407_03178054($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Master Data</a> &raquo; Supplier Master Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
	  
	
		 
		 
         <h2>Supplier Master Data Registration</h2>
<form  method="POST" action="edit.php">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php" >User Master</a></li>
         <li><a href="cook_master.php">Cook Master</a></li>
         <li><a href="parttime_master.php">Part Time Master</a></li>
         <li><a href="supplier_master.php" class="active">Supplier Master</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br>
<!--Supplier ID: <input type="hidden" required name="supid" value="">  <br/><br/> -->
<fieldset>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['supplierdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplierdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supplier_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplierdata']->key => $_smarty_tpl->tpl_vars['supplierdata']->value) {
$_smarty_tpl->tpl_vars['supplierdata']->_loop = true;
?>
		
		<tr>
		
			
			<td>Supplier ID:</td>
			
			<td><input type="hidden" name="supid" value="<?php echo $_smarty_tpl->tpl_vars['supplierdata']->value['s_ID'];?>
"></td>
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





 </body>
	 
       <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
