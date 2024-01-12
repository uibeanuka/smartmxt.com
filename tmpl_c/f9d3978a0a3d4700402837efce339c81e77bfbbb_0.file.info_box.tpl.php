<?php /* Smarty version 3.1.27, created on 2024-01-12 13:43:56
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/info_box.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:64059762865a1421c64f831_08475459%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9d3978a0a3d4700402837efce339c81e77bfbbb' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/info_box.tpl',
      1 => 1705040512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64059762865a1421c64f831_08475459',
  'variables' => 
  array (
    'settings' => 0,
    'start_date' => 0,
    'days_online' => 0,
    'total_accounts' => 0,
    'active_accounts' => 0,
    'vip_accounts' => 0,
    'total_deposits' => 0,
    'today_deposits' => 0,
    'total_withdraw' => 0,
    'today_withdraw' => 0,
    'online_visitors' => 0,
    'online_members' => 0,
    'newest_member' => 0,
    'last_addfunds' => 0,
    'last_deposit' => 0,
    'last_withdrawal' => 0,
    'update_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a1421c6af091_46795132',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a1421c6af091_46795132')) {
function content_65a1421c6af091_46795132 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '64059762865a1421c64f831_08475459';
echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"start_date",'var'=>'start_date'),$_smarty_tpl);?>




<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
	<th colspan=2 class=title>Info</th>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_started'] == 1) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"start_date",'var'=>'start_date'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Started</b>
        <td class=menutxt align=right><?php echo smarty_modifier_myescape(smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_date']->value));?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_running_days'] == 1) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"days_online",'var'=>'days_online'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Running days</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['days_online']->value);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_total_accounts']) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"total_accounts",'var'=>'total_accounts'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Total accounts</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['total_accounts']->value);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_active_accounts']) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"active_accounts",'var'=>'active_accounts'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Active accounts</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['active_accounts']->value);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_vip_accounts']) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"vip_accounts",'var'=>'vip_accounts'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>VIP accounts</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['vip_accounts']->value);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_deposit_funds'] == 1) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"total_deposits",'var'=>'total_deposits'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Total deposited</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['total_deposits']->value));?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_today_deposit_funds'] == 1) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"today_deposits",'var'=>'today_deposits'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Today deposited</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['today_deposits']->value));?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_total_withdraw'] == 1) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"total_withdraw",'var'=>'total_withdraw'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Total withdraw</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['total_withdraw']->value));?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_today_withdraw_funds'] == 1) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"today_withdraw",'var'=>'today_withdraw'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Today withdraw</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['today_withdraw']->value));?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_visitor_online'] == 1) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"online_visitors",'var'=>'online_visitors'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Visitors online</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['online_visitors']->value);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_members_online'] == 1) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"online_members",'var'=>'online_members'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Members online</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['online_members']->value);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_newest_member'] == 1) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"newest_member",'var'=>'newest_member'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Newest Member</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['newest_member']->value)===null||$tmp==='' ? "N/A" : $tmp));?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastaddfunds']) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"last_addfunds",'var'=>'last_addfunds'),$_smarty_tpl);?>

 <?php if ($_smarty_tpl->tpl_vars['last_addfunds']->value) {?>
        <tr>
	<td class=menutxt><b>Last topup:</b></th>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['last_addfunds']->value['amount'],$_smarty_tpl->tpl_vars['last_addfunds']->value['ec']));?>
 (<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['last_addfunds']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
)</td>
	</tr>
 <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastdeposit']) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"last_deposit",'var'=>'last_deposit'),$_smarty_tpl);?>

 <?php if ($_smarty_tpl->tpl_vars['last_deposit']->value) {?>
        <tr>
	<td class=menutxt><b>Last deposit:</b></th>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['last_deposit']->value['amount'],$_smarty_tpl->tpl_vars['last_deposit']->value['ec']));?>
 (<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['last_deposit']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
)</td>
	</tr>
 <?php }?>
<?php }?>
	
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastwithdrawal']) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"last_withdrawal",'var'=>'last_withdrawal'),$_smarty_tpl);?>

 <?php if ($_smarty_tpl->tpl_vars['last_withdrawal']->value) {?>
        <tr>
	<td class=menutxt><b>Last withdraw:</b></td>
	<td class=menutxt align=right><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['last_withdrawal']->value['amount'],$_smarty_tpl->tpl_vars['last_withdrawal']->value['ec']));?>
 (<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['last_withdrawal']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
)</td>
	</tr>
 <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_last_update'] == 1) {?>
<?php echo loaddata_smarty(array('name'=>"program_stats",'stats'=>"update_date",'var'=>'update_date'),$_smarty_tpl);?>

<tr>
	<td class=menutxt><b>Last update</b>
        <td class=menutxt align=right><?php echo smarty_modifier_myescape(smarty_modifier_date_format($_smarty_tpl->tpl_vars['update_date']->value));?>
</td>
</tr>
<?php }?>


</table>
<br>
<?php }
}
?>