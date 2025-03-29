<?php
$paystack_secret_key = "sk_test_6bf5031ee893e6786e9b1976a7ff292a8027e2ef";
$amount = $_GET['amount'];
$email = $_GET['email'];
$reference = $_GET['ref'];

$paystack_url = "https://api.paystack.co/transaction/initialize";

$data = [
    "email" => $email,
    "amount" => $amount,
    "currency" => "NGN",
    "reference" => $reference,
    "callback_url" => "http://yourwebsite.com/paystack_callback.php"
];

$json_data = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $paystack_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer " . $paystack_secret_key
]);

$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

if ($result["status"] === true) {
    header("Location: " . $result["data"]["authorization_url"]);
    exit();
} else {
    die("Payment Error: " . $result["message"]);
}
?>
