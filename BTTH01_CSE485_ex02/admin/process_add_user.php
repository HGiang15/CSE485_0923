<?php
if(isset($_POST['sbmSave'])){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE username = '$user' OR email='$email'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        // Neu ma co user email trung lap
        if($stmt->rowCount()>0){
            header("Location: add_user.php?error=existed");
        }else{
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO users (username, email, pass) 
            VALUES ('$user', '$email', '$pass_hash')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location: add_user.php?sucessfull=added");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>