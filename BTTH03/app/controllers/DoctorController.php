<?php
require_once APP_ROOT.'/app/services/DoctorService.php';

class DoctorController {
    // View BS
    public function index() {
        // Gọi dữ liệu từ Class1tService
        $doctorService = new DoctorService();
        $doctors = $doctorService->getAllDoctors();

        include APP_ROOT.'/app/views/doctor/index.php';
    }

     // View Them
    public function add_doctor(){
        include APP_ROOT.'/app/views/doctor/add_doctor.php';
    }

    public function process_add(){
        
        if(isset($_POST['sbmSave'])){

            $nameDoctor = $_POST['nameDoctor'];
            $department = $_POST['department'];

            $doctorService = new DoctorService();
            $check = $doctorService->addDoctor($nameDoctor, $department);
    
            if ($check){
                $this->index();
            } else {
                $this->add_doctor();
            }
        }
    }

    // View Sua
    public function edit_doctor(){

        $id = isset($_GET['idSelect'])? $_GET['idSelect'] : null;

        $doctorService = new DoctorService();
        $doctor = $doctorService->getByDoctorId($id);

        include APP_ROOT.'/app/views/doctor/edit_doctor.php';
    }

    public function process_edit(){

        if(isset($_POST['sbmSave'])){

            $id = $_POST['id'];
            $nameDoctor = $_POST['nameDoctor'];
            $department = $_POST['department'];

            $doctorService = new DoctorService();
            $check = $doctorService->editDoctor($id, $nameDoctor, $department);

            if ($check){
                $this->index();
            } else {
                $this->edit_doctor();
            }
        }
    }

    // Xoa
    public function delete_doctor(){

        $id = isset($_GET['idSelect'])? $_GET['idSelect'] : null;

        $doctorService = new DoctorService();
        $doctorService->deleteDoctor($id);

        $this->index();
    }
}


?>