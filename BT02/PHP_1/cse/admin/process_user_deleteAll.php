<?php
include_once 'libs/connect.php';

// SQL query to delete all records from the users table
$sql = "DELETE FROM users";

if (mysqli_query($conn, $sql)) {
    // Redirect back to the users list page or any other page as needed
    header('location: Users.php');
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>