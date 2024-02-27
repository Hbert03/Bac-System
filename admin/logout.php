<?php 
session_start();

if(isset($_POST['confirm_logout'])) {
    // If user confirms logout
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
} else {
    // Redirect to index.php if the confirmation parameter is not set
    header("Location: index.php");
    exit();
}
?>

