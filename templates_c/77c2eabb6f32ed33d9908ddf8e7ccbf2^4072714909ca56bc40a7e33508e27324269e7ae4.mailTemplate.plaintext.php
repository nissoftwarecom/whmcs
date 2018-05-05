<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 19:04:19
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:172215aede413babab3-86467917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1525539859,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '172215aede413babab3-86467917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'client_name' => 0,
    'order_number' => 0,
    'order_details' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aede413c28ad4_51853212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aede413c28ad4_51853212')) {function content_5aede413c28ad4_51853212($_smarty_tpl) {?><p>
Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 
</p>
<p>
We have received your order and will be processing it shortly. The details of the order are below: 
</p>
<p>
Order Number: <b><?php echo $_smarty_tpl->tpl_vars['order_number']->value;?>
</b></p>
<p>
<?php echo $_smarty_tpl->tpl_vars['order_details']->value;?>
 
</p>
<p>
You will receive an email from us shortly once your account has been setup. Please quote your order reference number if you wish to contact us about this order. 
</p>
<p>
<?php echo $_smarty_tpl->tpl_vars['signature']->value;?>

</p>
<?php }} ?>
