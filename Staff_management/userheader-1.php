<?php
// if(session_start() ){
  session_start();
// }

if($_SESSION['login']==false){
       header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -------RemixIcons----------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- -------css-------- -->
     <link rel="stylesheet" href="empcss/empstyle.css">
     <title>User</title>
     <!-- ---admin-css---  -->
      <link rel="stylesheet" href="empcss/admin.css">
      <style>
        #logo{
            color:white;
        }
      </style>
</head>
<body>
    <!-- ------header------ -->
     <header class="header " id="header">
      <nav class="container nav">
       <h1 class="nav_logo" id="logo">Staff</h1>
        <div class="nav_menu " id="nav-menu">

          <ul class="nav_list">
            <li class="class_item">
                <a href="userhome-2.php" class="nav_link">Home</a>
            </li>
            <li class="class_item" id="emplogin">
                <a href="usermyprofile-3.php" class="nav_link">My-Profile</a>
            </li>
            <li class="class_item" >
                <a href="userMyproject-4.php" class="nav_link">My-Project</a>
            </li>
            <li class="class_item" >
                <a href="userleave-5.php" class="nav_link">Apply-Leave</a>
            </li>
            <li class="class_item" id="Admin">
                <a href="logout.php" class="nav_link">LogOut</a>
            </li>
          </ul>
        
          <!-- ---button--close---- -->
           <div class="nav_close" id="nav-close">
            <i class="fa fa-times" aria-hidden="true"></i>
           </div>
          </div>
           <!-- -----nav_action----- -->
            <div class="nav_toggle nav_action" id="nav-toggle">
              <i class="fa fa-bars" aria-hidden="true"></i>
    
             </div>
      </nav>
     </header>

     <section>
        <h1>admin page</h1>
     </section>

       <!-- ----main js----- -->
        <script src="js/main2.js">
          
        </script>
            <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
             <script src="js/sweetalert.min.js"></script>
        <?php
        // session_start();
if(isset($_SESSION['status']) && $_SESSION['status'] !=''){

?>
<script>

swal({
  title: "<?php echo $_SESSION['status'] ?>",
  text: "<?php echo $_SESSION['status_code']?>",
  icon: "success",
  button: "ok",
});
</script>

<?php
unset($_SESSION['status']);
 }?>
</body>
</html>