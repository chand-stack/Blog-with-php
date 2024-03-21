<?php 
require 'config/database.php';

if(isset($_POST['submit'])){

}else{
    header('location:' . ROOT_URL . 'admin/add-user.php');
    die();
}