<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 19:11:52
         compiled from "C:\wamp\www\whmcs\templates\maxhost-alt-v7\clientareaproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280035aede5d8d7a537-62915726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eddff306b7a8d811249d0a96cd3dbaa7602e280' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\maxhost-alt-v7\\clientareaproducts.tpl',
      1 => 1524842802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280035aede5d8d7a537-62915726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderby' => 0,
    'sort' => 0,
    'LANG' => 0,
    'services' => 0,
    'service' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aede5d92b4948_70974325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aede5d92b4948_70974325')) {function content_5aede5d92b4948_70974325($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tableName'=>"ServicesList",'filterColumn'=>"3"), 0);?>

<?php echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('#tableServicesList').removeClass('hidden').DataTable();
        <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='product') {?>
            table.order([0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
'], [3, 'asc']);
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='amount'||$_smarty_tpl->tpl_vars['orderby']->value=='billingcycle') {?>
            table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='nextduedate') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='domainstatus') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').addClass('hidden');
    });
<?php echo '</script'; ?>
>
<div class="table-container clearfix">
    <table id="tableServicesList" class="table table-list hidden">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderproduct'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddonpricing'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastatus'];?>
</th>
                <th class="responsive-edit-button" style="display: none;"></th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['service']->key;
?>
                <tr onclick="clickableSafeRedirect(event, 'clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
', false)">
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['service']->value['product'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['service']->value['domain']) {?><br /><a href="http://<?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
</a><?php }?></td>
                    <td class="text-center" data-order="<?php echo $_smarty_tpl->tpl_vars['service']->value['amountnum'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['amount'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['service']->value['billingcycle'];?>
</td>
                    <td class="text-center"><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['service']->value['normalisedNextDueDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['service']->value['nextduedate'];?>
</td>
                    <td class="text-center"><span class="label status status-<?php echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['statustext'];?>
</span></td>
                    <td class="responsive-edit-button" style="display: none;">
                        <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" class="btn btn-block btn-info">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['manageproduct'];?>

                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="text-center" id="tableLoading">
        <p><i class="fa fa-spinner fa-spin"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>
</p>
    </div>
</div>
<?php }} ?>
