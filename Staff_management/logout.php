<?php
session_start();

// session_destroy();
$_SESSION['login']=false;
$_SESSION['admin']=false;
header("location:index.php");

?>