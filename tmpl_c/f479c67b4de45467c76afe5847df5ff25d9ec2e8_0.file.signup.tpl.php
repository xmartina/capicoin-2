<?php /* Smarty version 3.1.27, created on 2023-10-13 14:22:12
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1054278128652952940d9249_21455334%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f479c67b4de45467c76afe5847df5ff25d9ec2e8' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/signup.tpl',
      1 => 1689616754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1054278128652952940d9249_21455334',
  'variables' => 
  array (
    'siteLogoDark' => 0,
    'SiteName' => 0,
    'deny_registration' => 0,
    'settings' => 0,
    'referer' => 0,
    'errors' => 0,
    'account_errors' => 0,
    'err' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6529529418ef37_89252900',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6529529418ef37_89252900')) {
function content_6529529418ef37_89252900 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/capicoin.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';
if (!is_callable('smarty_modifier_escape')) require_once '/home/multistream6/domains/capicoin.online/public_html/inc/libs/smarty3/plugins/modifier.escape.php';

$_smarty_tpl->properties['nocache_hash'] = '1054278128652952940d9249_21455334';
$_smarty_tpl->tpl_vars['SiteName'] = new Smarty_Variable("Capital Coin Investment", null, 0);?>
<?php $_smarty_tpl->tpl_vars['PageTage'] = new Smarty_Variable("Secured Investment Platform", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteLogo'] = new Smarty_Variable("/assets/images/logo/logo.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteLogoDark'] = new Smarty_Variable("/assets/images/logo/logo.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteIcon'] = new Smarty_Variable("/assets/images/logo/favicon.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Signup", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="nk-body npc-crypto bg-white pg-auth">
<!-- app body @s -->
<div class="nk-app-root">
    <div class="nk-split nk-split-page nk-split-md">
        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
            <div class="nk-block nk-block-middle nk-auth-body">
                <div class="brand-logo pb-5">
                    <a href="/" class="logo-link">
                        <img class="logo-light logo-img logo-img-lg" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogoDark']->value);?>
" srcset="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogoDark']->value);?>
 2x" alt="logo">
                        <img class="logo-dark logo-img logo-img-lg" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogoDark']->value);?>
" srcset="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogoDark']->value);?>
 2x" alt="logo-dark">
                    </a>
                </div>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title">Register</h5>
                        <div class="nk-block-des">
                            <p>Create New <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['SiteName']->value);?>
 Account</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->

                <?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
                <h3 style="text-align: center;"> We are closed for new registrations now.</h3>
                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
                <h5 style="text-align: center;"> You do not have a upline. Our system require a upline for each user.</h5>
                <?php } else { ?>
                

                    <?php echo '<script'; ?>
 language=javascript>
                        function checkform() {
                            if (document.regform.fullname.value == '') {
                                alert("Please enter your full name!");
                                document.regform.fullname.focus();
                                return false;
                            } {
                                /literal} {
                                if $settings.use_user_location == 1
                                    } {
                                literal
                            }
                            if (document.regform.address.value == '') {
                                alert("Please enter your address!");
                                document.regform.address.focus();
                                return false;
                            }
                            if (document.regform.city.value == '') {
                                alert("Please enter your city!");
                                document.regform.city.focus();
                                return false;
                            }
                            if (document.regform.state.value == '') {
                                alert("Please enter your state!");
                                document.regform.state.focus();
                                return false;
                            }
                            if (document.regform.zip.value == '') {
                                alert("Please enter your ZIP!");
                                document.regform.zip.focus();
                                return false;
                            }
                            if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
                                alert("Please choose your country!");
                                document.regform.country.focus();
                                return false;
                            } {
                                /literal} { /
                                if
                                    } {
                                literal
                            }
                            if (document.regform.username.value == '') {
                                alert("Please enter your username!");
                                document.regform.username.focus();
                                return false;
                            }
                            if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
                                alert("For username you should use English letters and digits only!");
                                document.regform.username.focus();
                                return false;
                            }
                            if (document.regform.password.value == '') {
                                alert("Please enter your password!");
                                document.regform.password.focus();
                                return false;
                            }
                            if (document.regform.password.value != document.regform.password2.value) {
                                alert("Please check your password!");
                                document.regform.password2.focus();
                                return false;
                            } {
                                /literal} {
                                if $settings.use_transaction_code
                                    } {
                                literal
                            }
                            if (document.regform.transaction_code.value == '') {
                                alert("Please enter your transaction code!");
                                document.regform.transaction_code.focus();
                                return false;
                            }
                            if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
                                alert("Please check your transaction code!");
                                document.regform.transaction_code2.focus();
                                return false;
                            } {
                                /literal} { /
                                if
                                    } {
                                literal
                            }
                            if (document.regform.email.value == '') {
                                alert("Please enter your e-mail address!");
                                document.regform.email.focus();
                                return false;
                            }
                            if (document.regform.email.value != document.regform.email1.value) {
                                alert("Please retupe your e-mail!");
                                document.regform.email.focus();
                                return false;
                            }

                            for (i in document.regform.elements) {
                                f = document.regform.elements[i];
                                if (f.name && f.name.match(/^pay_account/)) {
                                    if (f.value == '') continue;
                                    var notice = f.getAttribute('data-validate-notice');
                                    var invalid = 0;
                                    if (f.getAttribute('data-validate') == 'regexp') {
                                        var re = new RegExp(f.getAttribute('data-validate-regexp'));
                                        if (!f.value.match(re)) {
                                            invalid = 1;
                                        }
                                    } else if (f.getAttribute('data-validate') == 'email') {
                                        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                                        if (!f.value.match(re)) {
                                            invalid = 1;
                                        }
                                    }
                                    if (invalid) {
                                        alert('Invalid account format. Expected ' + notice);
                                        f.focus();
                                        return false;
                                    }
                                }
                            }

                            if (document.regform.agree.checked == false) {
                                alert("You have to agree with the Terms and Conditions!");
                                return false;
                            }

                            return true;
                        }

                        function IsNumeric(sText) {
                            var ValidChars = "0123456789";
                            var IsNumber = true;
                            var Char;
                            if (sText == '') return false;
                            for (i = 0; i < sText.length && IsNumber == true; i++) {
                                Char = sText.charAt(i);
                                if (ValidChars.indexOf(Char) == -1) {
                                    IsNumber = false;
                                }
                            }
                            return IsNumber;
                        }

                    <?php echo '</script'; ?>
>
                


                <form method=post onsubmit="return checkform()" name="regform">
                <input type=hidden name=a value="signup">
                <input type=hidden name=action value="signup">

                    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                        <ul style="color:red">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'full_name') {?>
                            <li>Please enter your full name!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'address') {?>
                            <li>Please enter your address!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'city') {?>
                            <li>Please enter your city!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'state') {?>
                            <li>Please enter your state!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'zip') {?>
                            <li>Please enter your zip!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'country') {?>
                            <li>Please choose your country!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username') {?>
                            <li>Please enter valid username! It should contains English letters and digits only.
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username_exists') {?>
                            <li>Sorry, such user already exists! Please try another username.
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email_exists') {?>
                            <li>Sorry, such email already exists! Please try another email.
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?>
                            <li>Please enter a password!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?>
                            <li>Please check your password!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
                            <li>The password you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?>
                            <li>Please enter the Transaction Code!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?>
                            <li>Please check your Transaction Code!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
                            <li>The Transaction Code you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?>
                            <li>The Transaction Code should differ from the Password!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'egold') {?>
                            <li>Please enter your e-gold account number!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_perfectmoney_account') {?>
                            <li>Please enter USD PerfectMoney account number!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?>
                            <li>Please enter your e-mail!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'agree') {?>
                            <li>You have to agree with the Terms and Conditions!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
                            <li>Enter the verification code as it is shown in the corresponding box.
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'no_upline') {?>
                            <li>The system requires an upline to register. <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>You have to be agreed to random one or found a referral link in the net.<?php }?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'ip_exists_in_database') {?>
                            <li>Your IP already exists in our database. Sorry, but registration impossible.
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_account_format') {?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['account_errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
                            <li><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>

                                <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
                                <?php }?>

                                <br>
                                <?php endfor; endif; ?>
                        </ul>
                    <?php }?>
                    <div class="form-group">
                        <label class="form-label" for="Full Name" >Full Name</label>
                        <div class="form-control-wrap">
                            <input name=fullname value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['fullname'], " quotes"));?>
" type="text" class="form-control form-control-lg" id="email" placeholder="Enter Full Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="Full Name" >Email</label>
                                <div class="form-control-wrap">
                                    <input name=email value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['email'], " quotes"));?>
" type="email" class="form-control form-control-lg" id="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="Full Name" >Retype Email</label>
                                <div class="form-control-wrap">
                                    <input name=email1 value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['email1'], " quotes"));?>
" type="email" class="form-control form-control-lg" id="email" placeholder="Retype Email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="Full Name" >Username</label>
                        <div class="form-control-wrap">
                            <input name=username value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['username'], " quotes"));?>
" type="text" class="form-control form-control-lg" id="email" placeholder="Enter Username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="Secret_Question" >Secret Question</label>
                                <div class="form-control-wrap">
                                    <input name=sq value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['sq'], " quotes"));?>
" type="text" class="form-control form-control-lg" id="email" placeholder="Enter Secret Question">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="Secret_Answer" >Secret Answer</label>
                                <div class="form-control-wrap">
                                    <input name=sa value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['sa'], " quotes"));?>
" type="text" class="form-control form-control-lg" id="email" placeholder="Enter Secret_Answer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Passcode</label>
                        <div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" name=password value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['password'], " quotes"));?>
" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="form-label" for="password">Retype Passcode</label>
                                <div class="form-control-wrap">
                                    <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="retype-password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    
                                    <input type="password" name=password2 value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['password2'], " quotes"));?>
" class="form-control form-control-lg" id="retype-password" placeholder="Retype your passcode">
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program']) {?>
<?php if ($_smarty_tpl->tpl_vars['referer']->value) {?>
<tr>
 <td>Your Upline:</td>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referer']->value['name']);?>
 (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referer']->value['username']);?>
)</td>
</tr>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['force_upline']) {?>
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
  <tr>
   <td colspan=2>
    You do not have an upline. Our system requires an upline for each user. You'll have to agree to get a random one or find a referral link on the net.
    <input type=checkbox name="rand_ref" value=1>
   </td>
  </tr>
 <?php } else { ?>
  <tr>
   <td colspan=2>
    You do not have an upline. Our system requires an upline for each user.
   </td>
  </tr>
 <?php }?>
<?php }?>
<?php }?>
<?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right mt-3">
                        <div class="custom-control custom-control-xs custom-checkbox text-right">
                            <input type="checkbox" name=agree value=1 class="custom-control-input" id="checkbox">
                            <label class="custom-control-label text-right" for="checkbox">I agree to <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['SiteName']->value);?>
 <a tabindex="-1" href="?a=rules">Privacy Policy</a> &amp; <a tabindex="-1" href="?a=rules"> Terms.</a></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type=submit value="Register" class="btn btn-lg btn-primary btn-block">Register</button>
                    </div>
                </form><!-- form -->
                <div class="form-note-s2 pt-4"> Already have an account ? <a href="?a=login"><strong>Sign in instead</strong></a>
                </div>
            </div><!-- .nk-block -->
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("auth_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>