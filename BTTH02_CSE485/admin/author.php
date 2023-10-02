<?php
try {
    //Buoc 1: Mo ket noi
    $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
    //Buoc 2: Thuc hien truy van
    $sql = "SELECT * FROM tacgia;";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //Buoc 3: Xu ly ket qua
    $tgias = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
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


    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="add_author.php">
                    <button type="button" class="btn btn-success">Thêm mới tác giả</button>
                </a>
                <table class="table mt-3">
                    <theads>
                        <tr>
                            <th scope="col">Mã tác giả</th>
                            <th scope="col">Tên tác giả</th>
                            <th scope="col">Hình tác giả</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xoá</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($tgias as $tgia) {
                            ?>
                                <tr>
                                    <th style="font-size: 14px" scope="row"> <?php echo $tgia['ma_tgia']; ?></th>
                                    <td style="font-size: 14px"><?php echo $tgia['ten_tgia']; ?></td>
                                    <td style="font-size: 14px"><?php echo $tgia['hinh_tgia']; ?></td>
                                    <td style="font-size: 14px">
                                        <a class="fs-5 text-primary" href="edit_author.php?id=<?php echo $tgia['ma_tgia']; ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                    <td style="font-size: 14px">
                                        <a class="fs-5 text-danger user-delete-link" href="" data-bs-toggle="modal" data-bs-target="#modal<?php echo $tgia['ma_tgia']; ?>">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal<?php echo $tgia['ma_tgia']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE Author</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Bạn có chắc chắn muốn xóa người dùng <?php echo $tgia['ma_tgia']; ?> này không?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <a href="../post/process_delete_author.php?id=<?php echo $tgia['ma_tgia']; ?>"><button type="button" class="btn btn-primary">Yes</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            <?php } ?>
                        </tbody>
                </table>
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