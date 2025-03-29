
<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("Not authorized.");
}

$user_id = $_SESSION['user_id'];

if (isset($_FILES["profile_pic"]) && $_FILES["profile_pic"]["error"] == 0) {
    $target_dir = "uploads/";

    // Ensure uploads directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = basename($_FILES["profile_pic"]["name"]);
    $target_file = $target_dir . time() . "_" . $file_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate Image
    $allowed_types = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowed_types)) {
        die("Error: Invalid file type.");
    }

    if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
        // Debugging
        echo "File uploaded successfully: " . $target_file;

        // Update profile picture in DB
        $stmt = $conn->prepare("UPDATE member_users SET profile_pic = ? WHERE id = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("si", $target_file, $user_id);
        if ($stmt->execute()) {
            echo "Profile picture updated successfully!";
            header("Location: update_profile.php");
            exit();
        } else {
            echo "Error updating profile picture: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error uploading file.";
    }
}
