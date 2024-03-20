<?php
include 'partials/header.php'
?>




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
    <li><a href="add-post.php">
        <i class="uil uil-pen"></i>
        <h5>Add Post</h5>
    </a></li>
    <li><a href="index.php"   class="active">
        <i class="uil uil-postcard"></i>
        <h5>Manage Posts</h5>
    </a></li>
    <li><a href="add-user.php">
        <i class="uil uil-user-plus"></i>
        <h5>Add User</h5>
    </a></li>
    <li><a href="manage-users.php">
        <i class="uil uil-users-alt"></i>
        <h5>Manage Users</h5>
    </a></li>
    <li><a href="add-category.php">
        <i class="uil uil-create-dashboard"></i>
        <h5>Add Category</h5>
    </a></li>
    <li><a href="manage-categories.php">
        <i class="uil uil-clipboard-notes"></i>
        <h5>Manage Categories</h5>
    </a></li>
</ul>
</aside>
<main>
<h2>Manage Posts</h2>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Username</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
            <td>Wild Life</td>
            <td><a href="edit-user.php" class="btn sm">Edit</a></td>
            <td><a href="edit-category.php" class="btn sm danger">Delete</a></td>
        </tr>
        <tr>
            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
            <td>Wild Life</td>
            <td><a href="edit-user.php" class="btn sm">Edit</a></td>
            <td><a href="edit-category.php" class="btn sm danger">Delete</a></td>
        </tr>
        <tr>
            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
            <td>Wild Life</td>
            <td><a href="edit-user.php" class="btn sm">Edit</a></td>
            <td><a href="edit-category.php" class="btn sm danger">Delete</a></td>
        </tr>
        
    </tbody>
</table>
</main>
</div>
</section>


<?php
include '../partials/footer.php'
?>