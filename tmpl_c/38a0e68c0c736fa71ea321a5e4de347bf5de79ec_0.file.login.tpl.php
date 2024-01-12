<?php /* Smarty version 3.1.27, created on 2024-01-12 16:27:54
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:70360296565a1688a8e52c9_26344568%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a0e68c0c736fa71ea321a5e4de347bf5de79ec' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/login.tpl',
      1 => 1705076620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70360296565a1688a8e52c9_26344568',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a1688a901017_11235442',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a1688a901017_11235442')) {
function content_65a1688a901017_11235442 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '70360296565a1688a8e52c9_26344568';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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
    <!-- Overlayer -->
    <!-- Account Section --><br><br>
    <section class="accounts-section">
        <div class="accounts-inner">
            <div class="accounts-inner__wrapper bg--section">
                <div class="accounts-left">
                    <div class="accounts-left-content">
                        
                        <div class="section-header">
                            <h6 class="section-header__subtitle"></h6>
                            <h3 class="section-header__title">Sign in to your account</h3>
                            <p>
                                Welcome Investor, where your financial journey begins. Securely access your account to explore the world of Bitcoin trading and investment. Your success is our priority. Happy trading!
                            </p>
                        </div>
                        <form class="row gy-4" id="loginform" action="https://<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
/?a=login" method="POST">
                            
                            <input type="hidden" name="_token" value="WH1upoShll2PWR0L4o0GpHWsz1W2CG8weFEV6UaI">                            <div class="col-sm-12">
                                <label for="username" class="form-label">Your Email</label>
                                <input type="email" name="email" id="username" class="form-control" value="">
                            </div>
                           <div class="col-sm-12">
    <label for="password" class="form-label">Your Password</label>
    <div class="password-input-group">
        <input type="password" name="password" id="password" class="form-control">
        <span class="toggle-password" onclick="togglePasswordVisibility()"><i id="password-eye-icon" class="fa fa-eye"></i></span>
    </div>
</div>
<?php echo '<script'; ?>
>function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var passwordEyeIcon = document.getElementById("password-eye-icon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordEyeIcon.classList.remove("fa-eye");
        passwordEyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        passwordEyeIcon.classList.remove("fa-eye-slash");
        passwordEyeIcon.classList.add("fa-eye");
    }
}<?php echo '</script'; ?>
>
                            <div class="col-12 mt-2">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input"
                                            checked>
                                        <label for="remember" class="form-check-label">Remember Me</label>
                                    </div>
                                    <a href="forgot.html" class="text--base">Forgot Password?</a>
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
                                <button class="cmn--btn">Sign In</button>
                            </div>
                            <div class="col-sm-12">
                                Not Registered Yet ? <a href="register.html" class="text--base">Create an
                                    Account</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="accounts-right bg--blue">
                    <img src="../assets/images/login.jpg" alt="images">
                    <div class="section-header text-center text-white mb-0">
                        <h6 class="section-header__subtitle"></h6>
                        <h5 class="section-header__title">Welcome Investor, where your financial journey begins. Securely access your account to explore the world of Bitcoin trading and investment. Your success is our priority. Happy trading!</h5>
                        <p>
                            Build wealth passively and get control of your reality with financial freedom.                        </p>
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

        <?php echo '<script'; ?>
 type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({
                  pageLanguage: 'en'
              }, 'google_translate_element');
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="../../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"><?php echo '</script'; ?>
>
        
        <style>
            div.nice-select.goog-te-combo{
                display: none;
            }
            select.goog-te-combo{
                width: auto;
                height: 43px;
                padding-left: 13px;
                border-radius: 4px;
                outline: none;
                background: rgb(27 29 39);
                color: #fff;
                font-family: 'Nunito';
            }
            body{
                top: 0!important;
            }
            iframe.goog-te-banner-frame.skiptranslate{
                display: none;
            }
        </style>
        
        <?php echo '<script'; ?>
>
            console.log('Document Loaded');
            setTimeout(()=>{
                let children = document.querySelector(".skiptranslate.goog-te-gadget").childNodes;
                document.querySelector(".skiptranslate.goog-te-gadget").removeChild(children[2]);
                document.querySelector(".skiptranslate.goog-te-gadget").removeChild(children[1]);
            }, 5000);
        <?php echo '</script'; ?>
>
    </div>


</body>

</html>


   
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>