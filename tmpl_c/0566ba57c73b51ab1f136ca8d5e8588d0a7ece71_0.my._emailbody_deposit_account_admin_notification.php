<?php /* Smarty version 3.1.27, created on 2023-10-08 01:23:42
         compiled from "my:_emailbody_deposit_account_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:5203391276522049eb97684_23340801%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0566ba57c73b51ab1f136ca8d5e8588d0a7ece71' => 
    array (
      0 => 'my:_emailbody_deposit_account_admin_notification',
      1 => 1696728222,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '5203391276522049eb97684_23340801',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6522049eb98e62_47405722',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6522049eb98e62_47405722')) {
function content_6522049eb98e62_47405722 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5203391276522049eb97684_23340801';
?>
User #username# deposit $#amount# #currency# from account balance to #plan#.

Account: #account#
Batch: #batch#
Compound: #compound#%.
Referrers fee: $#ref_sum#<?php }
}
?>