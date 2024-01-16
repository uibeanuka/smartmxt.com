{include file="logo.tpl"}

{if $fatal}

{if $fatal == 'one_per_month'}
You can deposit once a month only.
{/if}

{else}

{literal}
<script language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");

{/literal}
  {if $qplans > 1}
{literal}
  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }
{/literal}
  {/if}
{literal}

}

function updateCompound() {
  var id = 0;
  var tt = document.spendform.h_id.type;
  if (tt && tt.toLowerCase() == 'hidden') {
    id = document.spendform.h_id.value;
  } else {
    for (i = 0; i < document.spendform.h_id.length; i++) {
      if (document.spendform.h_id[i].checked) {
        id = document.spendform.h_id[i].value;
      }
    }
  }

  var cpObj = document.getElementById('compound_percents');
  if (cpObj) {
    while (cpObj.options.length != 0) {
      cpObj.options[0] = null;
    }
  }

  if (cps[id] && cps[id].length > 0) {
    document.getElementById('coumpond_block').style.display = '';

    for (i in cps[id]) {
      cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
    }
  } else {
    document.getElementById('coumpond_block').style.display = 'none';
  }
}
var cps = {};
--></script>
{/literal}

{if $frm.say eq 'deposit_success'}
<h3>The deposit has been successfully saved.</h3>
<br><br>
{/if}

{if $frm.say eq 'deposit_saved'}
<h3>The deposit has been saved. It will become active when the administrator checks statistics.</h3><br><br>
{/if}

<h3>Make a Deposit:</h3>
<br>
{if $errors}
{if $errors.less_min}
Sorry, you can deposit not less than {$currency_sign}{$errors.less_min} with selected processing<br><br>
{/if}
{if $errors.greater_max}
Sorry, you can deposit not greater than {$currency_sign}{$errors.greater_max} with selected processing<br><br>
{/if}
{if $errors.not_enough_funds}
You have no enough funds to complete the operation.<br><br>
{/if}
{if $errors.ec_forbidden}
Sorry, deposit with selected processing is temproary forbidden.<br><br>
{/if}
{if $errors.cannot_invest_this_plan_anymore}
Sorry, you cannot invest this plan anymore<br><br>
{/if}
{if $errors.external_deposits_disabled}
Deposit to this plan from external processing is forbidden.
{/if}
{if $errors.internal_deposits_disabled}
Deposit to this plan from balance is forbidden.
{/if}
{if $errors.no_ps}
Please, select funds source.
{/if}
{if $errors.deposits_amount_exeeded}
Your total deposit in &quot;{$errors.deposits_amount_exeeded.plan|escape:html}&quot; should not more than {$errors.deposits_amount_exeeded.amount_limit|fiat}<br><br>
{/if}
{/if}

<div style="position: relative; width: 100%; height: 200px; overflow: hidden;">
  <img src="https://smartmxt.com/deposit.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="">
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
                        <select name="method" id="withmethod" class="form-control" required>
                            <option value="">Select Cryptocurrency</option>
                                                                                                        <option value="Manual" data-details="&lt;p&gt;&lt;b&gt;Here&#039;s a simple guide for a successful transaction:&lt;/b&gt;&lt;/p&gt;&lt;p&gt;1. Send the amount to the Ethereum (ETH) Wallet provided.&lt;br&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;2. Take a screenshot of the success message.&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;3. Copy the Transaction Hash/ID from your wallet.&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;4. Paste the Transaction Hash/ID in the given space.&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;5. Upload the screenshot for validation.&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;6. One request per transaction, please.&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;7. You&#039;ll get an email confirmation once your deposit is approved.&lt;/span&gt;&lt;/p&gt;" data-info="0xf30d85Ba7318c2973A8Bb699570814d78Dc949f5">ETHEREUM (ETH)</option>
                                                                                                                                                                            <option value="Manual" data-details="&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Here&#039;s a simple guide for a successful transaction:&lt;/span&gt;&lt;/p&gt;&lt;p&gt;1. Send the amount to the Bitcoin (BTC) Wallet provided.&lt;br&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;2. Take a screenshot of the success message.&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;3. Copy the Transaction Hash/ID from your wallet.&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;4. Paste the Transaction Hash/ID in the given space.&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;5. Upload the screenshot for validation.&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;6. One request per transaction, please.&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;7. You&#039;ll get an email confirmation once your deposit is approved.&lt;/span&gt;&lt;/p&gt;" data-info="14iStybUCA3Fe9ZzYb7aYVrCwEgoJJZy51">BITCOIN (BTC)</option>
                                                                                                                   
                        </select>
                    </div>
                </div>


                <input type="hidden" name="currency_sign" value="$">
                <input type="hidden" id="currencyCode" name="currency_code" value="USD">
                <input type="hidden" name="currency_id" value="1">

            
                
                <div class="col-sm-6">
  <div class="form-group">
    <label class="form-label required">How Much Do You Want To Deposit <font color="red"><small>(required)</small></font></label>
    <input name="amount" id="amount" class="form-control" autocomplete="off" placeholder="Enter amount in USD" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" value="" min="1" required>
  </div>
</div>
                
                
                
                <div class="col-sm-12">
                    <div id="card-view" class="col-md-12 d-none">
                        <div class="row gy-3">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="no_note" value="1">
                            <input type="hidden" name="lc" value="UK">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest">
    
                            <div class="col-md-6">
                                <input type="text" class="form-control card-elements" name="cardNumber" placeholder="Card Number" autocomplete="off" required autofocus oninput="validateCard(this.value);"/>
                                <span id="errCard"></span>
                            </div>
    
                            <div class="col-lg-6 cardRow">
                                <input type="text" class="form-control card-elements" placeholder="Card CVC" name="cardCVC" oninput="validateCVC(this.value);">
                                <span id="errCVC"></span>
                            </div>
    
                            <div class="col-lg-6">
                                <input type="text" class="form-control card-elements" placeholder="Month" name="month" >
                            </div>
    
                            <div class="col-lg-6">
                                <input type="text" class="form-control card-elements" placeholder="Year" name="year">
                            </div>
    
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mt-4 manual-payment d-none">
                    <div class="card default--card">
                      <div class="card-body">
                        <div class="row">
                            
                            
                            <center><H6><B><FONT COLOR="GREEN">CRYPTO PAYMENT INFORMATION</FONT></B></H6></center>
                            
                              
                              
                              <div class="col-sm-12 pb-2 pt-2 manual-payment-info">
                                  
                              </div>
                              
                        
                          
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 pt-4">
                            <label class="form-label required">Transaction Hash/ID/Wallet Name <font color="red"><small>(required)</small></font></label>
                            <input class="form-control" name="txn_id4" type="text" placeholder="Transaction ID" id="manual_transaction_id">
                    </div>
                    <div class="col-sm-12 pt-4">
                            <label class="form-label required">Payment Completed Proof <font color="red"><small>(required)</small></font></label>
                            <input class="form-control" type="file" name="proof" accept=".jpeg, .jpg, .png" onchange="displaySelectedImage(this)" required>
                            <img id="selectedImage" alt="Selected Image" style="width: auto;height: auto;max-width: 420px;margin-top: 10px;display: none;">
                    </div><div class="col-sm-12 pb-2 pt-2 manual-payment-details">
                                  
                              </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="col-sm-12">
                            
                            <input class="form-control" name="details" type="hidden" value="binance" placeholder="Wallet Deposit was made from" id="manual_transaction_id">
                          </div>
                    
                </div><br>

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
{literal}
<script language=javascript>
/*
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match(/^process_/))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
*/
updateCompound();
</script>
{/literal}

{/if}
{include file="footer2.tpl"}