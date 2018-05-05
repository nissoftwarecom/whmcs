<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 18:43:53
         compiled from "C:\wamp\www\whmcs\templates\maxhost-alt-v7\includes\verifyemail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261005aeddf49f0f851-01991174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce67283c7a093c7bb454aaea6f179f6aa15f5d5d' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\maxhost-alt-v7\\includes\\verifyemail.tpl',
      1 => 1524842802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261005aeddf49f0f851-01991174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emailVerificationIdValid' => 0,
    'LANG' => 0,
    'emailVerificationPending' => 0,
    'showingLoginPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aeddf4a0f62a6_36059744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeddf4a0f62a6_36059744')) {function content_5aeddf4a0f62a6_36059744($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value) {?>
    <div class="email-verification success">
        <div class="container">
            <i class="fa fa-check"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailAddressVerified'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value===false) {?>
    <div class="email-verification failed">
        <div class="container">
            <i class="fa fa-times-circle"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailKeyExpired'];?>

            <div class="pull-right">
                <button id="btnResendVerificationEmail" class="btn btn-default btn-sm">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationPending']->value&&!$_smarty_tpl->tpl_vars['showingLoginPage']->value) {?>
    <div class="email-verification">
        <div class="container">
            <button type="button" class="btn close"><span aria-hidden="true">&times;</span></button>
            <button id="btnResendVerificationEmail" class="btn btn-default btn-sm btn-resend-verify-email hidden-xs">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

            </button>
            <div class="text">
                <i class="fa fa-warning"></i>
                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['verifyEmailAddress'];?>
</span>
            </div>
        </div>
    </div>
<?php }?><?php }} ?>
