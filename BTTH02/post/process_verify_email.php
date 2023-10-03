<?php
session_start();

if(!isset($_SESSION['verify'])){
    header("location: sign_up.php");
}

try{
    //Buoc 1: Ket noi DBServer
    $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
    //Buoc 2: Thuc hien truy van
    
    $sql = "UPDATE users
    SET status = 'active'
    WHERE email = '{$_SESSION['verify']}'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header("location: ../login.php");
    exit();

}catch(PDOException $e){
    echo $e->getMessage();
}

?>