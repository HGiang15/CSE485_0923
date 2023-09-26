<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS Users</title>
    <link rel="stylesheet" href="layout/header.php">
    <link rel="stylesheet" href="../assets/Icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/Icon/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Side Bar left start -->
            <div class="col-md-3 sidebar-left bg-body-tertiary">
                <?php include_once 'layout/sidebar.php'; ?>
            </div>
            <!-- Side Bar left end -->

            <!-- Main start -->
            <div class="col-md-9 main">
                <?php include_once 'layout/header.php'; ?>

                <h4 style="text-align: center; color: red;">PERMISSIONS</h4>
                <div class="permission mb-3 p-4">
                    <div class="row">
                        <div class="col-12">
                            <span class="text-warning h5 txt-link">Permissions</span>
                        </div>
                    </div>
                </div>

                <!-- Table permissions start -->
                <div class="table-permissions">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-dark border-0 rounded">
                                <thead>
                                    <tr>
                                        <th class="text-warning" scope="col">Name</th>
                                        <th class="text-warning" scope="col">Code Name</th>
                                        <th class="text-warning" scope="col">Content Type</th>
                                        <th class="text-warning" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i <= 6; $i++) {
                                    ?>
                                        <tr>
                                            <th scope="row">Can add log entry</th>
                                            <td>
                                                <span>add_logentry</span>
                                            </td>
                                            <td>
                                                <span>admin | logentry</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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
                <!-- Table permissions end -->

                <!-- pagination start -->
                <div class="paginationn">
                    <div class="row">
                        <div class="col-2">
                            <span>Page 1 of 12</span>
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
                                    <li class="page-item"><a class="page-link text-dark mx-2" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link text-dark mx-2" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link text-dark mx-2" href="#">3</a></li>
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



                <!-- footer start -->
                <footer>
                    <br><br><br><br><br>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <span>Copyright @ 2023 Designed by Hoang Giang</span>
                        </div>
                    </div>
                </footer>
                <!-- footer end -->
            </div>
            <!-- Main end -->
        </div>
    </div>
    <!-- Dropdown -->
    <script src="../assets/Icon/bundle.min_v5.3.1.js"></script>

    <!-- link bootrap lastest5.2 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
    <!-- link w3school -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- <script src="../assets/Icon/bundle_bootstrap_4.5.2_js_bootstrap.min.js"></script>    -->
</body>

</html>