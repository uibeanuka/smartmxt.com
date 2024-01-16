<?php /* Smarty version 3.1.27, created on 2024-01-13 06:40:53
         compiled from "my:users" */ ?>
<?php
/*%%SmartyHeaderCode:94614721065a2307565fbf2_93388779%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e25f918719c8d4bacb174c3f6be12393a5e95c1b' => 
    array (
      0 => 'my:users',
      1 => 1705128053,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '94614721065a2307565fbf2_93388779',
  'variables' => 
  array (
    'permits' => 0,
    'frm' => 0,
    'add_member_fields' => 0,
    'k' => 0,
    'field' => 0,
    'user_statuses' => 0,
    's' => 0,
    'v' => 0,
    'use_groups' => 0,
    'groups' => 0,
    'g' => 0,
    'value' => 0,
    'color_neg' => 0,
    'color_pos' => 0,
    'color_net' => 0,
    'add_fiat' => 0,
    'users' => 0,
    'u' => 0,
    'blocked' => 0,
    'not_confirmed' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a230756fb8c0_35783000',
  'tpl_function' => 
  array (
    'value_color' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => './tmpl_c/e25f918719c8d4bacb174c3f6be12393a5e95c1b_0.my.users.php',
      'uid' => 'e25f918719c8d4bacb174c3f6be12393a5e95c1b',
      'call_name' => 'smarty_template_function_value_color_94614721065a2307565fbf2_93388779',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a230756fb8c0_35783000')) {
function content_65a230756fb8c0_35783000 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '94614721065a2307565fbf2_93388779';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  <?php echo '<script'; ?>
> function reverce() { d = document.users; for (i = 0; i < d.elements.length; i++) { if (d.elements[i].type == "checkbox") { d.elements[i].checked = !d.elements[i].checked; } } } function sort(obj) { document.users.p.value = 1; s = obj.options[obj.selectedIndex].value.split(/\-/, 2); document.users.o.value = s[0]; document.users.d.value = s[1]; document.users.submit(); } function go(p) { document.users.p.value = p; document.users.submit(); } <?php echo '</script'; ?>
>  <h3>Users: <?php if ($_smarty_tpl->tpl_vars['permits']->value['manage']) {?> <a class="sbmt btn btn-success" href="?a=user_edit">Add User</a> <?php }?> </h3> <form method=get name="users"> <input type=hidden name=a value=users> <input type=hidden name=action> <input type=hidden name=p> <input type=hidden name=o value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['o'], ENT_QUOTES, 'UTF-8', true);?>
"> <input type=hidden name=d value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['d'], ENT_QUOTES, 'UTF-8', true);?>
"> <table class="form controls nosize"> <tr> <td>Search:</td> <td> <input type=text name=q value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['q'], ENT_QUOTES, 'UTF-8', true);?>
" class="inpts nosize" size=30> </td> <td> Order: <select name=order class="inpts nosize" onchange="sort(this)"> <option value="username-0" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "username-0") {?>selected<?php }?>>Username &uarr;</option> <option value="username-1" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "username-1") {?>selected<?php }?>>Username &darr;</option> <option value="datereg-1" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "datereg-1") {?>selected<?php }?>>Registration &uarr;</option> <option value="datereg-0" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "datereg-0") {?>selected<?php }?>>Registration &darr;</option> <option value="balance-1" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "balance-1") {?>selected<?php }?>>Balance &uarr;</option> <option value="balance-0" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "balance-0") {?>selected<?php }?>>Balance &darr;</option> <option value="funded-1" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "funded-1") {?>selected<?php }?>>Funded &uarr;</option> <option value="funded-0" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "funded-0") {?>selected<?php }?>>Funded &darr;</option> <option value="withdrawal-1" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "withdrawal-1") {?>selected<?php }?>>Withdrew &uarr;</option> <option value="withdrawal-0" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "withdrawal-0") {?>selected<?php }?>>Withdrew &darr;</option> <option value="commissions-1" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "commissions-1") {?>selected<?php }?>>Commissions &uarr;</option> <option value="commissions-0" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == "commissions-0") {?>selected<?php }?>>Commissions &darr;</option> <?php
$_from = $_smarty_tpl->tpl_vars['add_member_fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['field']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
$foreach_field_Sav = $_smarty_tpl->tpl_vars['field'];
?> <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
-0" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == ((string)$_smarty_tpl->tpl_vars['k']->value)."-0") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
 &uarr;</option> <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
-1" <?php if ($_smarty_tpl->tpl_vars['frm']->value['order'] == ((string)$_smarty_tpl->tpl_vars['k']->value)."-1") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
 &darr;</option> <?php
$_smarty_tpl->tpl_vars['field'] = $foreach_field_Sav;
}
?> </select> </td> <td> Per Page: <select name=onpage class="inpts nosize" onchange="document.users.submit()"> <option value=20 <?php if ($_smarty_tpl->tpl_vars['frm']->value['onpage'] == 20) {?>selected<?php }?>>20 <option value=50 <?php if ($_smarty_tpl->tpl_vars['frm']->value['onpage'] == 50) {?>selected<?php }?>>50 <option value=100 <?php if ($_smarty_tpl->tpl_vars['frm']->value['onpage'] == 100) {?>selected<?php }?>>100 </select> </td> </tr> <tr> <td>Status:</td> <td> <select name=status class="inpts nosize"> <option value="">--All--</option> <?php
$_from = $_smarty_tpl->tpl_vars['user_statuses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?> <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['s']->value == $_smarty_tpl->tpl_vars['frm']->value['status']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option> <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?> </select> </td> <?php if ($_smarty_tpl->tpl_vars['use_groups']->value) {?> <td> Groups: <select name=group_id class="inpts nosize"> <option value=0>--All--</option> <?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$foreach_g_Sav = $_smarty_tpl->tpl_vars['g'];
?> <option value=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['g']->value['id'] == $_smarty_tpl->tpl_vars['frm']->value['group_id']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['g'] = $foreach_g_Sav;
}
?> </select> </td> <?php } else { ?> <td></td> <?php }?> </td> <td style="text-align:right"> <input type=submit value="Apply" class=sbmt> </td> </tr> </table>  <br> <table class="list"> <tr> <th>User</th> <th>Amounts</th> <th>Actions</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['u'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['u']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
$foreach_u_Sav = $_smarty_tpl->tpl_vars['u'];
?> <tr id="user_<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td valign=top> <table width=100% class="list sub"> <tr> <td> <input type="checkbox" name="users[<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
]" value=1> <?php if ($_smarty_tpl->tpl_vars['u']->value['country_code']) {?><img src="images/flags/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['u']->value['country_code'], 'UTF-8');?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['u']->value['country_code'];?>
" align=absmiddle> <?php }?> <b class="username"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['u']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</b> <?php if ($_smarty_tpl->tpl_vars['u']->value['status'] == "on") {?> <span class="badge badge-success">Active</span> <?php } elseif ($_smarty_tpl->tpl_vars['u']->value['status'] == "suspended") {?> <span class="badge badge-danger">Suspended</span> <?php } elseif ($_smarty_tpl->tpl_vars['u']->value['status'] == "off") {?> <span class="badge badge-danger">Disabled</span> <?php }?> <?php if ($_smarty_tpl->tpl_vars['u']->value['mult']) {?> <span class="badge badge-danger">Mult</span> <?php }?> <br> </td> </tr> <tr><td>Name: <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['u']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</i></td></tr> <tr><td>Since: <?php echo $_smarty_tpl->tpl_vars['u']->value['dr'];?>
</td></tr> <?php if ($_smarty_tpl->tpl_vars['use_groups']->value && $_smarty_tpl->tpl_vars['u']->value['group_id']) {?> <tr><td>Group: <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['u']->value['group_id']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</b></td></tr> <?php }?> <?php if ($_smarty_tpl->tpl_vars['u']->value['upline_name']) {?> <tr><td>Upline: <a href=?a=user_refs&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['u']->value['upline_name'], ENT_QUOTES, 'UTF-8', true);?>
</a></td></tr> <?php }?> <tr><td> <?php if ($_smarty_tpl->tpl_vars['u']->value['not_confirmed']) {?> <span class="badge badge-warning">Not Confirmed</span><br> <?php }?> <?php if ($_smarty_tpl->tpl_vars['u']->value['blocked']) {?> <span class="badge badge-danger">Blocked</span><br> <?php }?>  </td></tr> </table> </td> <td> <table width=100% class="list sub"> <tr><td style="width:50%">Balance:</td><td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"navy",'value'=>$_smarty_tpl->tpl_vars['u']->value['balance'],'add_fiat'=>1), true);?>
</td></tr> <tr><td>Funded:</td><td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('value'=>$_smarty_tpl->tpl_vars['u']->value['funded'],'add_fiat'=>1), true);?>
</td></tr> <tr><td>Withdraw:</td><td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"red",'value'=>$_smarty_tpl->tpl_vars['u']->value['withdrawal'],'add_fiat'=>1), true);?>
</td></tr> <tr><td>Commission:</td><td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"olive",'value'=>$_smarty_tpl->tpl_vars['u']->value['commissions'],'add_fiat'=>1), true);?>
</td></tr> <?php
$_from = $_smarty_tpl->tpl_vars['add_member_fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['field']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
$foreach_field_Sav = $_smarty_tpl->tpl_vars['field'];
?> <tr><td><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
:</td><td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('value'=>$_smarty_tpl->tpl_vars['u']->value[$_smarty_tpl->tpl_vars['k']->value],'color_pos'=>$_smarty_tpl->tpl_vars['field']->value['color_pos'],'add_fiat'=>$_smarty_tpl->tpl_vars['field']->value['add_fiat']), true);?>
</td></tr> <?php
$_smarty_tpl->tpl_vars['field'] = $foreach_field_Sav;
}
?> </table> </td> <td> <?php if ($_smarty_tpl->tpl_vars['permits']->value['manage']) {?> <a href="?a=user_edit&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" class="sbmt btn-sm btn-success" style="margin-bottom:2px;">edit</a><br>  <?php }?> <a href="?a=user_details&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" class="sbmt btn-sm btn-info" style="margin-bottom:2px;">funds</a> </td> </tr> <tr> <td colspan=4> </td> </tr> <?php
$_smarty_tpl->tpl_vars['u'] = $foreach_u_Sav;
}
if (!$_smarty_tpl->tpl_vars['u']->_loop) {
?> <tr> <td colspan=7 align=center>No accounts found</td> </tr> <?php
}
?> </table><br> <?php if ($_smarty_tpl->tpl_vars['permits']->value['manage']) {?> <a href="javascript:reverce()" class="sbmt btn btn-primary">Select All</a> &nbsp;  <?php echo '<script'; ?>
> function confirm_action(act, msg) { if (confirm(msg)) { document.users.action.value = act; document.users.submit(); } return false; } <?php echo '</script'; ?>
>  <?php if ($_smarty_tpl->tpl_vars['blocked']->value) {?> <input type=button value="Unblock" class="sbmt btn btn-danger" onclick="confirm_action('unblock', 'Do you really want unblock selected users?');"> &nbsp; <?php }?> <?php if ($_smarty_tpl->tpl_vars['not_confirmed']->value) {?> <input type=button value="Confirm" class="sbmt btn btn-warning" onclick="confirm_action('confirm', 'Do you really want confirm selected users?');"> &nbsp; <?php }?> <input type=button value="Set Active" class="sbmt btn btn-success" onclick="confirm_action('set_active', 'Do you really want set Active selected users?');"> &nbsp; <input type=button value="Set Disabled" class="sbmt btn btn-danger" onclick="confirm_action('set_disabled', 'Do you really want set Disabled selected users?');"> &nbsp; <input type=button value="Set Suspended" class="sbmt btn btn-warning" onclick="confirm_action('set_suspended', 'Do you really want set Suspended selected users?');"> &nbsp; <input type=button value="Delete" class="sbmt btn btn-danger" onclick="confirm_action('delete', 'Do you really want delete selected users?\nNON REVERSIBLE!!! ');"> &nbsp; <br><br> <?php }?> <center> <?php echo paginator(array('col'=>$_smarty_tpl->tpl_vars['pages']->value['col'],'cur'=>$_smarty_tpl->tpl_vars['pages']->value['cur'],'url'=>"javascript:go(%s)",'use_first'=>1,'use_last'=>1),$_smarty_tpl);?>
 </center> </form> <?php if ($_smarty_tpl->tpl_vars['permits']->value['manage']) {?> <a class="sbmt btn btn-success" href="?a=user_edit">Add User</a> <br> <?php }?> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Members list:<br><br> Members list splits your members to 3 types: Active, Suspended and Disabled.<br> Active: User can login and receive earnings if deposited in the system.<br> Suspended: User can login, but cannot not receive any earnings from deposits.<br> Disabled: User can not login and cannot receive any earnings.<br> <br> The top left search form helps you to search a user by the nickname or e-mail. You can also enter a part of a nickname or e-mail to search users.<br> The top right form helps you to navigate between the user types.<br> You can see the following information in the members list:<br> Nickname, Registration date, Status, Account, Deposit, Earned, Withdrew. You can see not confirmed users also if you use double opt-in registration.<br> <br> Edit user information: click on the &quot;Edit&quot; button next to a user<br> Delete user: click on the &quot;delete&quot; button and confirm this action;<br> Send e-mail to user: click on the &quot;e-mail&quot; button and send e-mail to user.<br> &quot;Manage funds&quot; button will help you to check any user&#39;s history and change his funds.<br> Add a new Member: click on the &quot;Add a new member&#38; button. You&#38;ll see the form for adding a new member. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?><?php
/* smarty_template_function_value_color_94614721065a2307565fbf2_93388779 */
if (!function_exists('smarty_template_function_value_color_94614721065a2307565fbf2_93388779')) {
function smarty_template_function_value_color_94614721065a2307565fbf2_93388779($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('add_fiat'=>true,'color_neg'=>"red",'color_pos'=>"green",'color_net'=>"gray"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?> <b style="color:<?php if ($_smarty_tpl->tpl_vars['value']->value < 0) {
echo $_smarty_tpl->tpl_vars['color_neg']->value;
} elseif ($_smarty_tpl->tpl_vars['value']->value > 0) {
echo $_smarty_tpl->tpl_vars['color_pos']->value;
} else {
echo $_smarty_tpl->tpl_vars['color_net']->value;
}?>"><?php if ($_smarty_tpl->tpl_vars['add_fiat']->value) {
echo amount_smarty_fiat($_smarty_tpl->tpl_vars['value']->value);
} else {
echo $_smarty_tpl->tpl_vars['value']->value;
}?></b> <?php foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_value_color_94614721065a2307565fbf2_93388779 */

?>
