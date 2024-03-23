<?php 
require 'config/database.php';

if(isset($_POST['submit'])){
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES['thumbnail'];

    // set is_featured to 0 if unchecked
    $is_featured = $is_featured == 1 ?: 0;

    // validate form data
    if(!$title || !$category_id || !$body) {
        $_SESSION['edit-post'] = "Couldn't update post. Invalid form data on edit post page.";
    } else {
        // Process thumbnail upload if a new thumbnail is available
        if($thumbnail['name']) {
            $time = time();
            $thumbnail_name = $time . $thumbnail['name'];
            $thumbnail_tmp_name = $thumbnail['tmp_name'];
            $thumbnail_destination_path = '../images/' . $thumbnail_name;

            // Check if the file is an image and within size limits
            $allowed_files = ['png', 'jpg', 'jpeg'];
            $extension = pathinfo($thumbnail_name, PATHINFO_EXTENSION);

            if(!in_array($extension, $allowed_files)) {
                $_SESSION['edit-post'] = "Couldn't update post. Thumbnail should be png, jpg or jpeg.";
            } elseif($thumbnail['size'] > 2000000) { // 2MB limit
                $_SESSION['edit-post'] = "Couldn't update post. Thumbnail size too big. Should be less than 2MB.";
            } else {
                // Upload the thumbnail
                if(move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path)) {
                    // Delete the previous thumbnail if it exists
                    if(file_exists('../images/' . $previous_thumbnail_name)) {
                        unlink('../images/' . $previous_thumbnail_name);
                    }
                } else {
                    $_SESSION['edit-post'] = "Couldn't update post. Error uploading thumbnail.";
                }
            }
        }
    }

    if(isset($_SESSION['edit-post'])) {
        // Redirect to manage form page if form was invalid
        header('location:' . ROOT_URL . 'admin/');
        die();
    } else {
        // Update the post in the database
        $query = "UPDATE posts SET title='$title', body='$body', thumbnail='$thumbnail_name', category_id=$category_id, is_featured=$is_featured WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);

        if($result) {
            $_SESSION['edit-post-success'] = "Post updated successfully";
            header('location: ' . ROOT_URL . 'admin/index.php');
            die();
        } else {
            $_SESSION['edit-post'] = "Couldn't update post. Database error.";
            header('location:' . ROOT_URL . 'admin/');
            die();
        }
    }
}

header('location: ' . ROOT_URL . 'admin/');
die();
?>
