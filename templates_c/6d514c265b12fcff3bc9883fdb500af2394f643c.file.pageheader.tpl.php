<?php /* Smarty version Smarty-3.1.21, created on 2018-05-01 18:45:43
         compiled from "C:\wamp\www\whmcs\whmcs\templates\six\includes\pageheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115575ae899b7afbfd6-31477467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d514c265b12fcff3bc9883fdb500af2394f643c' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\whmcs\\templates\\six\\includes\\pageheader.tpl',
      1 => 1460421248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115575ae899b7afbfd6-31477467',
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
  'unifunc' => 'content_5ae899b7ce0640_11021544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae899b7ce0640_11021544')) {function content_5ae899b7ce0640_11021544($_smarty_tpl) {?><div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
</div>
<?php }} ?>
