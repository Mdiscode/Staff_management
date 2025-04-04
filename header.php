<?php
if(!session_start()){
    session_start();
}
if($_SESSION['admin']==false){
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
    <title>Admin-user</title>
    <!-- -------css-------- -->
     <link rel="stylesheet" href="empcss/empstyle.css">
     <!-- ---admin-css---  -->
      <link rel="stylesheet" href="empcss/admin.css">
      <style>
        #st{
            color:white;
        }
      </style>
</head>
<body>
    <!-- ------header------ -->
     <header class="header " id="header">
      <nav class="container nav">
       <h1 class="nav_logo" id="st">Staff</h1>
        <div class="nav_menu " id="nav-menu">
          <ul class="nav_list">
            <li class="class_item">
                <a href="homepage.php"  class="nav_link active ">Home</a>
            </li>
            <li class="class_item" id="emplogin">
                <a href="AddEmp.php" class="nav_link">AddStaff</a>
            </li>
            <li class="class_item" id="Admin">
                <a href="viewEmployee.php" class="nav_link">ViewStaff</a>
            </li>
            <li class="class_item" id="Admin">
                <a href="AssignProject.php" class="nav_link">Assign-Project</a>
            </li>
            <li class="class_item" id="Admin">
                <a href="ProjectStatus.php" class="nav_link">Project-Status</a>
            </li>
            <li class="class_item" id="Admin">
                <a href="Salary-Table.php" class="nav_link">Salary-Table</a>
            </li>
            <li class="class_item" id="Admin">
                <a href="Employee-Leave.php" class="nav_link">Staff-Leave</a>
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

     <main>
</main>

       <!-- ----main js----- -->
        <script type="text/JavaScript" src="js/main2.js">
        ///active nav link
const links=document.querySelectorAll("nav li");
console.log(links);

links.forEach(li =>{
    li.addEventListener("click",()=>{
        resetlinks();
        li.classList.add('active');
    })
})
function resetlinks(){
    links.forEach(li=>{
        li.classList.remove('active');
    })
}


        </script>
        <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
         <script src="js/sweetalert.min.js">

         </script>
        <?php
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