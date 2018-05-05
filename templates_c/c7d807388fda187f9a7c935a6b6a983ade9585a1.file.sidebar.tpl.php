<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 19:11:34
         compiled from "C:\wamp\www\whmcs\templates\maxhost-alt-v7\includes\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308295aede5c6836424-54546735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d807388fda187f9a7c935a6b6a983ade9585a1' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\maxhost-alt-v7\\includes\\sidebar.tpl',
      1 => 1524842802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308295aede5c6836424-54546735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
    'item' => 0,
    'childItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aede5c74812d6_14158188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aede5c74812d6_14158188')) {function content_5aede5c74812d6_14158188($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" class="panel panel-sidebar <?php if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['item']->value->getClass();
} else { ?>panel-sidebar<?php }
if ($_smarty_tpl->tpl_vars['item']->value->getExtra('mobileSelect')&&$_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?> hidden-sm hidden-xs<?php }?>"<?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getAttribute('id');?>
"<?php }?>>
        <div class="panel-heading">
            <h3 class="panel-title">
                <?php if ($_smarty_tpl->tpl_vars['item']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>

                <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getBadge();?>
</span><?php }?>
				<i class="fa fa-chevron-up panel-minimise pull-right"></i>
            </h3>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBodyHtml()) {?>
            <div class="panel-body">
                <?php echo $_smarty_tpl->tpl_vars['item']->value->getBodyHtml();?>

            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
            <div class="list-group<?php if ($_smarty_tpl->tpl_vars['item']->value->getChildrenAttribute('class')) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getChildrenAttribute('class');
}?>">
                <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->getChildren(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getUri()) {?>
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['childItem']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['childItem']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                        </a>
                    <?php } else { ?>
                        <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                        </div>
                    <?php }?>
                <?php } ?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasFooterHtml()) {?>
            <div class="panel-footer clearfix">
                <?php echo $_smarty_tpl->tpl_vars['item']->value->getFooterHtml();?>

            </div>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['item']->value->getExtra('mobileSelect')&&$_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
        
        <div class="panel hidden-lg hidden-md <?php if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['item']->value->getClass();
} else { ?>panel-default<?php }?>"<?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getAttribute('id');?>
"<?php }?>>
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php if ($_smarty_tpl->tpl_vars['item']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>

                    <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getBadge();?>
</span><?php }?>
                </h3>
            </div>
            <div class="panel-body">
                <form role="form">
                    <select class="form-control" onchange="selectChangeNavigate(this)">
                        <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->getChildren(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                            <option menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();?>
" class="list-group-item" <?php if ($_smarty_tpl->tpl_vars['childItem']->value->isCurrent()) {?>selected="selected"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?>(<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
)<?php }?>
                            </option>
                        <?php } ?>
                    </select>
                </form>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasFooterHtml()) {?>
                <div class="panel-footer">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getFooterHtml();?>

                </div>
            <?php }?>
        </div>
    <?php }?>
<?php } ?>
<?php }} ?>
