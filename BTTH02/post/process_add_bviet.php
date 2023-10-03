<?php
if(isset($_POST['sbmSave'])) {

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

        $sql = "SELECT * FROM baiviet;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        $rowCount = $stmt->rowCount();

        for ($i=1; $i<=$rowCount; $i++) {
            $sql = "SELECT * FROM baiviet WHERE ma_bviet = '$i';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount()<=0){
                break;
            }
        }

        $sql = "INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) 
        VALUES ('$i','$tieude','$ten_bhat','$ma_tloai','$tomtat','$noidung','$ma_tgia','$hinhanh');";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: ../admin/bviet.php");
        exit();

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
} else {
    header("location: ../admin/add_bviet.php");
    exit();
}

?>