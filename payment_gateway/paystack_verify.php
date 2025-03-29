<?php
if (isset($_GET['reference'])) {
    $reference = $_GET['reference'];
    $api_key = "sk_test_6bf5031ee893e6786e9b1976a7ff292a8027e2ef"; // Replace with your Paystack Secret Key

    // Verify transaction with Paystack API
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.paystack.co/transaction/verify/$reference");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $api_key",
        "Content-Type: application/json"
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);

    if ($result['status'] && $result['data']['status'] === 'success') {
        echo "Payment successful! Transaction ID: " . $result['data']['id'];
        // Save transaction details to the database (Optional)
    } else {
        echo "Payment verification failed. Please try again.";
    }
} else {
    echo "No transaction reference found.";
}
?>
