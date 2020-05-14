<?php 

require_once "web/header.php";

?>

<form name="frmAdd" method="POST" action="" id="frmAdd">

    <div>
    
        <input type="text" name="name" placeholder="Enter name" required> <br>
        <input type="text" name="roll_number" placeholder="Enter Roll No" required><br>
        <input type="date" name="Dob" placeholder="Enter Date of birth" required><br>
        <input type="text" name="class" placeholder="Class" required><br>

        <input type="submit" name="add" value="Add">
    
    </div>


</form>