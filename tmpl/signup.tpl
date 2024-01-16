{include file="header.tpl"}

 

{if $deny_registration}
 We are closed for new registrations now.
{elseif $settings.use_referal_program && $settings.force_upline && !$referer.id && !$settings.get_rand_ref}
 You  do not have a upline. Our system require a upline for each user.
{else}
 {literal}

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 {/literal}
 {if $settings.use_user_location == 1}
 {literal}
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
 {/literal}
 {/if}
 {literal}
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
 {/literal}
 {if $settings.use_transaction_code}
 {literal}
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
 {/literal}
 {/if}
 {literal}
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
 </script>
 {/literal}

{if $errors}
{if $errors.turing_image}<div class="error">Invalid turing image</div>{/if}
{if $errors.no_fullname}<div class="error">Please enter your full name</div>{/if}
{if $errors.ip_exists_in_database}<div class="error">Your IP already exists in our database. Sorry, but registration impossible</div>{/if}
{if $errors.invalid_username}<div class="error">Please enter valid username! It should contains English letters and digits only.</div>{/if}
{if $errors.username_too_short}<div class="error">Username should contains {$errors.username_too_short} charaters at least</div>{/if}
{if $errors.username_exists}<div class="error">The Username is already taken. Please try another Username.</div>{/if}
{if $errors.no_password}<div class="error">Please define a password</div>{/if}
{if $errors.password_confirm}<div class="error">Please confirm your password correctly</div>{/if}
{if $errors.password_too_small}<div class="error">The password you provided is too small, please enter at least {$errors.password_too_small} characters!</div>{/if} 
{if $errors.invalid_email}<div class="error">Please valid email address</div>{/if} 
{if $errors.email_confirm}<div class="error">Please confirm your email address correctly</div>{/if}
{if $errors.email_exists}<div class="error">An account with this email is already exist</div>{/if}
{if $errors.no_address}<div class="error">Please enter your address</div>{/if}
{if $errors.no_city}<div class="error">Please enter your city</div>{/if}
{if $errors.no_state}<div class="error">Please enter your state</div>{/if}
{if $errors.no_zip}<div class="error">Please enter your zip</div>{/if}
{if $errors.no_country}<div class="error">Please enter your country</div>{/if}
{if $errors.no_transaction_code}<div class="error">Please define a transaction code</div>{/if}
{if $errors.transaction_code_confirm}<div class="error">Please correcty confirm your transaction code</div>{/if}
{if $errors.transaction_code_too_small}<div class="error">The transaction code you provided is too small, please enter at least {$errors.transaction_code_too_small} characters!</div>{/if} 
{if $errors.transaction_code_vs_password}<div class="error">The Transaction Code should not be equal to the Password you have defined</div>{/if}
{if $errors.no_agree}<div class="error">You have to agree with the Terms and Conditions!</div>{/if}
{if $errors.invalid_account_format}
 {foreach from=$errors.invalid_account_format item=err}
 <div class="error">{$err}</div>
 {/foreach}
{/if}
{/if} 
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
                               {foreach from=$pay_accounts item=ps}
 <div class="form-group">
     <div class="fxt-transformY-50 fxt-transition-delay-1">
<input type=text class="form-control" name="pay_account[{$ps.id}]" value="{$ps.account|escape:html}" data-validate="{$ps.validate.func}" data-validate-{$ps.validate.func}="{$ps.validate[$ps.validate.func]}" data-validate-notice="{$ps.validate.notification|escape:html}" placeholder="{$ps.name} Account">
 </div>
 </div> 
 {/foreach}
{foreach item=p from=$mpay_accounts}
{foreach item=ps from=$p.accounts}
 <div class="form-group">
     <div class="fxt-transformY-50 fxt-transition-delay-1">
<input type=text class="form-control" placeholder="Your {$p.name} {$ps.name} :"  name="pay_account[{$p.id}][{$ps.name|escape:html}]" value="{$ps.value|escape:html}">
 </div>
 </div> 
 {/foreach}
{/foreach}

                                
                                <div class="col-12 mt-2">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                type=checkbox  name=agree value=1 {if $frm.agree}checked{/if} > I agree with <a href="?a=rules">Terms and conditions</a>
                                            
                                           
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
                            {/if}
                        </div>
                    </div>
                    <div class="accounts-right bg--blue">
                        <img src="../assets/images/login.jpg"  alt="{$settings.site_name}">
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
{include file="footer.tpl"}
