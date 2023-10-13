<?php /* Smarty version 3.1.27, created on 2023-10-10 11:56:30
         compiled from "my:_emailbody_withdraw_request_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:102479682965253beeed8268_84794004%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9dc888fe0e1392f2ec617e0f326be507e67362b' => 
    array (
      0 => 'my:_emailbody_withdraw_request_user_notification',
      1 => 1696938990,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '102479682965253beeed8268_84794004',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65253beeef8d30_34056423',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65253beeef8d30_34056423')) {
function content_65253beeef8d30_34056423 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '102479682965253beeed8268_84794004';
?>
Hello #name#,


You have requested to withdraw $#amount#.
Request IP address is #ip#.


Thank you.
#site_name#
#site_url#<?php }
}
?>