<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS Users</title>
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

                <div class="row ">
                    <div class="col-12">
                        <?php
                        if (isset($_GET['error'])) {
                            echo "<h4 class='p-3 text-danger fw-bold fst-italic' style='background-color:orange; border-radius: 10px;'>Add failed {$_GET['error']}, Fullname or Email already exists</h4>";
                        }
                        if (isset($_GET['sucessfull'])) {
                            echo "<h4 class='p-3 text-white fst-italic fw-bold' style='background-color:green; border-radius: 10px;'>Added user successfully please comeback Users to check</h4>";
                        }
                        ?>
                        <form class="p-5" style="background-color: #FFF0EE" action="process_user_add.php" method="post">
                            <h2 class="text-warning">Enter Information</h2>
                            <!-- Fullname -->
                            <div class="col-md-6 mt-3">
                                <label for="inputUsername" class="form-label">Fullname</label>
                                <input type="text" name="user" class="form-control" id="inputUsername" placeholder="exam: Nguyen Dang Hoang Giang">
                            </div>
                            <!-- Email -->
                            <div class="col-md-6 mt-3">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="exam: giang@gmail.com">
                            </div>
                            <div class="row mt-3">
                                <!-- Gender -->
                                <div class="col-md-2">
                                    <label for="inputGender" class="form-label">Gender</label>
                                    <select id="inputGender" name="gender" class="form-select">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <!-- Group -->
                                <div class="col-md-2">
                                    <label for="inputGroup" class="form-label">Group</label>
                                    <select id="inputGroup" name="groupp" class="form-select">
                                        <option>Admin</option>
                                        <option>Manager</option>
                                        <option>Customer</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Mobile -->
                            <div class="col-md-6 mt-3">
                                <label for="inputMobile" class="form-label">Mobile</label>
                                <input type="number" name="mobile" class="form-control" id="inputMobile" placeholder="exam: 0398162589">
                            </div>

                            <!-- Password -->
                            <div class="col-md-6 mt-3">
                                <label for="inputPass" class="form-label">Password</label>
                                <input type="password" name="pass" class="form-control" id="inputPass">
                            </div>
                            <!-- Retype Password -->
                            <div class="col-md-6 mt-3">
                                <label for="inputPass2" class="form-label">Retype Password</label>
                                <input type="password" name="pass2" class="form-control" id="inputPass2">
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check all
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" name="sbmSave" class="btn btn-primary">ADD USER</button>
                            </div>
                        </form>
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