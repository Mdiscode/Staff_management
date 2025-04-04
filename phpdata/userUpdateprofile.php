<?php
if(!session_start()){
    session_start();
}

echo $id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$birt = $_POST['birth'];
$gender = $_POST['gender'];
$add = $_POST['address'];
$cont = $_POST['contact'];
$deprt = $_POST['dept'];
$degree = $_POST['degree'];
// $salary = $_POST['salary'];
//file
// $file_name = $_FILES['pic']['name'];
// print_r($file_name);
// $tempname = $_FILES['image']['tmp_name'];
// $folder = 'image/'.$file_name;

if(isset($_FILES['pic'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
// //if print one element
// // echo $file_name =$_FILES['image']['name'];

// // upload file 

$file_name = $_FILES['pic']['name'];
$file_size = $_FILES['pic']['size'];
$file_tmp = $_FILES['pic']['tmp_name'];
$file_type = $_FILES['pic']['type'];

move_uploaded_file($file_tmp,"../image/".$file_name);
}

include "db.php";

$quey="update  employeed  set fname='{$fname}' ,lname='{$lname}',email='{$email }',password='{$password}',birthday='{$birt}',gender='{$gender}',
address='{$add}',contact='{$cont}',depertment='{$deprt}',degree='{$degree}',picture='{$file_name}' 
where id={$id}";

$user=mysqli_query($con,$quey) or die("Query unsuccessful.");

if($user){
    $_SESSION['status']="Data Update Successfully";
    $_SESSION['status_code']="success";
    header("location:../usermyprofile-3.php");
}
else{
    $_SESSION['status']="Data Not Update";
    $_SESSION['status_code']="success";
}

// header("location:../usermyprofile-3.php");

mysqli_close($con);

?>

