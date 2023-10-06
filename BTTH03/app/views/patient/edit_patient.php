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
                <form action="?controller=patient&action=process_edit" method="post">
                    <h2 class="mb-4">SỬA THÔNG TIN BỆNH NHÂN</h2>
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text ms-5" id="addon-wrapping">Mã bệnh nhân</span>
                        <input type="text" class="form-control me-5 bg-warning" aria-label="id" aria-describedby="addon-wrapping" name="id" value="<?php echo $patient->getId(); ?>" readonly>
                    </div>
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text ms-5" id="addon-wrapping">Tên bệnh nhân</span>
                        <input type="text" class="form-control me-5" aria-label="namePatient" aria-describedby="addon-wrapping" name="namePatient" value="<?php echo $patient->getNamePatient(); ?>">
                    </div>
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text ms-5" id="addon-wrapping">Ngày khám</span>
                        <input type="date" class="form-control me-5" aria-label="dayHeal" aria-describedby="addon-wrapping" name="dayHeal" value="<?php echo $patient->getDayHeal(); ?>">
                    </div>
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text ms-5" id="addon-wrapping">Triệu chứng</span>
                        <input type="text" class="form-control me-5" aria-label="symptom" aria-describedby="addon-wrapping" name="symptom" value="<?php echo $patient->getSymptom(); ?>">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text ms-5" for="inputGroupSelect01">Mã bác sỹ</label>
                        <select class="form-select me-5" id="inputGroupSelect01" name="idDoctor" value="<?php echo $patient->getIdDoctor(); ?>">
                            <?php
                            foreach ($doctors as $doctor) {
                            ?>
                                <?php if ($patient->getIdDoctor() == $doctor->getId()) { ?>
                                    <option selected>
                                        <?php echo $doctor->getNameDoctor(); ?>
                                    </option>
                                <?php } else { ?>
                                    <option value="<?php echo $doctor->getId(); ?>">
                                        <?php echo $doctor->getNameDoctor(); ?>
                                    </option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end me-5">
                        <button type="submit" name="sbmSave" class="btn btn-success px-4 m-0">Lưu lại</button>
                        <a href="?controller=patient&action=index">
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