<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <!-- link w3school -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- link bootrap lastest5.2 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    
    <link rel="stylesheet" href="../assets/Icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/Icon/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Side Bar left start -->
            <div class="col-md-3 sidebar-left bg-body-tertiary">
                <div class="logo p-4">
                    <a href="index.php">
                        <img class="logo-img-1" src="../assets/img/logoWeb2.png" alt="">
                        <img class="logo-img-2" src="../assets/img/logoWeb.png" alt="">
                    </a>
                </div>
                <div class="navigation vh-100 ">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <!-- List Danh muc -->
                        <ul class="navbar-nav flex-column mx-4">
                            <!-- Li-1 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle category-item">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 230px;" data-bs-toggle="collapse" href="#userCollapse" role="button" aria-expanded="false" aria-controls="userCollapse">
                                            <i class="fa-regular fa-user" style="color: #FF6A59; font-size: 15px; margin-right: 20px"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">User</span>
                                            <span style="color: #FF6A59; font-size: 12px; margin-right: 28px" class="badge light badge-sm rounded-pill border badge-primary ms-2 mb-0">Modules</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="userCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="Users.php">Users</a></li>
                                        <li class="nav-item"><a class="nav-link" href="Groups.php">Groups</a></li>
                                        <li class="nav-item"><a class="nav-link" href="Permissions.php">Permissions</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-2 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#aboutCollapse" role="button" aria-expanded="false" aria-controls="aboutCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-solid fa-box-open"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">CMS</span>
                                            <span style="color: #FF6A59; font-size: 12px; margin-right: 28px" class="badge light badge-sm rounded-pill border badge-primary ms-2 mb-0">Modules</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="aboutCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Page</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Comment</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Menu Setup</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Subscribers</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Contract Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-3 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#configCollapse" role="button" aria-expanded="false" aria-controls="configCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-solid fa-gear"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Config</span>
                                            <span style="color: #FF6A59; font-size: 12px; margin-right: 28px" class="badge light badge-sm rounded-pill border badge-primary ms-2 mb-0">Modules</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="configCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Site</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Reading</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Social</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Widget</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Theme</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Button</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-4 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#dashboardCollapse" role="button" aria-expanded="false" aria-controls="dashboardCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-solid fa-table-columns"></i>
                                            <span style="color: #788090; text-align:left; font-size: 16px; margin-right: auto">Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="dashboardCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Dashboard Light</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Dashboard Dark</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Schedule</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Instructors</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Message</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Activity</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-5 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style=" font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#coursesCollapse" role="button" aria-expanded="false" aria-controls="coursesCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-solid fa-book-open"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Courses</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="coursesCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">HTML & CSS</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">PHP</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Javascript</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">NodeJs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Bootstrap</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-6 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#instructorCollapse" role="button" aria-expanded="false" aria-controls="instructorCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-solid fa-user-group"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Instructor</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="instructorCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Schedule</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Students</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Resources</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Transactions</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-7 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#appCollapse" role="button" aria-expanded="false" aria-controls="appCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-solid fa-circle-info"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Apps</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="appCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Profiles</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Post Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Email</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Calender</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-8 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#chartCollapse" role="button" aria-expanded="false" aria-controls="chartCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-solid fa-chart-pie"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Charts</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="chartCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Flot</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Moris</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Chartis</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Peity</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-9 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#bootstrapCollapse" role="button" aria-expanded="false" aria-controls="bootstrapCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-regular fa-star"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Bootstrap</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="bootstrapCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Form</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Input group</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Button</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Dropdown</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Flex</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-10 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#pluginCollapse" role="button" aria-expanded="false" aria-controls="pluginCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-regular fa-heart"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Plugins</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="pluginCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Select</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Nested</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Toast</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Slider</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-11 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#widgetCollapse" role="button" aria-expanded="false" aria-controls="widgetCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-solid fa-gear"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Widget</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="widgetCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Widget 1</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Widget 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Widget 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-12 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#formCollapse" role="button" aria-expanded="false" aria-controls="formCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-regular fa-note-sticky"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Forms</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="formCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Forms Element</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Forms Validate</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Wizard</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Editor</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Picker</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-13 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#tableCollapse" role="button" aria-expanded="false" aria-controls="tableCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-solid fa-file-excel"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Tables</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="tableCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Datatable</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Bootstrap</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Table Form</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Li-14 -->
                            <div class="menu-sidebar">
                                <ul class="list-unstyled bigmenu">
                                    <li class="li-circle">
                                        <a class="btn dropdown-toggle d-flex justify-content-between align-items-center" style="font-size: 20px; margin: 8px 0; width: 100%;" data-bs-toggle="collapse" href="#pageCollapse" role="button" aria-expanded="false" aria-controls="pageCollapse">
                                            <i style="color: #FF6A59; font-size: 15px; margin-right: 20px" class="fa-regular fa-file-lines"></i>
                                            <span style="color: #788090; font-size: 16px; margin-right: auto">Pages</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="collapse" id="pageCollapse">
                                    <ul class="list-unstyled">
                                        <li class="nav-item"><a class="nav-link" href="#">Error</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Lock screen</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Empty Pages</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Copy right -->
                            <div class="copyright mt-3">
                                <p style="text-align:center; font-size: 14px; color: gray">Made with <span><i class="fa-solid fa-heart"></i></span> by DexignZone</p>
                            </div>
                        </ul>
                        <!-- List Danh muc -->
                    </nav>
                </div>
            </div>
            <!-- Side Bar left end -->

            <!-- Main start -->
            <div class="col-md-9 main">
                <!-- Header start -->
                <div class="header d-flex justify-content-between mb-5">
                    <i class="bi bi-list fs-1"></i>
                    <span class="h1 mt-2">W3CMS</span>
                    <div class="main-content p-3">
                        <form action="">
                            <div class="input-group flex-nowrap">
                                <a href="#" class="input-group-text" style="text-decoration: none;" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></a>
                                <input type="text" class="form-control" placeholder="Search here" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Header end -->