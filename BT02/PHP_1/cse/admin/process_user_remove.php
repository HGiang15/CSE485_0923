<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

// B1: Kết nối đến cơ sở dữ liệu
try{
    //Buoc 1: Ket noi DBServer
    $conn = new PDO("mysql:host=localhost:3307;dbname=cse", "root", "123");
    //Buoc 2: Thuc hien truy van
    $sql = "DELETE FROM users WHERE userid = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //Buoc 3: Xử lý kết quả
    $rowCount = $stmt->rowCount();
    if($rowCount>0){
        // echo "Deleted $rowCount row(s).";
        header("location: Users.php?success=$id");
    }

}catch(PDOException $e){
    echo $e->getMessage();
}

// B2: Kiểm tra xem biểu mẫu đã được gửi đi hay chưa
// if (isset($_POST['idUser'])) {
//     $id = $_POST['idUser'];

//     // B3: Tạo câu truy vấn DELETE để xóa người dùng dựa trên ID
//     $sql = "DELETE FROM users WHERE userid = $id";

//     if (mysqli_query($conn, $sql)) {
//         // echo "Xóa người dùng thành công.";
//         header('location: Users.php');
//         exit(); // Dừng việc thực thi mã PHP tiếp theo sau khi chuyển hướng

//     } else {
//         echo "Lỗi khi xóa người dùng: " . mysqli_error($conn);
//     }
// }

// // Đóng kết nối
// mysqli_close($conn);

?>