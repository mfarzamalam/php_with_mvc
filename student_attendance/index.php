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
        // case "attendance":
        //     $attendance = new Attendance();
        //     $result = $attendance->getAllAttendace();
        //     require_once "web/attendance.php";
        //         break;
        

        case "student-delete":
            $student_id = $_GET['id'];
            $student = new Student();
            $student->deleteStudent($student_id);
            $result = $student->getAllStudent();
            require_once "web/student.php";
                break;


        case "student-add";
            if(isset($_POST['add'])){
                $name = $_POST['name'];
                $roll_number = $_POST['roll_number'];
                $dob="";
                if($_POST["dob"]){
                    $dob_timestamp = strtotime($_POST["dob"]);
                    $dob = date("Y-m-d",$dob_timestamp);
                }

                $class = $_POST['class'];
                $student = new Student();
                $insertId = $student->addStudent($name,$roll_number,$dob,$class);

                if(empty($insertId)){
                    $response = array(
                            "message" => "Problem in adding new record",
                            "type" => "error",
                    );
                } else {
                    header("location:index.php"); 
                }
            }
                require_once "web/student-add.php";
                break;

        
        case "student-edit";
                $student_id = $_GET['id'];
                $student = new Student();

                if(isset($_POST['add'])){
                    $name = $_POST['name'];
                    $roll_number = $_POST['roll_number'];
                    $dob = "";

                    if($_POST["dob"]){
                        $dob_timestamp = strtotime($_POST["dob"]);
                        $dob = date("Y-m-d",$dob_timestamp);
                    }
    
                    $class = $_POST['class'];
                    
                    $student->editStudent($name,$roll_number,$dob,$class,$student_id);

                    header("location:index.php");

                    $result = $student->getStudentById($student_id);
                    require_once "web/student-edit.php";
                        break;
                }


        default: 
            $student = new Student();
            $result = $student->getAllStudent();
            require_once "web/student.php";
                break;
    }
?>