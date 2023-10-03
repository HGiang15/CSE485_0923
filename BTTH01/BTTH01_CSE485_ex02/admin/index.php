<?php
    session_start();

    if(!isset($_SESSION['isLogin'])){
        header("location: ../login.php");
    }
    
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
        <?php
            include_once 'layout/header.php';
        ?>
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