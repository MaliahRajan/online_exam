<?php /* Smarty version 3.1.27, created on 2016-01-14 13:08:34
         compiled from "/var/www/html/online_exam/application/views/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12344861785697507a562861_75768173%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ab9401e57e0874451ad7bad4758d8f5c4bd0c4' => 
    array (
      0 => '/var/www/html/online_exam/application/views/templates/index.tpl',
      1 => 1445161652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12344861785697507a562861_75768173',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5697507a5cada9_62693620',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5697507a5cada9_62693620')) {
function content_5697507a5cada9_62693620 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12344861785697507a562861_75768173';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>