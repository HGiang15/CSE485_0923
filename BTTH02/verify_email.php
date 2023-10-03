<?php

session_start();

if (!isset($_SESSION['verify'])) {
    header("location: sign_up.php");
}

include("PHPMailer/src/Exception.php");
include("PHPMailer/src/PHPMailer.php");
include("PHPMailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pass = "ocet zsvy toie irih";
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = "SMTP.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = 'gianghoang150503@gmail.com';
$mail->Password = $pass;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mailGet = $_SESSION['verify'];
$mail->setFrom('gianghoang150503@gmail.com', 'nguyendanghoanggiang');
$mail->addAddress($mailGet);
$mail->isHTML(true);
$mail->Subject = 'Email from localhost';
$randomNumber = sprintf("%04d", rand(0, 9999));
$bodyContent = "Bạn vừa đăng ký trang âm nhạc, Mã của bạn là: $randomNumber";
$mail->Body = $bodyContent;
if (!$mail->send()) {
    header("location: sign_up.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veryfy Email</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icon/fontawesome-free-6.4.2-web/css/all.min.css">
</head>

<body>
    <header>
        <?php
        include_once('layout/header_trangchinh.php');
        ?>
    </header>

    <div class="m-5">
        <div class="d-flex justify-content-center align-items-center">
            <div style="width:25rem; height:23.5rem">
                <form class="login rounded-2" action="post/process_verify_email.php" method="post">

                    <div class="d-flex align-items-center header_menu justify-content-between">
                        <h4 class="text-white ms-3">Verify email</h4>
                        <div class="d-icon">
                            <a href="#"><i class="fa-brands fa-square-facebook text-warning" style="font-size: 56px"></i></a>
                            <a href="#"><i class="fa-brands fa-square-google-plus text-warning" style="font-size: 56px"></i></a>
                            <a href="#"><i class="fa-brands fa-square-twitter text-warning" style="font-size: 56px"></i></a>
                        </div>
                    </div>

                    <div class="p-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="code" aria-label="username" aria-describedby="basic-addon1" name="code" id="code">
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary bg-warning text-dark border-0 px-4">
                                Check
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <br><br><br><br><br><br><br><br><br><br>
    <footer>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12 text-center p-3" style="border: 1px solid #000;">
                    <span class="fw-bold">TLU'S MUSIC GARDEN</span>
                </div>
            </div>
        </div>
    </footer>
    <script src="../assets/icon/bundle.min_v5.3.1.js"></script>
</body>
</html>