<?php /* Smarty version 3.1.27, created on 2016-01-14 13:11:12
         compiled from "/var/www/html/online_exam/application/views/templates/login_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:744682107569751188f1f80_46041662%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b37ae9e7867acd65ae6e90a3ab59a7a7cbc4a0de' => 
    array (
      0 => '/var/www/html/online_exam/application/views/templates/login_header.tpl',
      1 => 1450795074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '744682107569751188f1f80_46041662',
  'variables' => 
  array (
    'site_title' => 0,
    'xjaxJs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569751188fef02_22951204',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569751188fef02_22951204')) {
function content_569751188fef02_22951204 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '744682107569751188f1f80_46041662';
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