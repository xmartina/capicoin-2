<?php /* Smarty version 3.1.27, created on 2023-10-10 14:17:36
         compiled from "my:withdraw_details_table" */ ?>
<?php
/*%%SmartyHeaderCode:206463526265255d001c86a8_99362726%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2d7b11418655459885851f41460085ebbd5fe47' => 
    array (
      0 => 'my:withdraw_details_table',
      1 => 1696947456,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '206463526265255d001c86a8_99362726',
  'variables' => 
  array (
    'user' => 0,
    'exchange_system_name' => 0,
    'trans' => 0,
    'account' => 0,
    'converted_to_withdraw' => 0,
    'settings' => 0,
    'orig_fiat' => 0,
    'to_withdraw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65255d001da709_86012717',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65255d001da709_86012717')) {
function content_65255d001da709_86012717 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '206463526265255d001c86a8_99362726';
?>
 <tr> <th>User:</th> <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
)</td> </tr> <tr> <th>Payment System:</th> <td><?php echo $_smarty_tpl->tpl_vars['exchange_system_name']->value;?>
 <img src="images/<?php echo $_smarty_tpl->tpl_vars['trans']->value['ec'];?>
.gif" width=44 height=17 align=absmiddle></td> </tr> <tr> <th>Payee Account:</th> <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['account']->value)===null||$tmp==='' ? "n/a" : $tmp);?>
</td> </tr> <?php if ($_smarty_tpl->tpl_vars['converted_to_withdraw']->value) {?>  <tr> <th>Amount:</th> <td><?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];
echo $_smarty_tpl->tpl_vars['converted_to_withdraw']->value;?>
</td> </tr>  <tr> <th><?php echo $_smarty_tpl->tpl_vars['orig_fiat']->value;?>
 Amount:</th> <td><?php echo $_smarty_tpl->tpl_vars['to_withdraw']->value;?>
</td> </tr> <?php } else { ?> <tr> <th>Amount:</th> <td><?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];
echo $_smarty_tpl->tpl_vars['to_withdraw']->value;?>
</td> </tr> <?php }?> <tr> <th>User Comment:</th> <td><?php echo $_smarty_tpl->tpl_vars['trans']->value['description'];?>
</td> </tr><?php }
}
?>