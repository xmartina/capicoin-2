<?php /* Smarty version 3.1.27, created on 2023-10-10 11:28:20
         compiled from "my:_emailbody_direct_signup_notification" */ ?>
<?php
/*%%SmartyHeaderCode:45682527765253554ef8653_73554610%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397e51cbb3180e814e23de8d4b4eeafb6cb04684' => 
    array (
      0 => 'my:_emailbody_direct_signup_notification',
      1 => 1696937300,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '45682527765253554ef8653_73554610',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65253555023291_49678092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65253555023291_49678092')) {
function content_65253555023291_49678092 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '45682527765253554ef8653_73554610';
?>
Dear #name# (#username#)

You have a new direct signup on #site_name#
User: #ref_username#
Name: #ref_name#
E-mail: #ref_email#

Thank you.<?php }
}
?>