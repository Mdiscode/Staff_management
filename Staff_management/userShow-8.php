<!-- <?php
session_start();
if($_SESSION['login']==false){
       header("Location:index.php");
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-login</title>
    <link rel="stylesheet" href="empcss/empstyle.css">
    
    <link rel="stylesheet" href="empcss/nav.css">
    <style>
        
        #img{
            width: 100%;
            height:100%;
        }
    </style>
</head>
<body>
<main class="main">
        <div class="banner">
            <div class="slider">
                <img src="image/img/img4.avif" id="img">
            </div>

            <!-- //nav  -->
            <div class="overlay">
                <?php include "userheader-1.php" ?>;

                <div class="content">
                    <h1 id="wordch">Welcome user</h1>
                    <h3>easly show our detail profile
                    </h3>
                </div>
            </div>
        </div>
    </main>
    <!-- -------jsvascript--- -->
    
</body>
</html>