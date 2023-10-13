<?php /* Smarty version 3.1.27, created on 2023-10-13 14:22:37
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/auth_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1599798118652952ad1a2c60_55839019%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc18612e441ac9da24e16de32ffac37731524222' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/auth_header.tpl',
      1 => 1689079932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1599798118652952ad1a2c60_55839019',
  'variables' => 
  array (
    'siteIcon' => 0,
    'pageName' => 0,
    'SiteName' => 0,
    'PageTage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652952ad1a7be1_96507612',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652952ad1a7be1_96507612')) {
function content_652952ad1a7be1_96507612 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/capicoin.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1599798118652952ad1a2c60_55839019';
?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteIcon']->value);?>
">
    <!-- Page Title  -->
    <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pageName']->value);?>
 | <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['SiteName']->value);?>
 | <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['PageTage']->value);?>
</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/assets/css/dashlite.css?ver=3.2.0">
    <link id="skin-default" rel="stylesheet" href="/assets/css/theme.css?ver=3.2.0">
</head>
<?php }
}
?>