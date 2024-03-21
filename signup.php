<?php 
require 'config/constants.php'
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
<h2>Sign Up</h2>
<!-- <div class="alert_message error">
<p>This is an error message</p>
</div> -->

<?php
if(isset($_SESSION['signup'])) : ?> 
  <div class="alert_message error">
  <p>
    <?= $_SESSION['signup'];
    unset($_SESSION['signup']);
    ?>
  </p>
  </div>

<?php endif ?>
<form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="post">
    <input type="text" name="firstname" placeholder="First Name">
    <input type="text" name="lastname" placeholder="Last Name">
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="createdpassword" placeholder="Create Password">
    <input type="password" name="confirmpassword" placeholder="Confirm Password">
    <div class="form_control">
      <label for="avatar">User Avatar</label>
      <input type="file" name="avatar" id="avatar">
    </div>
     <button class="btn" name="submit" type="submit">Sign Up</button>
     <small>Already have an account? <a href="./signin.php">Sign In</a></small>
</form>
</div>
</section>
</body>
</html>