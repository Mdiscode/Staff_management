
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -------RemixIcons----------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- -------css-------- -->
     <link rel="stylesheet" href="empcss/empstyle.css">
     <title>Staff-Management-System</title>
</head>
<body>
    <!-- ------header------ -->
     <header class="header" id="header">
      <nav class="container nav">
        <a href="#" class="nav_logo">Staff Management System</a>

        <div class="nav_menu " id="nav-menu">
          <ul class="nav_list">
            <li class="class_item">
                <a href="#" class="nav_link">Home</a>
            </li>
            <li class="class_item" id="emplogin">
                <a href="#" class="nav_link">Staff-Login</a>
            </li>
            <li class="class_item" id="Admin">
                <a href="#" class="nav_link">Admin-Login</a>
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

     <!-- --------Login------- -->
      <div class="Login" id="login">
          <form action="#" method="post" class="login_form">
            <h2 class="login_title">LogIn</h2>
            <div class="login_group">
              <div>
                <label for="email" class="login_label">Email</label>
                <input type="email" placeholder="Enter email" name="username" id="email" class="login_input">
              </div>
              <div>
                <label for="password" class="login_label">Password</label>
                <input type="password" placeholder="Enter password" id="password" name="password" class="login_input">
              </div>
            </div>
              <div>
                <p class="login_signup">
                  you do not have an account? <a href="#">SignUp</a>
                </p>
                <a href="#" class="login_forgot">
                  you forgot your password 
                </a>
                <button  type="submit" class="login_btn" id="login-btn">LogIn</button>
              </div>
            
          </form>
          <i class="fa fa-times  login_close"  id="login-close" aria-hidden="true"></i>
      </div>

      <!-- -------main------ -->
       <main class="main">
        <img src="image/homepage.jpg" alt="image" class="main_img">
       </main>

       <!-- ----main js----- -->
        <script src="js/main2.js">
          
        </script>
</body>
</html>
<?php
$host="localhost";
$user="root";
$password="";
$db="empdata";

if(!session_start()){
  session_start();
}
$con=mysqli_connect($host,$user,$password,$db);
if($con===false){
  die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from user where username='".$username."' AND password='".$password."' ";

  $result =mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  if($row['usertype']=="user"){
    //session store
    $_SESSION['username']=$username;
    header("location:userview.php");
  }
  elseif($row['usertype']=="admin"){

    $_SESSION['username']=$username;
    header("location:Adminview.php");
  }
  else{
    echo "user name and password is incurrect";
    console.log("error");
  }
}
?>