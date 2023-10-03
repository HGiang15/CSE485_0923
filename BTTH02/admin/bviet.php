<?php


try{
    //Buoc 1: Mo ket noi
    $conn = new PDO("mysql:host=localhost:3307;dbname=btth01_cse485", "root", "123");
    //Buoc 2: Thuc hien truy van
    $sql = "SELECT * FROM baiviet;";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //Buoc 3: Xu ly ket qua
    $baiviets = $stmt->fetchAll();

}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài viết</title>
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
                <a href="add_bviet.php">
                    <button type="button" class="btn btn-success">Thêm mới bài viết</button>
                </a>
                <table class="table mt-3">
                    <theads>
                        <tr>
                            <th scope="col">Mã bài viết</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Tên bài hát</th>
                            <th scope="col">Mã thể loại</th>
                            <th scope="col">Tóm tắt</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Mã tác giả</th>
                            <!-- <th scope="col">Ngày viết</th> -->
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xoá</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($baiviets as $baiviet) {
                        ?>
                            <tr>
                                <th scope="row"> <?php echo $baiviet['ma_bviet']; ?></th>
                                <td><?php echo $baiviet['tieude']; ?></td>
                                <td><?php echo $baiviet['ten_bhat']; ?></td>
                                <td><?php echo $baiviet['ma_tloai']; ?></td>
                                <td><?php echo $baiviet['tomtat']; ?></td>
                                <td><?php echo $baiviet['noidung']; ?></td>
                                <td><?php echo $baiviet['ma_tgia']; ?></td>
                                <?php //echo $baiviet['ngayviet']; ?>
                                <td><?php echo $baiviet['hinhanh']; ?></td>
                                <td>
                                    <a class="fs-5 text-primary" href="edit_bviet.php?id=<?php echo $baiviet['ma_bviet']; ?>">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="fs-5 text-danger user-delete-link" href="" data-bs-toggle="modal" data-bs-target="#modal<?php echo $baiviet['ma_bviet']; ?>">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="modal<?php echo $baiviet['ma_bviet']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE BÀI VIẾT</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có chắc chắn muốn xóa bài viết <?php echo $baiviet['ma_bviet']; ?> này không?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <a href="../post/process_delete_bviet.php?id=<?php echo $baiviet['ma_bviet']; ?>"><button type="button" class="btn btn-primary">Yes</button></a>
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