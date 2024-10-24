<?php
$id = $_GET['id'];
include "db.php";
 $sal = mysqli_query($con,"delete from salary where id={$id}");
 if($sal){
    $result= mysqli_query($con,"delete from employeed where id={$id}") or die("connection failed");
 }
 session_start();
 
 if($sal){
   
   $_SESSION['status']="Data Delete Successfully";
   $_SESSION['status']="success";
   header("location:../viewEmployee.php");
 }
else{
   $_SESSION['status']="Data Not Delete Successfully";
   $_SESSION['status_code']="success";
}

mysqli_close($con);
?>