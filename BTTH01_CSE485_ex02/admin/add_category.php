<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Thể loại ADD</title>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="process_add_category.php" method="post">
                        <h4 class="text-center fw-bold">THÊM MỚI THỂ LOẠI</h4>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Tên thể loại</span>
                            <input type="text" class="form-control" aria-label="ten_tloai" aria-describedby="addon-wrapping" name="ten_tloai">
                        </div>
                        <div class="gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-success px-4">Thêm</button>
                            <a href="category.php?admin=true">
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