<?php 

class DBcontroller {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "crud_example";
    private $conn;

    function connectDB(){
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);

        return $conn;
    }

    function __construct()
    {
        $this->conn = $this->connectDB();
    }

    function runBaseQuery($query){
        $resultset = "";
        $result = $this->conn->query($query);

        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $resultset[] = $row;
            }
        }
        return $resultset;
    }

    function update($query,$param_type,$param_value_array){
        $sql = $this->conn->prepare($query);
        $this->bindQueryParams($sql,$param_type,$param_value_array);
        $sql->execute();
    }
}

?>