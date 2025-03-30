<?php
session_start();
include 'header.php';
include 'db.php';
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
    <div class="container-lg">
        <div class="row d-flex ">
            <div class="col">
                <img src="/image/love.jpg" alt="members">
                <div class="d-flex justify-content-center">
                    <button class="p-2 bg-danger border-0 text-light mt-5 rounded-pill ">
                        <a href="" class="text-decoration-none text-light fw-5 fs-2">See Our Members</a>
                    </button>
                </div>

            </div>
            <div class="col">
                <h1> Welcome To Credo peace Initiative Foundation </h1>
                <p>

                    <b>Dear Friends,</b><br><br>

                    Welcome to Credo Peace, where we believe that peace is not just a dream but a collective
                    responsibility. Our mission is to foster harmony, resolve conflicts, and empower communities to
                    build a world where justice, dignity, and mutual respect thrive.<br><br>

                    🌿<b>Who We Are</b><br>
                    Founded in 2019, Credo Peace has been at the forefront of peacebuilding efforts across.
                    Nigeria. What started as a small initiative has grown into a National movement
                    committed to conflict resolution, advocacy, and sustainable peace initiatives.<br><br>

                    🌍 <b>Our Mission</b><br>
                    ✔️ Promoting peace through education and dialogue<br>
                    ✔️ Empowering communities to resolve conflicts peacefully<br>
                    ✔️ Providing humanitarian aid and support to vulnerable groups<br>
                    ✔️ Advocating for policies that uphold human rights and social justice<br><br>

                    <b>
                        📌 Website: www.credopeace.com<br>
                        📩 **Email: credopeace1@gmail.com<br>
                    </b>
                </p>
            </div>
        </div>
        <br>
        <br>
    </div>

    <div class="row  bg-secondary mb-5">
        <div class="col d-flex justify-content-center text-center align-items-center">
            <div class="text-center text-light">
                <h1> Upload Your Profile </h1>
                <p>
                    Uploading your profile as a member will give you opportunity to meet
                    with other members, connect and share thoughts. "Your profile helps showcase our community of
                    changemakers! Adding a picture and sharing your thoughts will inspire others and strengthen our
                    network."
                </p>
                <button class="p-2 bg-light fw-5 border-0 rounded-pill mb-3">
                    <a href="update_profile.php" class="text-decoration-none text-dark fw-5">Upload Your Profile Picture Here</a>
                </button>
            </div>

        </div>

    </div>
</body>

</html>

<?php
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