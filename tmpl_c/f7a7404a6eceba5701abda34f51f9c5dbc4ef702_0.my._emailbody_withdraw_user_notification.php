<?php /* Smarty version 3.1.27, created on 2023-10-10 14:17:50
         compiled from "my:_emailbody_withdraw_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:112070591265255d0e46f9e0_49069077%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a7404a6eceba5701abda34f51f9c5dbc4ef702' => 
    array (
      0 => 'my:_emailbody_withdraw_user_notification',
      1 => 1696947470,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '112070591265255d0e46f9e0_49069077',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65255d0e470c23_47305421',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65255d0e470c23_47305421')) {
function content_65255d0e470c23_47305421 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '112070591265255d0e46f9e0_49069077';
?>
Hello #name#.

$#amount# has been successfully sent to your #currency# account #account#.
Transaction batch is #batch#.

#site_name#
#site_url#<?php }
}
?>