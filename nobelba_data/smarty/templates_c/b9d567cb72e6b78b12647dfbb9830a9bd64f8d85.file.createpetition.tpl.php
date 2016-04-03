<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-02 16:32:09
         compiled from "\wamp\www\banp\nobelba_data\Smarty\templates\createpetition.tpl" */ ?>
<?php /*%%SmartyHeaderCode:878056ff812d1407a5-80328300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d567cb72e6b78b12647dfbb9830a9bd64f8d85' => 
    array (
      0 => '\\wamp\\www\\banp\\nobelba_data\\Smarty\\templates\\createpetition.tpl',
      1 => 1459607503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '878056ff812d1407a5-80328300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56ff812d2ceef2_83900735',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ff812d2ceef2_83900735')) {function content_56ff812d2ceef2_83900735($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nobel Prize to Dr. B.R. Ambedkar</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
	
   <!-- -->    <link rel="stylesheet" href="css/style.css">  
	
<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
       <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
   <!--[endif]-->

   

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"><?php echo '</script'; ?>
>
   
    <!-- For Radio Button Start -->
   
   
 <?php echo '<script'; ?>
 type="text/javascript" language="JavaScript">
function radioWithText(d) {
    document.getElementById('Peace').style.display = "none";
    document.getElementById('economy').style.display = "none";
    document.getElementById('anthropology').style.display = "none";
    document.getElementById(d).style.display='inline'; 
}
<?php echo '</script'; ?>
>
<!-- For Radio Button End -->

<!-- Form Validation Starts -->

<!-- Form Validation End -->
 <?php echo '<script'; ?>
 type="text/javascript">
 $( document ).ready(function(){

$("#a1").click(function(){
    //window.alert('アラートの表示');
    //$(".nav-tabs a[href='#createNomination']").tabs("shown")
	//$('.nav-tabs a[href="#createNomination"]').tab('show');
	//$('.nav-tabs > .active').next('li').find('a').trigger('click');
});

})
  
 <?php echo '</script'; ?>
>



 <!--For Country -->
<?php echo '<script'; ?>
 src="js/location.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
$(document).ready(function() {
	$("#countries").msDropdown();
})
<?php echo '</script'; ?>
>



 
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
					<?php ob_start();?><?php echo $_SESSION['EMAIIL_ID'];?>
<?php $_tmp1=ob_get_clean();?><?php if (empty($_tmp1)) {?>
					<i class="fa"></i>Login<i class="fa fa-caret-down"></i>
					<?php } else { ?>
					<i class="fa fa-user fa-fw"></i><?php echo $_SESSION['EMAIIL_ID'];?>
<i class="fa fa-caret-down"></i>
					<ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					<?php }?>
                    </a>
                    
                    <!-- /.dropdown-user -->
                </li>

				<!--	<a class="btn btn-primary btn-lg" href="createpetition.php" role="button">Create Petition</a> -->
                </ul>
				
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>




    <div class="space-bottom"></div>
   	  
	  </br>  </br>  </br>  </br>
	
	
	
	
	<div class="container tabs-wrap">     <!-- Start tabs-wrap -->        
	<ul id="myTab" class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
	<a href="#intstruction" aria-controls="intstruction" role="tab" data-toggle="tab" aria-expanded="true">Terms of use </a></li>
    <li><a href="#createNomination" aria-controls="createNomination" role="tab" data-toggle="tab" aria-expanded="false">Create Nomination </a></li>
    <li><a href="#confirmNomination" aria-controls="confirmNomination" role="tab" data-toggle="tab" aria-expanded="false">Confirm Nomination</a></li>
	<li><a href="#thanku" aria-controls="thanku" role="tab" data-toggle="tab" aria-expanded="false">Thank You</a></li>
    </ul>
	
	<div class="tab-content">      <!-- Start tab-content -->        
	<!-- Start intstruction -->   
	
	<div role="tabpanel" class="tab-pane fade in active" id="intstruction">
     
	<div class="form-group">
	<label class="col-xs-3 control-label">Terms of use</label>
	<div class="col-xs-12"> 
	<div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;"> 
	<p>Lorem ipsum dolor sit amet, veniam numquam has te. No suas nonumes recusabo mea, est ut graeci definitiones.
	His ne melius vituperata scriptorem, cum paulo copiosae conclusionemque at.
	Facer inermis ius in, ad brute nominati referrentur vis. Dicat erant sit ex. 
	Phaedrum imperdiet scribentur vix no, ad latine similique forensibus vel.</p> 
	<p>Dolore populo vivendum vis eu, mei quaestio liberavisse ex. Electram necessitatibus ut vel, 
	quo at probatus oportere, molestie conclusionemque pri cu. Brute augue tincidunt vim id,
	ne munere fierent rationibus mei. Ut pro volutpat praesent qualisque, an iisque scripta intellegebat eam.</p>
	<p>Mea ea nonumy labores lobortis, duo quaestio antiopam inimicus et. Ea natum solet iisque quo, prodesset mnesarchum ne vim. 
	Sonet detraxit temporibus no has. Omnium blandit in vim, mea at omnium oblique.</p> <p>Eum ea quidam oportere imperdiet, 
	facer oportere vituperatoribus eu vix, mea ei iisque legendos hendrerit. Blandit comprehensam eu his, ad eros veniam ridens eum. 
	Id odio lobortis elaboraret pro. Vix te fabulas partiendo.</p> <p>Natum oportere et qui, vis graeco tincidunt instructior an,
	autem elitr noster per et. Mea eu mundi qualisque. Quo nemore nusquam vituperata et, mea ut abhorreant deseruisse, cu nostrud postulant
	dissentias qui. Postea tincidunt vel eu.</p> <p>Ad eos alia inermis nominavi, eum nibh docendi definitionem no. Ius eu stet mucius nonumes, 
	no mea facilis philosophia necessitatibus. Te eam vidit iisque legendos, vero meliore deserunt ius ea. An qui inimicus inciderint.</p> 
	</div> 
	</div> 
	</div> 
  <div class="form-group">
  <div class="col-xs-12"> 
  <div class="checkbox"> 
  <label> <input type="checkbox" name="agree" id="agree" value="agree" /> Agree with the terms and conditions </label>
  </div> 
  </div> 
  </div>
  
  
  </br>
  
<button  class="btn btn-primary continue" id="btnnext" onClick="disp()" value="value" disabled>Next</button>
<a class="btn next" id="a1">Continue</a>
  <!--  <a class="btn btn-primary continue" >Next</a> --> 
	
  </div>   
  <!-- End intstruction --> 
  
  
  
  
  <!-- Start Create Nomination -->   
  
  
    <div role="tabpanel" class="tab-pane fade" id="createNomination">
  
    </br> </br> </br> </br>
   
  
      <div class="col-xs-10 col-md-offset-1">
      <div class="col-md-12 " >
	  
	  
	  
	  
			<div class="row">
				<div class="col-sm-6">
				  		
					<div class="form-group">
								<label class="control-label"> First Name:</label>
								<div class="input-group">
								<input type="text" class="form-control" id="f_name" name="f_name"  placeholder="Enter First Name" required>
								<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
					</div>
				</div>
		 	</div>
				
				<div class="col-sm-6">
					<div class="form-group">	
						<div class="control-label">
								<label for="Inputver"> Last Name:</label>
							<div class="input-group">
								<input type="text" class="form-control" id="l_name" name="l_name"  placeholder="Enter Last Name" required>
								<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
							</div>
						</div>
					</div>
	
				</div>
			</div>
	  
	  
	  
	  
      	
	
	
	<div class="row">
				<div class="col-sm-6">
				  			 
					<div class="form-group">
						<div class="control-label">
								<label for="Inputver">Email Address:</label>
							<div class="input-group">
								<input  type="text" class="form-control" id="email_id" name="email_id" value='' placeholder="Enter Email Address" required>
								<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6">
					<div class="form-group">
							<label class="control-label"> Phone No:</label>
						<div class="input-group">
							<input type="text" class="form-control" id="ph_no" name="ph_no" value=''  placeholder="Enter Phone No" required>
							<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
						</div>
					</div>
				</div>
	</div>
	
	
	
	
	
	
	
	<div class="row">
				<div class="col-sm-6">
				  			 
					<div class="form-group">
							<label class="control-label"> Country:</label>
						<div class="input-group">
							<select name="country" class="form-control countries" id="countryId" required="required">
								<option value="">Select Country</option>
							</select>
								<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
						</div>
					</div>
	
				</div>
				
				<div class="col-sm-6">
					<div class="form-group">
							<label class="control-label"> State:</label>
						<div class="input-group">
								<select name="state" class="form-control states" id="stateId" required="required">
									<option value="">Select State</option>
								</select>
								<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
						</div>
					</div>
				</div>
	</div>
	
	
	
	
	
	
<div class="row">
				<div class="col-sm-6">
				  			 
					<div class="form-group">
							<label class="control-label"> City:</label>
						<div class="input-group">
								<select name="city" class="form-control cities" id="cityId" required="required">
									<option value="">Select City</option>
								</select>
								<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6">
					
					<div class="form-group">
							<label class="control-label"> Qualification:</label>
						<div class="input-group">
							<input type="text" class="form-control" id="quali_name" name="quali_name"  placeholder="Enter Qualification" required>
							<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
						</div>
					</div>
				</div>
</div>





<div class="row">
				<div class="col-sm-4">
				  	<div class="radio-inline">
						<label>
								<input name="radioGroup" id="radio1" value="option1" type="radio" onclick="javascript:radioWithText('Peace')" checked="checked" >For Peace
						</label>
					</div>		 
					
				</div>
				
				<div class="col-sm-4">
					<div class="radio-inline">
						<label >
							<input name="radioGroup" id="radio1" value="option2"  type="radio" onclick="javascript:radioWithText('economy')" unchecked>For economy
						</label>
					</div>	
				</div>
				<div class="col-sm-4">
					<div class="radio-inline">
						<label >
							<input name="radioGroup" id="radio1" value="option3" type="radio" onclick="javascript:radioWithText('anthropology')" unchecked >For anthropology
						</label>
					</div>	
					
				</div>
</div>


		 


</br>




<textarea class="form-control" rows="13" id="Peace" style="display:visible;" disabled>


Norwegian Nobel Committee
HenrikIbsen Gate 51, N-o255
Oslo, Norway

Dear Nobel Committee Members,

					I am writing to nominate Dr. B. R. Ambedkar For the Nobel Prize in anthropology, He was the principal architect of the Constitution of India. He was an Indian jurist, economist, politician and social reformer who inspired the Modern Buddhist Movement and campaigned against social discrimination against Untouchables (Dalits), while also supporting the rights of women and labour. Ambedkar was a prolific student, earning a law degree and various doctorates from Columbia University and the London School of Economics, and gained a reputation as a scholar for his research in law, economics and political science. In his early career he was an economist, professor, and lawyer. His later life was marked by his political activities; he became involved in campaigning and negotiations for India's independence, publishing journals advocating political rights and social freedom for Dalits, and contributing significantly to the establishment of the state of India. In 1956 he converted to Buddhism, initiating mass conversions of Dalits.

					In 1990, the Bharat Ratna, India's highest civilian award, was posthumously conferred upon Ambedkar. Ambedkar's legacy includes numerous memorials and depictions in popular culture.

					I respectfully nominate Dr. B. R. Ambedkar, for the 2017 Nobel Prize in anthropology. Because of his impact on a india threatened by the corrupting power of untouchability, he is worthy candidates for this coveted and cherished prize. 
					
Sincerely,
</textarea>




<textarea class="form-control" rows="13" id="economy" style="display:none;" disabled>


Norwegian Nobel Committee
HenrikIbsen Gate 51, N-o255
Oslo, Norway

Dear Nobel Committee Members,

					I am writing to nominate Dr. B. R. Ambedkar For the Nobel Prize in economy, He was the principal architect of the Constitution of India. He was an Indian jurist, economist, politician and social reformer who inspired the Modern Buddhist Movement and campaigned against social discrimination against Untouchables (Dalits), while also supporting the rights of women and labour. Ambedkar was a prolific student, earning a law degree and various doctorates from Columbia University and the London School of Economics, and gained a reputation as a scholar for his research in law, economics and political science. In his early career he was an economist, professor, and lawyer. His later life was marked by his political activities; he became involved in campaigning and negotiations for India's independence, publishing journals advocating political rights and social freedom for Dalits, and contributing significantly to the establishment of the state of India. In 1956 he converted to Buddhism, initiating mass conversions of Dalits.

					In 1990, the Bharat Ratna, India's highest civilian award, was posthumously conferred upon Ambedkar. Ambedkar's legacy includes numerous memorials and depictions in popular culture.

					I respectfully nominate Dr. B. R. Ambedkar, for the 2017 Nobel Economy Prize. Because of his impact on a india threatened by the corrupting power of untouchability, he is worthy candidates for this coveted and cherished prize. 
						
Sincerely,
</textarea>




<textarea class="form-control" rows="13" id="anthropology" style="display:none;" disabled>

Dear Nobel Committee

					My name is Archit Wankhede and i want to nominate Mr. Dr. Ambedkar for Nobel Prize For his work in  Anthropology. I request to  take further step to owner him with the prize due to his work done in the field.



Thank You!
</textarea>





 
  

		
		
  </br></br>

    
		
  	</div>
	
         <div class="form-actions">
			 <a class="btn btn-primary back">Go Back</a>
			 <a class="btn btn-primary petition">Next</a> 
			 <button class="btn btn-default petition">Validate</button>
        </div>

  

  </div>

  

  </div>
  
  
  
  <!-- End Create Nomination -->   
  
  
  
  
 <!-- Start Confirm Nomination -->   
 
  <div role="tabpanel" class="tab-pane fade" id="confirmNomination">
  
  
  <br>
<div class="col-xs-12"> 
	
<p>Norwegian Nobel Committee</p><br>
<p>HenrikIbsen Gate 51, N-o255</p><br>
<p>Oslo, Norway</p><br>

<p>Dear Nobel Committee Members,</p><br>

					<p>I am writing to nominate Dr. B. R. Ambedkar For the Nobel Prize in economy,
					He was the principal architect of the Constitution of India.
					He was an Indian jurist, economist, politician and social reformer who 
					inspired the Modern Buddhist Movement and campaigned against social 
					discrimination against Untouchables (Dalits), while also supporting the rights of women and labour.
					Ambedkar was a prolific student, earning a law degree and various doctorates from Columbia University and
					the London School of Economics, and gained a reputation as a scholar for his research in law, economics and 
					political science. In his early career he was an economist, professor, and lawyer. His later life was marked by
					his political activities; he became involved in campaigning and negotiations for India's independence,
					publishing journals advocating political rights and social freedom for Dalits, and contributing significantly 
					to the establishment of the state of India. In 1956 he converted to Buddhism, initiating mass conversions of Dalits.</p><br>

					<p>In 1990, the Bharat Ratna, India's highest civilian award, was posthumously conferred upon Ambedkar.
					Ambedkar's legacy includes numerous memorials and depictions in popular culture.</p><br>

					<p>I respectfully nominate Dr. B. R. Ambedkar, for the 2017 Nobel Economy Prize.
					Because of his impact on a india threatened by the corrupting power of untouchability, 
					he is worthy candidates for this coveted and cherished prize. </p>
<p>	Sign	</p><br>	
<p>Sincerely,</p><br>
<p>Name</p><br>
	</div> 
  
  
  
  
    
	
    <a class="btn btn-primary back">Go Back</a>
    <a class="btn btn-primary continue">Next</a>
  </div>
 
 
 <!-- End Confirm Nomination --> 

  
	 <!-- Start ThankYou -->   
	
	<div role="tabpanel" class="tab-pane fade" id="thanku">
  <br>
   
  <h3>THANK YOU FOR SIGNING THE PETITION!</h3><br>
 

<p>Thank you for signing the petition to implement the Universal Declaration of Human Rights. Continue spreading the word of Human Rights.</p>
<br>
    <a class="btn btn-primary back">Go Back</a>
	 
   <a href="login.php" class="btn btn-primary" role="button" >Click Here To Login</a>
	
  </div>
	<!-- End  ThankYou --> 
	
	
	
	
	
	
	
	
	
	</div> <!-- End tab-content -->
	</div> <!-- End tabs-wrap -->

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
  
   
   
    <div class="space-bottom"></div>
    <!--END HOME SECTION -->
    <!--FOOTER SECTION -->

  <!--For CheckBox -->

  
  
 <?php echo '<script'; ?>
>
$("#agree").click(function() {
 $("#btnnext").attr("disabled", !this.checked);
});
<?php echo '</script'; ?>
>

  
<?php echo '<script'; ?>
>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
<?php echo '</script'; ?>
>
  
  
 


   
</body>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</html>
<?php }} ?>
