<?php /* Smarty version 3.1.27, created on 2023-10-08 01:23:42
         compiled from "my:_emailbody_referral_commision_notification" */ ?>
<?php
/*%%SmartyHeaderCode:4255299636522049e6fc531_72379094%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22dae1eb645238796be578d1b985550bbf18781' => 
    array (
      0 => 'my:_emailbody_referral_commision_notification',
      1 => 1696728222,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '4255299636522049e6fc531_72379094',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6522049e70df62_85335128',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6522049e70df62_85335128')) {
function content_6522049e70df62_85335128 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4255299636522049e6fc531_72379094';
?>
Dear #name# (#username#)

You have received a referral comission of $#amount# #currency# from the #ref_name# (#ref_username#) deposit.

Thank you.<?php }
}
?>