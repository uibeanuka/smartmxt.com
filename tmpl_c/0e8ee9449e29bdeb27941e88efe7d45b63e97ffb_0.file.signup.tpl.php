<?php /* Smarty version 3.1.27, created on 2024-01-13 07:42:15
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:149009484965a23ed7d12317_17972652%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e8ee9449e29bdeb27941e88efe7d45b63e97ffb' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/signup.tpl',
      1 => 1705102631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149009484965a23ed7d12317_17972652',
  'variables' => 
  array (
    'deny_registration' => 0,
    'settings' => 0,
    'referer' => 0,
    'errors' => 0,
    'err' => 0,
    'pay_accounts' => 0,
    'ps' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a23ed7d7ea12_98386851',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a23ed7d7ea12_98386851')) {
function content_65a23ed7d7ea12_98386851 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '149009484965a23ed7d12317_17972652';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 

<?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
 We are closed for new registrations now.
<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value['id'] && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
 You  do not have a upline. Our system require a upline for each user.
<?php } else { ?>
 

 <?php echo '<script'; ?>
 language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>
 
  if (document.regform.address.value == '') {
    alert("Please enter your address!");
    document.regform.address.focus();
    return false;
  }
  if (document.regform.city.value == '') {
    alert("Please enter your city!");
    document.regform.city.focus();
    return false;
  }
  if (document.regform.state.value == '') {
    alert("Please enter your state!");
    document.regform.state.focus();
    return false;
  }
  if (document.regform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.regform.zip.focus();
    return false;
  }
  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.regform.country.focus();
    return false;
  }
 
 <?php }?>
 
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
 
  if (document.regform.transaction_code.value == '') {
    alert("Please enter your transaction code!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.regform.transaction_code2.focus();
    return false;
  }
 
 <?php }?>
 
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retype your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 <?php echo '</script'; ?>
>
 

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?><div class="error">Invalid turing image</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_fullname']) {?><div class="error">Please enter your full name</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['ip_exists_in_database']) {?><div class="error">Your IP already exists in our database. Sorry, but registration impossible</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_username']) {?><div class="error">Please enter valid username! It should contains English letters and digits only.</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['username_too_short']) {?><div class="error">Username should contains <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['username_too_short']);?>
 charaters at least</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['username_exists']) {?><div class="error">The Username is already taken. Please try another Username.</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_password']) {?><div class="error">Please define a password</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['password_confirm']) {?><div class="error">Please confirm your password correctly</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['password_too_small']) {?><div class="error">The password you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['password_too_small']);?>
 characters!</div><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_email']) {?><div class="error">Please valid email address</div><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['errors']->value['email_confirm']) {?><div class="error">Please confirm your email address correctly</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['email_exists']) {?><div class="error">An account with this email is already exist</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_address']) {?><div class="error">Please enter your address</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_city']) {?><div class="error">Please enter your city</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_state']) {?><div class="error">Please enter your state</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_zip']) {?><div class="error">Please enter your zip</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_country']) {?><div class="error">Please enter your country</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_transaction_code']) {?><div class="error">Please define a transaction code</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_confirm']) {?><div class="error">Please correcty confirm your transaction code</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_too_small']) {?><div class="error">The transaction code you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['transaction_code_too_small']);?>
 characters!</div><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_vs_password']) {?><div class="error">The Transaction Code should not be equal to the Password you have defined</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_agree']) {?><div class="error">You have to agree with the Terms and Conditions!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_account_format']) {?>
 <?php
$_from = $_smarty_tpl->tpl_vars['errors']->value['invalid_account_format'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
 <div class="error"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>
</div>
 <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
<?php }?>
<?php }?> 
  <!-- Overlayer -->
    <span class="toTopBtn">
        <i class="fas fa-angle-up"></i>
    </span>
    <div class="overlayer"></div>
    <div class="loader"></div>
    <div class="particle"></div>
    <div class="particle2"></div>
    <div class="particle3"></div>
    <div class="particle4"></div>
    <!-- Overlayer --><br><br>
        <!-- Account Section -->
        <section class="accounts-section">
            <div class="accounts-inner">
                <div class="accounts-inner__wrapper bg--section">
                    <div class="accounts-left">
                        <div class="accounts-left-content mw-100">
                            
                            <div class="section-header">
                                <h6 class="section-header__subtitle"></h6>
                                <h3 class="section-header__title">Create your account</h3>
                                <p>
                                    Change your lifestyle signing up here. Invest and easily earn money for much better life                                </p>
                            </div>
                            <form class="row gy-3" method=post onsubmit="return checkform()" name="regform">
                                <input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">
                               <div class="col-lg-6 col-lg-12 col-xl-6">
                                    <label for="name" class="form-label">Enter Full Legal Name <font color="red" size="small"><small>(required)</small></font></label><p><small id="emailHelp" class="form-text text-muted">Please enter your name as shown on your Identity Card.</small></p>
                                    <input type="text" name="fullname"  class="form-control" required>
                                </div>
<hr>
                              
<div class="col-lg-6 col-lg-12 col-xl-6">
    <label for="email" class="form-label">Your Email <font color="red" size="small"><small>(required)</small></font></label>
    <p><small id="emailHelp" class="form-text text-muted">Please enter a valid email address.</small></p>
    <input type="email" name="email"  class="form-control" required>
    
</div>


<hr>
                              
<div class="col-lg-6 col-lg-12 col-xl-6">
    <label for="email" class="form-label">Retype Email <font color="red" size="small"><small>(required)</small></font></label>
    <p><small id="emailHelp" class="form-text text-muted">Please enter a valid email address.</small></p>
    <input type="email" name="email1"  class="form-control" required>
    
</div>

<hr>

                                <div class="col-lg-6 col-lg-12 col-xl-6">
                                    <label for="username" class="form-label">Choose Username <font color="red" size="small"><small>(required)</small></font></label><p><small id="emailHelp" class="form-text text-muted">Please enter your desired username</small></p>
                                    <input type="text" name="username"  class="form-control" required>
                                </div>

<hr>
                                <div class="col-lg-6 col-lg-12 col-xl-6">
                                    <label for="password" class="form-label">Password <font color="red" size="small"><small>(required)</small></font></label><p>
                                        <small id="emailHelp" class="form-text text-muted">Choose a Password</small>
                                    </p>
                                    <input type="password" name="password"  class="form-control" required>
                                </div>

                                <div class="col-lg-6 col-lg-12 col-xl-6">
                                    <label for="confirm-password" class="form-label">Confirm Password <font color="red" size="small"><small>(required)</small></font></label><p><small id="emailHelp" class="form-text text-muted">Please retype password</small></p>
                                    <input type="password" name="password2" 
                                        class="form-control" required>
                                </div>
                                <hr>
                               <?php
$_from = $_smarty_tpl->tpl_vars['pay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
 <div class="form-group">
     <div class="fxt-transformY-50 fxt-transition-delay-1">
<input type=text class="form-control" name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));?>
" data-validate="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
" data-validate-<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate'][$_smarty_tpl->tpl_vars['ps']->value['validate']['func']]);?>
" data-validate-notice="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['validate']['notification'], ENT_QUOTES, 'UTF-8', true));?>
" placeholder="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
 Account">
 </div>
 </div> 
 <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
<?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
 <div class="form-group">
     <div class="fxt-transformY-50 fxt-transition-delay-1">
<input type=text class="form-control" placeholder="Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
 :"  name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
][<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));?>
">
 </div>
 </div> 
 <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

                                
                                <div class="col-12 mt-2">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                type=checkbox  name=agree value=1 <?php if ($_smarty_tpl->tpl_vars['frm']->value['agree']) {?>checked<?php }?> > I agree with <a href="?a=rules">Terms and conditions</a>
                                            
                                           
                                        </div><br><br>
                                        
                                    </div>
                                </div>
                                
                                <div class="alert alert-success alert-dismissible fade show" style="display: none;">
  <p class="m-0 text-success"></p>
</div>

<div class="alert alert-info alert-dismissible fade show" style="display: none;">
  <p class="m-0 text-info"></p>
</div>

<style>
    @keyframes  spin{
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    .spin{
        animation: spin linear infinite .5s;
    }
</style>


<div class="alert alert-danger alert-dismissible fade show" style="display: none;" role="alert">
<p class="m-0 text-danger"></p>
</div>

                                <div class="col-sm-12">
                                    <button type="submit" class="cmn--btn">Sign Up For Trading Account</button>
                                    
                                </div><br><br><br><br>
                                <div class="col-sm-12">
                                    Already Registered ? <a href="?a=login" class="text--base">Sign In</a> |  |  <a href="?a=forgot_password" class="text--base">Forget Password</a>
                                </div>
                            </form>
                            <?php }?>
                        </div>
                    </div>
                    <div class="accounts-right bg--blue">
                        <img src="../assets/images/login.jpg"  alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
">
                        <div class="section-header text-center text-white mb-0">
                            <h6 class="section-header__subtitle"></h6>
                            <h5 class="section-header__title">Welcome Investor, where your financial journey begins. Securely access your account to explore the world of Bitcoin trading and investment. Your success is our priority. Happy trading!</h5>
                            <p>
                                Build wealth passively and get control of your reality with financial freedom.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Accounts Section -->
        
        <div style="position:relative; display:none;">
            <div id="google_translate_element" style="
                display: flex;
                place-content: center;
            "></div>
    
          

</body>
</html>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>