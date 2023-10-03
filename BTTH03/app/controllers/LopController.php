<?php
require_once APP_ROOT.'/app/services/LopService.php';

class LopController {
    public function index() {
        // Gọi dữ liệu từ LopService
        $lopService = new LopService();
        $lops = $lopService->getAllLops();

        // Để render dữ liệu lấy được in ra HomePage trong view->home->index.php
        include APP_ROOT.'/app/views/Lop/index.php';
    }
}

?>