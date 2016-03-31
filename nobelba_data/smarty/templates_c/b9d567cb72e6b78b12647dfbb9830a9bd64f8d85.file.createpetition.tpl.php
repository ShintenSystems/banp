<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-31 17:06:16
         compiled from "\wamp\www\banp\nobelba_data\Smarty\templates\createpetition.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2185056f79eb8d3e813-48339938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d567cb72e6b78b12647dfbb9830a9bd64f8d85' => 
    array (
      0 => '\\wamp\\www\\banp\\nobelba_data\\Smarty\\templates\\createpetition.tpl',
      1 => 1459435972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2185056f79eb8d3e813-48339938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f79eb8d84d20_46675377',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f79eb8d84d20_46675377')) {function content_56f79eb8d84d20_46675377($_smarty_tpl) {?>	





<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="space-bottom"></div>
   	  
	  </br>  </br>  </br>  </br>
	
	
	
	
	
	<div class="container tabs-wrap">     <!-- Start tabs-wrap -->        
	<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#intstruction" aria-controls="intstruction" role="tab" data-toggle="tab" aria-expanded="true">Intstruction </a>
    </li>
    <li>
      <a href="#createNomination" aria-controls="createNomination" role="tab" data-toggle="tab" aria-expanded="false">Create Nomination </a>
    </li>
    <li>
      <a href="#confirmNomination" aria-controls="confirmNomination" role="tab" data-toggle="tab" aria-expanded="false">Confirm Nomination</a>
    </li>
	<li>
      <a href="#thanku" aria-controls="thanku" role="tab" data-toggle="tab" aria-expanded="false">Thank You</a>
    </li>
  </ul>
  
  
  <div class="tab-content">      <!-- Start tab-content -->        
	
	
<!-- Start intstruction -->   
	
	<div role="tabpanel" class="tab-pane active" id="intstruction">
     
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
  
<button  class="btn btn-primary continue" id="btnnext" value="value" disabled>Next</button>

  <!--  <a class="btn btn-primary continue" >Next</a> --> 
	
  </div>   
  <!-- End intstruction --> 
  
  
  
  
  <!-- Start Create Nomination -->   
  
  
    <div role="tabpanel" class="tab-pane" id="createNomination">
  
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
	
 
 <a class="btn btn-primary back">Go Back</a>
   <a class="btn btn-primary continue">Next</a>
  

  </div>

  

  </div>
  
  
  
  <!-- End Create Nomination -->   
  
  
  
  
 <!-- Start Confirm Nomination -->   
 
  <div role="tabpanel" class="tab-pane" id="confirmNomination">
  
  
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
	
	<div role="tabpanel" class="tab-pane" id="thanku">
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

     <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  
<?php echo '<script'; ?>
>
$('.continue').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});
$('.back').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
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
  
  
  
  
  
  
 <!--For CheckBox -->
  <?php echo '<script'; ?>
>
$("#agree").click(function() {
 $("#btnnext").attr("disabled", !this.checked);
});
<?php echo '</script'; ?>
>
  
  
 


   
</body>
</html>
<?php }} ?>
