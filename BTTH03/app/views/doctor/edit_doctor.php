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
        <div class="m-5 text-center">
            <div class="mx-5">
                <form action="?controller=doctor&action=process_edit" method="post">
                    <h2 class="mb-4">SỬA THÔNG TIN BÁC SỸ</h2>
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text ms-5" id="addon-wrapping">Mã bác sỹ</span>
                        <input type="text" class="form-control bg-warning me-5" aria-label="id" aria-describedby="addon-wrapping" name="id" value="<?php echo $doctor->getId(); ?>" readonly>
                    </div>
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text ms-5" id="addon-wrapping">Tên bác sỹ</span>
                        <input type="text" class="form-control me-5" aria-label="nameDoctor" aria-describedby="addon-wrapping" name="nameDoctor" value="<?php echo $doctor->getNameDoctor(); ?>">
                    </div>
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text ms-5" id="addon-wrapping">Chuyên khoa</span>
                        <input type="text" class="form-control me-5" aria-label="department" aria-describedby="addon-wrapping" name="department" value="<?php echo $doctor->getDepartment(); ?>">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end me-5">
                        <button type="submit" name="sbmSave" class="btn btn-success px-4 m-0">Lưu lại</button>
                        <a href="?controller=doctor&action=index">
                            <button type="button" class="btn btn-warning px-4 m-0">Quay lại</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>