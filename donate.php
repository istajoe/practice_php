<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Gateway Payment</title>
    <link rel="stylesheet" href="/css/donate.css">
</head>

<body class="body pt-6">
    <div class="row">
        <div class="col">
            <h1> Donate to Credo Peace</h1><br><br>
            <img src="/image/poor-family.jpg" alt="poor-family"><br><br>

            <p>
                <b>Let Support The government, and give our vulnerable citizens a better life</b><br>
                Together, we can protect vulnerable Nigerians, provide food, shelter, education, good health, 
                job opportunities and build a future where Nigeria citizens of all tribe and religion could
                live in peace and harmony...
                

                Make your donation to Credo Peace Fund today and power our National peace building movement.

                Your donation makes you a member of The Credo peace Initiative Foundation. A gift of $100+ or $10+/month makes you a Partner in
                Nigeria Peace.
            </p>
        
            <div class="row bg-light border border-success fs-3 ">
                <h4 class="fw-5 fs-5"> Your support will help Credo Peace</h4>

                <p> <b>To feed millions of hungry nigerians </b></p><br>
                <p> <b>To educate millions of illiterate nigerians </b></p><br>
                <p><b>To Hounse millions of homeless nigerians</b></p><br>
                <p> <b>To employ millions of unemployed nigerians</b></p><br>
                <p> <b>To empower millions of nigerians with no finance to start their own business</b></p><br>
                <p> <b>To give free health treatment to millions of poor sick nigerians </b></p><br>
            </div>

        </div>

        <div class="col">
            <div class="container mt-6">
                <h2>Make a Payment</h2>
                <div class="row">
                    <div class="col">
                        <input class="py-3 px-3 border border-success text-success fw-5 fs-5 text-center" type="text"
                            value="Give Once">
                    </div>
                    <div class="col">
                        <input class="py-3 px-3 text-light bg-success fw-5 fs-5 text-center" type="text"
                            value="Give Monthly">
                    </div>
                </div>
                <div class="row">
                    <div class="col bg-danger">
                        <h6 class="text-warning fw-5 fs-5"> Thanks for making a lasting difference for Vulnerable
                            Nigerians</h6>
                        <p class="text-warning">
                            Giving Monthly is an easy and effective way to help our vulnerable brothers, sisters,
                            fathers,
                            mothers and children.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="py-3 px-2 border border-success text-success fw-5 fs-5 text-center" type="text"
                            value="$10/mo">
                    </div>
                    <div class="col">
                        <input class="py-3 px-2 border bg-success text-light fw-5 fs-5 text-center" type="text"
                            value="$15/mo">
                    </div>
                    <div class="col">
                        <input class="py-3 px-2 text-success border border-success fw-5 fs-5 text-center" type="text"
                            value="$20/mo">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="py-3 px-2 border border-success text-success fw-5 fs-5 text-center" type="text"
                            value="$25/mo">
                    </div>
                    <div class="col">
                        <input class="py-3 px-2 border border border-success text-success fw-5 fs-5 text-center"
                            type="text" value="$50/mo">
                    </div>
                    <div class="col">
                        <input class="py-3 px-2 text-success border border-success fw-5 fs-5 text-center" type="text"
                            value="$100/mo">
                    </div>
                </div>
                <div class="row">
                    <p class="text-success"> Looking to make your donation in honor of someone?</p><br><br>
                    <hr>
                    <br>
                    <p class="fw-5 fs-5">Select your thank-you gift</p>
                </div><br><br>
                <div class="row">
                    <div class="col-2">
                        <input type="radio" name="option" value="option1">
                    </div>
                    <div class="col-4">
                        <p>
                            <b> A Little Every Month, A Lifeline Forever</b>

                            Donate today—because every little bit changes a life. ❤️
                        </p>
                    </div>
                    <div class="col-2">
                        <img style="width: 200px;" src="/image/vulnerable family.jpg">
                    </div>
                </div>
                <form action="process_payment.php" method="POST">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="amount">Amount (NGN):</label>
                    <input type="number" id="amount" name="amount" required min="100">

                    <label for="payment_gateway">Choose Payment Method:</label>
                    <select name="payment_gateway" required>
                        <option value="moniepoint">Moniepoint</option>
                        <option value="opay">Opay</option>
                        <option value="paystack">Credit/Debit Card (Paystack)</option>
                    </select>

                    <button class="btn8" type="submit">Proceed to Pay</button>
                </form>
            </div>
        </div>

    </div>

</body>

</html>