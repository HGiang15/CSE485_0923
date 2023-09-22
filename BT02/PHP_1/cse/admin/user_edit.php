<?php
include_once 'layout/header.php';
include_once 'libs/connect.php';

if (isset($_GET['id'])) {
    $userID = $_GET['id'];

    // Fetch the user's information from the database based on the user's ID
    $sql = "SELECT * FROM users WHERE userid='$userID'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
?>

<div class="row">
    <div class="col-12">
        <form class="p-5" style="background-color: #FFF0EE" action="process_user_edit.php?id=<?= $userID ?>" method="post">
            <h3 class="text-warning" style="text-align:center;">Edit User <span class="fst-italic text-danger fs-4"><?= $user['username'] ?></span></h3>
            <!-- Fullname -->
            <div class="col-md-6 mt-3">
                <label for="inputUsername" class="form-label">Fullname</label>
                <input type="text" name="user" class="form-control" id="inputUsername" placeholder="exam: Nguyen Dang Hoang Giang" value="<?= $user['username'] ?>">
            </div>
            <!-- Email -->
            <div class="col-md-6 mt-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="exam: giang@gmail.com" value="<?= $user['email'] ?>">
            </div>
            <div class="row mt-3">
                <!-- Gender -->
                <div class="col-md-2">
                    <label for="inputGender" class="form-label">Gender</label>
                    <select id="inputGender" name="gender" class="form-select">
                        <option value="Male" <?php if ($user['gender'] === 'Male') echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if ($user['gender'] === 'Female') echo 'selected'; ?>>Female</option>
                        <option value="Other" <?php if ($user['gender'] === 'Other') echo 'selected'; ?>>Other</option>
                    </select>
                </div>
                <!-- Group -->
                <div class="col-md-2">
                    <label for="inputGroup" class="form-label">Group</label>
                    <select id="inputGroup" name="groupp" class="form-select">
                        <option value="Admin" <?php if ($user['groupp'] === 'Admin') echo 'selected'; ?>>Admin</option>
                        <option value="Manager" <?php if ($user['groupp'] === 'Manager') echo 'selected'; ?>>Manager</option>
                        <option value="Customer" <?php if ($user['groupp'] === 'Customer') echo 'selected'; ?>>Customer</option>
                    </select>
                </div>
            </div>
            <!-- Mobile -->
            <div class="col-md-6 mt-3">
                <label for="inputMobile" class="form-label">Mobile</label>
                <input type="number" name="mobile" class="form-control" id="inputMobile" placeholder="exam: 0398162589" value="<?= $user['mobile'] ?>">
            </div>
            <!-- Password -->
            <div class="col-md-6 mt-3">
                <label for="inputPass" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="inputPass" value="<?= $user['pass'] ?>">
            </div>
            <div class="col-12 mt-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check all
                    </label>
                </div>
            </div>
            <div class="col-12  mt-3">
                <button onclick="return alert('Saved user successfully');" type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
</div>



<?php
} else {
    echo "User not found.";
}
} else {
echo "User ID not provided.";
}
include_once 'layout/footer.php';
?>