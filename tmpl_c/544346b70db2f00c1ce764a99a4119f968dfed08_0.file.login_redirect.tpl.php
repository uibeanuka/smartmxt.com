<?php /* Smarty version 3.1.27, created on 2024-01-13 06:43:48
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:207045535365a23124d25ff6_58326284%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '544346b70db2f00c1ce764a99a4119f968dfed08' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/login_redirect.tpl',
      1 => 1705075036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207045535365a23124d25ff6_58326284',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a23124d38d41_84776273',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a23124d38d41_84776273')) {
function content_65a23124d38d41_84776273 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '207045535365a23124d25ff6_58326284';
?>
<html>
<head>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
">
</head>
<body>
<center>
Hello <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
. You are redirecting to your 
<a href=?a=account>account</a> now.
<body>
</html><?php }
}
?>