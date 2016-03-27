<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-06 14:06:58
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\parttime_master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1902855d5a6039c5e66-55169099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69e25ad06df3773592f5bd60152a3a87845511eb' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\parttime_master.tpl',
      1 => 1444108016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1902855d5a6039c5e66-55169099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d5a603aeae26_82045538',
  'variables' => 
  array (
    'is_parttimemastermsg_shown' => 0,
    'is_operation_shown' => 0,
    'parttime_updset' => 0,
    'parttimerdata' => 0,
    'userdata_json' => 0,
    'userdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d5a603aeae26_82045538')) {function content_55d5a603aeae26_82045538($_smarty_tpl) {?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div id="topicPath">
      <a href="admin.php">Master Data</a> &raquo; Part Time Master Registration
   <!-- /#topicPath --></div>
   <div id="contents">
      <div id="main">
	  <?php if (($_smarty_tpl->tpl_vars['is_parttimemastermsg_shown']->value!=0)) {?>	
	    <h7>Parttime Data Register Successfully!</h7>   
 	     <?php }?>
		 
<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==0)) {?>
         <h2>Part Time Master Data Registration</h2>
<form name="p_reg" method="POST" action="parttime_master.php?operation=0">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" >User Master</a></li>
         <li><a href="cook_master.php?operation=0">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0" class="active">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0">Supplier Master</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br>
<!--  Part Time Worker ID: <input type="text" required name="ptwid" value="">  <br/><br/> -->
<fieldset>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">
	<tbody>
		
		<tr>
			<td>First Name:</td>
			<td><input type="text" required name="fname" value="">  </td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" required name="lname" value=""> <br/></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input style="width:170px;" type="date" required name="dob" value=""> </td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" required name="address" value=""> </td>
		</tr>
		<tr>
			<td>Contact No:</td>
			<td><input type="text" required name="contactno" value=""> </td>
		</tr>
		<tr>
			<td>Hourly Rate:</td>
			<td><input type="text" required name="hrate" value=""> </td>
		</tr>
		<tr>
			<td>Joining Date: </td>
			<td><input style="width:170px;" type="date" required name="joindate" value=""></td>
		</tr>
		<tr>
		<td>Status:</td>
		<td><select name="status" id="statusid" onChange="getSelect(0,this.value)" style="width: 172px;">
			<option value="Active">Active</option>
            <option value="NotActive">Not Active</option>
			<option value="OnLeave">On Leave</option>
            </select></td>
			</tr>
	</tbody>
</table>
</div>
<br/><br/>
<input type="submit" name="register_parttime" value="Register"> 
<input type="reset" name="clear" value="Clear">
</fieldset>    
</form>	

<?php }?>


<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==1)) {?>	
<h2>Part Time Master Data Update</h2>
<form name="p_upd" method="POST" action="parttime_master.php">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" >User Master</a></li>
         <li><a href="cook_master.php?operation=0">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0" class="active">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0">Supplier Master</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br>
<!--  Part Time Worker ID: <input type="text" required name="ptwid" value="">  <br/><br/> -->
<fieldset>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">
	<tbody>
	
	<?php  $_smarty_tpl->tpl_vars['parttimerdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parttimerdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parttime_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parttimerdata']->key => $_smarty_tpl->tpl_vars['parttimerdata']->value) {
$_smarty_tpl->tpl_vars['parttimerdata']->_loop = true;
?>
		<tr>
		
			
			
			
			<td><input type="hidden" name="ptwid" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['ptw_ID'];?>
"></td>
		<tr>
		<tr>
			<td>First Name:</td>
			<td><input type="text" required name="fname" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['f_name'];?>
">  </td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" required name="lname" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['l_name'];?>
"> <br/></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input style="width:170px;" type="date" required name="dob" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['d_ob'];?>
"> </td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" required name="address" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['addr'];?>
"> </td>
		</tr>
		<tr>
			<td>Contact No:</td>
			<td><input type="text" required name="contactno" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['c_no'];?>
"> </td>
		</tr>
		<tr>
			<td>Hourly Rate:</td>
			<td><input type="text" required name="hrate" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['h_rate'];?>
"> </td>
		</tr>
		<tr>
			<td>Joining Date: </td>
			<td><input style="width:170px;" type="date" required name="joindate" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['join_date'];?>
"></td>
		</tr>
		<tr>
		<td>Status:</td>
		<td><select name="status" id="statusid" onChange="getSelect(0,this.value)" style="width: 172px;">
		<?php if ($_smarty_tpl->tpl_vars['parttimerdata']->value['nstatus']=='Active') {?>
<option selected="true" value="Active">Active</option>
       <option  value="NotActive">Not Active</option>
<option value="OnLeave">On Leave</option>
<?php }?>

      <?php if ($_smarty_tpl->tpl_vars['parttimerdata']->value['nstatus']=='NotActive') {?>
<option  value="Active">Active</option>
       <option selected="true" value="NotActive">Not Active</option>
<option value="OnLeave">On Leave</option>
<?php }?>

     <?php if ($_smarty_tpl->tpl_vars['parttimerdata']->value['nstatus']=='OnLeave') {?>
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
<br/><br/>
<input type="submit" name="update_parttime" value="Update"> 
<input type="reset" name="clear" value="Clear">
</fieldset>    
</form>	

<?php }?>



<?php if (($_smarty_tpl->tpl_vars['is_operation_shown']->value==2)) {?>			 
<h2>Part Time Master Data Delete</h2>
<form name="p_del" method="POST" action="parttime_master.php">
<br>
 <div id="master_menu">
      <ul>
         <li><a href="user_master.php?operation=0" >User Master</a></li>
         <li><a href="cook_master.php?operation=0">Cook Master</a></li>
         <li><a href="parttime_master.php?operation=0" class="active">Part Time Master</a></li>
         <li><a href="supplier_master.php?operation=0">Supplier Master</a></li>
  	      </ul>
   </div>

<br>
<br/>
<br>
<!--  Part Time Worker ID: <input type="text" required name="ptwid" value="">  <br/><br/> -->
<fieldset>
<div id="form">
<table cellpadding="1" cellspacing="1" style="width:400px;">
	<tbody>
		
		<?php  $_smarty_tpl->tpl_vars['parttimerdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parttimerdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parttime_updset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parttimerdata']->key => $_smarty_tpl->tpl_vars['parttimerdata']->value) {
$_smarty_tpl->tpl_vars['parttimerdata']->_loop = true;
?>
		<tr>
		
			
		
			
			<td><input type="hidden" name="ptwid" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['ptw_ID'];?>
"></td>
		<tr>
		<tr>
			<td>First Name:</td>
			<td><input type="text" required name="fname" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['f_name'];?>
">  </td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" required name="lname" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['l_name'];?>
"> <br/></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input style="width:170px;" type="date" required name="dob" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['d_ob'];?>
"> </td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" required name="address" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['addr'];?>
"> </td>
		</tr>
		<tr>
			<td>Contact No:</td>
			<td><input type="text" required name="contactno" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['c_no'];?>
"> </td>
		</tr>
		<tr>
			<td>Hourly Rate:</td>
			<td><input type="text" required name="hrate" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['h_rate'];?>
"> </td>
		</tr>
		<tr>
			<td>Joining Date: </td>
			<td><input style="width:170px;" type="date" required name="joindate" value="<?php echo $_smarty_tpl->tpl_vars['parttimerdata']->value['join_date'];?>
"></td>
		</tr>
		<tr>
		<td>Status:</td>
		<td><select name="status" id="statusid" onChange="getSelect(0,this.value)" style="width: 172px;">
			<?php if ($_smarty_tpl->tpl_vars['parttimerdata']->value['nstatus']=='Active') {?>
<option selected="true" value="Active">Active</option>
       <option  value="NotActive">Not Active</option>
<option value="OnLeave">On Leave</option>
<?php }?>

      <?php if ($_smarty_tpl->tpl_vars['parttimerdata']->value['nstatus']=='NotActive') {?>
<option  value="Active">Active</option>
       <option selected="true" value="NotActive">Not Active</option>
<option value="OnLeave">On Leave</option>
<?php }?>

     <?php if ($_smarty_tpl->tpl_vars['parttimerdata']->value['nstatus']=='OnLeave') {?>
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
<br/><br/>
<input type="submit" name="delete_parttime" value="Delete"> 
<input type="reset" name="clear" value="Clear">
</fieldset>    
</form>	
<?php }?>
<br><br>

<h4>User Master</h4>        
  <table summary="">
             <tr><th>No</th><th style = "display:none" >PartTimeWorkerID</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Address</th><th>Contact No</th><th>Hourly Rate</th><th>Joining Date</th><th>Paid Amount</th><th>Pending Payment</th><th>Status</th><th>Operation</th></tr>
           <?php  $_smarty_tpl->tpl_vars['userdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userdata']->_loop = false;
 $_from = json_decode($_smarty_tpl->tpl_vars['userdata_json']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userdata']->key => $_smarty_tpl->tpl_vars['userdata']->value) {
$_smarty_tpl->tpl_vars['userdata']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->number;?>
</td>
			<td style = "display:none" ><?php echo $_smarty_tpl->tpl_vars['userdata']->value->ptw_ID;?>
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
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->h_rate;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->join_date;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->pd_amount;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->pen_payment;?>
</td>
			
			<td><?php echo $_smarty_tpl->tpl_vars['userdata']->value->nstatus;?>
</td>
			<td><a href="parttime_master.php?operation=1&pid=<?php echo $_smarty_tpl->tpl_vars['userdata']->value->ptw_ID;?>
">Edit</a> <a href="parttime_master.php?operation=2&pid=<?php echo $_smarty_tpl->tpl_vars['userdata']->value->ptw_ID;?>
">Delete</a></td></tr>
			<?php } ?>
            
</table>
		 
	 
<br> <br>	
		 

	 
<br> <br>	


 </body>
	 
      <?php echo $_smarty_tpl->getSubTemplate ("rightsidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
