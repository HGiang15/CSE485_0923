<?php
try {
    //Buoc 1: Mo ket noi
    $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
    //Buoc 2: Thuc hien truy van
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //Buoc 3: Xu ly ket qua
    $users = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ User</title>
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

    <!-- Table user start -->
    <div class="container table-user">
        <div class="row">
            <div class="col-12">
                <a href="../sign_up.php">
                    <button type="button" class="btn btn-success">Thêm mới người dùng</button>
                </a>
                <table class="table mt-3 border-0 rounded">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th scope="col">Password</th>

                            <!-- <th scope="col">Chi tiết</th> -->
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $user) {
                        ?>
                            <tr>
                                <th style="font-size: 12px" scope="row"><?= $user['0'] ?></th>
                                <td style="font-size: 12px"><?= $user['1'] ?></td>
                                <td style="font-size: 12px"><?= $user['2'] ?></td>
                                <td style="font-size: 12px"><?= $user['3'] ?></td>
                                <td style="font-size: 12px"><?= $user['4'] ?></td>
                                <td style="font-size: 12px"><?= $user['5'] ?></td>

                                <!-- <td style="font-size: 12px">
                                    <a style="padding: 1px 3px" href="detail_user.php?id=<?= $user['0'] ?>" class="fs-5 text-secondary"><i class="fa-solid fa-shield-halved" style="font-size: 16px;"></i></a>
                                </td> -->
                                <td style="font-size: 12px">
                                    <a href="edit_user.php?id=<?= $user['0'] ?>" class="fs-5 text-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td style="font-size: 12px">
                                    <a class="fs-5 text-danger" href="" data-bs-toggle="modal" data-bs-target="#<?= $user['0'] ?>">
                                        <i class="fa-solid fa-trash" style="font-size: 16px;"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Table user end -->



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