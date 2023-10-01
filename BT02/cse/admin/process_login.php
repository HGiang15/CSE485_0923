<?php
if(isset($_POST['sbmLogin'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //Truy van thong tin:
    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost:3307;dbname=cse", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE username='$user' OR email = '$user'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();
        //Buoc 3: Lay ra thong tin bao gom MAT KHAU BAM
        if($stmt->rowCount() > 0){
            $user = $stmt->fetch();
            //Lay ra mat khau
            $pass_hash = $user['pass'];
            if(password_verify($pass, $pass_hash)){
                //CAP THE (authentication - Not: authorization)
                session_start();
                $_SESSION['isLogin'] = $user;
                header("Location: Users.php");
            } else{
                header("Location: login.php?error=not-matched-password");
            }
        }else{
            header("Location: login.php?error=not-existed");
        }


    }catch(PDOException $e){
        echo $e->getMessage();
    }
}