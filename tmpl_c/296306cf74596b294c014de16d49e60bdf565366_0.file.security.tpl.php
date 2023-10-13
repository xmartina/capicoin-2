<?php /* Smarty version 3.1.27, created on 2023-10-03 04:04:29
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/security.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1171808029651b92cd4bec90_80960489%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '296306cf74596b294c014de16d49e60bdf565366' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/security.tpl',
      1 => 1689470948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1171808029651b92cd4bec90_80960489',
  'variables' => 
  array (
    'security' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651b92cd4edb22_86682717',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651b92cd4edb22_86682717')) {
function content_651b92cd4edb22_86682717 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1171808029651b92cd4bec90_80960489';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Account Security Settings", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <h4 class="page-title">Advanced login security settings</h4>

            <div class="row">
                <div class="col-md-12">

                    <form method="post">
                        <input type="hidden" name="a" value="security">
                        <input type="hidden" name="action" value="save">
                        Detect IP Address Change Sensitivity<br>
                        <input type="radio" name="ip" value="disabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'disabled') {?>checked<?php }?>>Disabled<br>
                        <input type="radio" name="ip" value="medium" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'medium') {?>checked<?php }?>>Medium<br>
                        <input type="radio" name="ip" value="high" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'high') {?>checked<?php }?>>High<br>
                        <input type="radio" name="ip" value="always">Paranoic<br><br>

                        Detect Browser Change<br>
                        <input type="radio" name="browser" value="disabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'disabled') {?>checked<?php }?>>Disabled<br>
                        <input type="radio" name="browser" value="enabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'enabled') {?>checked<?php }?>>Enabled<br><br>
                        <input type="submit" value="Set" class="form-control btn btn-primary">
                    </form>


                </div></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>