<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-27 10:50:00
         compiled from "\wamp\www\banp\nobelba_data\Smarty\templates\createpetition.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2185056f79eb8d3e813-48339938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d567cb72e6b78b12647dfbb9830a9bd64f8d85' => 
    array (
      0 => '\\wamp\\www\\banp\\nobelba_data\\Smarty\\templates\\createpetition.tpl',
      1 => 1459052515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2185056f79eb8d3e813-48339938',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f79eb8d84d20_46675377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f79eb8d84d20_46675377')) {function content_56f79eb8d84d20_46675377($_smarty_tpl) {?>	





<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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


  
</body>
</html>
<?php }} ?>
