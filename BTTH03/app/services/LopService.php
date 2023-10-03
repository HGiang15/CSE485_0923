<?php
require_once APP_ROOT.'/app/models/Lop.php';

class LopService {
    public function getAllLops() {
        try {
            //Buoc 1: Mo ket noi
            $conn = new PDO("mysql:host=localhost:3307;dbname=quanlysinhvien", "root", "123");
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM lop ORDER BY id DESC;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            //Buoc 3: Xu ly ket qua
            $Lops = [];
            while ($row = $stmt->fetch()){
                $Lop = new Lop($row['id'], $row['tenLop']);
                $Lops[] = $Lop; // them lop vao mang rong
            }

            return $Lops; // tra ve ds lop
        } catch (PDOException $e) {
            return $Lops = [];
        }
    }


}

?>