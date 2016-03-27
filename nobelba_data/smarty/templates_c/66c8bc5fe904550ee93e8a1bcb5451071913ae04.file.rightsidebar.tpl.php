<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-13 17:22:10
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\rightsidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3102155f826c0b12580-62116620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66c8bc5fe904550ee93e8a1bcb5451071913ae04' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\rightsidebar.tpl',
      1 => 1455379916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3102155f826c0b12580-62116620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f826c0b31982_90634527',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f826c0b31982_90634527')) {function content_55f826c0b31982_90634527($_smarty_tpl) {?>  <!-- /#main --></div>
      <div id="sub">
         <div class="section">
            <h3>Login</h3>
			
			
            <ul>
			
			 Hi <?php echo $_SESSION['FIRST_NAME'];?>
<br> 
			  
			  Login <?php echo $_SESSION['USERLOGINTIME'];?>
 <br>
			  <!-- 2015.08.13 2:00<br>
			  Logout 2015.08.13 6:00 -->
            </ul>
         <!-- /.section --></div>
         <div class="section">
            <h3>Recent Report</h3>
			<ul>
			  Check you Last Report
			</ul>
         <!-- /.section --></div>
      <!-- /#sub --></div><?php }} ?>
