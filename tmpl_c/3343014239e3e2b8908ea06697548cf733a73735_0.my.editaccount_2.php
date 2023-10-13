<?php /* Smarty version 3.1.27, created on 2023-10-08 16:54:02
         compiled from "my:editaccount_2" */ ?>
<?php
/*%%SmartyHeaderCode:5312626396522deaaa85d71_10601572%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3343014239e3e2b8908ea06697548cf733a73735' => 
    array (
      0 => 'my:editaccount_2',
      1 => 1696784042,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '5312626396522deaaa85d71_10601572',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6522deaaa8e4e2_34591324',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6522deaaa8e4e2_34591324')) {
function content_6522deaaa8e4e2_34591324 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5312626396522deaaa85d71_10601572';
?>
 <tr> <td>E-mail address:</td> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><?php }
}
?>