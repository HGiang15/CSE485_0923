<?php
if (isset($_GET['admin'])) {
    try {
        //Buoc 1: Mo ket noi
        $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
        //Buoc 2: Thuc hien truy van
        $sql = "SELECT * FROM theloai;";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xu ly ket qua
        $tloais = $stmt->fetchAll();
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

    <!-- DS -->
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
                            <?php
                            foreach ($tloais as $tloai) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $tloai['ma_tloai']; ?></th>
                                    <td><?php echo $tloai['ten_tloai']; ?></td>
                                    <!-- action -->
                                    <td><a href="edit_category.php?admin=true&id=<?php echo $tloai[0]?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $tloai['0']; ?>">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal<?php echo $tloai['0']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE User</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Bạn có chắc chắn muốn xóa người dùng <?= $tloai[0]; ?> này không?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <a href="process_delete_category.php?admin=true&id=<?php echo $tloai['0']; ?>"><button type="button" class="btn btn-primary">Yes</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            <?php
                            } ?>
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