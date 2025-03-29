<?php
$host = "localhost";
$user = "root";  // Change as per your database credentials
$pass = "";
$dbname = "profile";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
