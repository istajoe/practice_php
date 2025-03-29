<?php 
include ("paystack_initialize.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="paystack_initialize.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="number" name="amount" placeholder="Enter amount (NGN)" required>
        <button type="submit">Pay Now</button>
    </form>

</body>

</html>