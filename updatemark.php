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
<html>
<head>
    <title>Update Record</title>
<link rel="stylesheet" href="css/updatemark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php"><b>HOME</b></a></li>
                <li class="logout"><a href="admindash.php"><b>DASHBOARD</b></a></li>
                <li><a href="aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="contactus.php"><b>CONTACT</b></a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="updatemark.php">
        <table class="table1">
            <h1 align="center">Search Student and Update Marks</h1>
            <tr align="left">
            <th>Enter Level : </th>
            <td><input type="text" name="level" class="box"/></td>
            
            <th>Student Reg No. : </th>
            <td><input type="text" name="regno" class="box"/></td>
                
            </tr>
            <tr align="left">
            <th><input type="submit" value="Search" name="submit" class="submit"/></th>
            </tr>

            </table>
         <table class="table2">
              <tr> 
                <th class="student_id">Id</th>
                <th class="student_class">Name</th>
                <th class="student_class">Level</th>
                <th class="student_class">Reg No</th>
                <th class="student_edit">Edit</th>
            </tr>
         <?php
            if(isset($_POST['submit']))
            {
                include('dbcon.php');
                $level=$_POST['level'];
                $regno=$_POST['regno'];
                
                $sql="SELECT * FROM `student_data` WHERE `u_level`='$level'  AND `u_regno`='$regno' ";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)<0)
                {
                     ?>
                     <script>
                     alert('No Record Found');
                     </script>
                    <?php
                }
                else
                {
                    
                 while($data=mysqli_fetch_assoc($run))  
                 {
                    
             ?>
                   <tr>
            <th class="student_class2"> <?php  echo $data['id'].'<br>'; ?></th>
            <th class="student_class2"> <?php  echo $data['u_name'].'<br>'; ?></th>  
            <th class="student_class2"> <?php  echo $data['u_level'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['u_regno'].'<br>'; ?></th> 
            <th class="student_class2"><a href="Edit_form.php?sid=<?php echo $data['u_regno']; ?>">Edit</a></th> 
           
           </tr>    
              
               <?php  
                 }
                    
                }
               
            }
            
            ?>
              </table>   
      </form>
 </div>
 </header>
    
</body>
</html>
      
   