<?php /* Smarty version 3.1.27, created on 2023-10-10 11:53:43
         compiled from "my:_emailbody_deposit_approved_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:211143626865253b475ab213_45090296%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ed2d2c1577131930b0b627d45dbe7dd0fece21' => 
    array (
      0 => 'my:_emailbody_deposit_approved_admin_notification',
      1 => 1696938823,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '211143626865253b475ab213_45090296',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65253b475acb89_61043039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65253b475acb89_61043039')) {
function content_65253b475acb89_61043039 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '211143626865253b475ab213_45090296';
?>
Deposit has been approved:

User: #username# (#name#)
Amount: $#amount# of #currency#
Plan: #plan#
Date: #deposit_date#
#fields#<?php }
}
?>