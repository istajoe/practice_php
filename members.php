<?php
session_start();
include 'header.php';
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("Not authorized.");
}

$sql = "SELECT name, email, comment, profile_pic FROM member_users";
$result = $conn->query($sql);

echo "<div class='profile-container'>"; // Start profile section

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='user-profile'>";

        // Debugging: Print Image Path
        // echo "<p>Profile Pic Path: " . $row['profile_pic'] . "</p>";

        echo "<img src='" . (!empty($row['profile_pic']) ? $row['profile_pic'] : 'default.png') . "' alt='Profile Picture'>";
        echo "<p><strong>Name:</strong> " . htmlspecialchars($row['name']) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
        echo "<p><strong>Comment:</strong> " . htmlspecialchars($row['comment']) . "</p>";
        echo "</div><hr>";
    }
} else {
    echo "<p class='no-users'>No users found.</p>";
}

echo "</div>"; // Close profile container

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">

</head>
<body>
    
</body>
</html>