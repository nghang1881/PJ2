<?php

class StudentController
{
    // static: gọi tới mà không cần khởi tạo đối tượng
    static function viewAll()
    {
        // Lấy dữ liệu từ model
        $student = new StudentModel();
        $listStudent = $student->getAllStudent();
        // Hiển thị cho người dùng
        require_once 'views/student/view-all.php';
    }

    static function viewUpdate()
    {
        $student = new StudentModel();
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $item = $student->getById($id);
        require_once 'views/student/update.php';
    }

    static function updateProcess()
    {
        // Nhận dữ liệu
        $id = isset($_POST["id-student"]) ? $_POST["id-student"] : null;
        $name = isset($_POST["name-student"]) ? $_POST["name-student"] : null;
        // Khởi tạo đối tượng
        $student = new StudentModel();
        $student->idStudent = $id;
        $student->nameStudent = $name;
        $student->dob = $name;
        $student->gender = $name;
        $student->update();
        header("Location: ?controller=student");
    }
}
// {}: block scope
