<?php 

require_once ("class/DBcontroller.php");
require_once ("class/Student.php");
require_once ("class/Attendance.php");

$db_handle = new DBcontroller();

$action = "";

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

    switch($action) {
        case "attendance":
            $attendance = new Attendance();
            $result = $attendance->getAllAttendace();
            require_once "web/attendance.php";
                break;
        

        case "student-delete":
            $student_id = $_GET['id'];
            $student = new Student();
            $student->deleteStudent($student_id);
            $result = $student->getAllStudent();
            require_once "web/student.php";
                break;

                
        default: 
            $student = new Student();
            $result = $student->getAllStudent();
            require_once "web/student.php";
                break;
    }
?>