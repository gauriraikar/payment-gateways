<form action="getdata.php" method="post">
 
<table >
<tr>
 <div class="form-group">
    <label for="bank_ifsc_code">Bank IFSC Code:</label>
    <input type="text" class="form-control" id="bank_ifsc_code" name="bank_ifsc_code">
  </div>
  
  </tr>
  <tr>
  <div class="form-group">
    <label for="bank_account_number">Bank Account Number:</label>
    <input type="text" class="form-control" id="bank_account_number" name="bank_account_number">
  </div>
  </tr>
  <tr>
  <div class="form-group">
    <label for="amount">Amount:</label>
    <input type="text" class="form-control" id="amount" name="amount">
  </div>
  </tr>
    <tr>
  <div class="form-group">
    <label for="merchant_transaction_ref">Mercent Transaction Reference:</label>
    <input type="text" class="form-control" id="merchant_transaction_ref" name="merchant_transaction_ref">
  </div>
  </tr>
    <tr>
  <div class="form-group">
    <label for="transaction_date">Transaction Date:</label>
    <input type="text" class="form-control" id="transaction_date" name="transaction_date">
  </div>
  </tr>
    <tr>
  <div class="form-group">
    <label for="payment_gateway_merchant_reference">Gateway Mercent Refernece:</label>
    <input type="text" class="form-control" id="payment_gateway_merchant_reference" name="payment_gateway_merchant_reference">
  </div>
  </tr>
  <tr>
  <button type="submit" class="btn btn-default">Submit</button>
  </tr>
  </table>
</form>