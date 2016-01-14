<?php
/*%%SmartyHeaderCode:30134567ebb3c73dab9_20611287%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49b850e03b2318f63c586998afcc90469415ab5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\exam2\\application\\views\\templates\\index.tpl',
      1 => 1445161652,
      2 => 'file',
    ),
    '3dcfb12fdd62c1c48753c6e1bcfb3846eb0f7354' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\exam2\\application\\views\\templates\\header.tpl',
      1 => 1450884320,
      2 => 'file',
    ),
    '0853fae0f120c81c8bc0b70f942f24f910dad1f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\exam2\\application\\views\\templates\\main.tpl',
      1 => 1451120707,
      2 => 'file',
    ),
    '29f5639978af6cb4174db7712746900cd0503351' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\exam2\\application\\views\\templates\\footer.tpl',
      1 => 1451056565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30134567ebb3c73dab9_20611287',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567ebb3c8be814_46767664',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567ebb3c8be814_46767664')) {
function content_567ebb3c8be814_46767664 ($_smarty_tpl) {
?>
<html ng-app="app">
<head>
    <title>Online Exam</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- Angular Material CSS  version 0.11.2 used here -->
    <link rel="stylesheet" href="css/angular-material.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/sweet-alert.css">
</head>
<body ng-controller="onlineExam">
  <md-toolbar>
      <div class="md-toolbar-tools">
        <md-button class="md-fab md-mini logo" aria-label="Angular Online Examination System" onclick="location.reload();">
          <i class="fa fa-graduation-cap"></i>
        </md-button>
        <h2>
          <span>Online Exam</span>
        </h2>
        <span flex></span>
        <span class="welcome">Welcome Admin</span>
        <md-button class="logoutBtn md-raised md-warn" aria-label="Learn More" onclick="xajax_logout()">
          Logout
        </md-button>
      </div>
  </md-toolbar>


<div compile="html" id="xajax_content"></div>

</body>
<md-toolbar>
      <div class="md-toolbar-tools">
        <md-button aria-label="Online Exam">
          Copyright <i class="fa fa-copyright"></i> 2015
        </md-button>
        <span flex></span>
        <md-button class="md-raised md-primary" aria-label="copyright">
          Designed and Developed by Maliah_Rajan_M  
        </md-button>
      </div>
</md-toolbar>
<!-- Angular Material Dependencies -->
<script src="js/angular.min.js"></script>
<script src="js/angular-animate.min.js"></script>
<script src="js/angular-aria.min.js"></script>
<!-- Angular Material Javascript version 0.11.2 used here -->
<script type="text/javascript" src="../jquery-2.1.4.min.js"></script>
<script src="js/angular-material.min.js"></script>
<script type="text/javascript" src="js/angular-messages.js"></script>
<script type="text/javascript" src="js/angular-timer.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/sweet-alert.js"></script>
</html><?php }
}
?>