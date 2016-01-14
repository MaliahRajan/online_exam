<?php /* Smarty version 3.1.27, created on 2015-12-26 17:07:24
         compiled from "C:\xampp\htdocs\test\exam2\application\views\templates\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17079567ebb3c80d1a0_23167313%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dcfb12fdd62c1c48753c6e1bcfb3846eb0f7354' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\exam2\\application\\views\\templates\\header.tpl',
      1 => 1450884320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17079567ebb3c80d1a0_23167313',
  'variables' => 
  array (
    'site_title' => 0,
    'xjaxJs' => 0,
    'loginName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567ebb3c8208a4_89829887',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567ebb3c8208a4_89829887')) {
function content_567ebb3c8208a4_89829887 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17079567ebb3c80d1a0_23167313';
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
        <span class="welcome">Welcome <?php echo $_smarty_tpl->tpl_vars['loginName']->value;?>
</span>
        <md-button class="logoutBtn md-raised md-warn" aria-label="Learn More" onclick="xajax_logout()">
          Logout
        </md-button>
      </div>
  </md-toolbar>
<?php }
}
?>