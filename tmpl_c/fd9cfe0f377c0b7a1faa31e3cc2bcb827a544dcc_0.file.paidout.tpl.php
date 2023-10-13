<?php /* Smarty version 3.1.27, created on 2023-10-13 14:23:43
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/paidout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:524190648652952ef2fc7b4_31399120%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9cfe0f377c0b7a1faa31e3cc2bcb827a544dcc' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/paidout.tpl',
      1 => 1689075990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '524190648652952ef2fc7b4_31399120',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
    'month' => 0,
    'frm' => 0,
    'year' => 0,
    'stats' => 0,
    'currency_sign' => 0,
    's' => 0,
    'total_withdraw' => 0,
    'colpages' => 0,
    'prev_page' => 0,
    'pages' => 0,
    'next_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652952ef371586_86053111',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652952ef371586_86053111')) {
function content_652952ef371586_86053111 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/capicoin.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '524190648652952ef2fc7b4_31399120';
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
                  <li><a href="?a=affiliate">AFFILIATES</a></li>
                  <li><a href="?a=support">SUPPORT</a></li>
                  <li><a style="color:#c79021!important;"href="?a=paidout">PAID</a></li>
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
          <h3>Paid Out</h3>
        </div>
      </div>
    </div>

  </div>

  <div class="inside_wrap">
    <div class="inside_inner">
      <div class="panel-group one" id="accordion" role="tablist" aria-multiselectable="true">


        <?php echo '<script'; ?>
 language=javascript>
        function go(p)
        {
          document.opts.page.value=p;
          document.opts.submit();
        }
      <?php echo '</script'; ?>
>


      <form method=post name=opts><input type="hidden" name="form_id" value="15506316346557"><input type="hidden" name="form_token" value="0f46495f8d9e575fc937e3826b02f43a">
        <input type=hidden name=a value=paidout>
        <input type=hidden name=page value=1>
        <table cellspacing=0 cellpadding=0 border=0 width=100<?php echo '%>';?><tr>

          <td align=right>
            <select name=month class=inpts>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['month'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['name'] = 'month';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total']);
?>
              <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['month']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['month']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['month']->value[$_smarty_tpl->getVariable('smarty')->value['section']['month']['index']]);?>

                <?php endfor; endif; ?>
              </select> &nbsp;
              <select name=year class=inpts>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['name'] = 'year';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total']);
?>
                <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year']['index']]);?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year']['index']] == $_smarty_tpl->tpl_vars['frm']->value['year']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year']['index']]);?>

                  <?php endfor; endif; ?>
                </select>
              </td>
              <td width=1% nowrap>
                &nbsp; <input type=submit value="Go" class=sbmt>
              </td>
            </tr></table>
          </form>
          <br>

          <table style="border-collapse: separate!important;" spacing=1 cellpadding=2 border=1 width=100<?php echo '%>';?><tr>
            <tr>
              <td align="center" width="18%">Username</td>
              <td align="center" width="22%">Date</td>
              <td align="center" width="17%">Amount</td>
              <td align="center" width="18%">Payment</td>
              <td align="center" width="25%">Transaction ID</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['stats']->value) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['stats']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
            <tr>
              <td align="center" width="18%"><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['stats']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['username']);?>
</b></td>
              <td align="center" width="22%"><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['stats']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['dd']);?>
</b></td>
              <td align="center" width="17%"><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['stats']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['actual_amount']);?>
</b></td>
              <td align="center" width="18%"><b><img src="images/47.gif"></b></td><!--REMOVE EXAMPLE ICON BITCOIN-->
              <!-- <td align="center" width="18%"><b><img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['ec']);?>
.gif"></b></td> ENABLE-->
              <td align="center" width="25%"><b><a style="color: #fff;" href="https://chain.so/tx/BTC/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['stats']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['batch']);?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['stats']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['batch'] != 0) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['stats']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['batch']);?>
 <?php } else { ?>  <label style="color: #fff;"> - </label>  <?php }?></a></b></td>
            </tr>
            <?php endfor; endif; ?>
            <?php } else { ?>
            <tr>
              <td colspan=3 align=center>No transactions found</td>
            </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['stats']->value) {?>
            <tr>
              <td colspan=2 align=center><b>TOTAL</b></td>
              <td colspan=3 align=center><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['total_withdraw']->value);?>
</b></td>
            </tr>
            <?php }?>
          </table>

          <br>
          <?php if ($_smarty_tpl->tpl_vars['colpages']->value > 1) {?>
          <center>
            <?php if ($_smarty_tpl->tpl_vars['prev_page']->value > 0) {?>
            <a href="javascript:go('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['prev_page']->value);?>
')">&lt;&lt;</a>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
            <?php if ($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['current'] == 1) {?>
            <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['page']);?>

            <?php } else { ?>
            <a href="javascript:go('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['page']);?>
')"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['page']);?>
</a>
            <?php }?>
            <?php endfor; endif; ?>
            <?php if ($_smarty_tpl->tpl_vars['next_page']->value > 0) {?>
            <a href="javascript:go('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['next_page']->value);?>
')">&gt;&gt;</a>
            <?php }?>
          </center>
          <?php }?>
          <br>

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

              </div></div>
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