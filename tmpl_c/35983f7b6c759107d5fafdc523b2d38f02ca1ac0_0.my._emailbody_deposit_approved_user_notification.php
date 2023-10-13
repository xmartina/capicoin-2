<?php /* Smarty version 3.1.27, created on 2023-10-10 11:53:43
         compiled from "my:_emailbody_deposit_approved_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:207132010765253b4749c443_64942277%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35983f7b6c759107d5fafdc523b2d38f02ca1ac0' => 
    array (
      0 => 'my:_emailbody_deposit_approved_user_notification',
      1 => 1696938823,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '207132010765253b4749c443_64942277',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65253b474a2d88_23682158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65253b474a2d88_23682158')) {
function content_65253b474a2d88_23682158 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '207132010765253b4749c443_64942277';
?>
Dear #name#

Your deposit has been approved:

Amount: $#amount# of #currency#
Plan: #plan#
#fields#<?php }
}
?>