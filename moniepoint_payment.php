<?php
$merchant_id = "your_moniepoint_merchant_id";
$api_key = "your_moniepoint_api_key";
$amount = $_GET['amount'];
$email = $_GET['email'];
$reference = $_GET['ref'];

$moniepoint_url = "https://api.moniepoint.com/v1/transaction/initiate";

$data = [
    "merchantId" => $merchant_id,
    "reference" => $reference,
    "amount" => $amount,
    "currency" => "NGN",
    "customerEmail" => $email,
    "callbackUrl" => "http://yourwebsite.com/moniepoint_callback.php"
];

$json_data = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $moniepoint_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer " . $api_key
]);

$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

if ($result["status"] === "success") {
    header("Location: " . $result["paymentUrl"]);
    exit();
} else {
    die("Payment Error: " . $result["message"]);
}
?>
