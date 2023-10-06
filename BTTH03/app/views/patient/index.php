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
        include_once(APP_ROOT . '/app/views/layout/header.php')
        ?>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="?controller=patient&action=add_patient">
                        <button type="button" class="btn btn-success my-4">Thêm mới bệnh nhân</button>
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã bệnh nhân</th>
                                <th scope="col">Tên bệnh nhân</th>
                                <th scope="col">Ngày khám</th>
                                <th scope="col">Triệu chứng</th>
                                <th scope="col">Mã bác sỹ</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($patients as $patient) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $patient->getId(); ?></th>
                                    <td><?php echo $patient->getNamePatient(); ?></td>
                                    <td><?php echo $patient->getDayHeal(); ?></td>
                                    <td><?php echo $patient->getSymptom(); ?></td>
                                    <td><?php echo $patient->getIdDoctor(); ?></td>
                                    <td>
                                        <a class="fs-4 color-primary" href="?controller=patient&action=edit_patient&idSelect=<?php echo $patient->getId(); ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="fs-4 color-primary user-delete-link" href="" data-bs-toggle="modal" data-bs-target="#modal<?php echo $patient->getId(); ?>">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal<?php echo $patient->getId(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Bạn có chắc chắn muốn xóa bệnh nhân có mã bệnh nhân: <?php echo $patient->getId(); ?>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <a href="?controller=patient&action=delete_patient&idSelect=<?php echo $patient->getId(); ?>">
                                                        <button type="button" class="btn btn-primary">Yes</button>  
                                                    </a>
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
    </section>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>