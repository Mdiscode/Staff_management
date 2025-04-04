<?php 
$pid = $_GET['id'];

include "db.php";
$q ="delete from project where pid={$pid}";
$del=mysqli_query($con,$q) or die("query unsuccessful.");

if($del){
    
}

header("location:../ProjectStatus.php");
?>