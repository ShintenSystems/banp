<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-27 06:29:06
         compiled from "\wamp\www\nobelba_data\Smarty\templates\fpass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1045956f65883298945-67113509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfec6f81d23f18fa71504097188c81bb224e5b72' => 
    array (
      0 => '\\wamp\\www\\nobelba_data\\Smarty\\templates\\fpass.tpl',
      1 => 1459052515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1045956f65883298945-67113509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f6588332d067_78441616',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f6588332d067_78441616')) {function content_56f6588332d067_78441616($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </br>
 <div class="container">
     <div class="row text-center">
		<div class="col-md-12 ">
		<div class="form">
		<form name="fpass_frm" action="fpass.php" method="post">	 
          <h1>Forgot your Password</h1>
            <div class="panel panel-default">
			<div class="panel-body">
			<div class="container">
			<div class="row text-left">
		    <div class="center">
		    <div class="col-xs-4 col-md-4">
			<br>
			<h4>Email Address</h4>
			
			<div class="input-group">
			
			<span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
            <input type="text" name="femail" class="form-control" placeholder="Email Address" required autocomplete="off">
            </div>
			</br>
			
			</div>
		    </div>
			</div>
 		    </div>
            </div>
           <div class="panel-footer">
		   		 <div class="row">
                 <div class="col-xs-12 col-md-12">
                    <button type="submit" name="btncont" class="btn btn-large btn-success">Continue</button>
                </div>
				</div>
            </div>
		   </div>
		  </form> 
		                
                              
     </div>
     </div>
  
 </div>
	<div class="space-bottom"></div>
    <!--END HOME SECTION -->
    <!--FOOTER SECTION -->
      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
    <!--END FOOTER SECTION -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <!-- CORE BOOTSTRAP LIBRARY -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  	
     <?php echo '<script'; ?>
 src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
>

     <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
    
  </body>
</html>
<?php }} ?>
