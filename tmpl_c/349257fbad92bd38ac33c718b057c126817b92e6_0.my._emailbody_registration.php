<?php /* Smarty version 3.1.27, created on 2023-10-10 11:28:21
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:19415506616525355517c566_47249632%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1696937301,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '19415506616525355517c566_47249632',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6525355517e190_22855684',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6525355517e190_22855684')) {
function content_6525355517e190_22855684 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19415506616525355517c566_47249632';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>