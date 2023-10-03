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
        <?php
        include_once('layout/header_trangchinh.php');
        ?>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <?php
                    if (isset($_GET['error'])) {
                        echo "<p>{$_GET['error']}</p>";
                    }
                    ?>
                    <form class="p-3" style="background-color: #838383; border-radius: 10px" action="post/process_login.php" method="post">
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
                                <input type="text" name="username" aria-label="username" aria-describedby="basic-addon1" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                <input type="password" name="password" aria-label="password" aria-describedby="basic-addon1" class="form-control" placeholder="Password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-white" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" name="sbmLogin" class="btn btn-warning">Login</button>
                        </div>
                        <div class="form-bottom text-center">
                            <p class="m-0">Don't have an account?<a class="text-decoration-none text-warning" href="sign_up.php">Sign Up</a></p>
                            <a href="forgot.php" class="text-decoration-none text-warning">Forgot your password</a>
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