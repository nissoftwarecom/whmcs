<?php /* Smarty version Smarty-3.1.21, created on 2018-05-01 18:45:43
         compiled from "C:\wamp\www\whmcs\whmcs\templates\six\includes\breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120265ae899b7d26b51-03399022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12ed9fda78ce18651792a9519df4746f24501254' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\whmcs\\templates\\six\\includes\\breadcrumb.tpl',
      1 => 1460421248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120265ae899b7d26b51-03399022',
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
  'unifunc' => 'content_5ae899b7e2c718_98688673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae899b7e2c718_98688673')) {function content_5ae899b7e2c718_98688673($_smarty_tpl) {?><ol class="breadcrumb">
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
