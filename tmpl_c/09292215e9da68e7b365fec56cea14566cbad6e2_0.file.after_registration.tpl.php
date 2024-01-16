<?php /* Smarty version 3.1.27, created on 2024-01-13 06:43:27
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:102251725365a2310f064b30_51675325%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09292215e9da68e7b365fec56cea14566cbad6e2' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/after_registration.tpl',
      1 => 1705075011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102251725365a2310f064b30_51675325',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a2310f06d0e3_72660854',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a2310f06d0e3_72660854')) {
function content_65a2310f06d0e3_72660854 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '102251725365a2310f064b30_51675325';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<h3>Registration completed:</h3><br>

Thank you for joining our program.<br>
You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
<br>
<br>

<b>Important:</b> Do not provide your login and password to anyone!

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>