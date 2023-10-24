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
    <title>Add Marks</title>
<link rel="stylesheet" href="css/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php">Home</a></li>
                <li class="logout"><a href="admindash.php">Dashboard</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>Step 1/2 : Enter the Details of Student</h2>
        <form method="post" enctype="multipart/form-data" action="">
            <table class="table1">
             <tr>
                <th>Name </th>   <th> Level</th> <th>Reg No.</th>
             </tr>
             <tr>
                 <td><input type='text' name='name' placeholder='Enter Full Name' required class="box"/></td>
                 <td><input type='text' name='level' placeholder='Level' required class="box"/></td>
                 <td><input type='text' name='regno' placeholder='Regno' required class="box"/></td>
                
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Mobile No</th>
             </tr>
             <tr>
                 <td><input type='text' name='mobile' placeholder='Mobile No' required class="box"/></td>
             </tr>
             
         </table>
         <table class="table3">
           <tr>
               <th>Choose Image -</th>
               <td><input type="file" name="img" required/></td>
           </tr> 
         </table>
         <table class="table4">
            <tr>
           <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>
           <!-- <td align="center" colspan="2"><a href="next_mark_form.php" class="next">Next</a></td> -->
           </tr>
        </table>
       </form>
      </div>
    </header>

    
    
</body>
</html> 
<?php
if(isset($_POST['submit']))
{ 
    include('dbcon.php');
    $username=$_POST['name'];
    $level=$_POST['level'];
    $regno=$_POST['regno'];
    $mobile=$_POST['mobile'];
    
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"uploaded-img/$imagename");
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_level`, `u_regno`, `u_mobile`, `u_image`) VALUES ('$username','$level','$regno','$mobile','$imagename')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Student Data Added Successfully');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 

    // echo "Error: " . mysqli_error($con);

    }
}

?>

