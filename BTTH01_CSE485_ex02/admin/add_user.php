<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ Thêm User</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/icon/fontawesome-free-6.4.2-web/css/all.min.css">
</head>

<body>
    <header>
        <?php
        include_once 'layout/header.php';
        ?>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                    if (isset($_GET['error'])) {
                    echo "<h4 class='p-3 text-danger fw-bold fst-italic' style='background-color:orange; border-radius: 10px;'>Add failed {$_GET['error']}, Fullname or Email already exists</h4>";
                    }
                    if (isset($_GET['sucessfull'])) {
                    echo "<h4 class='p-3 text-white fst-italic fw-bold' style='background-color:green; border-radius: 10px;'>Added user successfully please comeback Users to check</h4>";
                    }
                    ?>
                    <form action="process_add_user.php" method="post">
                        <h4 class="text-center fw-bold">THÊM MỚI NGƯỜI DÙNG</h4>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Tên người dùng</span>
                            <input type="text" class="form-control" aria-label="user" aria-describedby="addon-wrapping" name="user">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Email</span>
                            <input type="email" class="form-control" aria-label="email" aria-describedby="addon-wrapping" name="email">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Password</span>
                            <input type="password" class="form-control" aria-label="pass" aria-describedby="addon-wrapping" name="pass">
                        </div>
                        <div class="gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" name="sbmSave" class="btn btn-success px-4">Thêm</button>
                            <a href="User.php">
                                <button type="button" class="btn btn-warning px-4">Quay lại</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




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