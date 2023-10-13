<?php /* Smarty version 3.1.27, created on 2023-10-13 14:22:53
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/home_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1504232508652952bde62a61_29393817%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56c6457306093bbd3ccb1867b4dcf2f5d3cdb2eb' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/home_slider.tpl',
      1 => 1689601122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1504232508652952bde62a61_29393817',
  'variables' => 
  array (
    'SiteName' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652952bde72245_15040322',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652952bde72245_15040322')) {
function content_652952bde72245_15040322 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/capicoin.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1504232508652952bde62a61_29393817';
$_smarty_tpl->tpl_vars['SiteName'] = new Smarty_Variable("Capital Coin Investment", null, 0);?>
<div class="jumbo">
    <div class="jumbo-bg py-5">
        <div class="jumbo-cont pl-4 container py-4">
            <div class="cont-1 pb-3 align-items-center d-flex flex-row no-wrap">
                <div class="d-flex justify-content-center align-items-center mr-2">
                    <hr class="bg-set">
                </div>
                <span class="text-light">Unbeatable Investment Plans</span>
            </div>
            <div class="cont-2 text-warning h5">Welcome to</div>
            <div class="cont-3 h1 font-weight-bolder ff-base text-warning"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['SiteName']->value);?>
</div>
            <div class="cont-4 text-light my-3">
                <div class="row">
                    <div class="col-lg-6">
                        Our knowledgeable professionals and industry leading tools are united to do one thing: make you a smarter, more profitable investor.
                    </div>
                </div>
            </div>
            <div class="cont-5">
                <button class="btn bg-warning text-dark" onclick="location.href='<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>?a=login<?php } else { ?>?a=account<?php }?>'"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>Get Started<?php } else { ?>My Account<?php }?></button>
            </div>
        </div>
    </div>
</div><?php }
}
?>