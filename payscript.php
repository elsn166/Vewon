<?php
session_start();

 $apiKey = "rzp_test_1YKYVgSaIFgQJP";

 

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="29935" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="order_CgmcjRh9ti2lP7"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Manufacturing Site"
    data-description="Manufacturing Site Payment!"
    data-image="https://traidev.com/img/web-desgin-development.png"
    data-prefill.name="<?php echo 'TEST';?>"
    data-prefill.email="<?php echo 'TEST@gmail.com';?>"
    data-prefill.contact="<?php echo '000000000';?>"
    data-theme.color="#F37254"
></script>
<center>
<input type="hidden" custom="Hidden Element" name="hidden">
</center>
</form>

