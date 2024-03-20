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
<div class="alert_message error">
<p>This is an error message</p>
</div>
<form action="" enctype="multipart/form-data">
    <input type="text" placeholder="First Name">
    <input type="text" placeholder="Last Name">
    <input type="text" placeholder="Username">
    <input type="email" placeholder="Email">
    <input type="password" placeholder="Create Password">
    <input type="password" placeholder="Confirm Password">
    <div class="form_control">
      <label for="avatar">User Avatar</label>
      <input type="file" id="avatar">
    </div>
     <button class="btn" type="submit">Sign Up</button>
     <small>Already have an account? <a href="./signin.php">Sign In</a></small>
</form>
</div>
</section>
</body>
</html>