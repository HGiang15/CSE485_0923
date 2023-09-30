<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Tạo một đối tượng PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Cấu hình thông tin SMTP
$mail->IsSMTP(); // Bật chế độ sử dụng SMTP
$mail->SMTPDebug = 1; // Chế độ debugging: 1 = lỗi và thông báo, 2 = chỉ thông báo
$mail->SMTPAuth = true; // Kích hoạt chế độ xác thực SMTP
$mail->SMTPSecure = 'ssl'; // Kích hoạt chế độ bảo mật SSL
$mail->Host = "smtp.gmail.com"; // Địa chỉ máy chủ SMTP của Gmail
$mail->Port = 465; // Cổng SMTP của Gmail (hoặc 587 nếu bạn không sử dụng SSL)
$mail->IsHTML(true); // Cho phép gửi email dưới dạng HTML

// Cấu hình thông tin đăng nhập Gmail
$mail->Username = "gianghoang150503@gmail.com"; // Địa chỉ email Gmail của bạn
$mail->Password = "cmhm fyry icfk zukn"; // Mật khẩu Gmail của bạn

// Thiết lập thông tin email
$mail->SetFrom("gianghoang150503@gmail.com");
$mail->Subject = "Diem Danh 2151160496 63HTTT1";
$mail->Body = "BTTH01_ex02 cài đặt send email"; //nội dung mail
$mail->AddAddress("dungkt@wru.vn"); // mail người dùng

// Gửi email
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}
?>