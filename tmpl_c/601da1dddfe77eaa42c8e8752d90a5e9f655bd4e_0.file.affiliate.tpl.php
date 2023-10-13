<?php /* Smarty version 3.1.27, created on 2023-10-13 14:23:26
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/custom/affiliate.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:603470255652952ded8a948_70901652%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '601da1dddfe77eaa42c8e8752d90a5e9f655bd4e' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/custom/affiliate.tpl',
      1 => 1689075990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603470255652952ded8a948_70901652',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652952dedac804_82043049',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652952dedac804_82043049')) {
function content_652952dedac804_82043049 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/capicoin.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '603470255652952ded8a948_70901652';
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
    dataType : 'json',
  }).done(function(data) {
    // console.log( "BTC : " + data.BTC.USD + ", ETH : " + data.ETH.USD + ", DASH : " + data.DASH.USD, LTC : " + data.LTC.USD);
    jQuery(".dashCoin").html('$' + data.DASH.USD);
    jQuery(".ethCoin").html('$' + data.ETH.USD);
    jQuery(".bitCoin").html('$' + data.BTC.USD);
    jQuery(".liteCoin").html('$' + data.LTC.USD);
  }).fail(function() {
    console.log( "API error" );
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
                  <li><a style="color:#c79021!important;" href="?a=affiliate">AFFILIATES</a></li>
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
          <h3>Affiliate <span>Program</span></h3>
        </div>
      </div>
    </div>

  </div>

  <div class="inside_wrap">
    <div class="inside_inner">
      <P>At <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 LTD, we believe there is no better advertisement than satisfied clients. No wonder that majority of our new clients are affiliates from our existing clients. We are proud that our clients like to recommend our financial service to others. Because of this, we are pleased to offer one of the strongest online affiliate programs in the financial service industry, with a high commission rate, customized tools and reports, and timely commission payouts. </P>
      <P><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 LTD is paying for the popularization of its investment program and anyone can be rewarded. To benefit from this, you have to tell your friends, relatives or colleagues about our company. We offer 3 level referral commissions: The first level of direct referrals from you will entitle you to a commission of 4%, and second level gives you commission of 0.5% and third level is 0.5% . You can surely make a lot of money from the referral commissions you get! </P>
    </div>
  </div>
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

  <div class="ref_wrap">
    <div class="inside_inner">
      <div class="ref_box ref1">
        <div class="ref_box_left"><img src="styles/assets/images/ref_left_icon.png" alt="" /></div>
        <div class="ref_box_right">
          <h3>Promote <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 LTD</h3>
          <p>Present our project to your friends, family, or any other community, advertise &amp; promote it everywhere and enjoy the financial benefits. You don't even need an active deposit to receive affiliate commission.</p>
        </div>
      </div>
      <div class="ref_box ref2">
        <div class="ref_box_left"><img src="styles/assets/images/ref_right_icon.png" alt="" /></div>
        <div class="ref_box_right">
          <h3>Get Affiliates &amp; Earn Money</h3>
          <p>Once someone registers through your referral link, he automatically becomes your referral! You will receive 4% referral commission for every deposit that your direct referral makes from his wallet. We also offer a second level referral commission - 0.5% and third level 0.5%.</p>
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
      <div class="ft-part1"> <a href="?a=about">ABOUT US</a> <a href="?a=news">NEWS</a> <a href="?a=faq">FAQ</a> <a href="?a=support">support</a> <a href="?a=rules">terms</a><a href="?a=paidout">ALL PAID </a></div>
    </div>
  </div>
</body>

</html> 
<?php }
}
?>