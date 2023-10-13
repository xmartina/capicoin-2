<?php /* Smarty version 3.1.27, created on 2023-10-10 11:28:22
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:417550830652535561d0594_19265368%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '181d28b9d1d8a2f43b91c3b9c0bd3646bee6ee94' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/after_registration.tpl',
      1 => 1689470049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '417550830652535561d0594_19265368',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652535561f1a57_26492621',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652535561f1a57_26492621')) {
function content_652535561f1a57_26492621 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '417550830652535561d0594_19265368';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Registration Completed", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<h3>Registration completed:</h3><br>

Thank you for joining our program.<br>
You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
<br>
<br>

<b>Important:</b> Do not provide your login and password to anyone!
<div class="btn py-1 px-4 bg-info text-white">
    <a href="?a=login" class="text-white">
        login
    </a>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>