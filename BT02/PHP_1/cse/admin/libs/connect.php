<?php
$conn = mysqli_connect(hostname: 'localhost', port: '3307', username: 'root', password: '123', database: 'cse');
if (!$conn) {
    die("Can not Connect");
}


// if (isset($_GET['id'])) {
//     $idDetail = $_GET['id'];

//     $conn = new PDO("mysql:host=localhost:3307;dbname=cse", "root", "123");

//     // B3: Tạo câu truy vấn SQL sử dụng Prepared Statement
//     $sql = "SELECT * FROM users WHERE userid='$idDetail'";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();

//     $users = $stmt->fetch();

//     if ($user) {
//         // Xử lý dữ liệu người dùng ở đây
//     } else {
//         echo "Không tìm thấy người dùng.";
//     }
// } else {
//     echo "ID người dùng không được cung cấp.";
// }
?>