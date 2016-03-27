<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-13 17:23:12
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\sendreport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1363955eff6ad57eb34-27478612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5edc05fdd2de35a050e046d96f8367fd89b80416' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\sendreport.tpl',
      1 => 1455379916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1363955eff6ad57eb34-27478612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55eff6ad6ab7f8_77372536',
  'variables' => 
  array (
    'is_emailmsg_shown' => 0,
    'filepath' => 0,
    'filelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eff6ad6ab7f8_77372536')) {function content_55eff6ad6ab7f8_77372536($_smarty_tpl) {?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Master Data</a> &raquo; Send Report
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
	   <?php if (($_smarty_tpl->tpl_vars['is_emailmsg_shown']->value!=0)) {?>	
	    <h7>Message has been sent successfully!</h7>   
 	     <?php }?>
         <h2>Send Report</h2>

<form  method="POST" action="sendreport.php" enctype="multipart/form-data">
<br>
 
<br/>



<fieldset>
<br/>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">

	<tbody >



		<tr  style= "border-collapse">
		<td >To Email Address:</td>
			<td><input type="text" required name="toemail" value=""> </td>
		</tr>
		
		<tr>
			<td>Subject:</td>
			<td><input style="width:170px;" type="text" required name="subject" value=""> </td>
		</tr>
	<!--	<tr>
			<td>Attachment:</td>
			<td><input type="file" required name="uploaded_file"></td>
		</tr> -->
		<tr>
			<td>Attachment:</td>
			
			<td><select id="attached_id_select"  name="attached_id_select" style="width: 172px;">
			<?php  $_smarty_tpl->tpl_vars['filelist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filelist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filepath']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filelist']->key => $_smarty_tpl->tpl_vars['filelist']->value) {
$_smarty_tpl->tpl_vars['filelist']->_loop = true;
?>
			<option value=<?php echo $_smarty_tpl->tpl_vars['filelist']->value;?>
><?php echo $_smarty_tpl->tpl_vars['filelist']->value;?>
</option>
			<?php } ?>
  		
			
</select>

</td>
		</tr>
		
	</tbody>
</table>
</div>
<br/><br/>
<input type="submit" name="send_email" value="Send" style="width:150px; height:30px;"> 
<input type="reset" name="clear" value="Clear" style="width:150px; height:30px;">
  <!--  <input type="submit" name="submit" value="Clear"> -->
</fieldset>
</form>	



 </body>
	 
       <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
