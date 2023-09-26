<?php
// B1: Kết nối
include_once 'libs/connect.php';

// B2: Kiểm tra xem có tham số ID được truyền từ URL không
if (isset($_GET['id'])) {
    $idDetail = $_GET['id'];

    // B3: Tạo câu truy vấn SQL để lấy thông tin người dùng dựa trên ID
    $sql = "SELECT * FROM users WHERE userid='$idDetail'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "Không tìm thấy người dùng.";
    }
} else {
    echo "ID người dùng không được cung cấp.";
}

// Đóng kết nối
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS Trang chủ</title>
    <link rel="stylesheet" href="layout/header.php">
    <link rel="stylesheet" href="../assets/Icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/Icon/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Side Bar left start -->
            <div class="col-md-3 sidebar-left bg-body-tertiary">
                <?php include_once 'layout/sidebar.php'; ?>
            </div>
            <!-- Side Bar left end -->

            <!-- Main start -->
            <div class="col-md-9 main">
                <?php include_once 'layout/header.php'; ?>

                <div class="table-user">
                    <div class="row">
                        <div class="col-12">
                            <div class="title bg-warning" style="border-radius: 10px;">
                                <h4 class="text-center">User Detail: <span class="fst-italic text-danger fs-4"><?= $user['username'] ?></span></h4>
                            </div>
                            <table class="table table-dark border-0 rounded">
                                <thead>
                                    <tr>
                                        <th class="text-warning" scope="col">ID</th>
                                        <th class="text-warning" scope="col">Fullname</th>
                                        <th class="text-warning" scope="col">Email</th>
                                        <th class="text-warning" scope="col">Gender</th>
                                        <th class="text-warning" scope="col">Group</th>
                                        <th class="text-warning" scope="col">Mobile</th>
                                        <th class="text-warning" scope="col">Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?= $user['0'] ?></th>
                                        <td style="font-size: 14px"><?= $user['username'] ?></td>
                                        <td style="font-size: 14px" class="fw-bold"><?= $user['email'] ?></td>
                                        <td style="font-size: 14px"><?= $user['gender'] ?></td>
                                        <td style="font-size: 14px"><?= $user['groupp'] ?></td>
                                        <td style="font-size: 14px"><?= $user['mobile'] ?></td>
                                        <td style="font-size: 14px"><?= $user['pass'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- footer start -->
                <footer>
                    <br><br><br><br><br>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <span>Copyright @ 2023 Designed by Hoang Giang</span>
                        </div>
                    </div>
                </footer>
                <!-- footer end -->
            </div>
            <!-- Main end -->
        </div>
    </div>
    <!-- Dropdown -->
    <script src="../assets/Icon/bundle.min_v5.3.1.js"></script>

    <!-- link bootrap lastest5.2 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
    <!-- link w3school -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- <script src="../assets/Icon/bundle_bootstrap_4.5.2_js_bootstrap.min.js"></script>    -->
</body>

</html>