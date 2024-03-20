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




<section class="dashboard">
<div class="container dashboard_container">
    <button id="show_sidebar-btn" class="sidebar_toggle">
        <i class="uil uil-arrow-right"></i>
    </button>
    <button id="hide_sidebar-btn" class="sidebar_toggle">
        <i class="uil uil-arrow-left"></i>
    </button>
<aside>
<ul>
    <li><a href="add-post.html">
        <i class="uil uil-pen"></i>
        <h5>Add Post</h5>
    </a></li>
    <li><a href="dashboard.html">
        <i class="uil uil-postcard"></i>
        <h5>Manage Posts</h5>
    </a></li>
    <li><a href="add-user.html">
        <i class="uil uil-user-plus"></i>
        <h5>Add User</h5>
    </a></li>
    <li><a href="manage-users.html"  class="active">
        <i class="uil uil-users-alt"></i>
        <h5>Manage Users</h5>
    </a></li>
    <li><a href="add-category.html">
        <i class="uil uil-create-dashboard"></i>
        <h5>Add Category</h5>
    </a></li>
    <li><a href="manage-categories.html">
        <i class="uil uil-clipboard-notes"></i>
        <h5>Manage Categories</h5>
    </a></li>
</ul>
</aside>
<main>
<h2>Manage Users</h2>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Admin</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ernest Achiver</td>
            <td>achiver</td>
            <td><a href="edit-user.html" class="btn sm">Edit</a></td>
            <td><a href="edit-category.html" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Daniel Vinyo</td>
            <td>daniel</td>
            <td><a href="edit-user.html" class="btn sm">Edit</a></td>
            <td><a href="edit-category.html" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Jane Doe</td>
            <td>jane</td>
            <td><a href="edit-user.html" class="btn sm">Edit</a></td>
            <td><a href="edit-category.html" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
        </tr>
        
    </tbody>
</table>
</main>
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