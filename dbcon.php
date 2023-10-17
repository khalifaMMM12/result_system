<?php

$con = mysqli_connect('localhost','root','','studentsystem_db');

if($con){
    echo "connected Successful";
}else{
    echo "not connected successful";
}
?>