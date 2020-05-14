<?php require_once "web/header.php" ; ?>
<style>

</style>

<div style="margin-top: 30px;">
    <a href="index.php?action=student-add">Add Student</a>
    <table>
            <tr>
                <th>Student Name</th>
                <th>Roll Number</th>
                <th>Date of birth</th>
                <th><strong>Class</strong></th>
                <th><strong>Action</strong></th>
            </tr>

            <?php 
                if(!empty($result)){

                    foreach($result as $k => $v) {
            ?>

            <tr>
                <td><?php echo $result[$k]["name"]; ?></td>
                <td><?php echo $result[$k]["roll_number"]; ?></td>
                <td><?php echo $result[$k]["dob"]; ?></td>
                <td><?php echo $result[$k]["class"]; ?></td>
                <td>
                    <a href="index.php?action=student-edit&?id=<?php $result[$k]["id"] ?>">Edit - </a>
                    <a href="index.php?action=student-delete&?id=<?php $result[$k]["id"]?>" onclick="return del(); ">Delete</a>
                </td>
            </tr>
                    <?php } } ?>

    </table>
</div>


<script type="text/javascript">
    function del() {
        var ans=confirm("Are you sure you want to delete ? ");

        if(ans==true){
            return true;
        }
        else {
            return false;
        }

        return false;
    }
</script>