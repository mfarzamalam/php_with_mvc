<?php require_once "web/header.php" ?>

<form name="frmAdd" action="" method="POST">

    <div>
        <input type="text" name="name" value="<?php echo $result[0]["name"] ?>"> <br>
        <input type="text" name="roll_number" value="<?php echo $result[0]["roll_number"] ?>"><br>
        <input type="date" name="Dob" value="<?php echo $result[0]["dob"] ?>"><br>
        <input type="text" name="class" value="<?php echo $result[0]["class"] ?>"><br>

        <input type="submit" name="add" value="Save">
    </div>

</form>