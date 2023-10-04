<?php
require_once APP_ROOT.'/app/models/Student.php';

class StudentService {
    public function getAllStudents() {
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM student;";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            //Buoc 3: Xu ly ket qua
            $students = [];
            while ($row = $stmt->fetch()){
                $student = new Student(
                    $row['id'],
                    $row['nameStudent'],
                    $row['email'],
                    $row['dateOfBirth'],
                    $row['idClass1']);
                $students[] = $student;
            }

            return $students;
        }else{
            return $students = [];
        }

    }
}

?>