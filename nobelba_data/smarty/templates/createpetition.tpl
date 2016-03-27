	





{include file="header.tpl"}


    <div class="space-bottom"></div>
   	  
	  </br>  </br>  </br>  </br>
	<div class="container">

<div class="container tabs-wrap">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#billing" aria-controls="billing" role="tab" data-toggle="tab" aria-expanded="true">Billing Address</a>
    </li>
    <li>
      <a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab" aria-expanded="false">Delivery Address</a>
    </li>
    <li>
      <a href="#review" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Review &amp; Payment</a>
    </li>
  </ul>
  </div>
  
  
<div class="tab-content">

  <div role="tabpanel" class="tab-pane active" id="billing">
    <h3 class="">Billing Address</h3>
    <p>Billing Address Form</p>
    <a class="btn btn-primary continue">Continue</a>
  </div>

  <div role="tabpanel" class="tab-pane" id="shipping">
    <h3 class="">Shipping Address</h3>
    <p>Shipping Address Form</p>
    <a class="btn btn-primary back">Go Back</a>
    <a class="btn btn-primary continue">Continue</a>
  </div>

  <div role="tabpanel" class="tab-pane" id="review">
    <h3 class="">Review &amp; Place Order</h3>
    <p>Review &amp; Payment Tab</p>
    <a class="btn btn-primary back">Go Back</a>
    <a class="btn btn-primary continue">Place Order</a>
  </div>
</div>


            <div id="push"></div>
          
  
  
    
  
  
</div>
	  
     
       
        
   

       
   
   
   
   
   
   
   
   
   

   
  
  
   
   
    <div class="space-bottom"></div>
    <!--END HOME SECTION -->
    <!--FOOTER SECTION -->

     {include file="footer.tpl"}

  
<script>
$('.continue').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});
$('.back').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>


  
</body>
</html>
