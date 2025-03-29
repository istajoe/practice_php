<?php
include 'db.php';

include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST['username'];
    $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing password
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO users (firstname, lastname, email,username, pwd, phone, gender) 
    VALUES ('$firstname', '$lastname', '$email', '$username', '$pwd', '$phone', '$gender')";
    mysqli_query($conn, $sql);
    //$stmt = $conn->prepare($sql);
    //$stmt->bind_param("sssssss", $firstname, $lastname, $email, $username, $pwd, $phone, $gender);

    $sql = "SELECT * FROM users WHERE username='$username' AND firstname = '$firstname'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $userid = $row["id"];
            $sql = "INSERT INTO profileimg (userid, status) 
            VALUES ('$userid' 1)";
            mysqli_query($conn, $sql);
            header("Location: members.php");
        }
    } else {
        echo "You have an Error";
    }

    /*
    if ($stmt->execute()) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        //echo "Error: " . $stmt->error;
    }
*/
    $stmt->close();
    $conn->close();
}
?>
<!--
<form method="post">
    <input type="text" name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit">Register</button>
</form>
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>
    <section class="bg_image">
        <div class="container-lg register3">
            <h1 class="text-success"> OUR GOAL IS CHANGING LIFE TO SAVE LIVES</h1>
            <p>
                <span class="btw-words">BECOME A MEMBER</span>
                <br>
                <br>
            </p>
            <P class="text-light">
                <b>**Join Us in Building a Peaceful and Just nigeria**</b>

                True wealth is not just in what we own, but in the lives we touch. As a person of influence, you have
                the power to create lasting change. By becoming a member of our peace-building NGO, you can help mend
                broken communities, uplift the vulnerable, and leave a legacy of hope.

                Your support can provide education, conflict resolution, and humanitarian aid where it’s needed most.
                Stand with us—let’s build a future where peace is not just a dream, but a reality.

                **Join today and be a force for peace.** 🌍✨
            </P>
        </div>
        <div class="register-section">
            <div class="container">
                <h1>Register</h1>
                <form method="post">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" required>

                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>


                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>

                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">

                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>

                    <button class="btn6" type="submit" name="submit">Register</button>

                    <p>
                        All ready have an account
                        <a href="login.php">Login</a>
                    </p>
                </form>
            </div>
        </div>

    </section>


</body>

</html>