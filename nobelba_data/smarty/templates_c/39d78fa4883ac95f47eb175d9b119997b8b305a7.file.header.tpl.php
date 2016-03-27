<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-13 17:22:10
         compiled from "\wamp\www\DemoRest_data\Smarty\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1063755fa72eed2d1d1-66932423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39d78fa4883ac95f47eb175d9b119997b8b305a7' => 
    array (
      0 => '\\wamp\\www\\DemoRest_data\\Smarty\\templates\\header.tpl',
      1 => 1455379916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1063755fa72eed2d1d1-66932423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55fa72eed34ed0_80842230',
  'variables' => 
  array (
    'uservend_json' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa72eed34ed0_80842230')) {function content_55fa72eed34ed0_80842230($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="description" content="" />
<meta name="keywords" content="" />


<?php ob_start();?><?php echo $_SESSION['THEME'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='Blue') {?>
<link rel="stylesheet" href="css/common.css" type="text/css" />
<?php }?>
<?php ob_start();?><?php echo $_SESSION['THEME'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='Green') {?>
<link rel="stylesheet" href="css/common_green.css" type="text/css" />
<?php }?>
<?php ob_start();?><?php echo $_SESSION['THEME'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=='Brown') {?>
<link rel="stylesheet" href="css/common_brown.css" type="text/css" />
<?php }?>
	
<!--<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/common.js"><?php echo '</script'; ?>
>
<title><?php echo $_SESSION['RESTNAME'];?>
</title>
<!--[if lt IE 7]-->
<?php echo '<script'; ?>
 src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"><?php echo '</script'; ?>
>

<!--For Time Zone -->

<?php echo '<script'; ?>
 src="http://momentjs.com/downloads/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://momentjs.com/downloads/moment-timezone-with-data.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://bitbucket.org/pellepim/jstimezonedetect/downloads/jstz-1.0.4.min.js"><?php echo '</script'; ?>
>

<![endif]-->

<?php echo '<script'; ?>
 type="text/javascript">

function functionavtaar1() { 
var checkstatus = document.frmSetup.avtaar1.checked; 

	if(checkstatus) {
		document.frmSetup.avtaar2.checked = false;
	
		document.frmSetup.avtaar3.checked = false;

	}

}

function functionavtaar2() { 
var checkstatus = document.frmSetup.avtaar2.checked; 

	if(checkstatus) {
		document.frmSetup.avtaar1.checked = false;
	
		document.frmSetup.avtaar3.checked = false;

	}

}

function functionavtaar3() { 
var checkstatus = document.frmSetup.avtaar3.checked; 

	if(checkstatus) {
		document.frmSetup.avtaar1.checked = false;
	
		document.frmSetup.avtaar2.checked = false;

	}

}

<?php echo '</script'; ?>
>





<?php echo '<script'; ?>
>
function get_user_timzone() {
var tz = jstz.determine();
document.frmReport.usertmz.value = tz.name();
}
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript">

function get_vendor_id(vendor_type) {
    
	
	
	if ( document.getElementById('ventype').value == 1 ){
<!-- document.getElementById('payreceived').value = ''; -->
document.getElementById('payreceived').disabled = true}
else if (document.getElementById('ventype').value == 2 ){
document.getElementById('payreceived').disabled = true;}
else if (document.getElementById('ventype').value == 3 ){
document.getElementById('payreceived').disabled = false;}

	//Declaring Data Array 
	var vendData = [];
	var vendDataParsed = [];
	
	//Parse JSON Data
	vendDataParsed = JSON.parse(' <?php echo $_smarty_tpl->tpl_vars['uservend_json']->value;?>
');

	//Filter JSON Object 
	vendData =$(vendDataParsed).filter(function (i,n){return  n.vendertype == vendor_type});	
	
	var vendorcombo = document.venderform.vendor_id_select;
	 for(i =0;i <vendData.length; i++) {
	  vendorcombo[i] = new Option(vendData[i].VendorName,vendData[i].VendorName);
	 }
	
	
}
	
<?php echo '</script'; ?>
>





</head>



 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

<div id="top">
<div id="topright">
<ul>
       	 <li>
                <a href="#"> <img src=<?php echo $_SESSION['RESTAVTAR'];?>
 />Hi <?php echo $_SESSION['FIRST_NAME'];?>
 <span class="arrow">&#9660;</span></a>
 
               <ul class="dropdown">
            <li><a href="logout.php">Logout</a> </li>
            
        </ul>
            </li>
	      </ul>
		</div>
		
		 <div id="header">
  <div id="head">
<table cellpadding="1" cellspacing="1" style="width:400px;">
<tbody>
<tr  style= "border-collapse">
		<td> <a href="admin.php"><img src=<?php echo $_SESSION['RESTLOGO'];?>
 /></a></td>
			<td> <h1><a href="admin.php"><?php echo $_SESSION['RESTNAME'];?>
</a></h1> </td>
		</tr>
		<tr>
		 <td colspan="2"> <?php echo $_SESSION['RESTTAGLINE'];?>
</div></td></br>
		</tr>
		
		</tbody>
          </table>
                </div> 
   
           </div>    
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
  
   <div id="menu">
      <ul>
         <li><a href="admin.php?operation=0" class="active">Home</a></li>
         <li><a href="vendor_transaction.php?operation=0">Daily Transaction</a></li>
         <li><a href="user_master.php?operation=0">Master Data</a></li>
         <li><a href="monthly.php?operation=0">Monthly Profit</a></li>
         <li><a href="reports.php?operation=0">Reports</a></li>
		 
		
		 <li><a href="sendreport.php?operation=0">Send Report</a></li>
		  <?php ob_start();?><?php echo $_SESSION['USER_TYPE'];?>
<?php $_tmp4=ob_get_clean();?><?php if (($_tmp4==1)) {?>		
		  <li><a href="setup.php?operation=0">Setup</a></li>
		<?php }?>

	<!--	 <li>
                <a href="#"> <img src="images/loginsucess.png" />Hi <?php echo $_SESSION['FIRST_NAME'];?>
 <span class="arrow">&#9660;</span></a>
 
               <ul class="dropdown">
            <li><a href="logout.php">Logout</a> </li>
            
        </ul>
            </li>  -->
	      </ul>
   </div><?php }} ?>
