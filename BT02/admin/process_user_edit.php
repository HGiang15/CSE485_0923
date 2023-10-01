<?php
// B1: truy cap DB Server
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// if (isset($_POST['user']) && isset($_POST['email']) 
//     && isset($_POST['gender']) && isset($_POST['groupp']) && isset($_POST['mobile']) 
//     && isset($_POST['pass'])) {

//     $user = $_POST['user'];
//     $email = $_POST['email'];
//     $gender = $_POST['gender'];
//     $groupp = $_POST['groupp'];
//     $mobile = $_POST['mobile'];
//     $pass = $_POST['pass'];

//     // Assume you have the user's ID from the URL 
//     $userId = $_GET['id'];

//     $sql = "UPDATE users SET username='$user', email='$email', gender='$gender', groupp='$groupp', mobile='$mobile', pass='$pass' WHERE userid='$userId'";

//     if (mysqli_query($conn, $sql)) {
//         // Redirect back to the user details page after editing
//         header('location: user_detail.php?id=' . $userId);
//         exit();
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }
// }
// mysqli_close($conn);

if(isset($_POST['sbmSave'])) {
    $id = $_POST['userid']; // lay tu form
    $user = $_POST['user'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $groupp = $_POST['groupp'];
    $mobile = $_POST['mobile'];
    
}

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost:3307;dbname=cse", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE (username = '$user' OR email='$email') AND userid != '$id'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        // Neu co ban ghi trung thi loi ve trang user_edit
        if($stmt->rowCount()>0){
            header("Location: user_edit.php?error=existed");
        }else{
            $sql_update = "UPDATE users set 
            username = '$user', email = '$email', gender = '$gender', groupp = '$groupp', mobile = '$mobile' WHERE userid='$id'";
            $stmt = $conn->prepare($sql_update);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location: Users.php?success=Updated");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>