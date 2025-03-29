<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $amount = htmlspecialchars($_POST['amount']) * 100; // Convert to kobo
    $payment_gateway = $_POST['payment_gateway'];

    $transaction_ref = "TXN_" . time(); // Unique transaction ID

    switch ($payment_gateway) {
        case "moniepoint":
            header("Location: moniepoint_payment.php?amount=$amount&email=$email&ref=$transaction_ref");
            exit();
        
        case "opay":
            header("Location: opay_payment.php?amount=$amount&email=$email&ref=$transaction_ref");
            exit();

        case "paystack":
            header("Location: paystack_payment.php?amount=$amount&email=$email&ref=$transaction_ref");
            exit();

        default:
            die("Invalid Payment Gateway Selected");
    }
}
?>
