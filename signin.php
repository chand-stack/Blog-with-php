<?php
require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- GOOGLE FONT (MONTSERRAT)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
<section class="form_section">
<div class="container form_section-container">
<h2>Sign In</h2>

<?php if (isset($_SESSION['signup-success'])) : ?>
    <div class="alert_message success">
    <p>
    <?= $_SESSION['signup-success'];
    unset($_SESSION['signup-success']);
    ?>
</p>
</div>

<?php elseif (isset($_SESSION['signin'])) : ?>

    <div class="alert_message error">
    <p>
    <?= $_SESSION['signin'];
    unset($_SESSION['signin']);
    ?>
</p>
</div>

<?php endif; ?>

<form action="<?= ROOT_URL ?>signin-logic.php" method="post">
    <input type="text" value="<?= $username_email ?>" name="username_email" placeholder="Username or Email">
    <input type="password" value="<?= $password ?>" name="password" placeholder="Password">
     <button class="btn" name="submit" type="submit">Sign In</button>
     <small>Don't have an account? <a href="./signup.php">Sign Up</a></small>
</form>
</div>
</section>
</body>
</html>
