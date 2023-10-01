<?php
if (isset($_GET['id'])) {
    $ma_tloai = $_GET['id'];

    try {
        //Buoc 1: Mo ket noi
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql = "SELECT * FROM theloai WHERE ma_tloai = '$ma_tloai';";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xu ly ket qua
        $tloai = $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("location: category.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Thể loại EDIT</title>
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

    <section>
        <div class="container">
            <div class="row m-5 text-center">
                <div class="mx-5">
                    <form action="../post/process_edit_category.php" method="post">
                        <h4 class="mb-4 fw-bold">SỬA THÔNG TIN THỂ LOẠI</h4>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text ms-5" id="addon-wrapping">Mã thể loại</span>
                            <input type="text" class="form-control bg-warning me-5" aria-label="ma_tloai" aria-describedby="addon-wrapping" name="ma_tloai" value="<?php echo $tloai[0]['ma_tloai']; ?>" readonly>
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text ms-5" id="addon-wrapping">Tên thể loại</span>
                            <input type="text" class="form-control me-5" aria-label="ten_tloai" aria-describedby="addon-wrapping" name="ten_tloai" value="<?php echo $tloai[0]['ten_tloai']; ?>">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end me-5">
                            <button type="submit" name="sbmSave" class="btn btn-success px-4 m-0">Lưu lại</button>
                            <a href="category.php">
                                <button type="button" class="btn btn-warning px-4 m-0">Quay lại</button>
                            </a>
                        </div>
                    </form>
                </div>
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