<?php /* Smarty version 3.1.27, created on 2023-10-10 14:17:50
         compiled from "my:_emailbody_withdraw_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:70615131565255d0e5a6328_54271042%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce68560a47afc22233eb2c1078a7db9d7c45a618' => 
    array (
      0 => 'my:_emailbody_withdraw_admin_notification',
      1 => 1696947470,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '70615131565255d0e5a6328_54271042',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65255d0e5a7400_66056543',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65255d0e5a7400_66056543')) {
function content_65255d0e5a7400_66056543 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '70615131565255d0e5a6328_54271042';
?>
User #username# received $#amount# to #currency# account #account#. Batch is #batch#.<?php }
}
?>