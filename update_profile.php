<?php
session_start();
include 'header.php';
include 'db.php';


$error = "";
$success = "";

// Handle Profile Creation & Update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $comment = htmlspecialchars(trim($_POST['comment']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        if (isset($_POST['user_id']) && !empty($_POST['user_id'])) {
            // Update existing user
            $user_id = (int) $_POST['user_id'];
            $stmt = $conn->prepare("UPDATE member_users SET name = ?, email = ?, comment = ? WHERE id = ?");
            $stmt->bind_param("sssi", $name, $email, $comment, $user_id);
        } else {
            // Insert new user
            $stmt = $conn->prepare("INSERT INTO member_users (name, email, comment) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $comment);
        }

        if ($stmt->execute()) {
            if (!isset($user_id)) {
                $user_id = $stmt->insert_id; // Set user_id for new users
            }
            $success = "Profile saved successfully!";
        } else {
            // $error = "Error saving profile: " . $stmt->error;
        }
        $stmt->close();
    }

    // Handle Image Upload
    if (!empty($_FILES["profile_pic"]["name"])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file_name = basename($_FILES["profile_pic"]["name"]);
        $target_file = $target_dir . time() . "_" . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $allowed_types = ["jpg", "jpeg", "png", "gif"];
        if (!in_array($imageFileType, $allowed_types)) {
            $error = "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
        } else {
            if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
                $stmt = $conn->prepare("UPDATE member_users SET profile_pic = ? WHERE id = ?");
                $stmt->bind_param("si", $target_file, $user_id);
                if ($stmt->execute()) {
                    $success = "Profile picture updated successfully!";
                } else {
                    $error = "Error updating profile picture: " . $stmt->error;
                }
                $stmt->close();
            } else {
                $error = "Error uploading file.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <section class="upload_section d-flex justify-content-center">
        <div class="container-lg upload2">
            <h2>User Profile</h2>

            <?php if (!empty($error)): ?>
                <p class="error"><?= $error; ?></p>
            <?php endif; ?>

            <?php if (!empty($success)): ?>
                <p class="success"><?= $success; ?></p>
            <?php endif; ?>

            <div class="row">
                <div class="col">
                    <form method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?= isset($user_id) ? $user_id : ''; ?>">
                        <div class="row">
                            <label for="name">Full Name:</label>
                            <input type="text" name="name" id="name"
                                value="<?= isset($name) ? htmlspecialchars($name) : ''; ?>" required>
                        </div>

                        <div class="row">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email"
                                value="<?= isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                        </div>

                        <div class="row">
                            <label for="comment">Comment:</label>
                            <textarea name="comment"
                                id="comment"><?= isset($comment) ? htmlspecialchars($comment) : ''; ?></textarea>
                        </div>

                        <div class="row">
                            <label for="profile_pic">Upload Profile Picture:</label>
                            <input type="file" name="profile_pic" id="profile_pic" accept="image/*">
                        </div>
                        <br>

                        <button type="submit">Save Profile</button>
                    </form>
                </div>


                <a href="members.php">Go to Dashboard</a>
            </div>

        </div>

    </section>


</body>

</html>