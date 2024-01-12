<?php /* Smarty version 3.1.27, created on 2024-01-12 16:35:12
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:90720088765a16a400361f5_97097014%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77abfcfa45c3168ed25852518a2749ff102a8318' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/footer.tpl',
      1 => 1705075684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90720088765a16a400361f5_97097014',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a16a40045093_10191506',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a16a40045093_10191506')) {
function content_65a16a40045093_10191506 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '90720088765a16a400361f5_97097014';
?>

   
    <!-- CTAs -->

    
    <style>
        .toTopBtn.active {
            bottom: 90px!important;
        }
    </style>


    <!-- Footer -->
    <!-- Footer -->
    <footer class="bg--gradient border-top overflow-hidden position-relative">
        <div class="particle"></div>
        <div class="particle2"></div>
        <div class="particle3"></div>
        <div class="particle4"></div>
        <div class="footer-top py-5">
            
            <div class="container">
                 <center>
                     
                
   <p><font color="white" family=" Arial, sans-serif" align="center" margin"50px"><span id="onlineCount">0</span> Investors Currently Online</p></font>

  <?php echo '<script'; ?>
>
    function updateOnlineCount() {
      // Generate a random number within the range 1010 - 1900
      const peopleOnline = Math.floor(Math.random() * (1900 - 1010 + 1)) + 1010;

      // Update the HTML element with the new count
      document.getElementById('onlineCount').textContent = peopleOnline;
    }

    // Initial update
    updateOnlineCount();

    // Update the count every 30 seconds (30,000 milliseconds)
    setInterval(updateOnlineCount, 30000);
  <?php echo '</script'; ?>
>
                     
                     
                       <div style="position:relative;">
                <div id="google_translate_element" style="display: flex; place-content: center;"></div>
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
 type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"><?php echo '</script'; ?>
>
                <style>
                    div.nice-select.goog-te-combo {
                        display: none;
                    }

                    select.goog-te-combo {
                        width: auto;
                        height: 43px;
                        padding-left: 13px;
                        border-radius: 4px;
                        outline: none;
                        background: rgb(27 29 39);
                        color: #fff;
                        font-family: 'Nunito';
                    }

                    body {
                        top: 0!important;
                    }

                    iframe.goog-te-banner-frame.skiptranslate {
                        display: none;
                    }
                </style>
                <?php echo '<script'; ?>
>
                    console.log('Document Loaded');
                    setTimeout(() => {
                        let children = document.querySelector(".skiptranslate.goog-te-gadget").childNodes;
                        document.querySelector(".skiptranslate.goog-te-gadget").removeChild(children[2]);
                        document.querySelector(".skiptranslate.goog-te-gadget").removeChild(children[1]);
                    }, 5000);
                <?php echo '</script'; ?>
>
            </div>
                     
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezrBETtka2TfXob4z8SzMUr8K8B7dBoSojGjJArJeAOrzTj2H1eha3OO5fo8w6cG" crossorigin="anonymous">
<LI><a href="cdn-cgi/l/email-protection.html#dcafa9acacb3aea89cafb1bdaea8b1a4a8f2bfb3b1">
  <i class="fas fa-envelope" style="font-size: 30px; color: white;"></i>
</a> &nbsp;&nbsp;&nbsp;  
<a href="https://t.me/{$settings.site_name}bot" target="new">
  <i class="fab fa-telegram" style="font-size: 30px; color: #0088cc;"></i>
</a> &nbsp;&nbsp;&nbsp; 
<a href="https://wa.me/0">
  <i class="fab fa-whatsapp" style="font-size: 30px; color: green;"></i>
</a>
</LI>
              
           </center>
                <div class="footer-wrapper flex-wrap">
          
                    
                    <ul class="footer-link w-100 mw-100 justify-content-center">
                                                    <li>
                                <a href="disclaimer.html">Disclaimer</a>
                            </li>
                                                    <li>
                                <a href="terms.html">Terms and conditions</a>
                            </li>
                                                    <li>
                                <a href="privacy.html">Privacy Policy</a>
                            </li>
                                                    <li>
                                <a href="?a=faq">Frequently Asked Questions</a>
                            </li>
                                                    <li>
                                <a href="?a=about">About Us</a>
                            </li>
                                            </ul>
                    <div class="text--light w-100 mw-100 text-center">
                        <p>"Empowering Futures Through Strategic Investments | {$settings.site_name} - Where Vision Meets Value"<br></p> 
                        <?php echo '<script'; ?>
 data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "siqb5f185832f1ac2b1a9ebf773812b7e44513babe71924bca5490276c04c2e54bc", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="../salesiq.zohopublic.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);<?php echo '</script'; ?>
>                    </div>
                </div>
            </div>
        </div>
        
        
        
        
    </footer>
    <!-- Footer -->
    
         <!-- Footer -->

    <div class="cookie-bar-wrap show js-cookie-consent cookie-consent">
    <div class="container d-flex justify-content-center">
        <div class="col-xl-10 col-lg-12">
            <div class="row justify-content-center">
                <div class="cookie-bar">
                    <div class="cookie-bar-text cookie-consent__message">
                        Step into a world of unparalleled trading excellence! 🚀 We are thrilled to welcome you to our platform where remarkable ROI, referral bonuses, and airdrops await. Your security is paramount – our site boasts top-notch protection. Keep your login details confidential; your success is in safe hands.Happy trading!
                    </div> 
                    <div class="cookie-bar-action js-cookie-consent-agree cookie-consent__agree">
                        <button class="btn btn-accept cmn--btn text-white" >
                           
                            <a
                              
                              href="?a=login"
                              > <b><font color="white">REGISTER</font></b></a
                            >
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php echo '<script'; ?>
>

        window.laravelCookieConsent = (function () {

            const COOKIE_VALUE = 1;
            const COOKIE_DOMAIN = '{$settings.site_name}';

            function consentWithCookies() {
                setCookie('laravel_cookie_consent', COOKIE_VALUE, 7300);
                hideCookieDialog();
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');

                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value
                    + ';expires=' + date.toUTCString()
                    + ';domain=' + COOKIE_DOMAIN
                    + ';path=/'
                    + '';
            }

            if (cookieExists('laravel_cookie_consent')) {
                hideCookieDialog();
            }

            const buttons = document.getElementsByClassName('js-cookie-consent-agree');

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        })();
    <?php echo '</script'; ?>
>



    <!-- Invest Modal -->
    <div class="modal fade" id="invest-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="investForm" action="https://{$settings.site_name}/?a=login" method="POST">
                    <input type="hidden" name="_token" value="eXGkCKMrr4Ftcxpp3w7OhBRt0vJNOReUjL2GFKSK">                    <div class="modal-body p-4">
                        <h4 class="modal-title text-center plan-title">Basic Plan</h4>
                        <div class="pt-3 pb-4">
                            <label for="amount" class="form-label">Enter Amount</label>
                            <div class="input-group input--group">
                                <input type="number" name="amount" class="form-group-input form-control form--control bg--section"
                                    placeholder="0.00" id="modalAmount">
                                <button type="button" class="input-group-text">USD</button>
                            </div>

                            <label for="amount" class="form-label">Select Wallet</label>
                            <div class="input-group input--group">
                                <select name="wallet" id="investMethod" class="form-control" required>
                                    <option value="main_wallet">Main Balance</option>
                                    <option value="interest_wallet">Interest Balance</option>
                                    <!--<option value="checkout">checkout</option>-->
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="investId" id="investId" value="">
                        <div class="d-flex">
                            <button type="button" class="btn shadow-none btn--danger me-2 w-50"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn shadow-none btn--success w-50">Proceed</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
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
 type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"><?php echo '</script'; ?>
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
    
    <!-- Invest Modal -->

    <?php echo '<script'; ?>
 src="assets/front/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/front/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/front/js/viewport.jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/front/js/odometer.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/front/js/lightbox.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/front/js/owl.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/front/js/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/front/js/notify.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/front/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/front/js/custom.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        'use strict';
    let mainurl = 'index.html';
  <?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>
        'use strict';
    
              
              
              
            <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        'use strict';

        $('.invest-plan').on('click',function(){
            $('#modalAmount').val('');
            $('#modalAmount').prop('readonly',false)

            let id = $(this).data('id');
            let title = $(this).data('title');
            let type = $(this).data('type');

            if(type == 1){
                $('#modalAmount').val($(this).attr('data-fixAmount'));
                $('#modalAmount').prop('readonly',true)
            }
            $('#investId').val(id);
            $('.plan-title').text(title);
        });

        $(document).on('change','#investMethod',function(){
            var val = $(this).val();
            if(val == 'checkout'){
                $('.investForm').prop('action','?a=login.html');
            }

            if(val == 'main_wallet'){
                $('.investForm').prop('action','?a=login');
            }

            if(val == 'interest_wallet'){
                $('.investForm').prop('action','?a=login');
            }
        });
        
        window.onload = () => {
            document.querySelector("#modal-notice-btn").click();
        };

    <?php echo '</script'; ?>
>

        
</body>

</html>
<?php }
}
?>