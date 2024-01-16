<?php /* Smarty version 3.1.27, created on 2024-01-13 06:44:26
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/withdrawal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:894281365a2314acea3e8_57614031%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7123e1559cca8093a47433f85bd159163db12e2' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/withdrawal.tpl',
      1 => 1705111427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '894281365a2314acea3e8_57614031',
  'variables' => 
  array (
    'say' => 0,
    'batch' => 0,
    'fatals' => 0,
    'fatal' => 0,
    'settings' => 0,
    'errors' => 0,
    'currency_sign' => 0,
    'fees' => 0,
    'preview' => 0,
    'amount' => 0,
    'ec' => 0,
    'comment' => 0,
    'currency' => 0,
    'account' => 0,
    'converted' => 0,
    'to_withdraw' => 0,
    'userinfo' => 0,
    'ab_formated' => 0,
    'have_hold' => 0,
    'ps' => 0,
    'p' => 0,
    'frm' => 0,
    'wfch' => 0,
    'have_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a2314ad6a152_62976084',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a2314ad6a152_62976084')) {
function content_65a2314ad6a152_62976084 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '894281365a2314acea3e8_57614031';
echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h3>Ask for withdrawal:</h3><br>

<?php if ($_smarty_tpl->tpl_vars['say']->value == 'processed') {?>
<?php if ($_smarty_tpl->tpl_vars['batch']->value == '') {?>Withdrawal request has been successfully saved.<?php } else { ?> Withdrawal has been processed. Batch id: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['batch']->value);
}?>
<br><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['fatals']->value) {?>
  <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'times_limit' || $_smarty_tpl->tpl_vars['fatals']->value['times_limit']) {?>
  <div class="msg">You can withdraw <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['limit_withdraw_period_times']);?>
 per <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['limit_withdraw_period_date']);?>
 only.</div>
  <?php }?>

<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'ec_forbidden' || $_smarty_tpl->tpl_vars['errors']->value['ec_forbidden']) {?>
Sorry, withdraw for this processing is temproary forbidden.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'on_hold' || $_smarty_tpl->tpl_vars['errors']->value['on_hold']) {?>
Sorry, this amount on hold now.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'zero' || $_smarty_tpl->tpl_vars['errors']->value['zero']) {?>
Sorry, you can't request a withdraw smaller than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
0.00 only<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'less_min' || $_smarty_tpl->tpl_vars['errors']->value['less_min']) {?>
Sorry, you can request not less than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['amount_min']);?>
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'greater_max' || $_smarty_tpl->tpl_vars['errors']->value['greater_max']) {?>
Sorry, you can request not greater than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['amount_max']);?>
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'daily_limit' || $_smarty_tpl->tpl_vars['errors']->value['daily_limit']) {?>
Sorry, you have exceeded a daily limit<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'not_enought' || $_smarty_tpl->tpl_vars['errors']->value['not_enought']) {?>
Sorry, you have requested the amount larger than the one on your balance.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_transaction_code' || $_smarty_tpl->tpl_vars['errors']->value['invalid_transaction_code']) {?>
You have entered the invalid transaction code.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_tfa_code' || $_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_code']) {?>
You have entered invalid 2FA code.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_deposits' || $_smarty_tpl->tpl_vars['errors']->value['no_deposits']) {?>
You have not done any deposits yet. Withdrawal function will be available after a deposit.
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_active_deposits' || $_smarty_tpl->tpl_vars['errors']->value['no_active_deposits']) {?>
You must have active deposit to withdraw.
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_account' || $_smarty_tpl->tpl_vars['errors']->value['no_account']) {?>
Please, provide your account to withdraw funds to first <a href="<?php echo smarty_modifier_myescape(encurl("?a=edit_account"));?>
">here</a>.
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['demo']) {?>
Withdraw is not available for demo account.
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?>Invalid turing image<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['account_suspended']) {?>Account is suspended<?php }?>

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>

<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=withdraw>
<input type=hidden name=amount value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>
>
<input type=hidden name=ec value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ec']->value);?>
>
<input type=hidden name=comment value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true));?>
">

<table cellspacing=0 cellpadding=2 border=0 class="form deposit_confirm">
<tr>
 <th>Payment System:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency']->value);?>
</td>
</tr>
<tr>
 <th>Account:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['account']->value);?>
</td>
</tr>
<tr>
 <th>Debit Amount:</th>
 <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['amount']->value,$_smarty_tpl->tpl_vars['ec']->value));?>
</td>
</tr>
<tr>
 <th>Withdrawal Fee:</th>
 <td>
<?php if ($_smarty_tpl->tpl_vars['fees']->value['fee'] > 0) {?>
  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['percent']);?>
% + <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['fees']->value['add_amount'],$_smarty_tpl->tpl_vars['ec']->value));?>
 (min. <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['fees']->value['fee_min'],$_smarty_tpl->tpl_vars['ec']->value));?>
 max. <?php if ($_smarty_tpl->tpl_vars['fees']->value['fee_max']) {
echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['fees']->value['fee_max'],$_smarty_tpl->tpl_vars['ec']->value));
} else { ?>no<?php }?>)
<?php } else { ?>
We have no fee for this operation.
<?php }?>
</td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['converted']->value) {?>
<tr>
 <th>Credit Amount:</th>
 <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['converted']->value['amount'],$_smarty_tpl->tpl_vars['ec']->value));?>
</td>
</tr>
<tr>
 <th><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['converted']->value['fiat']);?>
 Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['to_withdraw']->value);?>
</td>
</tr>
<?php } else { ?>
<tr>
 <th>Credit Amount:</th>
 <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['to_withdraw']->value,$_smarty_tpl->tpl_vars['ec']->value));?>
</td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['comment']->value) {?>
<tr>
 <th>Note:</th>
 <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true));?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code'] && $_smarty_tpl->tpl_vars['userinfo']->value['transaction_code']) {?>
<tr>
 <th>Transaction Code:</th>
 <td><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"withdrawal"), 0);
?>

<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['tfa_settings']['withdraw']) {?>
<tr>
 <th>2FA Code:</th>
 <td><input type="text" name="tfa_code" class=inpts size=15> <input type="hidden" name="tfa_time" id="tfa_time"></td>
</tr>

<?php echo '<script'; ?>
 language=javascript>
document.getElementById('tfa_time').value = (new Date()).getTime();
<?php echo '</script'; ?>
>

<?php }?>
<tr>
 <td colspan=2><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>


<?php } else { ?>


<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=preview>
<input type=hidden name=say value="">

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Account Balance:</td>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</b></td>
</tr>
<tr>
 <td>Pending Withdrawals: </td>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php if ($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending'] != 0) {
echo smarty_modifier_myescape(amount_smarty_format($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']));
}?></b></td>
</tr>
</table>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <th></th>
 <th>Processing</th>
 <th>Available</th>
<?php if ($_smarty_tpl->tpl_vars['have_hold']->value) {?>
 <th>On Hold</th>
<?php }?>
 <th>Pending</th>
 <th>Account</th>
</tr>
<?php $_smarty_tpl->tpl_vars["wfch"] = new Smarty_Variable(1, null, 0);?>
<?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<tr>
 <td><?php if ($_smarty_tpl->tpl_vars['p']->value['available'] > 0) {?><input type="radio" name="ec" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" <?php if ($_smarty_tpl->tpl_vars['frm']->value['ec'] == $_smarty_tpl->tpl_vars['p']->value['id'] || $_smarty_tpl->tpl_vars['wfch']->value) {
$_smarty_tpl->tpl_vars["wfch"] = new Smarty_Variable(0, null, 0);?>checked<?php }?>><?php }?></td>
 <td><img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
.gif" width=44 height=17 align=absmiddle> <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
 <td><b style="color:green"><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['available'],$_smarty_tpl->tpl_vars['p']->value['ec']));?>
</b></td>
<?php if ($_smarty_tpl->tpl_vars['have_hold']->value) {?>
 <td><b style="color:gray"><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['hold'],$_smarty_tpl->tpl_vars['p']->value['ec']));?>
</b></td>
<?php }?>
 <td><b style="color:red"><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['pending'],$_smarty_tpl->tpl_vars['p']->value['ec']));?>
</b></td>
 <td><?php if ($_smarty_tpl->tpl_vars['p']->value['account'] != '') {
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['account'], ENT_QUOTES, 'UTF-8', true));
} else { ?><a href="<?php echo smarty_modifier_myescape(encurl("?a=edit_account"));?>
"><i>not set</i></a><?php }?></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
</table>

<?php if ($_smarty_tpl->tpl_vars['have_available']->value) {?>
<table cellspacing=0 cellpadding=2 border=0 width=200>
<tr>
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Withdrawal (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
):</td>
 <td><input type=text name=amount value="<?php echo smarty_modifier_myescape((($tmp = @amount_smarty_format($_smarty_tpl->tpl_vars['frm']->value['amount']))===null||$tmp==='' ? "10.00" : $tmp));?>
" class=inpts size=15></td>
</tr><tr>
 <td colspan=2><textarea name=comment class=inpts cols=45 rows=4>Your comment</textarea>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Request" class=sbmt></td>
</tr></table>
<?php } else { ?>
<br><br>
You have no funds to withdraw.
<?php }?>
</form>

<?php }?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>