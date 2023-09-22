<?php
// B1: truy cap DB Server
include_once 'libs/connect.php';
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if (isset($_POST['user']) && isset($_POST['email']) 
    && isset($_POST['gender']) && isset($_POST['groupp']) && isset($_POST['mobile']) 
    && isset($_POST['pass'])) {

    $user = $_POST['user'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $groupp = $_POST['groupp'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];

    // Assume you have the user's ID from the URL 
    $userId = $_GET['id'];

    $sql = "UPDATE users SET username='$user', email='$email', gender='$gender', groupp='$groupp', mobile='$mobile', pass='$pass' WHERE userid='$userId'";

    if (mysqli_query($conn, $sql)) {
        // Redirect back to the user details page after editing
        header('location: user_detail.php?id=' . $userId);
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);



?>