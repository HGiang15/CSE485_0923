<?php
if (isset($_GET['admin'])) {
    try {
        //Buoc 1: Mo ket noi
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql = "SELECT * FROM users;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->rowCount();


        $sql = "SELECT * FROM theloai;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $tloai = $stmt->rowCount();

        $sql = "SELECT * FROM tacgia;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $tgia = $stmt->rowCount();

        $sql = "SELECT * FROM baiviet;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $bviet = $stmt->rowCount();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ Admin</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/icon/fontawesome-free-6.4.2-web/css/all.min.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-dark fw-bold mt-4">Administration</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?admin=true" class="nav-link mt-4">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a href="../index.php" class="nav-link mt-4">Trang ngoài</a>
                            </li>
                            <li class="nav-item">
                                <a href="category.php?admin=true" class="nav-link mt-4">Thể loại</a>
                            </li>
                            <li class="nav-item">
                                <a href="author.php?admin=true" class="nav-link mt-4">Tác giả</a>
                            </li>
                            <li class="nav-item">
                                <a href="song.php?admin=true" class="nav-link mt-4">Bài viết</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="content m-5">
        <div class="row mx-5" style="justify-content: space-around;">
            <div class="card" style="width: 14rem;">
                <div class="card-body text-center">
                    <p class="card-text text-primary">Người dùng</p>
                    <h3><?php echo $users; ?></h3>
                </div>
            </div>

            <div class="card" style="width: 14rem;">
                <div class="card-body text-center">
                    <p class="card-text text-primary">Thể loại</p>
                    <h3><?php echo $tloai; ?></h3>
                </div>
            </div>

            <div class="card" style="width: 14rem;">
                <div class="card-body text-center">
                    <p class="card-text text-primary">Tác giả</p>
                    <h3><?php echo $tgia; ?></h3>
                </div>
            </div>

            <div class="card" style="width: 14rem;">
                <div class="card-body text-center">
                    <p class="card-text text-primary">Bài viết</p>
                    <h3><?php echo $bviet; ?></h3>
                </div>
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