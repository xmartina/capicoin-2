<?php /* Smarty version 3.1.27, created on 2023-10-13 14:22:46
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/forgot_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1828341779652952b638dbc7_56489654%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '933cfecdd8cceaa36414f9d26056364cf728a2d5' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/forgot_password.tpl',
      1 => 1689075990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1828341779652952b638dbc7_56489654',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
    'errors' => 0,
    'found_records' => 0,
    'frm' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652952b63c3ef2_74615999',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652952b63c3ef2_74615999')) {
function content_652952b63c3ef2_74615999 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/capicoin.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1828341779652952b638dbc7_56489654';
?>
<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 LTD</title>
    <link rel="shortcut icon" href="styles/assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <link href='styles/assets/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='styles/assets/animate.css' rel='stylesheet' type='text/css'>
    <link href='styles/assets/custom_back.css' rel='stylesheet' type='text/css'>
    <?php echo '<script'; ?>
 src='styles/assets/jquery.js' type='text/javascript'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/assets/wow.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/assets/wow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/assets/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='styles/assets/setting.js' type='text/javascript'><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        //// Get the CryptoCurrency Information from the API
        jQuery.ajax({
            url: "https://min-api.cryptocompare.com/data/pricemulti",
            data: "fsyms=BTC,ETH,DASH,LTC&tsyms=USD",
            dataType: 'json',
        }).done(function(data) {
            // console.log( "BTC : " + data.BTC.USD + ", ETH : " + data.ETH.USD + ", DASH : " + data.DASH.USD, LTC : " + data.LTC.USD);
            jQuery(".dashCoin").html('$' + data.DASH.USD);
            jQuery(".ethCoin").html('$' + data.ETH.USD);
            jQuery(".bitCoin").html('$' + data.BTC.USD);
            jQuery(".liteCoin").html('$' + data.LTC.USD);
        }).fail(function() {
            console.log("API error");
        });

    <?php echo '</script'; ?>
>

</head>

<body>
    <div class="wrapper">
        <div class="headerContainer">
            <div class="headerInner fadeInLeft wow"> <a href="?a=home" id="logo"></a>
                <p>1 BTC: <span class="bitCoin"></span></p>
                <div class="hdRight">
                    <div class="mainNavRight">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <ul class="nav">
                                    <li><a href="?a=home">Home</a></li>
                                    <li><a href="?a=about">About</a></li>
                                    <li><a href="?a=faq">FAQ </a></li>
                                    <li><a href="?a=cust&amp;page=investment">PLANS</a></li>
                                    <li><a href="?a=affiliate">AFFILIATES</a></li>
                                    <li><a href="?a=support">SUPPORT</a></li>
                                    <li><a href="?a=paidout">PAID</a></li>
                                    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
                                    <li><a href="?a=login" class="login">login</a></li>
                                    <li><a href="?a=signup" class="signup">signup</a></li><?php } else { ?>

                                    <li><a href="?a=account" class="signup">dashboard</a></li><?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bannerContainer">
            <div class="bannerInner insideheader fadeInRight wow">
                <div class="ctn-banner">
                    <h3><span>Retrive Password!</span></h3>
                </div>
            </div>
        </div>

    </div>

    <body class="loginarea">



        <?php echo '<script'; ?>
 language=javascript>
            function checkform() {
                if (document.forgotform.email.value == '') {
                    alert("Please type your username or email!");
                    document.forgotform.email.focus();
                    return false;
                }
                return true;
            }

        <?php echo '</script'; ?>
>






        <div class="loginpage">
            <div class="becomeInner">
                <div class="loginwrappers">

                    <div class="form-container login">
                        <div class="form-container login">


                            
                            <?php echo '<script'; ?>
 language=javascript>
                                function checkform() {
                                    if (document.forgotform.email.value == '') {
                                        alert("Please type your username or email!");
                                        document.forgotform.email.focus();
                                        return false;
                                    }
                                    return true;
                                }

                            <?php echo '</script'; ?>
>
                            


                            <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?>
                            Invalid turing image<br><br>
                            <?php }?>


                            <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 2) {?>
                            Your accound was found. Please check your e-mail address and follow confirm URL to reset your password.
                            <br><br>
                            <?php } else { ?>

                            <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 0) {?>
                            No accounts found for provided info.
                            <br><br>
                            <?php } elseif ($_smarty_tpl->tpl_vars['found_records']->value == 1) {?>
                            Request was confirmed. Login and password was sent to your email address.
                            <br><br>
                            <?php }?>

                            <form method=post name=forgotform onsubmit="return checkform();">
                                <input type=hidden name=a value="forgot_password">
                                <input type=hidden name=action value="forgot_password">
                                <table cellspacing=0 cellpadding=2 border=0>
                                    <tr>
                                        <td>Type your username or e-mail:
                                            <input type=text name='email' value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" class=inpts size=30></td>
                                    </tr>
                                    <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['forgot_password']) {?>
                                    <tr>

                                        <td> Code: <img src="<?php echo smarty_modifier_myescape(encurl(" ?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"> <input type=text name=validation_number class=inpts size=15></td>
                                    </tr>
                                    <?php }?>
                                    <tr>

                                        <td><input type=submit value="Forgot" class=sbmt></td>
                                    </tr>
                                </table>
                            </form><br><br>
                            <?php }?>

                        </div>
                    </div>
                </div>
                <div class="loginpageright"><img src="styles/assets/images/loginpageright.png" alt="" /></div>
            </div>
        </div>


    </body>
    <div class="primebitContainer">
        <div class="primebitInner">
            <h1><span>3 level</span> Referral commission</h1>
            <div class="ctn-level">
                <div class="livel-part">
                    <h2>4<span>%</span></h2>
                    <p>livel1</p>
                </div>
                <div class="livel-img">
                    <img src="styles/assets/images/call-ic2.png">
                </div>
                <div class="livel-part">
                    <h2>0.5<span>%</span></h2>
                    <p>livel2</p>
                </div>
                <div class="livel-img">
                    <img src="styles/assets/images/call-ic2.png">
                </div>
                <div class="livel-part">
                    <h2>0.5<span>%</span></h2>
                    <p>livel3</p>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="solidContainer">
        <div class="solidInner zoomIn wow">
            <div class="solid"> <a href="#" class="solid1"></a> <a href="#" class="solid2"></a> <a href="#" class="solid3"></a> <a href="#" class="solid4"></a> <a href="#" class="solid5"></a> <a href="#" class="solid6"></a> <a href="#" class="solid7"></a> <a href="#" class="solid8"></a> </div>
        </div>
    </div>
    <div class="footerContainer">
        <div class="footerInner">
            <div class="ft-row1">
                <h3>&copy; 2019. <a href="?a=home"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</a> ALL RIGHTS RESERVED</h3>
            </div>
            <div class="ft-part1"> <a href="?a=about">ABOUT US</a> <a href="?a=news">NEWS</a> <a href="?a=faq">FAQ</a> <a href="?a=support">support</a> <a href="?a=rules">terms</a><a href="?a=paidout">ALL PAID </a><a href="?a=refs10">Refs Top 50 </a></div>
        </div>
    </div>
</body>

</html>
<?php }
}
?>