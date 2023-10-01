<?php
    try{
        //Buoc 1: Mo ket noi
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");

        //Buoc 2: Thuc hien truy van
        $sql = "SELECT baiviet.* 
        FROM baiviet
        INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
        WHERE theloai.ten_tloai = 'Nhạc pop';";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xu ly ket qua
        $baiviets = $stmt->fetchAll();

    } catch(PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="bg">
                        <img class="" style="width: 100%; height: 500px" src="./assets/img/p0fgjfnl.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row text-center mt-3">
                <span class="text-primary fs-4">TOP BÀI HÁT YÊU THÍCH</span>
            </div>
            <div class="row mt-3">
                <?php
                foreach ($baiviets as $baiviet) {
                ?>
                    <div class="col-3">
                        <a href="detail.php?ma_bviet=<?php echo $baiviet['ma_bviet']; ?>" class="mb-2">
                            <div style="display:inline;" class="text-center">
                                <div style="display:inline; flex-wrap: wrap;" class="d-flex justify-content-center align-items-center">
                                    <img src="./assets/img/<?php echo $baiviet['hinhanh']; ?>" alt="" height="180rem" width="100%" style="border: 1px solid black;" class="rounded-top-2">
                                    <br>
                                    <div style="border: 1px solid black; width:100%; height:3rem" class="rounded-bottom-2 d-flex justify-content-center align-items-center">
                                        <span class="fs-6"><?php echo $baiviet['ten_bhat']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="col-3">
                        <div class="content text-center">
                            <a href="detail.php"><img class="img-fluid" style="width: 355px; height: 227px; border-radius: 10px;" src="./assets/img/oicuocsongmen.jpg" alt=""></a>
                            <a class="text-decoration-none" style="display:block; margin-top: 12px;" href="detail.php">Cuộc sống mến thương</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="content text-center">
                            <a href="detail.php"><img class="img-fluid" style="width: 355px; height: 227px; border-radius: 10px;" src="./assets/img/longme.jpg" alt=""></a>
                            <a class="text-decoration-none" style="display:block; margin-top: 12px;" href="detail.php">Lòng mẹ</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="content text-center">
                            <a href="detail.php"><img class="img-fluid" style="width: 355px; height: 227px; border-radius: 10px;" src="./assets/img/phoipha.jpg" alt=""></a>
                            <a class="text-decoration-none" style="display:block; margin-top: 12px;" href="detail.php">Phôi Pha</a>
                        </div>
                    </div> -->
                <?php } ?>
            </div>
            <!-- <div class="row mt-3">
                <div class="col-3">
                    <div class="content text-center">
                        <a href="detail.php"><img class="img-fluid" style="width: 355px; height: 227px; border-radius: 10px;" src="./assets/img/noitinhyeu.jpg" alt=""></a>
                        <a class="text-decoration-none" style="display:block; margin-top: 12px;" href="detail.php">Nơi tình yêu bắt đầu</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>



    <footer>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12 text-center p-3" style="border: 1px solid #000;">
                    <span class="fw-bold">TLU'S MUSIC GARDEN</span>
                </div>
            </div>
        </div>
    </footer>
    <script src="./assets/icon/bundle.min_v5.3.1.js"></script>
    <!-- <script src="/assets/icon/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>