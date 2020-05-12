<?php 

require_once ("class/DBcontroller.php");

class Student {
    private $db_handle;

    function __construct()
    {
        $this->db_handle = new DBcontroller();
    }

    function getAllStudent() {
        $query = "SELECT * FROM `tbl_student` ORDER BY `id`";
        $result = $this->db_handle->runBaseQuery($query);

        return $result;
    }

    function deleteStudent($student_id){
        $query = "DELETE FROM `tbl_student` WHERE `id`= ? ";

        $paramType = "i";
        $paramValue = array($student_id);

        $this->db_handle->update($query,$paramType,$paramValue);
    }
}

?>