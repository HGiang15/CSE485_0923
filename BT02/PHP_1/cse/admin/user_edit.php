<?php

// if (isset($_GET['id'])) {
//     $userID = $_GET['id'];

//     // Fetch the user's information from the database based on the user's ID
//     $sql = "SELECT * FROM users WHERE userid='$userID'";
//     $result = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($result) == 1) {
//         $user = mysqli_fetch_assoc($result);

if (isset($_GET['id'])) {
    $userID = $_GET['id'];

    try {
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost:3307;dbname=cse", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE userid='$userID'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
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

                <!-- User edit -->
                <div class="row">
                    <div class="col-12">
                        <form class="p-5" style="background-color: #FFF0EE" action="process_user_edit.php?id=<?= $userID ?>" method="post">
                            <?php
                            if (isset($_GET['error'])) {
                                echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                            }
                            ?>
                            <h3 class="text-warning" style="text-align:center;">Edit User <span class="fst-italic text-danger fs-4"><?= $user['1'] ?></span></h3>
                            <!-- UserId -->
                            <div class="col-md-6 mt-3">
                                <label for="inputUserID" class="form-label">UserID</label>
                                <input type="text" name="userid" class="form-control bg-warning" id="inputUserID" value="<?= $user['0'] ?>" readonly>
                            </div>
                            <!-- Fullname -->
                            <div class="col-md-6 mt-3">
                                <label for="inputUsername" class="form-label">Fullname</label>
                                <input type="text" name="user" class="form-control" id="inputUsername" placeholder="exam: Nguyen Dang Hoang Giang" value="<?= $user['1'] ?>">
                            </div>
                            <!-- Email -->
                            <div class="col-md-6 mt-3">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="exam: giang@gmail.com" value="<?= $user['2'] ?>">
                            </div>
                            <div class="row mt-3">
                                <!-- Gender -->
                                <div class="col-md-2">
                                    <label for="inputGender" class="form-label">Gender</label>
                                    <select id="inputGender" name="gender" class="form-select">
                                        <option value="Male" <?php if ($user['gender'] === 'Male') echo 'selected'; ?>>Male</option>
                                        <option value="Female" <?php if ($user['gender'] === 'Female') echo 'selected'; ?>>Female</option>
                                        <option value="Other" <?php if ($user['gender'] === 'Other') echo 'selected'; ?>>Other</option>
                                    </select>
                                </div>
                                <!-- Group -->
                                <div class="col-md-2">
                                    <label for="inputGroup" class="form-label">Group</label>
                                    <select id="inputGroup" name="groupp" class="form-select">
                                        <option value="Admin" <?php if ($user['groupp'] === 'Admin') echo 'selected'; ?>>Admin</option>
                                        <option value="Manager" <?php if ($user['groupp'] === 'Manager') echo 'selected'; ?>>Manager</option>
                                        <option value="Customer" <?php if ($user['groupp'] === 'Customer') echo 'selected'; ?>>Customer</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Mobile -->
                            <div class="col-md-6 mt-3">
                                <label for="inputMobile" class="form-label">Mobile</label>
                                <input type="number" name="mobile" class="form-control" id="inputMobile" placeholder="exam: 0398162589" value="<?= $user['5'] ?>">
                            </div>
                            <!-- Password -->
                            <!-- <div class="col-md-6 mt-3">
                                <label for="inputPass" class="form-label">Password</label>
                                <input type="text" name="pass" class="form-control" id="inputPass" value="<?= $user['pass'] ?>">
                            </div> -->
                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check all
                                    </label>
                                </div>
                            </div>
                            <div class="col-12  mt-3">
                                <!-- onclick="return alert('Saved user successfully');" -->
                                <button name="sbmSave" type="submit" class="btn btn-success">Save</button>
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