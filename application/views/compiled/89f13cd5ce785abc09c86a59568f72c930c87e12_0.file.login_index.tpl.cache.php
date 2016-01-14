<?php /* Smarty version 3.1.27, created on 2016-01-14 13:11:12
         compiled from "/var/www/html/online_exam/application/views/templates/login_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:634198485569751188c3cf5_88915024%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89f13cd5ce785abc09c86a59568f72c930c87e12' => 
    array (
      0 => '/var/www/html/online_exam/application/views/templates/login_index.tpl',
      1 => 1446028422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '634198485569751188c3cf5_88915024',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569751188ec9a8_77063232',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569751188ec9a8_77063232')) {
function content_569751188ec9a8_77063232 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '634198485569751188c3cf5_88915024';
echo $_smarty_tpl->getSubTemplate ("login_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("login_main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("login_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>