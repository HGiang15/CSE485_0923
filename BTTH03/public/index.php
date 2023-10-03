<?php
require_once ('../app/config/config.php');

// require_once APP_ROOT.'/app/controllers/LopController.php';

// $lopController = new LopController();
// $lopController->index();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'lop';
$action     = isset($_GET['action']) ? $_GET['action'] : 'index';

// $controller = ucfirst($controller);

// $controller = $controller."Controller";
// $path = "controllers/".$controller.".php"; //HomeController > controllers/HomeController.php


if ($controller == 'lop') {
    require_once APP_ROOT.'/app/controllers/LopController.php';
    $lopController = new LopController();
    $lopController->index();
} else if ($controller == 'sinhvien') {
    require_once APP_ROOT.'/app/controllers/SinhvienController.php';
    // $SinhvienController = new SinhvienController();
    // $SinhvienController->index();
} else {
    echo "Ko tồn tại URL";
}


?>