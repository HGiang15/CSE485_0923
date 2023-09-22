<?php
include_once 'layout/header.php';

// Phan trang
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

try{
    //Buoc 1: Mo ket noi
    $conn = new PDO("mysql:host=localhost:3307;dbname=cse", "root","123");
    //Buoc 2: Thuc hien truy van
    $n = 10 * ($page - 1);
    $sql = "SELECT * FROM users LIMIT 10 OFFSET $n";
    //    $conn->query($sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //Buoc 3: Xu ly ket qua
    $users = $stmt->fetchAll();
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}


// them du lieu ket noi
// B1: truy cap DB Server
// include_once 'libs/connect.php';

// // B2 Thuc hien truy van
// $n = 10 * ($page - 1);
// $sql = "SELECT * FROM users LIMIT 10 OFFSET $n";
// $result = mysqli_query($conn, $sql);

// // B3 Lay va xu li du lieu
// $users = mysqli_fetch_all($result);
?>

<!-- Filter start -->
<h4 style="text-align: center; color: red;">USERS</h4>
<div class="filter mb-3 p-4">
    <div class="row mb-4">
        <div class="col-6 ">
            <a href="#" class="text-warning h5 txt-link">Filter</a>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="#"><i class="fa-solid fa-circle-chevron-up text-warning icon_up-link"></i></a>
        </div>
    </div>
    <div class="row">
        <!-- username -->
        <div class="col-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
            </div>
        </div>
        <!-- mobile -->
        <div class="col-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Mobile" aria-label="Mobile">
            </div>
        </div>
        <!-- select group -->
        <div class="col-3">
            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Select Group</option>
                    <option value="1">Admin</option>
                    <option value="2">Manager</option>
                    <option value="3">Customer</option>
                </select>
            </div>
        </div>
        <!-- filter and clear -->
        <div class="col-3">
            <div class="row">
                <div class="col-6">
                    <a href="#" type="submit" class="btn btn-warning w-100">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="h6">Filter</span>
                    </a>
                </div>
                <div class="col-6">
                    <a href="#" type="submit" class="btn btn-warning w-100">
                        <span class="h6">Clear</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Filter end -->

<!-- Btn add user and delete start -->
<div class="btn-add mb-3 p-4">
    <div class="row">
        <div class="col-6">
            <span class="text-warning h5 txt-link">Users</span>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-12" style="margin-left: 200px;">
                    <a href="process_user_deleteAll.php" type="submit" class="btn btn-warning">
                        <span class="h6">Delete</span>
                    </a>
                    <a href="user_add.php" type="submit" class="btn btn-warning">
                        <span class="h6">ADD USER</span>
                        <span class=""><i class="fa-solid fa-plus "></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Btn add user and delete end -->

<!-- Table user start -->
<div class="table-user">
    <div class="row">
        <div class="col-12">
            <?php
            if (isset($_GET['success'])) {
                $id = $_GET['success'];
                echo "<h2 class='text-danger'>The user have id: $id deleted successfully !</h2>";
            }
            ?>
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

                        <th class="text-warning" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $user) {
                    ?>
                        <tr>
                            <th style="font-size: 14px" scope="row"><?= $user['0'] ?></th>
                            <td style="font-size: 14px"><?= $user['1'] ?></td>
                            <td style="font-size: 14px" class="fw-bold"><?= $user['2'] ?></td>
                            <td style="font-size: 14px"><?= $user['3'] ?></td>
                            <td style="font-size: 14px"><?= $user['4'] ?></td>
                            <td style="font-size: 14px"><?= $user['5'] ?></td>
                            <td style="font-size: 14px"><?= $user['6'] ?></td>

                            <td>
                                <a style="padding: 1px 3px" href="user_detail.php?id=<?= $user['0'] ?>" class="btn btn-secondary"><i class="fa-solid fa-shield-halved" style="font-size: 16px;"></i></a>
                                <a style="padding: 1px 3px" href="user_edit.php?id=<?= $user['0'] ?>" class="btn btn-primary"><i class="fa-solid fa-pen" style="font-size: 16px;"></i></a>
                                <!-- C1 hiển thị confirm xóa JS -->
                                <!-- <form action="process_user_remove.php" method="post" style="display: inline;">
                                    <input type="hidden" name="idUser" value="<?php //$user['0'] 
                                                                                ?>">
                                    <button style="padding: 1px 3px" type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">
                                        <i class="fa-solid fa-trash" style="font-size: 16px;"></i>
                                    </button>
                                </form> -->
                                <!-- C2 Hiển thị confirm xóa bootstrap -->
                                <a style="padding: 1px 3px" class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#<?= $user[0]; ?>">
                                    <i class="fa-solid fa-trash" style="font-size: 16px;"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $user[0]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE User</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-dark">
                                                Are you sure you want to delete this user: <?= $user[0]; ?>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <a href="process_user_remove.php?id=<?= $user[0]; ?>" class="btn btn-success">OK</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Table user end -->

<!-- pagination start -->
<div class="paginationn">
    <div class="row">
        <div class="col-2">
            <span>Page 1 of 3</span>
        </div>
        <div class="col-7"></div>
        <div class="col-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a style="background-color: #FF6A59; border-color: #FF6A59;" class="page-link" href="#" aria-label="Previous">
                            <span class="text-white" aria-hidden="true">
                                <</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link text-dark mx-2" href="Users.php?page=1">1</a></li>
                    <li class="page-item"><a class="page-link text-dark mx-2" href="Users.php?page=2">2</a></li>
                    <li class="page-item"><a class="page-link text-dark mx-2" href="Users.php?page=3">3</a></li>
                    <li class="page-item">
                        <a style="background-color: #FF6A59; border-color: #FF6A59;" class="page-link" href="#" aria-label="Next">
                            <span class="text-white" aria-hidden="true">></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- pagination end -->

<?php
include_once 'layout/footer.php';
?>