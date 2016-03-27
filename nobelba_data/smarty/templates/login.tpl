{include file="header.tpl"}
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
  {if $shown_invaliduser == 1}	
<div class="alert alert-warning">
  <strong> Invalid User Name & Password !</strong>
  </div>
  {/if}
  
   {if ($is_userregister != 0)}	
	  <div class="alert alert-success">
  <strong>User Register Successfully!</strong> 
</div>
  
  {/if}
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
      {include file="footer.tpl"}
	
    <!--END FOOTER SECTION -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
    <script src="js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRARY -->
    <script src="js/bootstrap.min.js"></script>
  	
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

     <script src="js/login.js"></script>
    
  </body>
</html>
