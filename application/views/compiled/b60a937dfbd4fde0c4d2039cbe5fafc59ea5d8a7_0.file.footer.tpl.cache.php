<?php /* Smarty version 3.1.27, created on 2016-01-14 13:08:34
         compiled from "/var/www/html/online_exam/application/views/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2270285605697507a5ece65_73304383%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60a937dfbd4fde0c4d2039cbe5fafc59ea5d8a7' => 
    array (
      0 => '/var/www/html/online_exam/application/views/templates/footer.tpl',
      1 => 1451056565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2270285605697507a5ece65_73304383',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5697507a5f55f5_15764987',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5697507a5f55f5_15764987')) {
function content_5697507a5f55f5_15764987 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2270285605697507a5ece65_73304383';
?>
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
<?php echo '<script'; ?>
 src="js/angular.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/angular-animate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/angular-aria.min.js"><?php echo '</script'; ?>
>
<!-- Angular Material Javascript version 0.11.2 used here -->
<?php echo '<script'; ?>
 type="text/javascript" src="../jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/angular-material.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/angular-messages.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/angular-timer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/sweet-alert.js"><?php echo '</script'; ?>
>
</html><?php }
}
?>