<?php
include 'header.php';
//include 'beneficiarydb.php';
//include 'header.php';

$host = "localhost";
$user = "root";  // Change as per your database credentials
$pass = "";
$dbname = "beneficiary_auth";

$conn = new mysqli($host, $user, $pass, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>
    <section class=" bg_image">
        <div class="container-lg register3">
            <h1 class="text-light"> OUR GOAL IS CHANGING LIFE TO SAVE LIVES</h1>
            <p class="text-center text-light fw-5">
                <b class="fs-3 fw-1 text-light"> Protecting the Dreams of the Less Privileged </b>
                <br>
                <br>
                
                    Empowerment is a lifeline for those striving to break free from hardship. It is not a business
                    opportunity, nor a tool for exploitation. Every resource meant for the less privileged carries the
                    hopes
                    of struggling families, hungry children, and determined youths seeking a better future.

                    To those who seek to take advantage—remember, robbing them of their chance is robbing them of hope
                    itself. Let us uplift, not exploit. Let us empower, not take away.

                    **Together, we can build a future where help truly reaches those who need it most.**
               

            </p>
        </div>

        <div class="register-section">
            <div class="container">
                <h1>Register</h1>
                <form method="post">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">

                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>

                    <label for="address">Home address</label>
                    <input type="tel" id="address" name="address">

                    <label for="program_enrolled">Program_Enrolled</label>
                    <select id="gender" name="program_enrolled">
                        <option value="food">Food</option>
                        <option value="shelter">shelter</option>
                        <option value="education">Education</option>
                        <option value="job">Job Opportunity</option>
                        <option value="loan">Loan</option>
                        <option value="health">Health Care</option>
                    </select>

                    <button class="btn6" type="submit">Register</button>
                    <a href='beneficiary.php'> Go To Dashboard</a>
                    <br>
                    <br>

                    <?php

                    // Hide all error messages
                    error_reporting(0);
                    ini_set('display_errors', 0);


                    $full_name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $gender = $_POST['gender'];
                    $address = $_POST['address'];
                    $program_enrolled = $_POST['program_enrolled'];

                    // Bind parameters
                    $stmt->bind_param("ssssss", $full_name, $email, $phone, $gender, $address, $program_enrolled);

                    // Execute statement
                    if ($stmt->execute()) {
                        echo "Beneficiary registered successfully! <a href='beneficiary.php'> Go To Dashboard</a>";
                    } else {
                        echo "all field is required";
                    }

                    // Close connections
                    $stmt->close();
                    $conn->close();
                    ?>
                </form>
            </div>
        </div>

    </section>


</body>

</html>