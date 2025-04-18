<?php
    include 'db_connection.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $social_media = $_POST['social-media'];
        $bio = $_POST['bio'];
        
        if (isset($_FILES['cover-upload']) && isset($_FILES['profile-upload'])) {
            $cover_image = 'uploads/' . basename($_FILES['cover-upload']['name']);
            $profile_image = 'uploads/' . basename($_FILES['profile-upload']['name']);
            
            move_uploaded_file($_FILES['cover-upload']['tmp_name'], $cover_image);
            move_uploaded_file($_FILES['profile-upload']['tmp_name'], $profile_image);

            $sql = "UPDATE user_profile SET username=?, social_media=?, bio=?, cover_image=?, profile_image=? WHERE user_id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssi", $username, $social_media, $bio, $cover_image, $profile_image, $_SESSION['user_id']);
            $stmt->execute();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Cover Update</title>
    <link rel="stylesheet" href="../css/myprofil.css">
</head>
<body>
    <div class="container">

        <div class="cover-section">
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="cover-upload" id="cover-upload" accept="image/*" hidden>
                <img src="<?= isset($cover_image) ? $cover_image : '../img/Wave.jpg' ?>" alt="Cover Image" id="cover-image" class="cover-image">
            </form>
        </div>

        <div class="profile-section">
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="profile-upload" id="profile-upload" accept="image/*" hidden>
                <img src="<?= isset($profile_image) ? $profile_image : '../img/User Profile Logo.jpg' ?>" alt="Profile Picture" id="profile-image" class="profile-picture">
            </form>
        </div>

        <div class="display-section">
            <h2 id="display-username"><?= isset($username) ? $username : '' ?></h2>
            <p id="display-social-media"><?= isset($social_media) ? $social_media : '' ?></p>
            <p id="display-bio"><?= isset($bio) ? $bio : '' ?></p>
        </div>

        <div class="content">
            <h1>Account</h1>
            <form method="POST" enctype="multipart/form-data">
                <label>Username</label>
                <input type="text" name="username" value="<?= isset($username) ? $username : '' ?>" placeholder="Enter your username">
                
                <label>Social Media</label>
                <input type="text" name="social-media" value="<?= isset($social_media) ? $social_media : '' ?>" placeholder="Enter your social media">
                
                <label>Bio</label>
                <textarea name="bio" placeholder="Enter Your Bio"><?= isset($bio) ? $bio : '' ?></textarea>
                
                <div class="button-container">
                    <button type="submit" class="save-btn">Save</button>
                    <button type="button" class="edit-btn" onclick="window.location.href='../html/noedit.html'">Edit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="../js/myprofil.js"></script>
</body>
</html>
