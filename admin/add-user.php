<?php
include 'partials/header.php'
?>


<section class="form_section">
<div class="container form_section-container">
<h2>Add User</h2>
<div class="alert_message error">
<p>This is an error message</p>
</div>
<form action="<?= ROOT_URL ?>admin/add-user-logic.php" enctype="multipart/form-data" method="post">
    <input type="text" name="firstname" placeholder="First Name">
    <input type="text" name="lastname" placeholder="Last Name">
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="createpassword" placeholder="Create Password">
    <input type="password" name="confirmpassword" placeholder="Confirm Password">
    <select name="userrole">
        <option value="0">Author</option>
        <option value="1">Admin</option>
    </select>
    <div class="form_control">
      <label for="avatar">User Avatar</label>
      <input type="file" name="avatar" id="avatar">
    </div>
     <button class="btn" name="submit" type="submit">Add User</button>
</form>
</div>
</section>


<?php
include '../partials/footer.php'
?>