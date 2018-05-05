<?php /* Smarty version Smarty-3.1.21, created on 2018-05-01 18:45:20
         compiled from "C:\wamp\www\whmcs\whmcs\templates\six\includes\captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137915ae899a00152f1-50470400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed818810f4633ca38b05e16e4413f9acc79c425e' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\whmcs\\templates\\six\\includes\\captcha.tpl',
      1 => 1460421248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137915ae899a00152f1-50470400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'captcha' => 0,
    'filename' => 0,
    'reCaptchaPublicKey' => 0,
    'recaptchahtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ae899a023fe75_59881441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae899a023fe75_59881441')) {function content_5ae899a023fe75_59881441($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['filename']->value=='domainchecker'||$_smarty_tpl->tpl_vars['filename']->value=='index') {?>
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
    <?php } else { ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo WHMCS\Smarty::langFunction(array('key'=>"captchatitle"),$_smarty_tpl);?>
</h3>
            </div>
            <div class="panel-body">
                <p><?php echo WHMCS\Smarty::langFunction(array('key'=>"captchaverify"),$_smarty_tpl);?>
</p>
                <?php if ($_smarty_tpl->tpl_vars['captcha']->value=="recaptcha") {?>
                    <?php echo $_smarty_tpl->tpl_vars['recaptchahtml']->value;?>

                <?php } else { ?>
                    <div class="text-center">
                        <div class="col-md-5 col-sm-5 col-xs-5 captchaimage">
                            <img src="includes/verifyimage.php" align="middle" />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-5">
                            <input id="inputCaptcha" type="text" name="code" maxlength="5" class="form-control" />
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    <?php }?>
<?php }?>
<?php }} ?>
