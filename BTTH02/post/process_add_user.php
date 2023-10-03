<?php
if(isset($_POST['sbmSave'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $pass1 = $_POST['password1'];

    try {
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE username = '$username' OR email = '$email' ";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        if($stmt->rowCount()>0){
            header("Location: ../sign_up.php?error=existed");
        }else{
            $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO users (username, email, role, status, password) 
            VALUES ('$username', '$email', '$role', '$status', '$pass_hash')";

            //Buoc 3: Xử lý kết quả
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                session_start();
                $_SESSION['verify'] = $email;
                header("Location: ../verify_email.php");
                exit();
            }
        }
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
} else {
    header("location: ../sign_up.php");
    exit();
}
?>