<?php
$id=$_GET['id'];


include 'db.php';
$q="update empleave set status='Approve' where id={$id}";
mysqli_query($con,$q);
header("location:../Employee-Leave.php");
?>