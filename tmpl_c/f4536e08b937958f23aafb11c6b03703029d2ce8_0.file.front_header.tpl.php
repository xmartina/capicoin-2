<?php /* Smarty version 3.1.27, created on 2023-10-13 14:23:35
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/front_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1960719876652952e73b5189_35584291%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4536e08b937958f23aafb11c6b03703029d2ce8' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/front_header.tpl',
      1 => 1689599804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1960719876652952e73b5189_35584291',
  'variables' => 
  array (
    'SiteNAme' => 0,
    'pageName' => 0,
    'SiteName' => 0,
    'PageTage' => 0,
    'siteLogo' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652952e73c9da1_38268152',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652952e73c9da1_38268152')) {
function content_652952e73c9da1_38268152 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/capicoin.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1960719876652952e73b5189_35584291';
$_smarty_tpl->tpl_vars['SiteName'] = new Smarty_Variable("Capital Coin Investment", null, 0);?>
<?php $_smarty_tpl->tpl_vars['PageTage'] = new Smarty_Variable("Secured Investment Platform", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteLogo'] = new Smarty_Variable("/assets/images/logo/logo.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteLogoDark'] = new Smarty_Variable("/assets/images/logo/logo.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteIcon'] = new Smarty_Variable("/assets/images/logo/favicon.png", null, 0);?>



            <!DOCTYPE html>
            <html lang="zxx" class="js">

            <head>
                <base href="../">
                <meta charset="utf-8">
                <meta name="author" content="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['SiteNAme']->value);?>
">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
                <!-- Fav Icon  -->
                <link rel="shortcut icon" href="./images/favicon.png">
                <!-- Page Title  -->
                <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pageName']->value);?>
 | <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['SiteName']->value);?>
 - <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['PageTage']->value);?>
</title>
                <!-- StyleSheets  -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" />
                <link rel="stylesheet" href="/front_assets/css/dashlite.css?ver=3.2.0">
                <link id="skin-default" rel="stylesheet" href="/front_assets/css/theme.css?ver=3.2.0">
                <link id="skin-default" rel="stylesheet" href="/front_assets/css/jumbo.css">
                <style>
                    .carousel-inner > .item > img,
                    .carousel-inner > .item > a > img {
                        object-fit: cover;
                        width: 100%;
                        height: 360px;
                        margin: auto;
                    }
                    .about-sec-2-img{
                        width: 100%;
                        height: 490px;
                        object-fit: cover;
                        object-position: center center;
                    }
                </style>
            </head>

            <body class="nk-body bg-white npc-landing ">
            <div class="nk-app-root">
                <!-- main @s -->
                <div class="nk-main ">
                    <header class="header header-32 has-header-main-s1 bg-dark" id="home">
                        <div class="header-main header-main-s1 is-sticky is-transparent on-dark">
                            <div class="container header-container">
                                <div class="header-wrap">
                                    <div class="header-logo">
                                        <a href="/" class="logo-link">
                                            <img class="logo-light logo-img" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
" srcset="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
 2x" alt="logo">
                                            <img class="logo-dark logo-img" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
" srcset="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
 2x" alt="logo-dark">
                                        </a>
                                    </div>
                                    <div class="header-toggle">
                                        <button class="menu-toggler" data-target="mainNav">
                                            <em class="menu-on icon ni ni-menu"></em>
                                            <em class="menu-off icon ni ni-cross"></em>
                                        </button>
                                    </div><!-- .header-nav-toggle -->
                                    <nav class="header-menu" data-content="mainNav">
                                        <ul class="menu-list ms-lg-auto">
                                            <li class="menu-item has-sub">
                                            </li>
                                            <li class="menu-item" onclick="location.href='?a=home'"><a href="#home" class="menu-link nav-link">Home</a></li>
                                            <li class="menu-item" onclick="location.href='?a=about'"><a href="#feature" class="menu-link nav-link">About</a></li>
                                            <li class="menu-item" onclick="location.href='?a=faq'"><a href="#pricing" class="menu-link nav-link">FAQ</a></li>
                                            <li class="menu-item" onclick="location.href='?a=support'"><a href="#story" class="menu-link nav-link">Contact</a></li>
                                        </ul>
                                        <ul class="menu-btns">
                                            <li>
                                                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
                                                    <a href="?a=signup" target="_blank" class="btn btn-primary btn-lg">Account</a>
                                                <?php } else { ?>
                                                    <a href="?a=account" target="_blank" class="btn btn-primary btn-lg">My Dashboard</a>
                                                <?php }?>
                                            </li>
                                        </ul>
                                    </nav><!-- .nk-nav-menu -->
                                </div><!-- .header-warp-->
                            </div><!-- .container-->
                        </div><!-- .header-main--><?php }
}
?>