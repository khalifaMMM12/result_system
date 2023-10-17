<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location:login.php');
				}
				
?>
<?php
include('dbcon.php');
$regno=$_GET['sid'];


$sql="SELECT * FROM `student_data` WHERE `u_regno`='$regno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);

$level=$row['u_level'];

$sql2="SELECT * FROM `user_mark` WHERE `u_level`='$level'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2);



?>
<html>
<head>
    <title>Update Mark Detail</title>
<link rel="stylesheet" href="css/editmark_form.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
              <li><a href="index.php"><b>HOME</b></a></li>
              <li><a href="admindash.php"><b>DASHBOARD</b></a></li>
                <li><a href="aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="contactus.php"><b>CONTACT</b></a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="update_mark_data.php">
              <table>
             <h4> 
                <tr>
                  <th>Student Name: </th>
                  <td><span class="span"><?php echo $row['u_name']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Level: </th>
                  <td><span class="span"><?php echo $row['u_level']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Reg No.: </th>
                  <td><span class="span"><?php echo $row['u_regno']; ?></span></td>
                </tr>
              </h4>
                  </table>
          <table class="table1">
              <span> <h2 class="h_3">First Exam (A)</h2></span>
             <tr>
                 <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td><input type='text' name='english1' value="<?php echo $data['u_english1']; ?>" class="th"/></td>
                 <td><input type='text' name='math1' value="<?php echo $data['u_math1']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Physics</th>   <th>Chemistry</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='physics1' value="<?php echo $data['u_physics1']; ?> " class="th" required/></td>
                 <td><input type='text' name='chemistry1' value="<?php echo $data['u_chemistry1']; ?> " class="th" required/></td>
                 
             </tr>
             
         </table>
          <span> <h2 class="h3">Second Exam(B)</h2> </span>
         <table class="table4">
             <tr>
                 <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td><input type='text' name='english2' value="<?php echo $data['u_english2']; ?> " class="th" required/></td>
                 <td><input type='text' name='math2' value="<?php echo $data['u_math2']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Physics</th>   <th>Chemistry</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='physics2' value="<?php echo $data['u_physics2']; ?> " class="th" required/></td>
                 <td><input type='text' name='chemistry2' value="<?php echo $data['u_chemistry2']; ?> " class="th" required/></td>
                 </tr>
             <tr>
             <td><input type="hidden" name="regno" value="<?php echo $row['u_regno']; ?>"/></td>
            </tr>
             <tr>
             <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>   
             </tr>
             
         </table>
         
       
       </form>
      </div>
    </header>
    
</body>
</html>