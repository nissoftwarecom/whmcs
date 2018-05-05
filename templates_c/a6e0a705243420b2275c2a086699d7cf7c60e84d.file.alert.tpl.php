<?php /* Smarty version Smarty-3.1.21, created on 2018-05-01 18:45:45
         compiled from "C:\wamp\www\whmcs\whmcs\templates\six\includes\alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161365ae899b926da41-37406919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e0a705243420b2275c2a086699d7cf7c60e84d' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\whmcs\\templates\\six\\includes\\alert.tpl',
      1 => 1460421248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161365ae899b926da41-37406919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'textcenter' => 0,
    'hide' => 0,
    'additionalClasses' => 0,
    'idname' => 0,
    'errorshtml' => 0,
    'LANG' => 0,
    'title' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ae899b944a3b6_30598297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae899b944a3b6_30598297')) {function content_5ae899b944a3b6_30598297($_smarty_tpl) {?><div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['type']->value=="error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['type']->value) {
echo $_smarty_tpl->tpl_vars['type']->value;
} else { ?>info<?php }
if ($_smarty_tpl->tpl_vars['textcenter']->value) {?> text-center<?php }
if ($_smarty_tpl->tpl_vars['hide']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['additionalClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['additionalClasses']->value;
}?>"<?php if ($_smarty_tpl->tpl_vars['idname']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['errorshtml']->value) {?>
    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaerrors'];?>
</strong>
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['errorshtml']->value;?>

    </ul>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
        <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

<?php }?>
</div>
<?php }} ?>
