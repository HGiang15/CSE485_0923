<?php

if(isset($_POST['sbmSave'])){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $groupp = $_POST['groupp'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost:3307;dbname=cse", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE username = '$user' OR email='$email'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        // Neu ma co user email trung lap
        if($stmt->rowCount()>0){
            header("Location: user_add.php?error=existed");
        }else{
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO users (username, email, gender, groupp, mobile, pass) 
            VALUES ('$user', '$email', '$gender', '$groupp', '$mobile', '$pass_hash')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location: user_add.php?sucessfull=added");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

// 
// if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['gender']) 
//     && isset($_POST['groupp']) && isset($_POST['mobile']) 
//     && isset($_POST['pass'])
// ) {
//     $user = $_POST['user'];
//     $email = $_POST['email'];
//     $gender = $_POST['gender'];
//     $groupp = $_POST['groupp'];
//     $mobile = $_POST['mobile'];
//     $pass = $_POST['pass'];


//     $sql = "insert into users (username, email, gender, groupp, mobile, pass) 
//     values ('$user', '$email', '$gender', '$groupp', '$mobile', '$pass')";
    
//     if (mysqli_query($conn, $sql)) {
//         // Chuyển hướng về trang Users.php sau khi thêm dữ liệu thành công
//         header('location: Users.php');
//         exit(); // Dừng việc thực thi mã PHP tiếp theo sau khi chuyển hướng
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }
    
// }



?>
