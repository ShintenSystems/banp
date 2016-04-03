<!DOCTYPE html>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <!--    <link rel="stylesheet" href="css/style.css">  -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<script type="text/javascript" src="jSignature/libs/flashcanvas.js"></script>
<script src="jSignature/libs/jSignature.min.js"></script>
<style>
.alert{
    display: none;
} 
</style>
<script language="javascript"> 
 function loadValue(){
   var validator = {$flgValidation}; 
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
   
}

function unloadBye(){
  alert("Bye!");
}
</script>

<script>
$(document).ready(function() {
	$('#signature').jSignature({ lineWidth: 1, width: 700, height: 200,'UndoButton':true });
	//$('#signature_confirm').jSignature({ lineWidth: 1, width: 700, height: 200});
})
</script>

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
					{if empty({$smarty.session.EMAIIL_ID})}
					<i class="fa"></i>Login<i class="fa fa-caret-down"></i>
					{else}
					<i class="fa fa-user fa-fw"></i>{$smarty.session.EMAIIL_ID}<i class="fa fa-caret-down"></i>
					<ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					{/if}
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
        <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Input Error!</Strong> Please Enter All Mandatory Fields
        </div>

		  

		  <div class="col-sm-6">

			<div class="form-group">
				<label for="f_name"  class="control-label"> First Name:</label>
				<div class="input-group">
				<input type="text" class="form-control" id="f_name" name="f_name"  placeholder="Enter First Name" required>
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
		  

		</div>

		 
		  <div id="signature" style="color:#0D12E0"></div>  

	
	  </div> 
	  <input type="hidden" name="validate" id="validate">
	  <a class="btn btn-primary" id="b1">Back</a>
	  <input class="btn btn-primary" type="button" onclick="check();" value="Validate" /> <br><br>
	  <div id="my-div">  <a class="btn btn-success"  id="a2">Confirm Nomination</a> </div>
	 
	 
	 
     </div>
	
	</div>

    <div id="confirmnomination" class="tab-pane fade">
      <h3>Confirm Nomination</h3>
	  {$fname}
	  {$lname}
	  	   
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
	  
	  	  

	  <div id="signature_confirm"></div> 
	  
	  
	  
	  
	  
	  <a class="btn next" id="b2">Back</a>
	  
	   <a class="btn next" id="a3">Continue</a> 
    </div>
    <div id="thankyou" class="tab-pane fade">
      <h3>Thank You</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	   <a class="btn next" id="b3">Back</a>
    </div>
  </div>
</div>
</form>

<script>
function check()
  {
   //window.alert('アラートの表示');
		firstname = document.myform.f_name.value;
		lastname = document.myform.l_name.value;
		if(!firstname) {
			$('.alert').show();
			$("#my-div").hide();
			return;
		}
		if(!lastname) {
			$('.alert').show();
			$("#my-div").hide();
			return;
		}
	
		$('.alert').hide();
		//$("#my-validate").hide();
		$("#my-div").show();
		//document.myform.submit();
		
		//Signature 
		//var datapair = $('#signature').jSignature("getData","svgbase64");	
		//alert(datapair);
		//var datastr="data:" + datapair.join(",");
		//$("#signature").jSignature("reset");
		//alert('should be cleared');
		//$("#signature").jSignature("importData",datastr);
}

$(document).ready(function(){

//$("#signature").jSignature();

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
  document.myform.validate.value = 1;
  document.myform.submit();
});

$("#a3").click(function(){
	$('.nav-tabs a[href="#thankyou"]').tab('show')
});
$("#b1").click(function(){
	$('.nav-tabs a[href="#terms"]').tab('show')
	//$($('.my-div').get(0)).show();
	//$("#my-div").show();  
	
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


</script>


</body>
</html>
