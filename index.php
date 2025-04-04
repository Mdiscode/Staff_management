<?php
$host="localhost";
$user="root";
$password="";
$db="empdata";
// session_start();
if(!session_start()){
    session_start();
}
$con=mysqli_connect($host,$user,$password,$db);
if($con===false){
  die("connection error");
}
$emailErr = $passwordErr = " ";


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['username']  && $_POST['password'])){
       $emailErr="Email is required";
       $passwordErr="Password is";
       header("index.php");
    }else{ 

    

  $username=$_POST['username'];
  $password=$_POST['password'];

//   if(empty($emailErr)){
  $sql="select * from employeed where email='".$username."' AND password='".$password."' ";

  $result =mysqli_query($con,$sql);
  $row =mysqli_fetch_array($result);

  if($row['usertype']=='user'){
    //session store
    // $q ="select id from employeed where email='$username' AND password='$password'";
    // $r= mysqli_query($con,$q);
    // $r=mysqli_fetch_assoc($r);
    $_SESSION['id']=$row['id'];
    // print_r($r);
    $_SESSION['login']=True;
    $_SESSION['username']=$username;

    header("location:userShow-8.php");
  }
//    else{
//     $userErr="user name not match";
//     $passwordErr="Password not match";
//     }

  elseif($row['usertype']=='admin'){
    $_SESSION['admin']=True;
    $_SESSION['username']=$username;
    header("location:homepage.php");
  }
  else{
    $emailErr="email  not match";
    $passwordErr="Password not match";
    // $_SESSION['status'] = "Username and password do not match!";
    // $_SESSION['status_code'] = "success";
    // $_SESSION['icon']="error";
    header("location: index.php");  // Redirect to the same page to trigger the alert
    exit;
        
        
  }
}
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
    
    <link rel="stylesheet" href="empcss/nav.css">
    <title>Staff-Management-System</title>
    <style>
        #err{color:red;}
    </style>
</head>

<body onload="slider()">
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
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="login_form">
            <h2 class="login_title">LogIn</h2>
            <div class="login_group">
                <div>
                    <label for="email" class="login_label">Email</label>
                    <input type="email" placeholder="Enter email" name="username" id="email" class="login_input" require><br>
                    <span id="err"><?php echo $emailErr; ?></span>
                </div>
                <div>
                    <label for="password" class="login_label">Password</label>
                    <input type="password" placeholder="Enter password" id="password" name="password" class="login_input" require><br>
                        <span id="err"><?php echo $passwordErr; ?></span>
                </div>
            </div>
            <div>

                <button type="submit" class="login_btn" id="login-btn" name="submit">LogIn</button>
            </div>

        </form>
        <i class="fa fa-times  login_close" id="login-close" aria-hidden="true"></i>
    </div>

    <!-- -------main------ -->
    <main class="main">
        <div class="banner">
            <div class="slider">
                <img src="image/img/img4.avif" id="slideimg">
            </div>

            <!-- //nav  -->
            <div class="overlay">
                <div class="navbar">
                    <!-- //logo -->
                    <div class="logo">
                        logo
                    </div>
                </div>

                <div class="content">
                    <h1 id="wordch">This is Manage Staff Details</h1>
                    <h3>The Staff easy to show our detail and show our,
                        profile and Apply leave.
                    </h3>
                </div>
            </div>
        </div>
    </main>

    <!-- ----main js----- -->
    <script src="js/main2.js"> </script>
    
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <!-- <?php
if(isset($_SESSION['status']) && $_SESSION['status'] !=''){

?>
<script>

swal({
  title: "<?php echo $_SESSION['status'] ?>",
  text: "<?php echo $_SESSION['status_code']?>",
  icon: "<?php echo $_SESSION['icon']; ?>",
  button: "ok",
});
</script>

<?php
unset($_SESSION['status']);
 }?> -->

</body>
</html>
