<?php
   include "db.php";

    session_start();
    $id=$_SESSION['id'];
    $reason = $_POST['reason'];
    $edate = $_POST['enddate'];
    $sdate = $_POST['stdate'];

    $q="insert into empleave (id,startdate,enddate,reason) values('{$id}','{$sdate}','{$edate}','{$reason}')";
    mysqli_query($con,$q);
    
    header('location:../userhome-2.php');
   
?>