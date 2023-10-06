<?php
require_once APP_ROOT.'/app/services/PatientService.php';
require_once APP_ROOT.'/app/services/DoctorService.php';

class PatientController {
    // DS
    public function index() {
        // Gọi dữ liệu từ Class1tService
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();

        include APP_ROOT.'/app/views/patient/index.php';
    }

    // Them
    public function add_patient(){

        $doctorService = new DoctorService();
        $doctors = $doctorService->getAllDoctors();

        include APP_ROOT.'/app/views/patient/add_patient.php';
    }

    public function process_add(){

        if(isset($_POST['sbmSave'])){

            $namePatient = $_POST['namePatient'];
            $dayHeal = $_POST['dayHeal'];
            $symptom = $_POST['symptom'];
            $idDoctor = $_POST['idDoctor'];

            $patientService = new PatientService();
            $check = $patientService->addPatient($namePatient, $dayHeal, $symptom, $idDoctor);

            if ($check){
                $this->index();
            } else {
                $this->add_patient();
            }
        }
    }

    // Sua
    public function edit_patient(){

        $id = isset($_GET['idSelect'])? $_GET['idSelect'] : null;

        $patientService = new PatientService();
        $patient = $patientService->getByPatientId($id);

        $doctorService = new DoctorService();
        $doctors = $doctorService->getAllDoctors();

        include APP_ROOT.'/app/views/patient/edit_patient.php';
    }

    public function process_edit(){

        if(isset($_POST['sbmSave'])){

            $id = $_POST['id'];
            $namePatient = $_POST['namePatient'];
            $dayHeal = $_POST['dayHeal'];
            $symptom = $_POST['symptom'];
            $idDoctor = $_POST['idDoctor'];

            $patientService = new PatientService();
            $check = $patientService->editPatient($id, $namePatient, $dayHeal, $symptom, $idDoctor);

            if ($check){
                $this->index();
            } else {
                $this->edit_patient();
            }
        }
    }

    // Xoa
    public function delete_patient(){

        $id = isset($_GET['idSelect']) ? $_GET['idSelect'] : null;

        $patientService = new PatientService();
        $check = $patientService->deletePatient($id);

        $this->index();
    }

}



?>