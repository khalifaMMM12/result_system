<?php

include('dbcon.php');
    $regno=$_REQUEST['sid']; 
    
    $sql1="DELETE FROM `user_mark` WHERE `u_regno`='$regno';";

    $sql2="DELETE FROM `student_data` WHERE `u_regno`='$regno';";
    $run=mysqli_query($con,$sql1);

    $run=mysqli_query($con,$sql2);
    if($run==true)
    {
        ?>
        <script>
        alert('Data mark Succesfully');
        window.open('deleteform.php?sid=<?php echo $regno; ?>', '_self');
        </script>
        <?php
    }

?>