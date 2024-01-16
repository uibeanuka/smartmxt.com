<?php /* Smarty version 3.1.27, created on 2024-01-13 06:45:29
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/security.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:128513983365a231893a09b5_12623757%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '622e762e0180a32ecf73e0115ad00035ffe38b0b' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/security.tpl',
      1 => 1705111463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128513983365a231893a09b5_12623757',
  'variables' => 
  array (
    'security' => 0,
    'settings' => 0,
    'errors' => 0,
    'tfa_enabled' => 0,
    'tfa_settings' => 0,
    'tfa_secret' => 0,
    'tfa_secret_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a231893dfe66_07123729',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a231893dfe66_07123729')) {
function content_65a231893dfe66_07123729 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '128513983365a231893a09b5_12623757';
echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h3>Advanced login security settings:</h3><br><br>

<form method=post>
<input type=hidden name=a value="security">
<input type=hidden name=action value="save">
Detect IP Address Change Sensitivity<br>
<input type=radio name=ip value=disabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'disabled') {?>checked<?php }?>>Disabled<br>
<input type=radio name=ip value=medium <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'medium') {?>checked<?php }?>>Medium<br>
<input type=radio name=ip value=high <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'high') {?>checked<?php }?>>High<br>
<input type=radio name=ip value=always <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'always') {?>checked<?php }?>>Paranoic<br><br>

Detect Browser Change<br>
<input type=radio name=browser value=disabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'disabled') {?>checked<?php }?>>Disabled<br>
<input type=radio name=browser value=enabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'enabled') {?>checked<?php }?>>Enabled<br><br>
<input type=submit value="Set" class=sbmt>
</form>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_tfa']) {?>
<h3>Two Factor Authentication</h3>
<form method=post name=mainform>
<input type=hidden name=a value="security">
<input type=hidden name=action value="tfa_save">
<input type=hidden name=time>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_code']) {?>
<b style=color:red>Invalid code.</b><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_secret']) {?>
<b style=color:red>Invalid Secret.</b><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tfa_enabled']->value) {?>
<input type="checkbox" name="tfa_on_login" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['login']) {?>checked<?php }?>> on Login<br>
<input type="checkbox" name="tfa_on_edit_account" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['edit_account']) {?>checked<?php }?>> on Edit Account<br>
<input type="checkbox" name="tfa_on_withdraw" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['withdraw']) {?>checked<?php }?>> on Withdraw<br>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['internal_transfer_enabled']) {?>
<input type="checkbox" name="tfa_on_internal_transfer" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['internal_transfer']) {?>checked<?php }?>> on Internal Transfer<br>
<?php }?>
<input type="checkbox" name="tfa_disable" value=1> <b style=color:red>Disable Two Factor Authentication (not recommended)</b><br>
<br>
Confirm by typing code: <input type=text name="code" class=inpts> <input type=submit value="Update" class=sbmt>
<?php } else { ?>
1. Install <a href="http://m.google.com/authenticator" target=_blank>Google Authenticator</a> on your mobile device.<br>
2. Your Secret Code is: <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret']->value);?>
</b> <input type=hidden name="tfa_secret" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret']->value);?>
"><br>
<img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret_url']->value);?>
"><br>
3. Please enter two factor token from Google Authenticator to verify correct setup:<br> 
<input type=text name="code" class=inpts> <input type=submit value="Enable" class=sbmt>
<?php }?>
</form>



<?php echo '<script'; ?>
 language=javascript>
document.mainform.time.value = (new Date()).getTime();

function checkform() {
  if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
    alert("Please type code!");
    document.mainform.code.focus();
    return false;
  }
  return true;
}
<?php echo '</script'; ?>
>

<?php }?> 

<?php echo $_smarty_tpl->getSubTemplate ("footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>