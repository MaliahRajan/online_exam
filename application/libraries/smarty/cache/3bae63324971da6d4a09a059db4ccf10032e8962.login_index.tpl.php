<?php
/*%%SmartyHeaderCode:1305560895643261fd2acc5_26971333%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bae63324971da6d4a09a059db4ccf10032e8962' => 
    array (
      0 => '/var/www/html/myProject/RekryteInfotech/application/views/templates/login_index.tpl',
      1 => 1446028422,
      2 => 'file',
    ),
    'f1d641065be9e0f7366613f1a36e0aa184d9bc24' => 
    array (
      0 => '/var/www/html/myProject/RekryteInfotech/application/views/templates/login_header.tpl',
      1 => 1446990361,
      2 => 'file',
    ),
    'be281aa96ef735a300ad4a419e06e857926c9931' => 
    array (
      0 => '/var/www/html/myProject/RekryteInfotech/application/views/templates/login_main.tpl',
      1 => 1447062355,
      2 => 'file',
    ),
    '7c15ad3dafd599474dbba3b035f2377570d28639' => 
    array (
      0 => '/var/www/html/myProject/RekryteInfotech/application/views/templates/login_footer.tpl',
      1 => 1447240805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1305560895643261fd2acc5_26971333',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5643261fd6cc34_54314089',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5643261fd6cc34_54314089')) {
function content_5643261fd6cc34_54314089 ($_smarty_tpl) {
?>
<html>
<head>
    <title>Student Management System</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" type="text/css" href="css/carousal.css"/>
    <link rel="stylesheet" type="text/css" href="css/loginForm.css">
</head>
<body>



<div id="loginXajax_content">
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#bs-carousel" data-slide-to="1"></li>
      <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"></div>
        <div class="hero">
          <hgroup>
              <h1>Student Management System</h1>        
              <h3>All in one tool to manage and track student profile.</h3>
          </hgroup>
           <button class="btn btn-hero btn-lg" role="button" onclick="xajax_loginPage()">Enter</button>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-2"></div>
        <div class="hero">        
           <hgroup>
              <h1>Student Management System</h1>        
              <h3>All in one tool to manage and track student profile.</h3>
          </hgroup>    
          <button class="btn btn-hero btn-lg" role="button" onclick="xajax_loginPage()">Enter</button>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-3"></div>
        <div class="hero">        
          <hgroup>
              <h1>Student Management System</h1>        
              <h3>All in one tool to manage and track student profile.</h3>
          </hgroup>
           <button class="btn btn-hero btn-lg" role="button" onclick="xajax_loginPage()">Enter</button>
        </div>
      </div>
    </div> 
  </div>
</div>



</body>
<script type="text/javascript" src="js/sweet-alert.js"></script>	
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Rekryte_script.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/loginForm.js"></script>
</html>
<?php }
}
?>