<?php

session_start();
include 'db.php';


if (isset($_POST['submitLogin'])) {
    $_SESSION['id'] = 1;
    header("Location: member_dashboard.php");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $sql = "SELECT id, pwd FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error); // Debugging output
    }
    $stmt->bind_param("s", $username);
    $stmt->bind_result($id, $hashed_password);
    $stmt->execute();
    $stmt->store_result();
   

     // ✅ Only execute if $stmt is valid


    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($pwd, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: members.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <section>
        <div class="login-container">
            <h2>Login</h2>
            <form method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button class="btn6" type="submit">Login</button>
            </form>
            <div class="forgot-password">
                <a href="#">Forgot your password?</a>
            </div>
        </div>
    </section>


</body>

</html>