{include file="header.tpl"}
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
