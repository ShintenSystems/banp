{include file="header.tpl"}
<link rel="stylesheet" href="css/login.css">  
  </br>
 <div class="container">
     <div class="row text-center">
		<div class="col-md-12 ">
		<div class="form">
		<form name="fpass_frm" action="fpass.php" method="post">	 
          <h1>Forgot your Password</h1>
		  
		  {if $shown_invalidemail == 1}	
		<div class="alert alert-warning">
		<strong> The email ID you have entered does not exist OR Please type valid Email Address </strong>
		</div>
		{/if}
		  
		  
            <div class="panel panel-default">
			<div class="panel-body">
			<div class="container">
			<div class="row text-left">
		    <div class="center">
		    <div class="col-xs-4 col-md-4">
			<br>
			{if $shown_validemail_Sucess == 0}	
				<h4>Email Address</h4>
				 
				<div class="input-group">
				
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
				<input type="text" name="femail" class="form-control" placeholder="Email Address" required autocomplete="off">
				</div>
			{/if}
			
			
			 {if $shown_validemail_Sucess == 1}	
					<div class="alert alert-success">
					<strong>Please Check Your Email address For Details!</strong> 
					</div>
			{/if}
			</br>
			
			</div>
		    </div>
			</div>
 		    </div>
            </div>
           <div class="panel-footer">
		   		 <div class="row">
                 <div class="col-xs-12 col-md-12">
				 
				{if $shown_validemail_Sucess == 0}	
                   
				   <button type="submit" name="btncont" class="btn btn-large btn-success">Continue</button>
					
				{/if}
				
				{if $shown_validemail_Sucess == 1}	
					 
					 <a href="login.php" class="btn btn-large btn-success" role="button" >Click Here To Login</a>
					 
				{/if}
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
