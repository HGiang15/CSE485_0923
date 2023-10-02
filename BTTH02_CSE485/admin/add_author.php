<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Author</title>
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
                    <form action="../post/process_add_author.php" method="post">
                        <h4 class="text-center fw-bold">THÊM MỚI TÁC GIẢ</h4>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Tên tác giả</span>
                            <input type="text" class="form-control" aria-label="ten_tgia" aria-describedby="addon-wrapping" name="ten_tgia">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Hình tác giả</span>
                            <input type="text" class="form-control" aria-label="hinh_tgia" aria-describedby="addon-wrapping" name="hinh_tgia">
                        </div>
                        <div class="gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" name="sbmSave" class="btn btn-success px-4">Thêm tác giả</button>
                            <a href="author.php">
                                <button type="button" class="btn btn-warning px-4">Quay lại</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>

</html>