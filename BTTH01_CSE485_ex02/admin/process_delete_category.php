<?php
    if(isset($_GET['id'])){
        $ma_tloai = $_GET['id'];

        try{
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
            //Buoc 2: Thuc hien truy van
            
            $sql = "DELETE FROM theloai WHERE ma_tloai = '$ma_tloai'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("location: category.php");
            exit();
    
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }else{
        header("location: category.php");
        exit();
    }
?>