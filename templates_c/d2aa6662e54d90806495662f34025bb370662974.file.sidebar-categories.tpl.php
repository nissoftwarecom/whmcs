<?php /* Smarty version Smarty-3.1.21, created on 2018-05-01 19:28:10
         compiled from "C:\wamp\www\whmcs\whmcs\templates\orderforms\standard_cart\sidebar-categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286365ae8a3aaaefd68-61875613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2aa6662e54d90806495662f34025bb370662974' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\whmcs\\templates\\orderforms\\standard_cart\\sidebar-categories.tpl',
      1 => 1460421248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286365ae8a3aaaefd68-61875613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'secondarySidebar' => 0,
    'panel' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ae8a3ab774944_53225106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae8a3ab774944_53225106')) {function content_5ae8a3ab774944_53225106($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['panel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['panel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secondarySidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['panel']->key => $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->_loop = true;
?>
    <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" class="panel <?php if ($_smarty_tpl->tpl_vars['panel']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['panel']->value->getClass();
} else { ?>panel-default<?php }
if ($_smarty_tpl->tpl_vars['panel']->value->getExtra('mobileSelect')&&$_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?> hidden-sm hidden-xs<?php }?>"<?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
        <div class="panel-heading">
            <h3 class="panel-title">
                <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasIcon()) {?>
                    <i class="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getIcon();?>
"></i>&nbsp;
                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['panel']->value->getLabel();?>


                <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasBadge()) {?>
                    &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['panel']->value->getBadge();?>
</span>
                <?php }?>
            </h3>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasBodyHtml()) {?>
            <div class="panel-body">
                <?php echo $_smarty_tpl->tpl_vars['panel']->value->getBodyHtml();?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
            <div class="list-group<?php if ($_smarty_tpl->tpl_vars['panel']->value->getChildrenAttribute('class')) {?> <?php echo $_smarty_tpl->tpl_vars['panel']->value->getChildrenAttribute('class');
}?>">
                <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['panel']->value->getChildren(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php if ($_smarty_tpl->tpl_vars['child']->value->hasIcon()) {?>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['child']->value->getIcon();?>
"></i>&nbsp;
                            <?php }?>

                            <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>


                            <?php if ($_smarty_tpl->tpl_vars['child']->value->hasBadge()) {?>
                                &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['child']->value->getBadge();?>
</span>
                            <?php }?>
                        </a>
                    <?php } else { ?>
                        <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php if ($_smarty_tpl->tpl_vars['child']->value->hasIcon()) {?>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['child']->value->getIcon();?>
"></i>&nbsp;
                            <?php }?>

                            <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>


                            <?php if ($_smarty_tpl->tpl_vars['child']->value->hasBadge()) {?>
                                &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['child']->value->getBadge();?>
</span>
                            <?php }?>
                        </div>
                    <?php }?>
                <?php } ?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasFooterHtml()) {?>
            <div class="panel-footer clearfix">
                <?php echo $_smarty_tpl->tpl_vars['panel']->value->getFooterHtml();?>

            </div>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['panel']->value->getExtra('mobileSelect')&&$_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
        
        <div class="panel hidden-lg hidden-md <?php if ($_smarty_tpl->tpl_vars['panel']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['panel']->value->getClass();
} else { ?>panel-default<?php }?>"<?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasIcon()) {?>
                        <i class="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getIcon();?>
"></i>&nbsp;
                    <?php }?>

                    <?php echo $_smarty_tpl->tpl_vars['panel']->value->getLabel();?>


                    <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasBadge()) {?>
                        &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['panel']->value->getBadge();?>
</span>
                    <?php }?>
                </h3>
            </div>

            <div class="panel-body">
                <form role="form">
                    <select class="form-control" onchange="selectChangeNavigate(this)">
                        <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['panel']->value->getChildren(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
                            <option menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="list-group-item" <?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?>selected="selected"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>


                                <?php if ($_smarty_tpl->tpl_vars['child']->value->hasBadge()) {?>
                                    (<?php echo $_smarty_tpl->tpl_vars['child']->value->getBadge();?>
)
                                <?php }?>
                            </option>
                        <?php } ?>
                    </select>
                </form>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasFooterHtml()) {?>
                <div class="panel-footer">
                    <?php echo $_smarty_tpl->tpl_vars['panel']->value->getFooterHtml();?>

                </div>
            <?php }?>
        </div>
    <?php }?>
<?php } ?>
<?php }} ?>
