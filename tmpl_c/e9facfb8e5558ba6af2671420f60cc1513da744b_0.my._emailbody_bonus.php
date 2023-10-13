<?php /* Smarty version 3.1.27, created on 2023-10-08 15:37:15
         compiled from "my:_emailbody_bonus" */ ?>
<?php
/*%%SmartyHeaderCode:16277737856522ccab6e1bc8_59862980%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9facfb8e5558ba6af2671420f60cc1513da744b' => 
    array (
      0 => 'my:_emailbody_bonus',
      1 => 1696779435,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '16277737856522ccab6e1bc8_59862980',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6522ccab6f0fc2_42427127',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6522ccab6f0fc2_42427127')) {
function content_6522ccab6f0fc2_42427127 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16277737856522ccab6e1bc8_59862980';
?>
Hello #name#,

You received a bonus: $#amount#
You can check your statistics here:
#site_url#

Good luck.<?php }
}
?>