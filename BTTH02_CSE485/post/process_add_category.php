<?php
if(isset($_POST['sbmSave'])){
    $ten_tloai = $_POST['ten_tloai'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql = "SELECT * FROM theloai;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        $rowCount = $stmt->rowCount();
        for ($i = 1; $i <= $rowCount; $i++) {
            $sql = "SELECT * FROM theloai WHERE ma_tloai= '$i';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount()<=0){
                break;
            }
        }

        $sql = "INSERT INTO theloai (ma_tloai, ten_tloai) VALUES ('$i', '$ten_tloai');";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: ../admin/category.php");
        exit();

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}else{
    header("location: ../admin/add_category.php");
    exit();
}

?>