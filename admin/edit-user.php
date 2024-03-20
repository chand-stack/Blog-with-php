<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- GOOGLE FONT (MONTSERRAT)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav_container">
         <a href="index.html" class="nav_logo">BLOG</a>
         <ul class="nav_items">
<li><a href="blog.html">Blog</a></li>
<li><a href="about.html">About</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="signin.html">Signin</a></li>
<li class="nav_profile">
    <div class="avatar">
        <img src="./images/avatar1.jpg">
    </div>
        <ul>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="logout.html">Logout</a></li>
        </ul>
    
</li>
         </ul>

         <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
         <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!-- ====================== END OF NAV ================== -->


<section class="form_section">
<div class="container form_section-container">
<h2>Edit User</h2>
<form action="" enctype="multipart/form-data">
    <input type="text" placeholder="First Name">
    <input type="text" placeholder="Last Name">
    <select>
        <option value="0">Author</option>
        <option value="1">Admin</option>
    </select>
     <button class="btn" type="submit">Update User</button>
</form>
</div>
</section>
<footer>
    <div class="footer_socials">
     <a href="https://youtube.com" target="_blank">
        <i class="uil uil-youtube"></i>
     </a>
     <a href="https://facebook.com" target="_blank">
        <i class="uil uil-facebook-f"></i>
     </a>
     <a href="https://instagram.com" target="_blank">
        <i class="uil uil-instagram-alt"></i>
     </a>
     <a href="https://linkedin.com" target="_blank">
        <i class="uil uil-linkedin"></i>
     </a>
     <a href="https://twitter.com" target="_blank">
        <i class="uil uil-twitter"></i>
     </a>
    </div>
<div class="container footer_container">
<article>
<h4>Categories</h4>
<ul>
<li><a href="">Art</a></li>
<li><a href="">Wild Life</a></li>
<li><a href="">Travel</a></li>
<li><a href="">Music</a></li>
<li><a href="">Science & Technology</a></li>
</ul>
</article>
<article>
<h4>Support</h4>
<ul>
<li><a href="">Online Support</a></li>
<li><a href="">Call Numbers</a></li>
<li><a href="">Emails</a></li>
<li><a href="">Social Support</a></li>
<li><a href="">Location</a></li>
</ul>
</article>
<article>
<h4>Blog</h4>
<ul>
<li><a href="">Safety</a></li>
<li><a href="">Repair</a></li>
<li><a href="">Recent</a></li>
<li><a href="">Popular</a></li>
<li><a href="">Categories</a></li>
</ul>
</article>
<article>
<h4>Permalinks</h4>
<ul>
<li><a href="">Home</a></li>
<li><a href="">Blog</a></li>
<li><a href="">About</a></li>
<li><a href="">Services</a></li>
<li><a href="">Contacts</a></li>
</ul>
</article>
</div>

<div class="footer_copyright">
<small>Copyright &copy; CHAND RAHMAN</small>
</div>

</footer>

<script src="./main.js"></script>
</body>
</html>