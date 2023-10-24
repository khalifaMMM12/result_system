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
    <title>Homepage</title>
<link rel="stylesheet" href="css/next_form.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="#" enctype="multipart/form-data">
              <h2>Step 2/2 : Add Semester Exam mark</h2>
         
          <td><input type="text" name="level" class="box" placeholder='Level' required/></td>
          
          <td><input type="text" name="regno" class="box" placeholder='Reg No.' required/></td>

          <td><input type='text' name='name' placeholder='Enter Full Name' required class="box"/></td>


           <!-- <table class="table3">
           <tr>
               <th>Choose Image -</th>
               <td><input type="file" name="img" required/></td>
           </tr> 
         </table> -->
          
              
              
          <table class="table1">
              <span> <h3 class="h3">First Exam (A)</h3></span>
             <tr>
                <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td><input class="box" type='text' name='english1' placeholder='English' required/></td>
                 <td><input class="box" type='text' name='math1' placeholder='Math' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Physics</th>   <th>Chemistry</th> 
             </tr>
                 <tr>
                 
                 <td><input class="box" type='text' name='physics1' placeholder='Physics' required/></td>
                 <td><input class="box" type='text' name='chemistry1' placeholder='Chemistry' required/></td>
                 
             </tr>
             
         </table>
          <span> <h3 class="h3">Second Exam(B)</h3> </span>
         <table class="table4">
             <tr>
               <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td><input class="box" type='text' name='english2' placeholder='English' required/></td>
                 <td><input class="box" type='text' name='math2' placeholder='Math' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Physics</th>   <th>Chemistry</th> 
             </tr>
                 <tr>
                 
                 <td><input class="box" type='text' name='physics2' placeholder='Physics' required/></td>
                 <td><input class="box" type='text' name='chemistry2' placeholder='Chemistry' required/></td>
                 
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
<?php
if (isset($_POST['submit'])) {
    include('dbcon.php');
    $level = $_POST['level'];
    $regno = $_POST['regno'];

    
    $username = $_POST['name'];
    // $mobile = $_POST['mobile'];

    // $imagename = $_FILES['img']['name'];
    // $tempname = $_FILES['img']['tmp_name'];
    // move_uploaded_file($tempname, "images/$imagename");

    // if ($_FILES['img']['error'] !== UPLOAD_ERR_OK) {
    //     echo "File upload error: " . $_FILES['img']['error'];
    // }
    

    $english1 = $_POST['english1'];
    $math1 = $_POST['math1'];
    $physics1 = $_POST['physics1'];
    $chemistry1 = $_POST['chemistry1'];

    $english2 = $_POST['english2'];
    $math2 = $_POST['math2'];
    $physics2 = $_POST['physics2'];
    $chemistry2 = $_POST['chemistry2'];

    
    $sql = "INSERT INTO `user_mark`(`u_regno`, `u_level`, `u_name`, `u_english1`, `u_math1`, `u_physics1`, `u_chemistry1`, `u_english2`, `u_math2`, `u_physics2`, `u_chemistry2`) VALUES ('$regno','$level', '$username', '$english1','$math1','$physics1','$chemistry1','$english2','$math2','$physics2','$chemistry2')";

    $run = mysqli_query($con, $sql);

    if ($run) {
        ?>
        <script>
        alert('Data Inserted Successfully');
        window.open('admindash.php?sid=<?php echo $regno; ?>', '_self');
        </script>
        <?php
    } else {
     ?>
         <script>
        alert('Could not insert data');
        </script>
     <?php

        echo "Error: " . mysqli_error($con);
    }
}

