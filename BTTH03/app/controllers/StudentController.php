<?php
require_once APP_ROOT.'/app/services/StudentService.php';

class StudentController {
    public function index() {
        // Gọi dữ liệu từ Class1tService
        $studentService = new StudentService();
        $students = $studentService->getAllStudents();

        include APP_ROOT.'/app/views/student/index.php';
    }
}

?>