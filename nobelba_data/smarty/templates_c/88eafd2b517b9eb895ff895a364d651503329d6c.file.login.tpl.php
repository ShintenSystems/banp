<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-27 06:25:16
         compiled from "\wamp\www\nobelba_data\Smarty\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:779556f013448ce1d2-98665490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88eafd2b517b9eb895ff895a364d651503329d6c' => 
    array (
      0 => '\\wamp\\www\\nobelba_data\\Smarty\\templates\\login.tpl',
      1 => 1459052515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '779556f013448ce1d2-98665490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f01344927f61_06116491',
  'variables' => 
  array (
    'shown_invaliduser' => 0,
    'is_userregister' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f01344927f61_06116491')) {function content_56f01344927f61_06116491($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </br>
 <div class="container">
     <div class="row text-center">
		<div class="col-md-12 ">
		<div class="form">
		<ul class="tab-group">
		<li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab "><a href="#signup">Sign Up</a></li>
		</ul>
     <div class="tab-content">
  
  
  
   
	 <div id="login"> 
 <form name="frm_login" action="login.php" method="post"> 
  <?php if ($_smarty_tpl->tpl_vars['shown_invaliduser']->value==1) {?>	
<div class="alert alert-warning">
  <strong> Invalid User Name & Password !</strong>
  </div>
  <?php }?>
  
   <?php if (($_smarty_tpl->tpl_vars['is_userregister']->value!=0)) {?>	
	  <div class="alert alert-success">
  <strong>User Register Successfully!</strong> 
</div>
  
  <?php }?>
			<h1>Login to Create Petition</h1>
			<div class="panel panel-default">
				<div class="panel-body">
				<div class="container">
				<div class="row">
				<div class="center">
				<div class="col-xs-4 col-md-4">
				<br>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" name="emailid" class="form-control" placeholder="Email Address" required autocomplete="off">
				</div>
				</br>
				</br>
				<div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="off">
				</div>			
				<br>
				<div class="row">
                 <div class="col-xs-12 col-md-12">
                 <button type="submit" name="btnlogin" class="btn btn-large btn-success">Login</button>
				 </div>
				 </div>
				</div>
				</div>
				</div>
				</div>
				</div>
           <div class="panel-footer">
           <a href="fpass.php">Forgot your Password?</span></a>
            </div>
		   </div>
		   </form>
           </div>	
     <div id="signup">  
     <form name="reg_frm" action="login.php" method="post">	 
	 
	 
	    
 	    
	 
	 
	 
	 
	 
          <h1>Sign Up To Create Petition</h1>
            <div class="panel panel-default">
			<div class="panel-body">
			<div class="container">
			<div class="row text-left">
		    <div class="center">
		    <div class="col-xs-4 col-md-4">
			<br>
			<h4>1.User ID/Email Address</h4>
			
			<div class="input-group">
			
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" name="inputemail" class="form-control" placeholder="Email Address" required autocomplete="off">
            </div>
			</br>
			<h4>2.Password</h4>
			<div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="inputpass" class="form-control" placeholder="Password" required autocomplete="off">
            </div>			
			<br>
			<h4>3.Contact No with Country Code</h4>
			<div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="text" name="inputph" class="form-control" placeholder="Contact No">
            </div>			
			<br>
			</div>
		    </div>
			</div>
 		    </div>
            </div>
           <div class="panel-footer">
		   		 <div class="row">
                 <div class="col-xs-12 col-md-12">
                    <button type="submit" name="btnregister" class="btn btn-large btn-success">Regiter</button>
                </div>
				</div>
            </div>
		   </div>
		  </form> 
        </div>
      </div><!-- tab-content -->
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      
</div> 

<!-- /form -->
   
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
