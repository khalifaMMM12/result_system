<?php
if(isset($_POST['submit']))
{
include('dbcon.php');
    $regno=$_POST['regno'];
    $english1=$_POST['english1'];
    $math1=$_POST['math1'];
    $physics1=$_POST['physics1'];
    $chemistry1=$_POST['chemistry1'];
    $english2=$_POST['english2'];
    $math2=$_POST['math2'];
    $physics2=$_POST['physics2'];
    $chemistry2=$_POST['chemistry2'];
    
    $sql="UPDATE `user_mark` SET  `u_english1` = '$english1', `u_math1` = '$math1', `u_physics1` = '$physics1', `u_chemistry1` = '$chemistry1', `u_english2` = '$english2', `u_math2` = '$math2', `u_physics2` = '$physics2', `u_chemistry` = '$chemistry2' WHERE `u_regno` = '$regno'";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Updated  Succesfully');
        window.open('updatemark_form.php?sid=<?php echo $regno; ?>', '_self');
             </script>
       
       
        <?php
    }
    else
    {
        echo "Error";
    }
}
?>