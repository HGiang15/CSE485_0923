<?php
    if(isset($_POST['sbmLogin'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        try{
            //Buoc 1: Mo ket noi
            $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM users 
            WHERE username = '$username' or email = '$username';";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            if($stmt->rowCount() > 0) {
                $user = $stmt->fetch();
                $pass_hash = $user[5];
                if(password_verify($password, $pass_hash)){
                    //CAP THE (authentication - Not: authorization)
                    session_start();
                    $_SESSION['isLogin'] = $user[3];
                    header("location: ../admin/index.php");
                }else{
                    header("location: ../login.php");
                    exit();
                }
                
            }else{
                header("location: ../login.php");
                exit();
            }

        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }else{
        header("location: ../login.php");
        exit();
    }
?>