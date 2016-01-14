<?php /* Smarty version 3.1.27, created on 2015-12-26 16:30:14
         compiled from "C:\xampp\htdocs\test\exam2\application\views\templates\login_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25832567eb2861c6f34_79178336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22d65e142b649f24e5b955bc191a1a275a1e7c71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\exam2\\application\\views\\templates\\login_header.tpl',
      1 => 1450795074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25832567eb2861c6f34_79178336',
  'variables' => 
  array (
    'site_title' => 0,
    'xjaxJs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567eb2861dd0e5_94578952',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567eb2861dd0e5_94578952')) {
function content_567eb2861dd0e5_94578952 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25832567eb2861c6f34_79178336';
?>
<html ng-app="app">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['xjaxJs']->value;?>

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
          <span><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</span>
        </h2>
        <span flex></span>
<!--         <md-button class="md-raised md-warn" aria-label="Learn More">
          Learn More
        </md-button> -->
      </div>
  </md-toolbar>

<?php }
}
?>