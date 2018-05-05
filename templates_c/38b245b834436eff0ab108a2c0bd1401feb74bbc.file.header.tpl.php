<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 18:43:51
         compiled from "C:\wamp\www\whmcs\templates\maxhost-alt-v7\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156885aeddf47d18bd4-45006460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38b245b834436eff0ab108a2c0bd1401feb74bbc' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\maxhost-alt-v7\\header.tpl',
      1 => 1524842802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156885aeddf47d18bd4-45006460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charset' => 0,
    'kbarticle' => 0,
    'pagetitle' => 0,
    'companyname' => 0,
    'WEB_ROOT' => 0,
    'template' => 0,
    'headoutput' => 0,
    'headeroutput' => 0,
    'primaryNavbar' => 0,
    'secondaryNavbar' => 0,
    'loggedin' => 0,
    'LANG' => 0,
    'clientAlerts' => 0,
    'alert' => 0,
    'condlinks' => 0,
    'adminMasqueradingAsClient' => 0,
    'adminLoggedIn' => 0,
    'templatefile' => 0,
    'registerdomainenabled' => 0,
    'transferdomainenabled' => 0,
    'skipMainBodyContainer' => 0,
    'inShoppingCart' => 0,
    'primarySidebar' => 0,
    'secondarySidebar' => 0,
    'displayTitle' => 0,
    'tagline' => 0,
    'showingLoginPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aeddf49354403_09946009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeddf49354403_09946009')) {function content_5aeddf49354403_09946009($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/images/favicon-16x16.png">	

<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/webfonts/webfonts.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/background.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/style.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/reset.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/Simple-Line-Icons-Webfont/simple-line-icons.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/et-line-font/et-line-font.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/responsive-leyouts.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/mainmenu/menu.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/sky-forms.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/colors/green.css" rel="stylesheet" />


<!-- Colors CSS -->
<!-- Uncomment any of the below CSS line to choose your preferred Color option -->
<!--<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/colors/green.css" rel="stylesheet">-->
<!--<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/colors/lightblue.css" rel="stylesheet">-->
<!--<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/colors/lightgreen.css" rel="stylesheet">-->
<!--<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/colors/olive.css" rel="stylesheet">-->
<!--<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/colors/orange.css" rel="stylesheet">-->
<!--<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/colors/pink.css" rel="stylesheet">-->
<!--<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/colors/red.css" rel="stylesheet">-->
<!--<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/colors/sea.css" rel="stylesheet">-->
<!--<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/maxhostcss/colors/violet.css" rel="stylesheet">-->
<!-- End Colors CSS -->

<div class="site_wrapper">

	<!-- CODES FROM MAXHOST THEME HEADER GOES BELOW (DO not touch the codes above this line)-->
<!-- Top header bar -->
	    <div class="header-top">
      <div class="container">
        <div class="row">
			<div class="col-md-6 col-sm-6 no-dis-phone">
            <ul class="social-icons style-two">
              			  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			  			  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			  			  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			  			  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			  			  <li><a href="#"><i class="fa fa-flickr"></i></a></li>
			  			  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
			              </ul>
			</div>
            <div class="col-md-6 col-sm-6 text-right font-bold">
			  			  <i class="fa fa-phone"></i> +1 (012) 345 6789			  <span>/</span><a href="mailto:info@yourdomain.com">Email Us</a>
			  			  <span>/</span><a href="#">Login</a>
			  			  <span>/</span><a href="#">Register</a>
			              </div>
        </div>
      </div>
    </div>
	    <!-- end top navigation -->
    
    <header class="header whitebg headr-style-1">
    <div class="container">
      <div class="row"> 
        <!-- Menu -->
        <div class="navbar yamm navbar-default">
          <div class="container">
            <div class="navbar-header ">
              <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              			  <a href="#" class="navbar-brand logo"></a> 
			  			</div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right dark-color nopadding">
              <nav class="menu-main-menu-container"><ul id="menu-main-menu" class="nav navbar-nav menu-even"><li id="nav-menu-item-139" class="dropdown  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="#" class="menu-link dropdown-toggle">Home</a>
<ul class="dropdown-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-164" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Home Style 1</a></li>
	<li id="nav-menu-item-138" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Home Style 2</a></li>
	<li id="nav-menu-item-137" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Home Style 3</a></li>
	<li id="nav-menu-item-136" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Home Style 4</a></li>
	<li id="nav-menu-item-590" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Home Style 5</a></li>
	<li id="nav-menu-item-609" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Home Style 6</a></li>
	<li id="nav-menu-item-625" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Home Style 7</a></li>
</ul>
</li>
<li id="nav-menu-item-322" class="dropdown  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="#" class="menu-link dropdown-toggle">Domains</a>
<ul class="dropdown-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-573" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Domain Search</a></li>
	<li id="nav-menu-item-575" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Domain Transfer</a></li>
</ul>
</li>
<li id="nav-menu-item-321" class="dropdown  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="#" class="menu-link dropdown-toggle">Hosting</a>
<ul class="dropdown-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-574" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Dedicated Hosting</a></li>
	<li id="nav-menu-item-572" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Shared Hosting</a></li>
	<li id="nav-menu-item-571" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Reseller Hosting</a></li>
	<li id="nav-menu-item-570" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Unlimited Hosting</a></li>
</ul>
</li>
<li id="nav-menu-item-168" class="dropdown  menu-item-even menu-item-depth-0 wide-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="#" class="menu-link dropdown-toggle">Features</a>
<ul class="dropdown-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-186" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-maxhost_mega_menu"><div class="yamm-content"><div class="row list-unstyled"><div class="col-sm-3">
										<ul class="list-unstyled preview_font">
                              
							  <li>
                                <span class="font-white"> Features List </span>
                              </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Features Block 1</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Features Block 2</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Features Block 3</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Features Block 4</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Features Block 5</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Features Block 6</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Features Block 7</a> </li>
							  
                            </ul>
					</div>  <div class="col-sm-3">
										<ul class="list-unstyled preview_font">
                              
							  <li>
                                <span class="font-white"> Features List </span>
                              </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Iconic Features 1</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Iconic Features 2</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Iconic Features 3</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Iconic Features 4</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Iconic Features 5</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Iconic Features 6</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Iconic Features 7</a> </li>
							  
                            </ul>
					</div>  <div class="col-sm-3">
										<ul class="list-unstyled preview_font">
                              
							  <li>
                                <span class="font-white"> Features List </span>
                              </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Accordion</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Pricing Tables</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Features Block 8</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Features Block 9</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Visual Composer</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Mega Menu</a> </li>
							  
                              <li><a href="#"><i class="fa fa-angle-right"></i> Parallax</a> </li>
							  
                            </ul>
					</div>  <div class="col-sm-3">
										<div class="list-unstyled preview_font"> 
                            <!-- Wrapper for slides -->
                            <ul class="list-unstyled">
                              <li><span class="font-white"><strong></strong></span></li>
                            </ul>
                            <a href="#"><img width="278" height="187" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/images/site-img6.jpg" class="img-responsive attachment-full" alt="site-img6" /></a>
							</div>
					</div>
</div></div></li>
</ul>
</li>
<li id="nav-menu-item-167" class="dropdown  menu-item-even menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="#" class="menu-link dropdown-toggle">Pages</a>
<ul class="dropdown-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-336" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">About Style 1</a></li>
	<li id="nav-menu-item-460" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">About Style 2</a></li>
	<li id="nav-menu-item-459" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">About Style 3</a></li>
	<li id="nav-menu-item-359" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Services Style 1</a></li>
	<li id="nav-menu-item-458" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Services Style 2</a></li>
	<li id="nav-menu-item-457" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Services Style 3</a></li>
	<li id="nav-menu-item-395" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Team Style 1</a></li>
	<li id="nav-menu-item-469" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Team Style 2</a></li>
	<li id="nav-menu-item-394" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">FAQs Page</a></li>
	<li id="nav-menu-item-559" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="#" class="menu-link sub-menu-link">404 Page</a></li>
</ul>
</li>
<li id="nav-menu-item-169" class="dropdown  menu-item-even menu-item-depth-0 wide-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="#" class="menu-link dropdown-toggle">Elements</a>
<ul class="dropdown-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-190" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-maxhost_mega_menu"><div class="yamm-content"><div class="row list-unstyled"><div class="col-sm-3">
										<ul class="list-unstyled preview_font">
                              
							  <li>
                                <span class="font-white"> Elements List </span>
                              </li>
							  
                              <li><a href="#"><i class="fa fa-plus-circle"></i> Accordion</a> </li>
							  
                              <li><a href="#"><i class="fa fa-external-link-square"></i> Call to Action</a> </li>
							  
                              <li><a href="#"><i class="fa fa-leaf"></i> Columns</a> </li>
							  
                              <li><a href="#"><i class="fa fa-umbrella"></i> Flip Boxes</a> </li>
							  
                              <li><a href="#"><i class="fa fa-eye"></i> Carousel Sliders</a> </li>
							  
                              <li><a href="#"><i class="fa fa-picture-o"></i> Image Hovers</a> </li>
							  
                              <li><a href="#"><i class="fa fa-bars"></i> Button Styles</a> </li>
							  
                            </ul>
					</div>  <div class="col-sm-3">
										<ul class="list-unstyled preview_font">
                              
							  <li>
                                <span class="font-white"> Elements List </span>
                              </li>
							  
                              <li><a href="#"><i class="fa fa-tags"></i> Pricing Tables</a> </li>
							  
                              <li><a href="#"><i class="fa fa-picture-o"></i> Clients Blocks</a> </li>
							  
                              <li><a href="#"><i class="fa fa-rocket"></i> Testimonials</a> </li>
							  
                              <li><a href="#"><i class="fa fa-twitter"></i> Social Icons</a> </li>
							  
                              <li><a href="#"><i class="fa fa-font"></i> Typography</a> </li>
							  
                              <li><a href="#"><i class="fa fa-picture-o"></i> Animated Hovers</a> </li>
							  
                              <li><a href="#"><i class="fa fa-paper-plane"></i> Domain Search</a> </li>
							  
                            </ul>
					</div>  <div class="col-sm-3">
										<ul class="list-unstyled preview_font">
                              
							  <li>
                                <span class="font-white"> Elements List </span>
                              </li>
							  
                              <li><a href="#"><i class="fa fa-flag"></i> Content Boxes</a> </li>
							  
                              <li><a href="#"><i class="fa fa-list"></i> List Styles</a> </li>
							  
                              <li><a href="#"><i class="fa fa-thumbs-up"></i> Progress Bars</a> </li>
							  
                              <li><a href="#"><i class="fa fa-file-text"></i> Dividers</a> </li>
							  
                              <li><a href="#"><i class="fa fa-external-link"></i> Free Updates</a> </li>
							  
                            </ul>
					</div>  <div class="col-sm-3">
										<div class="list-unstyled preview_font">
                            <ul class="list-unstyled">
                              <li><span class="font-white"><strong>About MaxHot</strong></span></li>
                            </ul>
                            <p class="font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nisi tortor, sollicitudin eget elit et, tincidunt lobortis diam. Fusce lobortis sollicitudin metus nec consectetur. Maecenas a velit arcu. Quisque vestibulum semper metus vel molestie lobortis sollicituding.</p>
                          </div>
					</div>
</div></div></li>
</ul>
</li>
<li id="nav-menu-item-422" class="dropdown  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="#" class="menu-link dropdown-toggle">Portfolio</a>
<ul class="dropdown-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-424" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Portfolio 4 Columns</a></li>
	<li id="nav-menu-item-421" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Portfolio 3 Columns</a></li>
	<li id="nav-menu-item-420" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Portfolio 2 Columns</a></li>
	<li id="nav-menu-item-423" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Portfolio Single</a></li>
</ul>
</li>
<li id="nav-menu-item-179" class="dropdown  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="#" class="menu-link dropdown-toggle">Blog</a>
<ul class="dropdown-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-182" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Blog Full Width</a></li>
	<li id="nav-menu-item-178" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Blog 3 Columns</a></li>
	<li id="nav-menu-item-180" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Blog Standard</a></li>
	<li id="nav-menu-item-267" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="#" class="menu-link sub-menu-link">Single Post</a></li>
</ul>
</li>
<li id="nav-menu-item-162" class="dropdown  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-160 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children"><a href="#contact-us/" class="menu-link dropdown-toggle">Contact</a>
<ul class="dropdown-menu menu-odd  menu-depth-1">
	<li id="nav-menu-item-428" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-160 current_page_item"><a href="#" class="menu-link sub-menu-link">Contact Variation 1</a></li>
	<li id="nav-menu-item-427" class="  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="#" class="menu-link sub-menu-link">Contact Variation 2</a></li>
</ul>
</li>
</ul></nav>            </div>
          </div>
        </div>
      </div>
    </div>
	
	<!-- END CODES FROM MAXHOST THEME HEADER (DO not need to touch the codes below this line)-->
  </header>
  
<div class="page-header three" style="background: rgba(0, 0, 0, 0) url('<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/images/site-img41.jpg') no-repeat scroll center top;">
    <div class="container">
      <div class="col-md-6 left-padd0 m-bottom2">
        <h2 class="uppercase font-thin font-white font30 m-bottom1">Clients Area</h2>
        <h4 class="font-white font18">Clients Area</h4>
      </div>
      <div class="col-md-6">
        <div class="breadcrumbs view-links">
			<a href="#">Home</a><i>/</i><span class="current">Clients</span>
		</div>
      </div>
    </div>
  </div>
    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>
<body>

<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="primary-nav">

                <ul class="nav navbar-nav">

                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0);?>


                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0);?>


                </ul>

            </div><!-- /.navbar-collapse -->
			<!-- Login/Account Notifications -->
            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <div class="nav" style="float: right; line-height: 25px; padding: 9px 0 9px 15px;">
                    <a href="#" data-toggle="popover" id="accountNotifications" data-placement="bottom">
					<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notifications'];?>

                       <?php if (count($_smarty_tpl->tpl_vars['clientAlerts']->value)>0) {?><span class="label label-info">NEW</span><?php }?>
                        <b class="caret"></b>
                    </a>
                    <div id="accountNotificationsContent" class="hidden">
                        <ul class="client-alerts">
                         <?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientAlerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLink();?>
">
                                    <i class="fa fa-fw fa-<?php if ($_smarty_tpl->tpl_vars['alert']->value->getSeverity()=='danger') {?>exclamation-circle<?php } elseif ($_smarty_tpl->tpl_vars['alert']->value->getSeverity()=='warning') {?>warning<?php } elseif ($_smarty_tpl->tpl_vars['alert']->value->getSeverity()=='info') {?>info-circle<?php } else { ?>check-circle<?php }?>"></i>
                                    <div class="message"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>
</div>
                                </a>
                            </li>
                         <?php }
if (!$_smarty_tpl->tpl_vars['alert']->_loop) {
?>
                            <li class="none">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notificationsnone'];?>

                            </li>
                         <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } else { ?>
                <div class="nav" style="float: right; line-height: 25px; padding: 9px 0 9px 15px;">
                    <ul class="notloggedinuser">
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</a>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['allowClientRegistration']) {?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</a>
							</li>
						<?php }?>
						<li class="primary-action">
							<a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view">
								<?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>

							</a>
						</li>
					</ul>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value||$_smarty_tpl->tpl_vars['adminLoggedIn']->value) {?>
                <!-- Return to admin link -->
                <div class="alert alert-danger admin-masquerade-notice">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1" class="btn btn-logged-in-admin" data-toggle="tooltip" data-placement="bottom" title="<?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value) {
echo $_smarty_tpl->tpl_vars['LANG']->value['adminmasqueradingasclient'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutandreturntoadminarea'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['adminloggedin'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['returntoadminarea'];
}?>">
						<i class="fa fa-sign-out"></i>
                    </a>
                </div>
            <?php }?>
        </div>
    </nav>

</section>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value=='homepage') {?>
    <section id="home-banner">
        <div class="container text-center">
            <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value||$_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
			<h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['homebegin'];?>
</h2>
                <form method="post" action="domainchecker.php">
                    <div class="row">
                        <div class="col-md-12 col-sm-10">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['exampledomain'];?>
" autocapitalize="none" />
                                <span class="input-group-btn">
                                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                                        <input type="submit" class="btn btn-warning search" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
" />
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                                        <input type="submit" name="transfer" class="btn btn-info transfer" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
" />
                                    <?php }?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </form>
            <?php } else { ?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['doToday'];?>
</h2>
            <?php }?>
        </div>
    </section>
    <div class="home-shortcuts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs text-center">
                    <p class="lead">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['howcanwehelp'];?>

                    </p>
                </div>
                <div class="col-sm-12 col-md-8">
                    <ul>
                        <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value||$_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                            <li>
                                <a id="btnBuyADomain" href="domainchecker.php">
                                    <i class="fa fa-globe"></i>
                                    <p>
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['buyadomain'];?>
 <span>&raquo;</span>
                                    </p>
                                </a>
                            </li>
                        <?php }?>
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="fa fa-hdd-o"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderhosting'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnMakePayment" href="clientarea.php">
                                <i class="fa fa-credit-card"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['makepayment'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['getsupport'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section id="main-body">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>-fluid without-padding<?php }?>">
        <div class="row">
        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()||$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
            <?php if ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()&&!$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>
                <div class="col-md-9 pull-md-right">
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0);?>

                </div>
            <?php }?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0);?>

            </div>
        <?php }?>
        <!-- Container for main page display content -->
        <div class="<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()||$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>col-md-9 pull-md-right<?php } else { ?>col-xs-12<?php }?> main-content">
            <?php if (!$_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()&&!$_smarty_tpl->tpl_vars['showingLoginPage']->value&&!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&$_smarty_tpl->tpl_vars['templatefile']->value!='homepage'&&!$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0);?>

            <?php }?>
<?php }} ?>
