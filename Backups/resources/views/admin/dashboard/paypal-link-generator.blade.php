@include('admin.dashboard-layout.header')   


<script type='text/javascript'>
      function buildPayPalUrl(b) {
        var f = b.form;
        var paypalEmail = f.elements['paypal_email'].value;
        var amount = f.elements['amount'].value;
        var description = f.elements['description'].value;
        if(amount == '' || description == '' || paypalEmail == '') {
          alert("Whoops, need to fill in the entire form before you can continue");
        } else {
          var url =  "https://www.paypal.com/cgi-bin/webscr?" +
                     "business=" + escape(paypalEmail) + "&amp;" +
                     "cmd=_xclick&amp;currency_code=USD&amp;" +
                     "amount=" + escape(amount) + "&amp;" +
                     "item_name=" + escape(description);
          f.elements['output'].innerHTML = url;

        }
      }
    </script>

    

    <form style='background-color: #E4E4E4; border: 1px solid #CCCCCC; padding: 10px;margin-top:50px; min-height:500px;opacity:0.95;'>
<center>
<h2> Generate Custom Paypal Link</h2>
      <table>
        <tr><td>Your PayPal E-mail:</td><td> <input name='paypal_email' type='text' size='40' value="syedriyazzaidi@gmail.com" readonly/></td></tr>
        <tr><td>Description:</td><td> <input name='description' type='text' size='40'/></td></tr>
        <tr><td>Amount(USD):</td><td><input name='amount' type='number' size='4' min="1" style="width:33.3%"/></td></tr>
        <tr><td colspan='9'><input type='button' value="Generate PayPal Link" onclick='buildPayPalUrl(this)' style="width:100%;"/></td></tr>
        <tr><td colspan='2'><textarea name='output' onclick='this.select()' rows='3' cols='50'></textarea></td></tr>
      </table>
</center>
    </form>
    @include('admin.dashboard-layout.footer')
