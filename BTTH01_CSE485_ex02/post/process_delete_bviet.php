<?php

if(isset($_GET['id'])){
    $ma_bviet = $_GET['id'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van
        
        $sql = "DELETE FROM baiviet WHERE ma_bviet='$ma_bviet'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: ../admin/bviet.php");
        exit();

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}else{
    header("location: ../admin/bviet.php");
    exit();
}

?>