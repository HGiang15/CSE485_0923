<?php
include_once 'layout/header.php';
// B1: Kết nối
include_once 'libs/connect.php';

// B2: Kiểm tra xem có tham số ID được truyền từ URL không
if (isset($_GET['id'])) {
    $idDetail = $_GET['id'];

    // B3: Tạo câu truy vấn SQL để lấy thông tin người dùng dựa trên ID
    $sql = "SELECT * FROM users WHERE userid='$idDetail'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    ?>
        <div class="table-user">
            <div class="row">
                <div class="col-12">
                    <div class="title bg-warning" style="border-radius: 10px;">
                        <h4 class="text-center">User Detail: <span class="fst-italic text-danger fs-4"><?= $user['username'] ?></span></h4>
                    </div>
                    <table class="table table-dark border-0 rounded">
                        <thead>
                            <tr>
                                <th class="text-warning" scope="col">ID</th>
                                <th class="text-warning" scope="col">Fullname</th>
                                <th class="text-warning" scope="col">Email</th>
                                <th class="text-warning" scope="col">Gender</th>
                                <th class="text-warning" scope="col">Group</th>
                                <th class="text-warning" scope="col">Mobile</th>
                                <th class="text-warning" scope="col">Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $user['id'] ?></th>
                                <td style="font-size: 14px"><?= $user['username'] ?></td>
                                <td style="font-size: 14px" class="fw-bold"><?= $user['email'] ?></td>
                                <td style="font-size: 14px" ><?= $user['gender'] ?></td>
                                <td style="font-size: 14px" ><?= $user['groupp'] ?></td>
                                <td style="font-size: 14px" ><?= $user['mobile'] ?></td>
                                <td style="font-size: 14px" ><?= $user['pass'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php
    } else {
        echo "Không tìm thấy người dùng.";
    }
} else {
    echo "ID người dùng không được cung cấp.";
}

// Đóng kết nối
mysqli_close($conn);

include_once 'layout/footer.php';
?>