<?php /* Smarty version 3.1.27, created on 2023-10-03 04:56:08
         compiled from "my:_emailbody_change_account" */ ?>
<?php
/*%%SmartyHeaderCode:1627763131651b9ee84c5651_97191092%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8594f47af68d54b8edf3145e9acca31cd65213d9' => 
    array (
      0 => 'my:_emailbody_change_account',
      1 => 1696308968,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1627763131651b9ee84c5651_97191092',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651b9ee851dbf7_31562470',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651b9ee851dbf7_31562470')) {
function content_651b9ee851dbf7_31562470 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1627763131651b9ee84c5651_97191092';
?>
Hello #name#,

Your account data has been changed from ip #ip#


New information:

Password: #password#
E-mail address: #email#

Contact us immediately if you did not authorize this change.

Thank you.<?php }
}
?>