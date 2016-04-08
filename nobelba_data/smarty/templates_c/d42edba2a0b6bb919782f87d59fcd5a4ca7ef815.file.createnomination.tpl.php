<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-08 09:31:33
         compiled from "\wamp\www\banp\nobelba_data\Smarty\templates\createnomination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302285700b481003169-96525407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd42edba2a0b6bb919782f87d59fcd5a4ca7ef815' => 
    array (
      0 => '\\wamp\\www\\banp\\nobelba_data\\Smarty\\templates\\createnomination.tpl',
      1 => 1460100678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302285700b481003169-96525407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5700b48108bd02_39097749',
  'variables' => 
  array (
    'flgValidation' => 0,
    'email' => 0,
    'phno' => 0,
    'country' => 0,
    'state' => 0,
    'city' => 0,
    'qualifi' => 0,
    'msg' => 0,
    'signpath' => 0,
    'fname' => 0,
    'lname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700b48108bd02_39097749')) {function content_5700b48108bd02_39097749($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nobel Prize to Dr. B.R. Ambedkar</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"><?php echo '</script'; ?>
>
  <!--    <link rel="stylesheet" href="css/style.css">  -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="jSignature/libs/flashcanvas.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="jSignature/libs/jSignature.min.js"><?php echo '</script'; ?>
>
<style>
.alert{
    display: none;
}

.notvalid { color: red; }

.notvalidinput { border-color:red;}

 
</style>
<?php echo '<script'; ?>
 language="javascript"> 
 function loadValue(){
   var validator = <?php echo $_smarty_tpl->tpl_vars['flgValidation']->value;?>
; 
   if(validator == 1) {
      $('.nav-tabs a[href="#confirmnomination"]').tab('show');
	  var datapair = $('#signature').jSignature("getData","svgbase64");	
	  alert(datapair);
	  $extraarea = $('#signature_confirm')
	  //$extraarea.html('');
	  var i = new Image()
	  //i.src = 'data:' + datapair[0] + ',' + btoa( datapair[1] )
	  //i.src = 'data:' + datapair[0] + ',' + datapair[1]
	  //i.src = 'data:' + datapair.join(",");
	  $extraarea.jSignature("setData", "data:" + datapair.join(",")) 
	  $(i).appendTo($extraarea)
	  
	  
	  // alert(datapair[0]);
	  //  alert(datapair[1]);
	  //$(i).appendTo($('#signature_confirm'))
	  //var datastr="data:" + datapair.join(",");
	  //$("#signature_confirm").jSignature("reset");
	  //alert('should be cleared');
	  //$('#signature_confirm').jSignature("setData", "data:" + datapair.join(","));
	  //var datastr="data:" + datapair.join(",");
	  // alert(datastr);
	  //$('#signature_confirm').val(datastr);
	  //$sigdiv.jSignature("setData", "data:" + datapair.join(",")) 
   }
   
   if(validator == 2) {
      $('.nav-tabs a[href="#thankyou"]').tab('show');
	 
	  
	  
	  
	  
   }
   
}

function unloadBye(){
  alert("Bye!");
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(document).ready(function() {
	$('#signature').jSignature({ lineWidth: 1, width: 700, height: 200,'UndoButton':true });
	//$('#signature_confirm').jSignature({ lineWidth: 1, width: 700, height: 200});
})
<?php echo '</script'; ?>
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

</head>
<body onLoad="loadValue()" onUnload="unloadBye()">

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


<form name="myform" method="POST" action="createpetition.php">
<div class="container">
  <h2> </h2>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#terms">Terms of use</a></li>
    <li><a href="#createnomination">Create Nomination</a></li>
    <li><a href="#confirmnomination">Confirm Nomination</a></li>
    <li><a href="#thankyou">Thank You</a></li>
  </ul>
  
   <div class="tab-content">
  
    <div id="terms" class="tab-pane fade in active">
	
      <h3>Terms of use</h3>
      	<div class="form-group">
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
		<br><br>
		<a class="btn btn-primary" value="value" id="a1" disabled>Continue</a>
	  
    </div>
  
    <div id="createnomination" class="tab-pane fade">
      <h3>Create Nomination</h3>
		  <div class="col-xs-10 col-md-offset-1">
		  <div class="col-md-12 " >
	  	  <div class="row">
        
		<div class="alert alert-danger alert-dismissable"  id="cert-error">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Input Error!</Strong> Please Enter All Mandatory Fields
        </div>
		
		<div class="alert alert-danger alert-dismissable"  id="cert-error1">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Last Name!</Strong> Please Enter All Mandatory Fields
        </div>

		  

		  <div class="col-sm-6">

			<div class="form-group">
				<label for="f_name"  class="control-label"> First Name:</label>
				<div class="input-group">
				<input type="text" class="form-control"  id="f_name" name="f_name"  placeholder="Enter First Name" required>
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
				<div class="help-block with-errors"></div>
			    </div>
			</div>
		  </div>
		  
		<div class="col-sm-6">

			<div class="form-group">
				<label for="l_name"  class="control-label"> Last Name:</label>
				<div class="input-group">
				<input type="text" class="form-control" id="l_name" name="l_name"  placeholder="Enter Last Name" required>
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
				<div class="help-block with-errors"></div>
			    </div>
			</div>
		  </div>
		<div class="col-sm-6">
				  			 
					<div class="form-group">
						<div class="control-label">
								<label for="Inputver">Email Address:</label>
							<div class="input-group">
								<input  type="text" class="form-control" id="email_id" name="email_id" value='<?php echo $_SESSION['EMAIIL_ID'];?>
'  placeholder="Enter Email Address" required>
								<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
							<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6">
					<div class="form-group">
							<label class="control-label"> Phone No:</label>
						<div class="input-group">
							<input type="text" class="form-control" id="ph_no" name="ph_no" value='<?php echo $_SESSION['PH_NO'];?>
'  placeholder="Enter Phone No" required>
							<span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
						<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
		
		<div class="col-sm-6">
				  			 
					<div class="form-group">
							<label class="control-label"> Country:</label>
						<div class="input-group">
							<select name="country" class="form-control countries" id="countryId" required="required">
								<option value="">Select Country</option>
							</select>
								<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
						<div class="help-block with-errors"></div>
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
						<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				
		<div class="col-sm-6">
				  			 
					<div class="form-group">
							<label class="control-label"> City:</label>
						<div class="input-group">
								<select name="city" class="form-control cities" id="cityId" required="required">
									<option value="">Select City</option>
								</select>
								<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
						<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6">
					
					<div class="form-group">
							<label class="control-label"> Qualification:</label>
						<div class="input-group">
							<input type="text" class="form-control" id="quali_name" name="quali_name"  placeholder="Enter Qualification" required>
							<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
						<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
         
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
		
		
	
<textarea class="form-control" rows="13" id="Peace" name="comment" style="display:visible;" >
		

Norwegian Nobel Committee
HenrikIbsen Gate 51, N-o255
Oslo, Norway

Dear Nobel Committee Members,

					I am writing to nominate Dr. B. R. Ambedkar For the Nobel Prize in anthropology, He was the principal architect of the Constitution of India. He was an Indian jurist, economist, politician and social reformer who inspired the Modern Buddhist Movement and campaigned against social discrimination against Untouchables (Dalits), while also supporting the rights of women and labour. Ambedkar was a prolific student, earning a law degree and various doctorates from Columbia University and the London School of Economics, and gained a reputation as a scholar for his research in law, economics and political science. In his early career he was an economist, professor, and lawyer. His later life was marked by his political activities; he became involved in campaigning and negotiations for India's independence, publishing journals advocating political rights and social freedom for Dalits, and contributing significantly to the establishment of the state of India. In 1956 he converted to Buddhism, initiating mass conversions of Dalits.

					In 1990, the Bharat Ratna, India's highest civilian award, was posthumously conferred upon Ambedkar. Ambedkar's legacy includes numerous memorials and depictions in popular culture.

					I respectfully nominate Dr. B. R. Ambedkar, for the 2017 Nobel Prize in anthropology. Because of his impact on a india threatened by the corrupting power of untouchability, he is worthy candidates for this coveted and cherished prize. 
					
Sincerely,
</textarea>




<textarea class="form-control" rows="13" name="comment" id="economy" style="display:none;" >


Norwegian Nobel Committee
HenrikIbsen Gate 51, N-o255
Oslo, Norway

Dear Nobel Committee Members,

					I am writing to nominate Dr. B. R. Ambedkar For the Nobel Prize in economy, He was the principal architect of the Constitution of India. He was an Indian jurist, economist, politician and social reformer who inspired the Modern Buddhist Movement and campaigned against social discrimination against Untouchables (Dalits), while also supporting the rights of women and labour. Ambedkar was a prolific student, earning a law degree and various doctorates from Columbia University and the London School of Economics, and gained a reputation as a scholar for his research in law, economics and political science. In his early career he was an economist, professor, and lawyer. His later life was marked by his political activities; he became involved in campaigning and negotiations for India's independence, publishing journals advocating political rights and social freedom for Dalits, and contributing significantly to the establishment of the state of India. In 1956 he converted to Buddhism, initiating mass conversions of Dalits.

					In 1990, the Bharat Ratna, India's highest civilian award, was posthumously conferred upon Ambedkar. Ambedkar's legacy includes numerous memorials and depictions in popular culture.

					I respectfully nominate Dr. B. R. Ambedkar, for the 2017 Nobel Economy Prize. Because of his impact on a india threatened by the corrupting power of untouchability, he is worthy candidates for this coveted and cherished prize. 
						
Sincerely,
</textarea>




<textarea class="form-control" rows="13" name="comment" id="anthropology" style="display:none;">

Dear Nobel Committee

					My name is Archit Wankhede and i want to nominate Mr. Dr. Ambedkar for Nobel Prize For his work in  Anthropology. I request to  take further step to owner him with the prize due to his work done in the field.



Thank You!
</textarea>




		  

		</div>
	<br>	
	  <label class="control-label"> Sign Here:</label>	 
	  <div id="signature"  style="color:#0D12E0;background-color:#F2DEDE"></div>  
	  <input type="hidden" name="hdnSignature" id="hdnSignature" />

	  
	  </div> 
	  </br> </br> <div class="space-bottom"></div>
	  <input type="hidden" name="validate" id="validate">
	  <a class="btn btn-primary" id="b1">Back</a>
	  <input class="btn btn-primary" type="button" onclick="check();" value="Validate" /> <br><br>
	  <div id="my-div">  <a class="btn btn-success"  id="a2">Confirm Nomination</a> </div>
	 
     </div>
	
	</div>

    <div id="confirmnomination" class="tab-pane fade">
      <h3>Confirm Nomination</h3>
	  
	  <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<br>
	  <?php echo $_smarty_tpl->tpl_vars['phno']->value;?>
 <br>
	  <?php echo $_smarty_tpl->tpl_vars['country']->value;?>
<br>
	  <?php echo $_smarty_tpl->tpl_vars['state']->value;?>
<br>
	  <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
<br>
	  <?php echo $_smarty_tpl->tpl_vars['qualifi']->value;?>
<br>
	  <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<br>

	  <img src="<?php echo $_smarty_tpl->tpl_vars['signpath']->value;?>
" height="200" width="300"/><br>
	  <?php echo $_smarty_tpl->tpl_vars['fname']->value;?>

	  <?php echo $_smarty_tpl->tpl_vars['lname']->value;?>
<br>
	 
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
	  
	  	  

	  <div id="signature_confirm"></div> 
	  
	  
	  <a class="btn next" id="b2">Back</a>
	  
	   <a class="btn btn-success" id="a3">Continue</a> 
    </div>
    <div id="thankyou" class="tab-pane fade">
      <h3>Thank You</h3>
	  
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	   <a class="btn next" id="b3">Back</a>
    </div>
  </div>
</div>
</form>

<?php echo '<script'; ?>
>
function check()
  {

 
   //window.alert('アラートの表示');
		firstname = document.myform.f_name.value;
		lastname = document.myform.l_name.value;
		emailid = document.myform.email_id.value;
		phno = document.myform.ph_no.value;
		country = document.myform.country.value;
		state = document.myform.state.value;
		city = document.myform.city.value;
		qulification = document.myform.quali_name.value;
		signatureh = document.myform.hdnSignature.value;
		if(!firstname) {
		    $(".alert").addClass("in");
            $("#cert-error").show();
			//$('.alert').show();
			$("#my-div").hide();
			return;
		}
		else if(!lastname) {
		 $(".alert").addClass("in");
            $("#cert-error1").show();
			//$('.alert').show();
			$("#my-div").hide();
			return;
		}
		else if(!emailid) {
			$('.alert').show();
			$("#my-div").hide();
			return;
		}
		else if(!phno) {
			$('.alert').show();
			$("#my-div").hide();
			return;
		}
		else if(!country) {
			$('.alert').show();
			$("#my-div").hide();
			return;
		}
		else if(!state) {
			$('.alert').show();
			$("#my-div").hide();
			return;
		}
		else if(!city) {
			$('.alert').show();
			$("#my-div").hide();
			return;
		}
		else if(!qulification) {
			$('.alert').show();
			$("#my-div").hide();
			return;
		}

		else {
		$('.alert').hide();
		$("#my-div").show();
		}
}

$(document).ready(function(){

 
$(".nav-tabs a").click(function(){
        //$(this).tab('show');
		//$('.nav-tabs a[href="#menu2"]').tab('show')
		//$('.nav-tabs li:eq(3) a').tab('show')
    });
});
$("#a1").click(function(){
	$('.nav-tabs a[href="#createnomination"]').tab('show');
	$("#my-div").hide(); 
	});
$("#a2").click(function(){
  //$('.nav-tabs a[href="#confirmnomination"]').tab('show');
  var $sigdiv = $("#signature");
  $sigdiv.jSignature();// inits the jSignature widget.
  var datapair = $sigdiv.jSignature("getData", "image");
  $('#hdnSignature').val(datapair[1]);
  document.myform.validate.value = 1;
  document.myform.submit();
});

$("#a3").click(function(){
//	$('.nav-tabs a[href="#thankyou"]').tab('show')
 document.myform.validate.value = 2;
  document.myform.submit();
});
$("#b1").click(function(){
	$('.nav-tabs a[href="#terms"]').tab('show')
	
});
$("#b2").click(function(){
	$('.nav-tabs a[href="#createnomination"]').tab('show')
});
$("#b3").click(function(){
	$('.nav-tabs a[href="#confirmnomination"]').tab('show')
});

$("#agree").click(function() {
 $("#a1").attr("disabled", !this.checked);
});


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
  

</body>
</html>
<?php }} ?>
