<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 18:43:53
         compiled from "C:\wamp\www\whmcs\templates\maxhost-alt-v7\includes\captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234955aeddf49d66821-59995977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce4a28fecbcffef6a043bf35241402df4d436ff2' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\maxhost-alt-v7\\includes\\captcha.tpl',
      1 => 1524842802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234955aeddf49d66821-59995977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'captcha' => 0,
    'filename' => 0,
    'reCaptchaPublicKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aeddf49ed8d45_44571808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeddf49ed8d45_44571808')) {function content_5aeddf49ed8d45_44571808($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['filename']->value=='index') {?>
            <div class="domainchecker-homepage-captcha">
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['captcha']->value=="recaptcha") {?>
            <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
            <div id="google-recaptcha-domainchecker" class="g-recaptcha center-block" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['reCaptchaPublicKey']->value;?>
"></div>
        <?php } else { ?>
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <div id="default-captcha-domainchecker" class="<?php if ($_smarty_tpl->tpl_vars['filename']->value=='domainchecker') {?>input-group input-group-box <?php }?>text-center">
                    <p><?php echo WHMCS\Smarty::langFunction(array('key'=>"captchaverify"),$_smarty_tpl);?>
</p>

                    <div class="col-xs-6 captchaimage">
                        <img id="inputCaptchaImage" src="includes/verifyimage.php" align="middle" />
                    </div>

                    <div class="col-xs-6">
                        <input id="inputCaptcha" type="text" name="code" maxlength="5" class="form-control" />
                    </div>
                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['filename']->value=='index') {?>
            </div>
        <?php }?>
    </div>
<?php }?><?php }} ?>
