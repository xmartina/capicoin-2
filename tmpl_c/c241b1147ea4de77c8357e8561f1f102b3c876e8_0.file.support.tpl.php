<?php /* Smarty version 3.1.27, created on 2023-10-13 14:23:35
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/support.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2143106119652952e73681d9_32021631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c241b1147ea4de77c8357e8561f1f102b3c876e8' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/support.tpl',
      1 => 1689462751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2143106119652952e73681d9_32021631',
  'variables' => 
  array (
    'say' => 0,
    'userinfo' => 0,
    'errors' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652952e73aa0c5_24174035',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652952e73aa0c5_24174035')) {
function content_652952e73aa0c5_24174035 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/capicoin.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '2143106119652952e73681d9_32021631';
$_smarty_tpl->tpl_vars['SiteName'] = new Smarty_Variable("Capital Coin Investment", null, 0);?>
<?php $_smarty_tpl->tpl_vars['PageTage'] = new Smarty_Variable("Secured Investment Platform", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteLogo'] = new Smarty_Variable("/assets/images/logo/logo.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteLogoDark'] = new Smarty_Variable("/assets/images/logo/logo.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteIcon'] = new Smarty_Variable("/assets/images/logo/favicon.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Contact Us", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("front_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<section class="section bg-lighter section-faq" id="faqs">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-6">
        <div class="section-head">
          <h2 class="title">Contact Us</h2>
        </div><!-- .section-head -->
      </div><!-- .col -->
    </div><!-- .row -->
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="my-3 mx-4">
          Do You have any questions?<br>
          We strongly recommend that you start searching for the necessary information in the <a href="?a=faq">FAQ</a>section.
          If you need advice or technical assistance, do not hesitate to contact our specialists.
          Customer support is available around the clock <br>
          You just need <br>
          to send a letter or a request via the feedback form to promptly receive the necessary assistance.
          Remember that the more detailed the description of your problem is, the sooner it will be solved.
          Do not forget to indicate your login if you are a registered user of the website.
        </div>
      </div><!-- .col -->
      <div class="col-lg-6">
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'send') {?>
          <p class="mx-3 my-2 text-warning">Message has been successfully sent. We will back to you in next 24 hours. Thank you.</p>
        <?php } else { ?>

        <?php echo '<script'; ?>
 language=javascript>
          <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] == 1) {?>
          
          function checkform() {
            if (document.mainform.message.value == '') {
              alert("Please type your message!");
              document.mainform.message.focus();
              return false;
            }
            return true;
          }
          
          <?php } else { ?>
          
          function checkform() {
            if (document.mainform.name.value == '') {
              alert("Please type your full name!");
              document.mainform.name.focus();
              return false;
            }
            if (document.mainform.email.value == '') {
              alert("Please enter your e-mail address!");
              document.mainform.email.focus();
              return false;
            }
            if (document.mainform.message.value == '') {
              alert("Please type your message!");
              document.mainform.message.focus();
              return false;
            }
            return true;
          }
          
          <?php }?>
        <?php echo '</script'; ?>
>
        <form method=post name=mainform onsubmit="return checkform()">
          <input type=hidden name=a value=support>
          <input type=hidden name=action value=send>
          <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
            <ul style="color:red">
              <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image'] == 1) {?>
                <li>Invalid turing image</li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_email'] == 1) {?>
                <li>Invalid email address</li>
              <?php }?>
            </ul>
          <?php }?>
          <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
            <td>Your Name:</td>
            <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['name']);?>
</b></td>
            <?php } else { ?>
            <div class="col-lg-6">
              <label>
                <input type="text" name="name" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" class="form-control" placeholder="First Name">
              </label>
            </div>
            <div class="col-lg-6">
              <label>
                <input type="text" class="form-control" placeholder="Last Name">
              </label>
            </div>
              <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
              <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
</b></td>
            <?php } else { ?>
              <label>
                <input type="text" name="email" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" class="form-control" placeholder="Email Address">
              </label>
            <?php }?>
            <label>
              <textarea class="form-control" name=message id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"><?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['message'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</textarea>
            </label>
            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['validation_enabled'] == 1) {?>
              <tr>
                <td class=menutxt><img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['userinfo']->value['session_name'])."=".((string)$_smarty_tpl->tpl_vars['userinfo']->value['session_id'])."&rand=".((string)$_smarty_tpl->tpl_vars['userinfo']->value['rand'])));?>
"></td>
                <label>
                  <input type="text" name=validation_number class="form-control" placeholder="Validation Number">
                </label>
              </tr>
            <?php }?>
            <div class="row">
              <div class="col-xl-3">
                <button class="btn bg-info mx-2 my-2 text-light" type=submit value="Send">Submit</button>
              </div>
            </div>
          </div>
        </form>
        <?php }?>
      </div><!-- .col -->
    </div><!-- .row -->
  </div><!-- .container -->
</section><!-- .section -->
<?php echo $_smarty_tpl->getSubTemplate ("front_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>