<?php
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
// $salary = $_POST['salary'];
// $sid =$_POST['sid'];

//salary clc
$base=$_POST['salary'];
$hra =$base * 7/100;
$da =$base * 5/100;
$ta =$base * 6/100;
$ma =$base * 4/100;
$pf =$base * 8/100;
$net=($base + $hra + $da + $ta + $ma)-$pf;

//bonus clc
$total = $base + $da;
$bon =$base * 8.33/100;


//file
$file_name = $_FILES['image']['name'];
// $tempname = $_FILES['image']['tmp_name'];
// $folder = 'image/'.$file_name;


// $file_name = $_FILES['image']['name'];
// $file_size = $_FILES['image']['size'];
// $file_tmp = $_FILES['image']['tmp_name'];
// $file_type = $_FILES['image']['type'];
// $folder = 'image/'.$file_name;

// move_uploaded_file($file_tmp,"image/".$file_name);

//leave 
// $day="30";
// if($day){
//     $bon =$base * 8.33/100;
// }else{
//     $bon="0";
// }

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




$quey="insert into employeed (fname,lname,email,password,birthday,gender,address,contact,depertment,degree,picture) 
values('{$fname}','{$lname}','{$email }','{$password}','{$birt}','{$gender}','{$add}','{$cont}','{$deprt}','{$degree}','{$file_name}')";

$r=mysqli_query($con,$quey) or die("Query unsuccessful.");
if($r){
    $id=mysqli_query($con,"select id from employeed where email='{$email}' and contact='{$cont}' and fname='{$fname}'");
    if($id){
        $row=mysqli_fetch_assoc($id);
        $id=$row['id'];
        $sal="insert into salary (id,base,bonus,total) values({$id},{$base},{$bon},{$total})";
        // echo $sal;
        mysqli_query($con,$sal) or die("query unsuccessful.");
    }
    
    
}

//insert salary table
if($r){
    session_start();
    $_SESSION['status']="Data Insert successfully";
    $_SESSION['status_code']="success";
    header("location:../viewEmployee.php");
    }
    else{
      $_SESSION['status']="Data not Insert successfully";
      $_SESSION['status_code']="success";
    }
    



mysqli_close($con);
?>