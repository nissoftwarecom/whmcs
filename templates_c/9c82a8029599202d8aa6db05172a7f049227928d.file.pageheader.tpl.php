<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 19:11:34
         compiled from "C:\wamp\www\whmcs\templates\maxhost-alt-v7\includes\pageheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78315aede5c6541320-24740768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c82a8029599202d8aa6db05172a7f049227928d' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\maxhost-alt-v7\\includes\\pageheader.tpl',
      1 => 1524842802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78315aede5c6541320-24740768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'desc' => 0,
    'showbreadcrumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aede5c66c4b62_92747056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aede5c66c4b62_92747056')) {function content_5aede5c66c4b62_92747056($_smarty_tpl) {?><div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
</div>
<?php }} ?>
