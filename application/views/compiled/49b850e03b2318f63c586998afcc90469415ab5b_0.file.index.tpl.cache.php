<?php /* Smarty version 3.1.27, created on 2015-12-26 17:07:24
         compiled from "C:\xampp\htdocs\test\exam2\application\views\templates\index.tpl" */ ?>
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
  ),
  'nocache_hash' => '30134567ebb3c73dab9_20611287',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567ebb3c79f9c0_72031694',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567ebb3c79f9c0_72031694')) {
function content_567ebb3c79f9c0_72031694 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30134567ebb3c73dab9_20611287';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>