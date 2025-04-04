<?php 
$pname=$_POST['pname'];
$eid = $_POST['eid'];
$due= $_POST['duedate'];
// $sub= $_POST['subdate'];
// $status =$_POST['submit'];
if($_POST['subdate']){
   $sub =$_POST['subdate'];
   $status ="submitted"; 
}else{
    $sub="00-00-00";
    $status ="Due";
}

include "db.php";

$q = "insert into project (id,pname,duedate,subdate,status) values('{$eid}','{$pname}','{$due}','{$sub}','{$status}')";
mysqli_query($con,$q);

header("location:../ProjectStatus.php");

mysqli_close($con);
?>