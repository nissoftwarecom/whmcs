<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 18:43:54
         compiled from "C:\wamp\www\whmcs\templates\maxhost-alt-v7\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289575aeddf4a1156a6-65162098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58bb4d417ac44be3c25451b87663bc80e59c4b80' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\maxhost-alt-v7\\footer.tpl',
      1 => 1524842802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289575aeddf4a1156a6-65162098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inShoppingCart' => 0,
    'secondarySidebar' => 0,
    'date_year' => 0,
    'companyname' => 0,
    'BASE_PATH_JS' => 0,
    'token' => 0,
    'mdeLocale' => 0,
    'WEB_ROOT' => 0,
    'template' => 0,
    'footeroutput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aeddf4a39ac21_62262306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeddf4a39ac21_62262306')) {function content_5aeddf4a39ac21_62262306($_smarty_tpl) {?>        </div><!-- /.main-content -->
                <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
                    <div class="col-md-3 pull-md-left sidebar">
                       <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0);?>

                    </div>
                <?php }?>
            </div>
        <div class="clearfix"></div>
        </div>
            </div>

</section>

<section id="footer">

    <div class="container">
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <p>Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['date_year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
. All Rights Reserved.</p>
    </div>

</section>

<!--<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
        markdownGuide = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.title"),$_smarty_tpl);?>
',
        locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo WHMCS\Smarty::langFunction(array('key'=>"locale"),$_smarty_tpl);
} else { ?>en_GB<?php }?>',
        saved = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.saved"),$_smarty_tpl);?>
',
        saving = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.saving"),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/whmcs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/AjaxModal.js"><?php echo '</script'; ?>
>

<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body panel-body">
                Loading...
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>

<!-- CODES FROM MAXHOST THEME FOOTER GOES BELOW (DO not touch the codes above this line)-->
<footer class="footer-bg m-top4
">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12 m-top5 font-white">
          <h4 class="font16 font-thin uppercase ">About Company</h4>
          <div class="title-line color"></div>
          <p class="m-bottom3"></p>
          <ul class="address-info listitems">
			            <li><i class="fa fa-phone"></i>&nbsp;&nbsp;(19) 3090-3310</li>
			            <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;contato@enlevos.com</li>
			          </ul>
        </div>

        <div class="col-md-3 col-sm-12 m-top5 font-white">
          <h4 class="font16 font-thin uppercase ">SUPORTE</h4>
          <div class="title-line color"></div>
          <ul class="listitems left-padd0">
                      </ul>
        </div>
        <div class="col-md-3 col-sm-12 m-top5 font-white">
          <h4 class="font16 font-thin uppercase ">RECURSOS</h4>
          <div class="title-line color"></div>
          <ul class="listitems left-padd0">
                      </ul>
        </div>
        <div class="col-md-3 col-sm-12 m-top5 font-white">
          <h4 class="font16 font-thin uppercase ">MINHA CONTA</h4>
          <div class="title-line color"></div>
          <ul class="listitems left-padd0">
                      </ul>
        </div>
      </div>
    </div>
    <div class="container">
	        <div class="col-md-6 nopadding m-top5">
        <h5 class="font-white m-bottom1"></h5>
        		<img src="https://enlevos.com/data/comodo_secure_seal_113x59_transp.png" alt="">
			  </div>
	  	        <div class="col-md-6 nopadding m-top5">
        <h5 class="font-white m-bottom1">Se inscreva para ofertas especiais!</h5>
        		<form method="post" action="javascript:void(0)">
			<input type="hidden" name="redirect" value="" />
			<input type="hidden" name="meta_redirect_onlist" value="" />
			<input type="hidden" name="meta_message" value="1" /> 
			<input type="hidden" name="meta_required" value="email" />
			<input type="text" name="email" class="input-text newsfield" id="samplees" placeholder="Informe seu e-mail" value="" />
            <input type="submit" class="btn orange-button two uppercase font-bold" value="Enviar" name="submit">
        </form>
				<div id="footer_response" class="m-top2"></div>
      </div>
	      </div>
  </footer>
  <div class="copyrights">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-top1 m-bottom1 ">  © 2017 Enlevos Tecnologia | Todos os direitos reservados</div>
        <div class="col-md-6">
          <ul class="social-icons style-three">
            			  <li><a href="https://www.facebook.com/enlevostecnologia/"><i class="fa fa-facebook"></i></a></li>
			  			  <li><a href="https://twitter.com/Enlevos"><i class="fa fa-twitter"></i></a></li>
			  			  <li><a href="https://plus.google.com/102965954055244917103"><i class="fa fa-google-plus"></i></a></li>
			  			  <li><a href="https://www.linkedin.com/company/10967660?trk=tyah&#038;trkInfo=clickedVertical%3Acompany%2CentityType%3AentityHistoryName%2CclickedEntityId%3Acompany_10967660%2Cidx%3A0"><i class="fa fa-linkedin"></i></a></li>
			  			  <li><a href="https://www.youtube.com/channel/UCsbnyj7bv0_Ys1HPRtyU-zA"><i class="fa fa-youtube"></i></a></li>
			            </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- end footer --> 

  <!-- CODES FROM MAXHOST THEME FOOTER GOES ABOVE (DO not touch the codes below this line)-->
</div>
<!-- site wrapper end --> 
<a href="#" class="scrollup"></a>
<!-- end scroll to top of the page-->
<!--Javascripts-->
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/maxhostjs/maxhost-main.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/mainmenu/sticky.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/maxhostjs/scrolltotop/totop.js'><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
