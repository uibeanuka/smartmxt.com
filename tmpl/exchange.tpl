{include file="header.tpl"}

{literal}
<script>
var balances = new Array();
var pow = new Array();
{/literal}
                                                                                                 
var currencies = new Array({foreach from=$ec item=i name=ec}'{$i.ec}'{if !$smarty.foreach.ec.last},{/if}{/foreach});
var curs = new Array({foreach from=$exchange item=i name=ec}'{$i.from}'{if !$smarty.section.ec.last},{/if}{/foreach});

{foreach from=$ec item=i}
balances[{$i.ec}] = new Number('{$i.balance}');
{/foreach}

var exchange = new Array();
var rates = new Array();
var pow = new Array();
{foreach from=$exchange item=e}
exchange[{$e.from}] = new Array();
rates[{$e.from}] = new Array();
pow[{$e.from}] = new Number('{$e.pow}');
{foreach from=$e.tos item=t}
exchange[{$e.from}][{$t.to}] = new Number('{$t.percent}');
rates[{$e.from}][{$t.to}] = new Number('{$t.rate}');
{/foreach}
{/foreach}

{literal}
function in_out(id, bForce)
{
  var d = document.exchange_form;

  if (d.elements['to_'+id].selectedIndex == 0)
  {
    chng_bg(id, '#FBF7CC');
    d.elements["estimate_" + id].value = 0;
    return true;
  }

  in_val = new Number(d.elements["amount_"+id].value.replace(",","."));
  if (isNaN(in_val))
  { in_val = 0; }

  in_val = Math.floor(in_val * 100) / 100;
  if (in_val <= 0)
  {
    d.elements['estimate_'+id].value = 0;
    return false;
  }

  if (in_val > balances[id])
  {
    d.elements['amount_'+id].value = balances[id];
    in_out(id);
    return false;
  }

  var from_id = id;
  var to_id = d.elements['to_'+id].options[d.elements['to_'+id].selectedIndex].value;

  if (document.getElementById('e'+from_id+'_'+to_id))
  {
    chng_bg(from_id, '#FBF7CC');
    document.getElementById('e'+from_id+'_'+to_id).style.backgroundColor = '#FFEA00';
  }

  var percent = Math.round(exchange[from_id][to_id] * 100) / 10000;
//  var amount =  Math.round((1 - percent) * in_val * 100) / 100;
  var amount = (rates[from_id][to_id] * in_val).toFixed(pow[to_id]);

  d.elements["estimate_" + id].value = amount;

  if (bForce)
  {
    out_in(id);
  }
}

function out_in(id, bForce)
{
  var d = document.exchange_form;

  if (d.elements['to_'+id].selectedIndex == 0)
  {
    chng_bg(id, '#FBF7CC');
    return true;
  }

  out_val = new Number(d.elements["estimate_"+id].value.replace(",","."));
  if (isNaN(out_val))
  { out_val = 0; }

  out_val = Math.ceil(out_val * 100) / 100;

  if (out_val <= 0)
  {
    d.elements['amount_'+id].value = 0;
    return false;
  }

  var from_id = id;
  var to_id = d.elements['to_'+id].options[d.elements['to_'+id].selectedIndex].value;

  if (document.getElementById('e'+from_id+'_'+to_id))
  {
    chng_bg(from_id, '#FBF7CC');
    document.getElementById('e'+from_id+'_'+to_id).style.backgroundColor = '#FFEA00';
  }

  var percent = Math.round(exchange[from_id][to_id] * 100) / 10000;
//  var amount =  Math.round(out_val / (1 - percent) * 100) / 100;
  var amount =  (out_val / rates[from_id][to_id]).toFixed(pow[to_id]);

  if (amount > balances[id])
  {
    d.elements["amount_" + id].value = balances[id];
    in_out(id);
    return false;
  }

  d.elements["amount_" + id].value = amount;

  if (bForce)
  {
    in_out(id);
  }
}

function chng_selection(id)
{
  var d = document.exchange_form;

  if (d.from.length)
  {
    if (!id)
    {
      for (i = 0; i < d.from.length; i++)
      {
        if (d.from[i].checked)
        {
          id = d.from[i].value;
        }
      }
    }

    for (i = 0; i < currencies.length; i++)
    {
      tid = currencies[i];
      d.elements['to_'+tid].disabled = true;
      d.elements['amount_'+tid].disabled = true;
      d.elements['estimate_'+tid].disabled = true;
      d.elements['exchange_'+tid].disabled = true;
      chng_bg(tid, '#FFFFFF');
    }

    d.elements['to_'+id].disabled = false;
    d.elements['amount_'+id].disabled = false;
    d.elements['estimate_'+id].disabled = false;
    d.elements['exchange_'+id].disabled = false;
    chng_bg(id, '#FBF7CC');
  }
}

function chng_bg(id, color)
{
  if (document.getElementById('e' + id + '_t'))
  {
    document.getElementById('e' + id + '_t').style.backgroundColor = color;
  }

  for (var i = 0; i < curs.length; i++)
  {
    if (document.getElementById('e' + id + '_' + curs[i]))
    {
      document.getElementById('e' + id + '_' + curs[i]).style.backgroundColor = color;
    }
  }
}
</script>
{/literal}

<h3>Exchange Center:</h3><br>

{if $frm.display == "ok"}<div class="success">Exchange has been successfully completed.</div>{/if}

{if $errors.no_from}<div class="error">No source currency is specified.</div>{/if}
{if $errors.no_to}<div class="error">No destination currency is specified.</div>{/if}
{if $errors.no_amount}<div class="error">No exchange amount is specified.</div>{/if}
{if $errors.not_enough_funds}<div class="error">You have not enough funds to exchange from.</div>{/if}
{if $errors.exchange_forbidden}<div class="error">The exchange for specified currencies is not allowed.</div>{/if}
{if $errors.too_small_amount}<div class="error">The amount you have entered for exchange is too small.</div>{/if}

<br>

{if $ec}
<form method=post name="exchange_form">
<input type="hidden" name="a" value="exchange">
<input type="hidden" name="action" value="preview">
<input type="hidden" name="display" value="">

<table cellspacing=0 cellpadding=2 border=0>
{foreach from=$ec item=i name=from}
<tr>
 <td><input type="radio" name="from" value="{$i.ec}" {if $smarty.foreach.from.index == 0}checked{/if} onclick="chng_selection('{$i.ec}')"></td>
 <td><img src="images/{$i.ec}.gif" align=absmiddle height=17> {$i.ec_name} :</td>
 <td><input type=text name="amount_{$i.ec}" value="{$i.balance}" class=inpts size=7
      onchange="in_out('{$i.ec}')" onkeyup="in_out('{$i.ec}')"
      onfocusout="in_out('{$i.ec}', true)" onactivate="in_out('{$i.ec}', true)"
      ondeactivate="in_out('{$i.ec}', true)">
 </td>
 <td>to</td>
 <td>
  <select name="to_{$i.ec}" class=inpts onchange="in_out('{$i.ec}')">
   <option value=''>--SELECT--</option>
{foreach from=$i.tos item=t name=to}
{if $i.ec != $t.to}
<option value={$t.to}>{$t.ec_name}</option>
{/if}
{/foreach}
  </select>
 </td>
 <td><input type=text name="estimate_{$i.ec}" value="0" class=inpts size=7
      onchange="out_in('{$i.ec}')" onkeyup="out_in('{$i.ec}')"
      onfocusout="out_in('{$i.ec}', true)" onactivate="out_in('{$i.ec}', true)"
      ondeactivate="out_in('{$i.ec}', true)">
 </td>
 <td><input type=submit name="exchange_{$i.ec}" value="Exchange" class=sbmt></td>
</tr>
{/foreach}
</table>
</form>
{else}
Currently you have no funds to exchange.<br><br>
{/if}

<h3>Our Exchange Rates:</h3><br>
<table cellspacing=0 cellpadding=0 border=0><tr><td class=calendartable>
<table cellspacing=1 cellpadding=2 border=0>
<tr>
 <td align=center class=calendartablebg>From / To</td>
{foreach from=$exchange item=f}
 <td align=center class=calendartablebg><img src="images/{$f.from}.gif" height=17></td>
{/foreach}
</tr>
{foreach from=$exchange item=f}
<tr>
 <td align=center class=calendartablebg id="e{$f.from}_t"><img src="images/{$f.from}.gif" height=17></td>
 {foreach from=$f.tos item=t}
  <td align=center class=calendartablebg id="e{$f.from}_{$t.to}">
   {if $f.from == $t.to}
     -
   {else}
    {if $t.percent == 100}
     -
    {else}
     {$t.percent}%
    {/if}
   {/if}
  </td>
 {/foreach}
</tr>
{/foreach}
</table>
</td></tr></table>

{if $ec}
{literal}
<script>
chng_selection();
</script>
{/literal}
{/if}

{include file="footer.tpl"}
