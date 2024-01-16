<?php /* Smarty version 3.1.27, created on 2024-01-13 06:44:36
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/deposit_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:183797759465a2315439ddb2_93780901%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48720b4d30398680b5003a83755b206ba33cf7a9' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/deposit_list.tpl',
      1 => 1705111344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183797759465a2315439ddb2_93780901',
  'variables' => 
  array (
    'currency_sign' => 0,
    'total' => 0,
    'plans' => 0,
    'p' => 0,
    'o' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a23154406864_57321188',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a23154406864_57321188')) {
function content_65a23154406864_57321188 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '183797759465a2315439ddb2_93780901';
echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h3>Your deposits:</h3><br>

<b>Total: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['total']->value);?>
</b><br><br>

<?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<table cellspacing=1 cellpadding=2 border=0 width=100% class=line><tr><td class=item>
<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <td colspan=3 align=center><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</b></td>
</tr><tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Deposit Amount</td>
 <td class=inheader width=100 nowrap><nobr><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['period']);?>
 Profit (%)</nobr></td>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['p']->value['plans'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?>
<tr>
 <td class=item><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['name']);?>
</td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['min_deposit']);?>
 <?php if ($_smarty_tpl->tpl_vars['o']->value['max_deposit'] > 0) {?>- <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['max_deposit']);
} else { ?>and more<?php }?></td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['percent']);?>
</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
</table>
<br>
<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<?php if (!$_smarty_tpl->tpl_vars['p']->value['deposits']) {?>
<tr>
 <td colspan=4><b>No deposits for this plan</b></td>
</tr>           
<?php } else { ?>
<tr>
 <td colspan=4 class=inheader style="text-align:left">Your deposits:</td>
</tr>
<tr>
 <td class=inheader>Date</td>
 <td class=inheader>Amount</td>
<?php if ($_smarty_tpl->tpl_vars['p']->value['use_compound']) {?>
 <td class=inheader>Compounding Percent</td>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['withdraw_principal']) {?>
 <td class=inheader>Release</td>
<?php }?>
</tr>           
<?php
$_from = $_smarty_tpl->tpl_vars['p']->value['deposits'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?>
<tr>
 <td align=center class=item><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['date']);?>
</b><br><?php if ($_smarty_tpl->tpl_vars['p']->value['q_days'] == 0) {?>Working <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['duration']);?>
 days<?php } else { ?>Expire in <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['expire_in']);
}?></td>
 <td align=center class=item><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['d']->value['deposit'],$_smarty_tpl->tpl_vars['d']->value['ec']));?>
 <img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['ec']);?>
.gif" align=absmiddle hspace=1 height=17></b></td>


<?php if ($_smarty_tpl->tpl_vars['p']->value['use_compound']) {?>
 <td align=center class=item align=center><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['compound']);?>
% <a href="<?php echo smarty_modifier_myescape(encurl("?a=change_compound&deposit=".((string)$_smarty_tpl->tpl_vars['d']->value['id'])));?>
">[change]</a></td>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['withdraw_principal']) {?>
 <td align=center class=item>
  <?php if ($_smarty_tpl->tpl_vars['d']->value['can_withdraw']) {?>
   <a href="<?php echo smarty_modifier_myescape(encurl("?a=withdraw_principal&deposit=".((string)$_smarty_tpl->tpl_vars['d']->value['id'])));?>
">[release]</a>
  <?php } else { ?>
   <?php if ($_smarty_tpl->tpl_vars['d']->value['pending_duration'] > 0) {?>
    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['pending_duration']);?>
 day<?php if ($_smarty_tpl->tpl_vars['d']->value['pending_duration'] > 1) {?>s<?php }?> left
   <?php } else { ?>
    not available
   <?php }?>
  <?php }?>
 </td>
<?php }?>
</tr>
<?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?>
<?php }?>
</table>
<?php if ($_smarty_tpl->tpl_vars['p']->value['total_deposit'] > 0 || $_smarty_tpl->tpl_vars['p']->value['today_profit'] > 0 || $_smarty_tpl->tpl_vars['p']->value['total_profit'] > 0) {?>
<table cellspacing=0 cellpadding=1 border=0>
<tr><td>Deposited Total:</td><td><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['total_deposit']));?>
</b></td></tr>
<tr><td>Profit Today:</td><td><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['today_profit']));?>
</b></td></tr>
<tr><td>Total Profit:</td><td><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['total_profit']));?>
</b></td></tr>
</table>
<?php }?>
<br>
</td></tr></table>
<br>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>