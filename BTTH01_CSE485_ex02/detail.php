<?php
    if(isset($_GET['ma_bviet'])) {
        $ma_bviet = $_GET['ma_bviet'];
    }

    try{
        //Buoc 1: Mo ket noi
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql = "SELECT baiviet.*, tacgia.ten_tgia, theloai.ten_tloai
        FROM baiviet
        JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
        JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
        WHERE baiviet.ma_bviet = $ma_bviet;";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xu ly ket qua
        $baiviet = $stmt->fetchAll();
        
    } catch(PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Bài Viết</title>
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
                <div class="col-4">
                    <div class="section-img">
                        <img style="width: 400px; height: 400px;" src="./assets/img/<?php echo $baiviet[0]['hinhanh'];?>" alt="">
                    </div>
                </div>
                <div class="col-8">
                    <div class="section-content">
                        <h5 class="text-info"><?php echo $baiviet[0]['tieude'];?></h5>
                        <p class="fw-bold">Bài hát: <span class="fw-lighter"><?php echo $baiviet[0]['ten_bhat'];?></span></p>
                        <p class="fw-bold">Thể loại: <span class="fw-lighter"><?php echo $baiviet[0]['ten_tloai'];?></span></p>
                        <p class="fw-bold">Tóm tắt:
                            <span class="fw-lighter"><?php echo $baiviet[0]['tomtat'];?></span>
                        </p>
                        <p class="fw-bold">Nội dung:
                            <span class="fw-lighter"><?php echo $baiviet[0]['noidung'];?></span>
                        </p>
                        <p class="fw-bold">Tác giả: <span class="fw-lighter"><?php echo $baiviet[0]['ten_tgia'];?></span></p>
                    </div>
                </div>
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