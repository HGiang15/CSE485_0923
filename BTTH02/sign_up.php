<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up User</title>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <?php
                    // if (isset($_GET['error'])) {
                    //     echo "<h4 class='p-3 text-danger fw-bold fst-italic' style='background-color:orange; border-radius: 10px;'>Add failed {$_GET['error']}, Fullname or Email already exists</h4>";
                    // }
                    // if (isset($_GET['sucessfull'])) {
                    //     echo "<h4 class='p-3 text-white fst-italic fw-bold' style='background-color:green; border-radius: 10px;'>Added user successfully please comeback Users to check</h4>";
                    // }
                    ?>
                    <form action="post/process_add_user.php" method="post" name="loginForm">
                        <h3 class="text-center fw-bold">ĐĂNG KÝ NGƯỜI DÙNG MỚI</h3>
                        <div class="d-icon mb-3 text-center">
                            <a href="#"><i class="fa-brands fa-square-facebook text-warning" style="font-size: 56px"></i></a>
                            <a href="#"><i class="fa-brands fa-square-google-plus text-warning" style="font-size: 56px"></i></a>
                            <a href="#"><i class="fa-brands fa-square-twitter text-warning" style="font-size: 56px"></i></a>
                        </div>
                        <!-- Username -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Tên người dùng</span>
                            <input type="text" class="form-control" aria-label="user" aria-describedby="addon-wrapping" name="username" id="username">
                        </div>
                        <!-- Email -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Email</span>
                            <input type="email" class="form-control" aria-label="email" aria-describedby="addon-wrapping" name="email">
                        </div>
                        <!-- Role -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Role</label>
                            <select class="form-select" id="inputGroupSelect01" name="role">
                                <option value="user" selected>user</option>
                                <option value="admin">admin</option>
                                <option value="author">author</option>
                            </select>
                        </div>
                        <!-- Status -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Status</label>
                            <select class="form-select" id="inputGroupSelect01" name="status">
                                <option value="inactive" selected>inactive</option>
                                <option value="active">active</option>
                            </select>
                        </div>
                        <!-- Pass 1 -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Password</span>
                            <input type="password" class="form-control" aria-label="password1" aria-describedby="addon-wrapping" name="password1">
                        </div>
                        <!-- Pass 2 -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Re-type Password</span>
                            <input type="password" class="form-control" aria-label="password2" aria-describedby="addon-wrapping" name="password2">
                        </div>

                        <!-- Button -->
                        <div class="gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" name="sbmSave" class="btn btn-success px-4">Thêm</button>
                            <a href="User.php">
                                <button type="button" class="btn btn-warning px-4">Quay lại</button>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="col-2"></div>
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