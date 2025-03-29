<?php
$host = "localhost";
$user = "root";  // Change as per your database credentials
$pass = "";
$dbname = "beneficiary_auth";

$conn = new mysqli($host, $user, $pass, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert Query (Modify table and column names as needed)
$sql = "INSERT INTO beneficiaries (full_name, email, phone, gender, address, program_enrolled) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Check if statement was prepared successfully
if (!$stmt) {
    die("SQL Error: " . $conn->error); // This helps debug the actual issue
}















