<?php /* Smarty version 3.1.27, created on 2015-12-26 16:30:14
         compiled from "C:\xampp\htdocs\test\exam2\application\views\templates\login_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28171567eb286130b91_93083265%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e718fcb400a68f372eaf53494c0d83e76fbc7702' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\exam2\\application\\views\\templates\\login_index.tpl',
      1 => 1446028422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28171567eb286130b91_93083265',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567eb286197803_79152927',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567eb286197803_79152927')) {
function content_567eb286197803_79152927 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28171567eb286130b91_93083265';
echo $_smarty_tpl->getSubTemplate ("login_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("login_main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("login_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>