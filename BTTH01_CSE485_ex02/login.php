<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icon/fontawesome-free-6.4.2-web/css/all.min.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img style="width: 250px; height: 80px;" class="" src="./assets/img/logothat.png" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-dark fw-bold mt-4">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link mt-4">Đăng nhập</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-3"></div>
                <div class="col-3">
                    <div class="input-group mt-5">
                        <input type="text" class="form-control" style="width: 50%; margin-right: 10px" placeholder="Search">
                        <a href="#" class="input-group-text border-success text-decoration-none">Tìm</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form class="p-3" style="background-color: #838383; border-radius: 10px" action="" method="post">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="text-white">Sign In</h4>
                            <div class="d-icon" style="position: relative; top: -2.5rem;">
                                <a href="#"><i class="fa-brands fa-square-facebook text-warning" style="font-size: 56px"></i></a>
                                <a href="#"><i class="fa-brands fa-square-google-plus text-warning" style="font-size: 56px"></i></a>
                                <a href="#"><i class="fa-brands fa-square-twitter text-warning" style="font-size: 56px"></i></a>
                            </div>
                        </div>
                        <div class="border-top border-bottom border-1 border-black p-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" name="user" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                <input type="password" name="pass" class="form-control" placeholder="Password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-white" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-warning">Login</button>
                        </div>
                        <div class="form-bottom text-center">
                            <p class="m-0">Don't have an account?<a class="text-decoration-none text-warning" href="">Sign Up</a></p>
                            <a href="" class="text-decoration-none text-warning">Forgot your password</a>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12 text-center p-3" style="border: 1px solid #000;">
                    <span class="fw-bold">TLU'S MUSIC GARDEN</span>
                </div>
            </div>
        </div>
    </footer>


    <script src="./assets/icon/bundle.min_v5.3.1.js"></script>
</body>

</html>