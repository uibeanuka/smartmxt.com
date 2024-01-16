
   
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
                     
                       <div style="position:relative;">
                <div id="google_translate_element" style="display: flex; place-content: center;"></div>
                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                            pageLanguage: 'en'
                        }, 'google_translate_element');
                    }
                </script>
                <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
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
                <script>
                    console.log('Document Loaded');
                    setTimeout(() => {
                        let children = document.querySelector(".skiptranslate.goog-te-gadget").childNodes;
                        document.querySelector(".skiptranslate.goog-te-gadget").removeChild(children[2]);
                        document.querySelector(".skiptranslate.goog-te-gadget").removeChild(children[1]);
                    }, 5000);
                </script>
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
                                          </div>
                </div>
            </div>
        </div>
        
        
        
        
    </footer>
    <!-- Footer -->
    
       




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
                {literal}
  <script>
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
  </script>
                     

                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                              new google.translate.TranslateElement({
                                  pageLanguage: 'en'
                              }, 'google_translate_element');
                            }
                        </script>
                        <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
                        
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
    
    <!-- Invest Modal -->

    <script src="assets/front/js/jquery-3.6.0.min.js"></script>
    <script src="assets/front/js/bootstrap.min.js"></script>
    <script src="assets/front/js/viewport.jquery.js"></script>
    <script src="assets/front/js/odometer.min.js"></script>
    <script src="assets/front/js/lightbox.min.js"></script>
    <script src="assets/front/js/owl.min.js"></script>
    <script src="assets/front/js/toastr.min.js"></script>
    <script src="assets/front/js/notify.js"></script>
    <script src="assets/front/js/main.js"></script>
    <script src="assets/front/js/custom.js"></script>

    <script>
        'use strict';
    let mainurl = '#';
  </script>


    <script>
        'use strict';
    
              
              
              
            </script>

    <script>
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

    </script>
{/literal}
        
</body>

</html>
