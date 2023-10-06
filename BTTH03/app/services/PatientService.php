<?php
require_once APP_ROOT.'/app/models/Patient.php';

class PatientService {
    // Lay DS
    public function getAllPatients() {
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM patient ORDER BY id DESC;";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            //Buoc 3: Xu ly ket qua
            $patients = [];
            while ($row = $stmt->fetch()){
                $patient = new Patient(
                    $row['id'],
                    $row['namePatient'],
                    $row['dayHeal'],
                    $row['symptom'],
                    $row['idDoctor']);
                $patients[] = $patient;
            }

            return $patients;
        }else{
            return $patients = [];
        }

    }


    public function addPatient($namePatient, $dayHeal, $symptom, $idDoctor){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM doctor WHERE id = '$idDoctor'; ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount()<= 0){
                return false;
            }

            $sql = "SELECT * FROM patient;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xử lý kết quả
            $rowCount = $stmt->rowCount();

            for ($i=1; $i<=$rowCount; $i++) {
                $sql = "SELECT * FROM patient WHERE id = '$i'; ";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                if ($stmt->rowCount()<= 0){
                    break;
                }
            }

            $sql = "INSERT INTO patient (id, namePatient, dayHeal, symptom, idDoctor) 
            VALUES ('$i', '$namePatient', '$dayHeal', '$symptom', '$idDoctor');";
            $stmt = $conn->prepare($sql);
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else {
                return false;
            }

        }else{
            return false;
        }
        
    }

    // Sua
    public function getByPatientId($id){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM patient WHERE id = '$id'; ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            $row = $stmt->fetchAll();
            $patient = new Patient(
                $row[0]['id'],
                $row[0]['namePatient'],
                $row[0]['dayHeal'],
                $row[0]['symptom'],
                $row[0]['idDoctor']);
            return $patient;
        }else{
            return null;
        }
    }

    public function editPatient($id, $namePatient, $dayHeal, $symptom, $idDoctor){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM doctor WHERE id = '$idDoctor'; ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount()<= 0){
                return false;
            }

            //Buoc 3: Xử lý kết quả

            $sql = "UPDATE patient 
                    SET namePatient = '$namePatient', dayHeal = '$dayHeal', 
                    symptom = '$symptom', idDoctor = '$idDoctor'
                    WHERE id = '$id';";

            $stmt = $conn->prepare($sql);
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }

    // Xoa 
    public function deletePatient($id){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "DELETE FROM patient WHERE id = '$id'";
            $stmt = $conn->prepare($sql);
            $result = $stmt->execute();

            //Buoc 3: Xử lý kết quả
            
            if ($result) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
}


?>