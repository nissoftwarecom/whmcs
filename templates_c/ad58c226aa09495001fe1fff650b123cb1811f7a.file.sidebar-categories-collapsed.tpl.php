<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 19:01:13
         compiled from "C:\wamp\www\whmcs\templates\orderforms\standard_cart\sidebar-categories-collapsed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273785aede359ddbea8-97176065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad58c226aa09495001fe1fff650b123cb1811f7a' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\orderforms\\standard_cart\\sidebar-categories-collapsed.tpl',
      1 => 1460421248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273785aede359ddbea8-97176065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productgroups' => 0,
    'productgroup' => 0,
    'gid' => 0,
    'loggedin' => 0,
    'LANG' => 0,
    'renewalsenabled' => 0,
    'registerdomainenabled' => 0,
    'domain' => 0,
    'transferdomainenabled' => 0,
    'action' => 0,
    'currencies' => 0,
    'curr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aede35a544cb1_82918323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aede35a544cb1_82918323')) {function content_5aede35a544cb1_82918323($_smarty_tpl) {?><div class="categories-collapsed visible-xs visible-sm clearfix">

    <div class="pull-left form-inline">
        <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>
">
            <select name="gid" onchange="submit()" class="form-control">
                <optgroup label="Product Categories">
                    <?php  $_smarty_tpl->tpl_vars['productgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productgroup']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['productgroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productgroup']->key => $_smarty_tpl->tpl_vars['productgroup']->value) {
$_smarty_tpl->tpl_vars['productgroup']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['productgroup']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['productgroup']->value['gid'];?>
"<?php if ($_smarty_tpl->tpl_vars['gid']->value==$_smarty_tpl->tpl_vars['productgroup']->value['gid']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['productgroup']->value['name'];?>
</option>
                    <?php } ?>
                </optgroup>
                <optgroup label="Actions">
                    <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                        <option value="addons"<?php if ($_smarty_tpl->tpl_vars['gid']->value=="addons") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddons'];?>
</option>
                        <?php if ($_smarty_tpl->tpl_vars['renewalsenabled']->value) {?>
                            <option value="renewals"<?php if ($_smarty_tpl->tpl_vars['gid']->value=="renewals") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewals'];?>
</option>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                        <option value="registerdomain"<?php if ($_smarty_tpl->tpl_vars['domain']->value=="register") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navregisterdomain'];?>
</option>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                        <option value="transferdomain"<?php if ($_smarty_tpl->tpl_vars['domain']->value=="transfer") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['transferinadomain'];?>
</option>
                    <?php }?>
                    <option value="viewcart"<?php if ($_smarty_tpl->tpl_vars['action']->value=="view") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>
</option>
                </optgroup>
            </select>
        </form>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['currencies']->value) {?>
        <div class="pull-right form-inline">
            <form method="post" action="cart.php<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>?a=<?php echo $_smarty_tpl->tpl_vars['action']->value;
} elseif ($_smarty_tpl->tpl_vars['gid']->value) {?>?gid=<?php echo $_smarty_tpl->tpl_vars['gid']->value;
}?>">
                <select name="currency" onchange="submit()" class="form-control">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosecurrency'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>
</option>
                    <?php } ?>
                </select>
            </form>
        </div>
    <?php }?>

</div>
<?php }} ?>
