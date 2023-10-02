<?php

if(isset($_POST['sbmSave'])){
    $ma_tgia = $_POST['ma_tgia'];
    $ten_tgia = $_POST['ten_tgia'];
    $hinh_tgia = $_POST['hinh_tgia'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van
        
        $sql = "UPDATE tacgia SET ten_tgia = '$ten_tgia', hinh_tgia = '$hinh_tgia'
        WHERE ma_tgia='$ma_tgia';";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: ../admin/author.php");
        exit();

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}else{
    header("location: ../admin/edit_author.php");
    exit();
}
?>