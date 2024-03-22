<?php
require 'config/database.php';

if(isset($_POST['submit'])){
    // get updated form data
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);

    // check for valid input
    if(!$firstname || !$lastname){
        $_SESSION['edit-user'] = "Invalid form input on edit page.";
    } else {
        // update user using prepared statements to prevent SQL injection
        $query = "UPDATE users SET firstname=?, lastname=?, is_admin=? WHERE id=?";
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, "ssii", $firstname, $lastname, $is_admin, $id);
        
        if(mysqli_stmt_execute($stmt)){
            $_SESSION['edit-user-success'] = "User $firstname $lastname updated successfully";
        } else {
            $_SESSION['edit-user'] = "Failed to update user.";
        }
        mysqli_stmt_close($stmt);
    }
}

// Redirect after processing the update request
header('location: ' . ROOT_URL . 'admin/manage-users.php');
die();
?>
