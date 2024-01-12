<?php /* Smarty version 3.1.27, created on 2024-01-12 16:35:11
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/forgot_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71734687465a16a3ff08172_50131004%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f20d75c3a47eb320ca3bd2dd592af502201285cc' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/forgot_password.tpl',
      1 => 1705077238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71734687465a16a3ff08172_50131004',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a16a3ff181f9_87949512',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a16a3ff181f9_87949512')) {
function content_65a16a3ff181f9_87949512 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '71734687465a16a3ff08172_50131004';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>




	


<br><br>
    <!-- Account -->
    <section class="account-section pt-100 pb-100">
         
        <div class="container">
            <div class="account-wrapper bg--body">
                <div class="section-title mb-3">
                    <h3 class="title">Forgot Password</h3>
                </div>
                <form class="account-form row gy-3 gx-4 align-items-center" id="loginform" action="https://<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
/user/forgot" method="POST">
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>