<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nobel Prize to Dr. B.R. Ambedkar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
	
   <!-- -->    <link rel="stylesheet" href="css/style.css">  
	
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <!--[endif]-->
   
   
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


   
   
   
    <!-- For Radio Button Start -->
   
   
 <script type="text/javascript" language="JavaScript">
function radioWithText(d) {
    document.getElementById('Peace').style.display = "none";
    document.getElementById('economy').style.display = "none";
    document.getElementById('anthropology').style.display = "none";
    document.getElementById(d).style.display='inline'; 
}
</script>
<!-- For Radio Button End -->


   
</head>
<body >

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Nobel Prize to Dr. B.R. Ambedkar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				    <li>
                        <a href="index.php">Home</a>
                    </li>
					 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dr.Ambedkar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Education</a>
                            </li>
                            <li>
                                <a href="sidebar.php">Achievements</a>
                            </li>
							 <li>
                                <a href="sidebar.php">Work</a>
                            </li>

                        </ul>
						
                    </li>					
					
					
					
					
                    <li>
                        <a href="about.php">Our Mission</a>
                    </li>
                  <!--  <li>
                        <a href="services.php">Services</a>
                    </li> -->
                    <li> 
                        <a href="contact.php">Contact us</a>
                    </li>

					
					
					<!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
					
					<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					  {if empty({$smarty.session.EMAIIL_ID})}
						<i class="fa fa-user fa-fw"></i>Login to Create Petition<i class="fa fa-caret-down"></i>
						<ul class="dropdown-menu dropdown-user">
                        <li><a href="login.php"><i class="fa fa-user fa-fw"></i>Login</a>
                        </li>
						</ul>	
					  
					  {else}
					  <i class="fa fa-user fa-fw"></i>{$smarty.session.EMAIIL_ID}<i class="fa fa-caret-down"></i>
					  <ul class="dropdown-menu dropdown-user">
                      </ul>
				
                    </a>
                    
                    <!-- /.dropdown-user -->
                </li>

					<a class="btn btn-primary btn-lg" href="createpetition.php" role="button">Create Petition</a>
                </ul>
			    {/if}
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<link rel="stylesheet" href="css/login.css">  
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
  
		{if ($is_userregister == 1)}	
		<div class="alert alert-warning">
		<strong>User Already Registered! Please login here.</strong> 
		</div>
		{elseif ($is_userregister == 2)}
		<div class="alert alert-success">
		<strong>User Register Successfully!</strong> 
		</div>
		{else}
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
