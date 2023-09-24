<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Thể loại</title>
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
                                <a href="index.php" class="nav-link mt-4">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a href="../index.php" class="nav-link mt-4">Trang ngoài</a>
                            </li>
                            <li class="nav-item">
                                <a href="category.php" class="nav-link mt-4">Thể loại</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link mt-4">Tác giả</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link mt-4">Bài viết</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="category-content">
                    <a href="add_category.php">
                        <button type="button" class="btn btn-success">Thêm mới</button>
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên thể loại</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Nhạc trữ tình</td>
                                <td><a href="edit_category.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
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