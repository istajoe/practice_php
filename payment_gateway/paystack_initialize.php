<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $amount = $_POST['amount'] * 100; // Convert amount to kobo (Paystack uses the smallest currency unit)

    $api_key = "sk_test_6bf5031ee893e6786e9b1976a7ff292a8027e2ef"; // Replace with your Paystack Secret Key
    $callback_url = "http://yourwebsite.com/paystack_verify.php"; // URL to verify transaction

    // Prepare payment data
    $data = [
        'email' => $email,
        'amount' => $amount,
        'currency' => 'NGN',
        'callback_url' => $callback_url
    ];

    // Initialize cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.paystack.co/transaction/initialize");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $api_key",
        "Content-Type: application/json"
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);

    if ($result['status']) {
        $payment_url = $result['data']['authorization_url'];
        header("Location: $payment_url");
        exit();
    } else {
        echo "Payment initialization failed. Try again.";
    }
}
?>