{include file="header.tpl"}



{if $frm.say eq 'invalid_login'}
<h3>Login error:</h3><br><br>

<div class="error">Your login or password or turing image code is wrong. Please check this information.</div>
{if $bf_tries.status}
{if $bf_tries.left == 0}
<div class="error">You have already maximum times entered incorrectly login info. Your account is blocked. Check your email to active.</div>
{else}
<div class="error">You have <b>{$bf_tries.left}</b> tries to entered correctly login information befor blocking.</div>
{/if}
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
                        <form class="row gy-4" method=post name=mainform onsubmit="return checkform()">
                          
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value='{$frm.follow}'>
<input type=hidden name=follow_id value='{$frm.follow_id}'>
<div class="col-sm-12">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" value="">
                            </div>
                           <div class="col-sm-12">
    <label for="password" class="form-label">Your Password</label>
    <div class="password-input-group">
        <input type="password" name="password" id="password" class="form-control">
        <span class="toggle-password" onclick="togglePasswordVisibility()"><i id="password-eye-icon" class="fa fa-eye"></i></span>
    </div>
</div>
<script>function togglePasswordVisibility() {
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
}</script>
                            <div class="col-12 mt-2">
                                {include file="captcha.tpl" action="login"}
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input"
                                            checked>
                                        <label for="remember" class="form-check-label">Remember Me</label>
                                    </div>
                                    <a href="?a=forgot_password" class="text--base">Forgot Password?</a>
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
                                <button type="submit" class="cmn--btn">Sign In</button>
                            </div>
                            <div class="col-sm-12">
                                Not Registered Yet ? <a href="?a=signup" class="text--base">Create an
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

        <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({
                  pageLanguage: 'en'
              }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="../../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
        
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
        
        <script>
            console.log('Document Loaded');
            setTimeout(()=>{
                let children = document.querySelector(".skiptranslate.goog-te-gadget").childNodes;
                document.querySelector(".skiptranslate.goog-te-gadget").removeChild(children[2]);
                document.querySelector(".skiptranslate.goog-te-gadget").removeChild(children[1]);
            }, 5000);
        </script>
    </div>


</body>

</html>


   
{include file="footer.tpl"}
