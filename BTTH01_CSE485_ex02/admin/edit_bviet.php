<?php
if(isset($_GET['id'])){
    $ma_bviet=$_GET['id'];

    try{
        //Buoc 1: Mo ket noi
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql = "SELECT * FROM baiviet WHERE ma_bviet = '$ma_bviet';";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xu ly ket qua
        $baiviet = $stmt->fetchAll();

    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    
} else {
    header("location: bviet.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Bài viết</title>
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
            <div class="row">
                <div class="col-12">
                    <form action="../post/process_edit_bviet.php" method="post">
                        <h4 class="text-center fw-bold">SỬA BÀI VIẾT</h4>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Mã bài viết</span>
                            <input type="text" class="form-control bg-warning" aria-label="ma_bviet" aria-describedby="addon-wrapping" name="ma_bviet" value="<?php echo $baiviet[0]['ma_bviet']; ?>" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Tiêu đề</span>
                            <input type="text" class="form-control" aria-label="tieude" aria-describedby="addon-wrapping" name="tieude" value="<?php echo $baiviet[0]['tieude']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Tên bài hát</span>
                            <input type="text" class="form-control" aria-label="ten_bhat" aria-describedby="addon-wrapping" name="ten_bhat" value="<?php echo $baiviet[0]['ten_bhat']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Mã thể loại</span>
                            <input type="text" class="form-control" aria-label="ma_tloai" aria-describedby="addon-wrapping" name="ma_tloai" value="<?php echo $baiviet[0]['ma_tloai']; ?>">
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 130px" name="tomtat"><?php echo $baiviet[0]['tomtat']; ?></textarea>
                            <label for="floatingTextarea2">Tóm tắt</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 130px" name="noidung"><?php echo $baiviet[0]['noidung']; ?></textarea>
                            <label for="floatingTextarea2">Nội dung</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Mã tác giả</span>
                            <input type="text" class="form-control" aria-label="ma_tgia" aria-describedby="addon-wrapping" name="ma_tgia" value="<?php echo $baiviet[0]['ma_tgia']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Hình ảnh</span>
                            <input type="text" class="form-control" aria-label="hinhanh" aria-describedby="addon-wrapping" name="hinhanh" value="<?php echo $baiviet[0]['hinhanh']; ?>">
                        </div>
                        <div class="gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" name="sbmSave" class="btn btn-success px-4">Lưu bài viết</button>
                            <a href="bviet.php">
                                <button type="button" class="btn btn-warning px-4">Quay lại</button>
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