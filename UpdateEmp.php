<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Staff-Information</title>
    <link rel="stylesheet" href="empcss/admin.css">
    <style>
        .containerform{
            height:117vh;
            padding-top:11px;
        }
       .AddEmp-main{
        height:116vh;
       } 
       .top{
        margin-top:56px;
       }
       /* #ufile{margin-top:4rem;} */
       #photo{
        width: 118px;
        border-radius: 50%;
        position: absolute;
        right: 35rem;
        top: 9rem;
    }
   .AddEmp-inputbox{margin-top:8rem;} 
   #Addbtn{margin-top:5rem;}  
    </style>
</head>
<body>
    <?php
    include "header.php"
    ?>
    <div class="containerform">
        <div class="AddEmp-main" id="addform">
        <h2 style="text-align:center">Update Staff Info</h2>

        <?php
        //    include "header.php";
           include "phpdata/db.php";
           
           $id =$_GET['id'];
           $query="select * from employeed  JOIN salary  where  employeed.id = salary.id and employeed.id=$id";
           $result=mysqli_query($con,$query) or die("connection failed");

           if(mysqli_num_rows($result)>0){

            while($row = mysqli_fetch_assoc($result)){

            

    ?>
    <div>
        <img src="image/<?php echo $row['picture'];?>" id="photo"  width="60px" height="60px"  alt=""/>


        </div>
        <form action="phpdata/adminUpdate.php" id="AddEmpForm" method="post" enctype="multipart/form-data">
        
        <div class="AddEmp-inputbox col-3" id="file2">

            <input type="file" class="inputEmp" placeholder="ChooseFile" id="ufile" name="image"  require>
        </div>

        <div class="AddEmp-inputbox top col-1" >
            <input type="hidden" class="inputEmp" placeholder="FirstName" name="id" value="<?php echo $row['id']; ?>" require>
            <input type="text" class="inputEmp" placeholder="FirstName" name="fname" value="<?php echo $row['fname']; ?>" require>
        </div>
        <div class="AddEmp-inputbox top col-2">
            
            <input type="text" class="inputEmp" placeholder="LasetName" name="lname" value="<?php echo $row['lname']; ?>" require>
        </div>
        <div class="AddEmp-inputbox top col-3">
            <input type="email" class="inputEmp" placeholder="Email" name="email" value="<?php echo $row['email']; ?>" require>
        </div>
        <div class="AddEmp-inputbox top col-3">
            <input type="text" class="inputEmp" placeholder="Password" name="password" value="<?php echo $row['password']; ?>" require>
        </div>
        <div class="AddEmp-inputbox top col-5">
            <input type="date" class="inputEmp" placeholder="BirthDate" name="birthday" value="<?php echo $row['birthday']; ?>" require>
        </div>
        <div class="AddEmp-inputbox top col-6">
        <input type="text" class="inputEmp" placeholder="Gender" name="gender" value="<?php echo $row['gender']; ?>" require>
        
        </div>
        <div class="AddEmp-inputbox top ">
            <input type="text" class="inputEmp" placeholder="Address" name="address" value="<?php echo $row['address']; ?>" require>
        </div>
        <div class="AddEmp-inputbox top ">
            <input type="text" class="inputEmp" placeholder="Contact NO" name="contact" value="<?php echo $row['contact']; ?>" require>
        </div>
        <div class="AddEmp-inputbox col-3 top">
            <input type="text" class="inputEmp" placeholder="Dapartment" value="<?php echo $row['depertment']; ?>" name="depertment">
        </div>
        <div class="AddEmp-inputbox top">
            <input type="text" class="inputEmp" placeholder="Degree" name="degree" value="<?php echo $row['degree']; ?>" require>
        </div>
        <div class="AddEmp-inputbox top ">
            <input type="text" class="inputEmp" placeholder="Salary" value="<?php echo $row['base']; ?>" name="salary">
        </div>
        
        <div class=" col-3 top" id="submit">
            <input type="submit" value="Submit" id="Addbtn" name="submit">
        </div>
        </form>
        <?php }  }?>
        </div>
    </div>
</body>
</html>
