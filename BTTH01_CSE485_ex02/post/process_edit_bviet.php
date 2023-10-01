<?php
if(isset($_POST['sbmSave'])) {

    $ma_bviet = $_POST['ma_bviet'];
    $tieude = $_POST['tieude'];
    $ten_bhat = $_POST['ten_bhat'];
    $ma_tloai = $_POST['ma_tloai'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $ma_tgia = $_POST['ma_tgia'];
    $hinhanh = $_POST['hinhanh'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van

        $sql = "UPDATE baiviet
        SET tieude = '$tieude', ten_bhat = '$ten_bhat', ma_tloai = '$ma_tloai', 
        tomtat = '$tomtat', noidung = '$noidung', ma_tgia = '$ma_tgia'
        WHERE ma_bviet='$ma_bviet';";
        
        //Buoc 3: Xử lý kết quả
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: ../admin/bviet.php");
        exit();

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}else{
    header("location: ../admin/add_bviet.php");
    exit();
}

?>