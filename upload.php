<?php
session_start();
include 'db.php';
$id = $_SESSION['id'];

if (isset($_POST["submit"])) {
    $file = $_FILES['file'];


    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination = "uploads/".$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE profileimg SET status=0 WHERE userid='$id'";
                $result = mysqli_query($conn, $sql);
                header("Location: members.php?uploadsuccess");
            } else {
                echo "Your file is too big";
            }
        } else {
            echo "There was an error uploading your file";
        }
    } else {
        echo "You cannot upload files of this type";
    }
}



/*
$host = "localhost";
$user = "root";  // Change as per your database credentials
$pass = "";
$dbname = "beneficiary_auth";

// Hide all error messages
error_reporting(0);
ini_set('display_errors', 0);


if (isset($_POST["addup"])) {
    // Database Connection
    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get User Input
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST["message"];

    // Image Upload Handling
    $target_dir = "uploads/";
    $image_name = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . time() . "_" . $image_name; // Unique filename
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



    // Check if "uploads/" directory exists, if not, create it
    


    // Allowed File Types
    $allowed_types = ["jpg", "jpeg", "png", "gif"];

    if (!in_array($imageFileType, $allowed_types)) {
        die("Error: Only JPG, JPEG, PNG, and GIF files are allowed.");
    }

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Move File to "uploads" Directory
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Insert Data into Database
        $sql = "INSERT INTO video_upload (full_name, email, image) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $full_name, $email, $target_file);

        if ($stmt->execute()) {
            echo "Upload successful! <a href='dashboard.php'>View Dashboard</a>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close Connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Error uploading file.";
    }
}
?>