<?php
require_once APP_ROOT.'/app/models/Doctor.php';

class DoctorService {
    // Lấy DS bacsi
    public function getAllDoctors() {
        // B1: Ket noi Database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM doctor ORDER BY id DESC;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            //Buoc 3: Xu ly ket qua
            $Doctors = [];
            while ($row = $stmt->fetch()){
                $Doctor = new Doctor($row['id'], $row['nameDoctor'], $row['department']);
                $Doctors[] = $Doctor;
            }

            return $Doctors;

        } else {
            return $Doctors = [];
        }

    }

    // Them BS
    public function addDoctor($nameDoctor, $department){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM doctor;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xử lý kết quả
            $rowCount = $stmt->rowCount();

            for ($i=1; $i<=$rowCount; $i++) {
                $sql = "SELECT * FROM doctor WHERE id = '$i';";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                if ($stmt->rowCount()<=0){
                    break;
                }
            }

            $sql = "INSERT INTO doctor (id, nameDoctor, department) VALUES ('$i','$nameDoctor', '$department');";
            $stmt = $conn->prepare($sql);
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
        
    }

    // Sua BS
    public function getByDoctorId($id){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM doctor WHERE id = '$id'; ";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            $row = $stmt->fetchAll();

            $Doctor = new Doctor($row[0]['id'], $row[0]['nameDoctor'], $row[0]['department']);

            return $Doctor;
        } else {
            return null;
        }
        
    }

    public function editDoctor($id, $nameDoctor, $department){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "UPDATE doctor SET nameDoctor = '$nameDoctor', department = '$department' WHERE id = '$id'";

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

    // Xoa BS
    public function deleteDoctor($id){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "DELETE FROM doctor WHERE id = '$id' ";
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