<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 18:43:53
         compiled from "C:\wamp\www\whmcs\templates\maxhost-alt-v7\includes\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143055aeddf493e4ca0-00192494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5fad1ab51458840bdf98c0df25094fa397f7ee' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\maxhost-alt-v7\\includes\\head.tpl',
      1 => 1524842802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143055aeddf493e4ca0-00192494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_PATH_CSS' => 0,
    'WEB_ROOT' => 0,
    'template' => 0,
    'token' => 0,
    'mdeLocale' => 0,
    'versionHash' => 0,
    'templatefile' => 0,
    'loggedin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aeddf497e8314_15897081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeddf497e8314_15897081')) {function content_5aeddf497e8314_15897081($_smarty_tpl) {?><link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
<!-- Bootstrap -->
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/font-awesome.min.css" rel="stylesheet">

<!-- Styling -->
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/overrides.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/styles.css" rel="stylesheet">

<!-- Custom Styling -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/custom.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

<?php echo '<script'; ?>
 type="text/javascript">
	var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
		markdownGuide = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.title"),$_smarty_tpl);?>
',
		locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo $_smarty_tpl->tpl_vars['mdeLocale']->value;
} else { ?>en<?php }?>',
		saved = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.saved"),$_smarty_tpl);?>
',
		saving = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.saving"),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value=="viewticket"&&!$_smarty_tpl->tpl_vars['loggedin']->value) {?>
  <meta name="robots" content="noindex" />
<?php }?>
<?php }} ?>
