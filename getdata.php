<?php

$bank_ifsc_code=$_POST['bank_ifsc_code'];
$bank_account_number=$_POST['bank_account_number'];
$amount=$_POST['amount'];
$merchant_transaction_ref=$_POST['merchant_transaction_ref'];
$transaction_date=$_POST['transaction_date'];
$payment_gateway_merchant_reference=$_POST['payment_gateway_merchant_reference'];


$para_string="bank_ifsc_code=".$bank_ifsc_code."|bank_account_number=".$bank_account_number."|amount=".$amount."|merchant_transaction_ref=".$merchant_transaction_ref."|merchant_transaction_ref=".$merchant_transaction_ref."|transaction_date=".$transaction_date."|payment_gateway_merchant_reference=".$payment_gateway_merchant_reference;
$hash =  sha1($para_string);
$para_string_sha=$para_string."|hash=".$hash;
//$key=Q9fbkBF8au24C9wshGRW9ut8ecYpyXye5vhFLtHFdGjRg3a4HxPYRfQaKutZx5N4;
//$method=0;
//$para_string_sha_encoded=openssl_encrypt ( $para_string_sha , string $method , string $key [, int $options = 0 [, string $iv = "" [, string &$tag = NULL [, string $aad = "" [, int $tag_length = 16 ]]]]] );
//$para_string_sha_encoded=openssl_encrypt ( $para_string_sha , string $method , string $key [, int $options = 0 [, string $iv = "" [, string &$tag = NULL [, string $aad = "" [, int $tag_length = 16 ]]]]] );
$para_string_sha_encoded64= base64_encode ( $para_string_sha );


//assuming i received $para_string_sha_decoded64 from server;




$para_string_sha_decoded=base64_decode ( $para_string_sha_encoded64);
list($bank_ifsc_code_decoded, $bank_account_number_decoded, $amount_decoded,$merchant_transaction_ref_decoded,$transaction_date_decoded,$payment_gateway_merchant_reference_decoded,$hash_decoded) = split('[|]', $para_string_sha_decoded);

echo "The decoded Output: ";
echo "<br>The Bank IFSC Code is  ".$bank_ifsc_code_decoded;
echo "<br>The Bank Account No is  ".$bank_account_number_decoded;
echo "<br>The Amount is ".$amount_decoded;
echo "<br>The Merchant Transaction Reference is ".$merchant_transaction_ref_decoded;
echo "<br>The Transaction Date is  ".$transaction_date_decoded;
echo "<br>The Payment Gateway Merachnat reference is  ".$payment_gateway_merchant_reference;









		  





?>