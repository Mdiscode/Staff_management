<?php
session_start();

$id =$_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$birt = $_POST['birthday'];
$gender = $_POST['gender'];
$add = $_POST['address'];
$cont = $_POST['contact'];
$deprt = $_POST['depertment'];
$degree = $_POST['degree'];
$salary = $_POST['salary'];


if(isset($_FILES['image'])){
  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";
//if print one element
// echo $file_name =$_FILES['image']['name'];

// upload file 

$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];

move_uploaded_file($file_tmp,"../image/".$file_name);
}



include "db.php";

$quey="update  employeed  set fname='{$fname}' ,lname='{$lname}',email='{$email }',password='{$password}',birthday='{$birt}',gender='{$gender}',
address='{$add}',contact='{$cont}',depertment='{$deprt}',degree='{$degree}',picture='{$file_name}' 
where id={$id}";
$query=mysqli_query($con,$quey) or die("Query unsuccessful.");

//salary 
$ql ="update salary set base=$salary where id=$id";
mysqli_query($con,$ql);

if($query){
$_SESSION['status']="Data Update successfully";
$_SESSION['status_code']="success";
header("location:../viewEmployee.php");
}
else{
  $_SESSION['status']="Data not update successfully";
  $_SESSION['status_code']="success";
}

mysqli_close($con);

?>