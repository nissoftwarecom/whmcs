<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 19:11:34
         compiled from "C:\wamp\www\whmcs\templates\maxhost-alt-v7\includes\breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144685aede5c6711462-22149255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '559aa6f0e910f16412578d2742d18dd20e3f3233' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\maxhost-alt-v7\\includes\\breadcrumb.tpl',
      1 => 1524842802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144685aede5c6711462-22149255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumb' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aede5c6807626_43175937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aede5c6807626_43175937')) {function content_5aede5c6807626_43175937($_smarty_tpl) {?><ol class="breadcrumb">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
        <li<?php if ($_smarty_tpl->tpl_vars['item']->last) {?> class="active"<?php }?>>
            <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php }?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

            <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?></a><?php }?>
        </li>
    <?php } ?>
</ol>
<?php }} ?>
