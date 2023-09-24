<?php
include_once 'layout/header.php';
?>

<div class="row ">
    <div class="col-12">
        <?php
        if (isset($_GET['error'])) {
            echo "<h4 class='p-3 text-danger fw-bold fst-italic' style='background-color:orange; border-radius: 10px;'>Add failed {$_GET['error']}, Fullname or Email already exists</h4>";
        }
        if (isset($_GET['sucessfull'])) {
            echo "<h4 class='p-3 text-white fst-italic fw-bold' style='background-color:green; border-radius: 10px;'>Added user successfully please comeback Users to check</h4>";
        }
        ?>
        <form class="p-5" style="background-color: #FFF0EE" action="process_user_add.php" method="post">
            <h2 class="text-warning">Enter Information</h2>
            <!-- Fullname -->
            <div class="col-md-6 mt-3">
                <label for="inputUsername" class="form-label">Fullname</label>
                <input type="text" name="user" class="form-control" id="inputUsername" placeholder="exam: Nguyen Dang Hoang Giang">
            </div>
            <!-- Email -->
            <div class="col-md-6 mt-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="exam: giang@gmail.com">
            </div>
            <div class="row mt-3">
                <!-- Gender -->
                <div class="col-md-2">
                    <label for="inputGender" class="form-label">Gender</label>
                    <select id="inputGender" name="gender" class="form-select">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <!-- Group -->
                <div class="col-md-2">
                    <label for="inputGroup" class="form-label">Group</label>
                    <select id="inputGroup" name="groupp" class="form-select">
                        <option>Admin</option>
                        <option>Manager</option>
                        <option>Customer</option>
                    </select>
                </div>
            </div>
            <!-- Mobile -->
            <div class="col-md-6 mt-3">
                <label for="inputMobile" class="form-label">Mobile</label>
                <input type="number" name="mobile" class="form-control" id="inputMobile" placeholder="exam: 0398162589">
            </div>

            <!-- Password -->
            <div class="col-md-6 mt-3">
                <label for="inputPass" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="inputPass">
            </div>
            <!-- Retype Password -->
            <div class="col-md-6 mt-3">
                <label for="inputPass2" class="form-label">Retype Password</label>
                <input type="password" name="pass2" class="form-control" id="inputPass2">
            </div>
            <div class="col-12 mt-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check all
                    </label>
                </div>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" name="sbmSave" class="btn btn-primary">ADD USER</button>
            </div>
        </form>
    </div>
</div>

<?php
include_once 'layout/footer.php';
?>