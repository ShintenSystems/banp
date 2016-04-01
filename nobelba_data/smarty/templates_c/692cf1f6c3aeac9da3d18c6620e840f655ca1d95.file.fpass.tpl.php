<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-29 09:44:30
         compiled from "\wamp\www\banp\nobelba_data\Smarty\templates\fpass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3197656f8b54e00b4e4-55685834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692cf1f6c3aeac9da3d18c6620e840f655ca1d95' => 
    array (
      0 => '\\wamp\\www\\banp\\nobelba_data\\Smarty\\templates\\fpass.tpl',
      1 => 1459237464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3197656f8b54e00b4e4-55685834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f8b54e08c387_04766465',
  'variables' => 
  array (
    'shown_invalidemail' => 0,
    'shown_validemail_Sucess' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f8b54e08c387_04766465')) {function content_56f8b54e08c387_04766465($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="css/login.css">  
  </br>
 <div class="container">
     <div class="row text-center">
		<div class="col-md-12 ">
		<div class="form">
		<form name="fpass_frm" action="fpass.php" method="post">	 
          <h1>Forgot your Password</h1>
		  
		  <?php if ($_smarty_tpl->tpl_vars['shown_invalidemail']->value==1) {?>	
		<div class="alert alert-warning">
		<strong> The email ID you have entered does not exist OR Please type valid Email Address </strong>
		</div>
		<?php }?>
		  
		  
            <div class="panel panel-default">
			<div class="panel-body">
			<div class="container">
			<div class="row text-left">
		    <div class="center">
		    <div class="col-xs-4 col-md-4">
			<br>
			<?php if ($_smarty_tpl->tpl_vars['shown_validemail_Sucess']->value==0) {?>	
				<h4>Email Address</h4>
				 
				<div class="input-group">
				
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
				<input type="text" name="femail" class="form-control" placeholder="Email Address" required autocomplete="off">
				</div>
			<?php }?>
			
			
			 <?php if ($_smarty_tpl->tpl_vars['shown_validemail_Sucess']->value==1) {?>	
					<div class="alert alert-success">
					<strong>Please Check Your Email address For Details!</strong> 
					</div>
			<?php }?>
			</br>
			
			</div>
		    </div>
			</div>
 		    </div>
            </div>
           <div class="panel-footer">
		   		 <div class="row">
                 <div class="col-xs-12 col-md-12">
				 
				<?php if ($_smarty_tpl->tpl_vars['shown_validemail_Sucess']->value==0) {?>	
                   
				   <button type="submit" name="btncont" class="btn btn-large btn-success">Continue</button>
					
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['shown_validemail_Sucess']->value==1) {?>	
					 
					 <a href="login.php" class="btn btn-large btn-success" role="button" >Click Here To Login</a>
					 
				<?php }?>
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
