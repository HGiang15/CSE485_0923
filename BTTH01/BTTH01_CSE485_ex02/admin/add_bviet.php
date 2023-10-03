<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Bài viết</title>
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
                    <form action="../post/process_add_bviet.php" method="post">
                        <h4 class="text-center fw-bold">THÊM MỚI BÀI VIẾT</h4>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Tiêu đề</span>
                            <input type="text" class="form-control" aria-label="tieude" aria-describedby="addon-wrapping" name="tieude">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Tên bài hát</span>
                            <input type="text" class="form-control" aria-label="ten_bhat" aria-describedby="addon-wrapping" name="ten_bhat">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Mã thể loại</span>
                            <input type="text" class="form-control" aria-label="ma_tloai" aria-describedby="addon-wrapping" name="ma_tloai">
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 130px" name="tomtat"></textarea>
                            <label for="floatingTextarea2">Tóm tắt</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 130px" name="noidung"></textarea>
                            <label for="floatingTextarea2">Nội dung</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Mã tác giả</span>
                            <input type="text" class="form-control" aria-label="ma_tgia" aria-describedby="addon-wrapping" name="ma_tgia">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Hình ảnh</span>
                            <input type="text" class="form-control" aria-label="hinhanh" aria-describedby="addon-wrapping" name="hinhanh">
                        </div>
                        <div class="gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" name="sbmSave" class="btn btn-success px-4">Thêm bài viết</button>
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