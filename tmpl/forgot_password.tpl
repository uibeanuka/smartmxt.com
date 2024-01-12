{include file="header.tpl"}



	


<br><br>
    <!-- Account -->
    <section class="account-section pt-100 pb-100">
         
        <div class="container">
            <div class="account-wrapper bg--body">
                <div class="section-title mb-3">
                    <h3 class="title">Forgot Password</h3>
                </div>
                <form class="account-form row gy-3 gx-4 align-items-center" id="loginform" action="https://{$settings.site_name}/user/forgot" method="POST">
                    <!--<div class="alert alert-success alert-dismissible fade show" style="display: none;">
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
-->
                                        <input type="hidden" name="_token" value="luXzV8QdZMb3m8EEfIoSjYGIImkgu7KYZBiTAVO6">                    <div class="col-sm-12">
                        <label for="email" class="form-label">Enter Your Registered Email</label>
                        <input type="text" id="email" name="email" class="form-control form--control">
                    </div>
<br><br>
                    <CENTER><div class="col-sm-12">
    <button type="submit" class="cmn--btn bg--red me-6">
        CLICK TO RESET PASSWORD    </button>
    
    <a href="login.html" class="text--green mt-1">LOGIN ACCOUNT (remember password)</a>
</div></CENTER>
                </form>
            </div>
        </div>
    </section>
    <!-- Account -->

{include file="footer.tpl"}
