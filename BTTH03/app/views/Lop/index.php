<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lớp học</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->
</head>

<body>
    <header>
        <?php
            include_once (APP_ROOT.'/app/layout/header.php')
        ?>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="<?php echo DOMAIN.'app/views/Lop/add_lop.php'; ?>">
                        <button type="button" class="btn btn-success my-4">Thêm mới Lớp</button>
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên lớp</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($lops as $lop) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $lop->getId(); ?></th>
                                    <td><?php echo $lop->getTenLop(); ?></td>
                                    <td>
                                        <a class="fs-4 color-primary" href="<?php echo DOMAIN.'app/views/Lop/edit_lop.php?ma_lop='.$lop->getId() ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="fs-4 color-primary user-delete-link" href="<?php echo DOMAIN.'app/views/Lop/delete_lop.php?ma_lop='.$lop->getId() ?>" data-bs-toggle="modal" data-bs-target="#modal">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>