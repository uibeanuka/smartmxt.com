{include file="header.tpl"}

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
                            <form id="registerform" class="row gy-3" action="https://{$settings.site_name}/?a=signup" method="POST">
                                <input type="hidden" name="_token" value="Q375qjfiDrkX5LEgZ1rRASUzNP7jjBQXAYqUaa7c">                                <div class="col-lg-6 col-lg-12 col-xl-6">
                                    <label for="name" class="form-label">Enter Full Legal Name <font color="red" size="small"><small>(required)</small></font></label><p><small id="emailHelp" class="form-text text-muted">Please enter your name as shown on your Identity Card.</small></p>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
<hr>
                              
<div class="col-lg-6 col-lg-12 col-xl-6">
    <label for="email" class="form-label">Your Email <font color="red" size="small"><small>(required)</small></font></label>
    <p><small id="emailHelp" class="form-text text-muted">Please enter a valid email address.</small></p>
    <input type="email" name="email" id="email" class="form-control" required>
    
</div>

<script>
    document.getElementById('email').addEventListener('input', function() {
        var emailInput = document.getElementById('email');
        var emailHelp = document.getElementById('emailHelp');
        
        var validDomains = ['gmail.com','taekniverk.is', 'yahoo.com'];
        var enteredEmail = emailInput.value.toLowerCase();
        var enteredDomain = enteredEmail.split('@')[1];
        
        var isValid = validDomains.some(function(domain) {
            return enteredDomain === domain;
        });

        if (!isValid) {
            emailInput.setCustomValidity('Please use a valid email address.');
            emailHelp.textContent = 'Please use a valid email address.';
        } else {
            emailInput.setCustomValidity('');
            emailHelp.textContent = ' ';
        }
    });
</script><hr>

                                <div class="col-lg-6 col-lg-12 col-xl-6">
                                    <label for="username" class="form-label">Choose Username <font color="red" size="small"><small>(required)</small></font></label><p><small id="emailHelp" class="form-text text-muted">Please enter your desired username</small></p>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
<hr>
                                <div class="col-lg-6 col-lg-12 col-xl-6">
                                    <label for="phone" class="form-label">Your Phone Number <font color="red" size="small"><small>(required)</small></font></label><p> <small id="emailHelp" class="form-text text-muted">Please enter your whatsapp number</small></p>
                                 <input type="text" pattern="[0-9]*" title="Please enter number only without the +" name="phone" id="phone" class="form-control" placeholder=" " required>
                                   
                                </div>
<hr>
                                <div class="col-lg-6 col-lg-12 col-xl-6">
                                    <label for="password" class="form-label">Password <font color="red" size="small"><small>(required)</small></font></label><p>
                                        <small id="emailHelp" class="form-text text-muted">Choose a Password</small>
                                    </p>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <div class="col-lg-6 col-lg-12 col-xl-6">
                                    <label for="confirm-password" class="form-label">Confirm Password <font color="red" size="small"><small>(required)</small></font></label><p><small id="emailHelp" class="form-text text-muted">Please retype password</small></p>
                                    <input type="password" name="password_confirmation" id="confirm-password"
                                        class="form-control" required>
                                </div>
                                <hr>
                                <div class="col-lg-6 col-lg-12 col-xl-6">
                                    
    <label for="photo" class="custom-file-input-label">Select Profile Photo</label> <font color="red" size="small"><small>(required)</small></font>
<input type="file" id="photo" name="photo" accept=".jpeg, .jpg, .png" required onchange="displaySelectedImage(this)" style="display:none;">
<style>.custom-file-input-label {
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border: 1px solid #ccc;
    border-radius: 4px;
}

#photo {
    display: none; /* Hide the original file input */
}</style>
    <img id="selectedImage" alt="Selected Image" style="width: 200px; height: 200px; margin-top: 10px; display: none;">
</div>


                                
                                <div class="col-12 mt-2">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" name="remember" id="remember" class="form-check-input"
                                                checked>
                                            <label for="remember" class="form-check-label">I accept all <a 
                                                    href="../terms.html" class="text--base">Terms & Condition</a> and <a 
                                                    href="../privacy.html" class="text--base">Privacy Policy</a></label>
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
                                    Already Registered ? <a href="login.html" class="text--base">Sign In</a> |  |  <a href="?a=forgot_password" class="text--base">Forget Password</a>
                                </div>
                            </form>
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
