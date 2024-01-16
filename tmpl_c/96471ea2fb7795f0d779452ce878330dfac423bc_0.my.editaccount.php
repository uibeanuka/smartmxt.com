<?php /* Smarty version 3.1.27, created on 2024-01-13 06:41:18
         compiled from "my:editaccount" */ ?>
<?php
/*%%SmartyHeaderCode:201400935265a2308e2d9585_18758816%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96471ea2fb7795f0d779452ce878330dfac423bc' => 
    array (
      0 => 'my:editaccount',
      1 => 1705128078,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '201400935265a2308e2d9585_18758816',
  'variables' => 
  array (
    'user' => 0,
    'frm' => 0,
    'errors' => 0,
    'val' => 0,
    'err' => 0,
    'error_messages' => 0,
    'pay_accounts' => 0,
    'p' => 0,
    'mpay_accounts' => 0,
    'ps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a2308e3312a9_87742179',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a2308e3312a9_87742179')) {
function content_65a2308e3312a9_87742179 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '201400935265a2308e2d9585_18758816';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3><?php if ($_smarty_tpl->tpl_vars['user']->value['id'] > 1) {?>Edit<?php } else { ?>Add<?php }?> User: <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] > 1) {?><a href="?a=user_details&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="sbmt btn-sm btn-primary">details</a><?php }?></h3>  <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "done") {?> <div class="alert alert-success">User information saved<br></div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_passphrase']) {?> <div class="alert alert-danger">Invalid Admin Alternative Password is provided.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_username']) {?> <div class="alert alert-danger">Username is required</div> <?php } elseif ($_smarty_tpl->tpl_vars['errors']->value['username_exists']) {?> <div class="alert alert-danger">Username already exists</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_password']) {?> <div class="alert alert-danger">Password is required</div> <?php } elseif ($_smarty_tpl->tpl_vars['errors']->value['passwords_not_match']) {?> <div class="alert alert-danger">Please enter new password 2 times same value<br></div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_not_match']) {?> <div class="alert alert-danger">Please enter new transaction code 2 times same value</div> <?php }?> <?php
$_from = $_smarty_tpl->tpl_vars['errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val']->_loop = false;
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$foreach_val_Sav = $_smarty_tpl->tpl_vars['val'];
?> <?php if ($_smarty_tpl->tpl_vars['val']->value && $_smarty_tpl->tpl_vars['error_messages']->value[$_smarty_tpl->tpl_vars['err']->value]["message"]) {?> <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error_messages']->value[$_smarty_tpl->tpl_vars['err']->value]["message"];?>
</div> <?php }?> <?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>  <form method=post name="regform"> <input type=hidden name=a value="user_edit"> <input type=hidden name=action value="save"> <input type=hidden name=id value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"> <input type=hidden name=say value=""> <table class="form">  <tr> <th>Full name:</th> <td><input type=text name=name value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr>  <tr> <th>Status:</th> <td><select name=status class=inpts> <option value="on" <?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == "on") {?>selected<?php }?>>Active <option value="off" <?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == "off") {?>selected<?php }?>>Disabled <option value="suspended" <?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == "suspended") {?>selected<?php }?>>Suspended</select> </td> </tr>  <tr> <th>Username:</th> <td><input type=text name=username value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <tr> <th>E-mail:</th> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <tr> <th>Password:</th> <td><input type=password name=password value="" class=inpts size=30></td> </tr><tr> <th>Retype password:</th> <td><input type=password name=password2 value="" class=inpts size=30></td> </tr>  <?php
$_from = $_smarty_tpl->tpl_vars['pay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <tr> <th><img src="images/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
.gif" width=44 height=17 alt="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
" align="absmiddle"></th> <td><input type=text name="processing_account[<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['account'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> <?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?> <tr> <th><?php echo $_smarty_tpl->tpl_vars['ps']->value['name'];?>
 <img src="images/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
.gif" width=44 height=17 alt="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
" align="absmiddle"></th> <td><input type=text name="mprocessing_account[<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr> <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>  <tr> <th>Secret Question:</th> <td><input type=text name=sq value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['sq'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> </tr><tr> <th>Secret Answer:</th> <td><input type=text name=sa value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['sa'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> </tr>  <tr> <th>Auto-withdrawal Enabled:</th> <td> <select name="auto_withdraw" class="inpts"> <option value=1 <?php if ($_smarty_tpl->tpl_vars['user']->value['auto_withdraw'] == 1) {?>selected<?php }?>>Yes</option> <option value=0 <?php if ($_smarty_tpl->tpl_vars['user']->value['auto_withdraw'] == 0) {?>selected<?php }?>>No</option> </select> </td> </tr> <tr> <th>Pay Earnings Automatically:</th> <td> <select name="admin_auto_pay_earning" class="inpts"> <option value=1 <?php if ($_smarty_tpl->tpl_vars['user']->value['admin_auto_pay_earning'] == 1) {?>selected<?php }?>>Yes</option> <option value=0 <?php if ($_smarty_tpl->tpl_vars['user']->value['admin_auto_pay_earning'] == 0) {?>selected<?php }?>>No</option> </select> </td> </tr>  <tr> <th>Max Daily Withdraw:</th> <td><input type=text name=max_daily_withdraw value="<?php echo $_smarty_tpl->tpl_vars['user']->value['max_daily_withdraw'];?>
" class=inpts><small>set 0 to skip limits</small></td> </tr>  <?php if ($_smarty_tpl->tpl_vars['user']->value['came_from']) {?> <tr> <th>Came from:</th> <td><small><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['came_from'], ENT_QUOTES, 'UTF-8', true);?>
" target=_blank><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['came_from'], ENT_QUOTES, 'UTF-8', true);?>
</a></td> </tr> <?php }?> <tr> <th>Reset security settings:</th> <td><input type=checkbox name=reset_security value=1> <small>(if user does not receive login pin and can&apos;t login)</small></td> </tr> <tr> <th>Demo Account:</th> <td><input type=checkbox name=demo_acc value=1 <?php if ($_smarty_tpl->tpl_vars['user']->value['demo_acc']) {?>checked<?php }?>></td> </tr>  <tr> <th>Admin Note:</th> <td><textarea name=admin_desc class=inpts><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['admin_desc'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr>  </table>  <br> <center> <input type=submit value="Save" class="btn btn-success sbmt"> </center> </form>  <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>