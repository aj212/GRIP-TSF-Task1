<?php 
$product_name = $_POST["product_name"];
$price = $_POST["product_price"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];


include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_1e20e98616a25948bf88c9225fe', 'test_d9edeabefa10a51f5c209d28eb4','https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => false,
        "email" => $email,
        'allow_repeated_payments' => false,
       // http://localhost/mojo/pay.php
        "redirect_url" => "http://localhost/task/instamojo/thankyou.php",
       // "webhook" => "http://localhost/mojo/webhook.php"
        ));
    print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>
