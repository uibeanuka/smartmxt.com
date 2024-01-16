<?php /* Smarty version 3.1.27, created on 2024-01-13 02:03:05
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/add_funds.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:75649626365a1ef591690a0_01944120%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c4ea8cada23cdf20b2fe452427f36e264f09a19' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/add_funds.tpl',
      1 => 1705111260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75649626365a1ef591690a0_01944120',
  'variables' => 
  array (
    'frm' => 0,
    'ps' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a1ef5919e4d6_28646958',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a1ef5919e4d6_28646958')) {
function content_65a1ef5919e4d6_28646958 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '75649626365a1ef591690a0_01944120';
echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_success') {?>
<h3>The deposit has been successfully saved.</h3>
<br><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_saved') {?>
<h3>The deposit has been saved. It will became active when the administrator checks statistics.</h3><br><br>
<?php }?>

<h3>Deposit to Account:</h3>
<br>
<div style="position: relative; width: 100%; height: 200px; overflow: hidden;">
  <img src="deposit.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="">
  <div style="position: absolute; top: 10px; right: 10px; background: rgba(0, 0, 0, 0.5); color: white; font-size: 20px; font-weight: bold; padding: 5px;">Make A Deposit</div></div>
<div class="dashboard--content-item">
  <div class="row g-3">
    <div class="col-12">
      <div class="card default--card">
          <div class="card-body">
                    <form id="deposit-form" action="" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="TKAJDpEIfsXwiR4enQ6gjQLZ1FiEiWGj8jBDxzAx">
              <div class="row gy-3 gy-md-4">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label required">Select Payment Method <font color="red"><small>(required)</small></font></label>
                        <select name="type"  class="form-control" required>
                            <option value="">Select Cryptocurrency</option>
                              																			 <?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
 <option value="process_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" data-fiat="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['fiat']);?>
"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</option>
 <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>		
                                                                                                                   
                        </select>
                    </div>
                </div>



            
                
                <div class="col-sm-6">
  <div class="form-group">
    <label class="form-label required">How Much Do You Want To Deposit <font color="red"><small>(required)</small></font></label>
    <input name="amount"  class="form-control" autocomplete="off" placeholder="Enter amount in USD" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" value="" min="1" required>
  </div>
</div>
                
                
            
<br>
<br>
     
      <br>

                <div class="col-sm-12">
                  <button type="submit" class="cmn--btn bg--primary submit-btn w-100 border-0">CLICK TO COMPLETE DEPOSIT REQUEST</button>

                </div>
              </div>

          </form>
        </div>
      </div>
  </div>
  </div>
</div>


<style>
    #qrcode{
        background: #fff;
        padding: 1.5rem;
        /*margin: 2rem 0;*/
    }
    
    .manual-payment-info{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2rem;
        text-align: center;
    }
</style>

<?php echo $_smarty_tpl->getSubTemplate ("footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>