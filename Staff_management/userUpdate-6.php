<?php
 $id=$_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Project</title>
    <link rel="stylesheet" href="empcss/table.css">
    <link rel="stylesheet" href="empcss/admin.css">
<style>
        #change{

            width:92vw;
            height:84vh;
            background:#fff5;
            backdrop-filter:blur(7px);
            box-shadow:0 .4rem .8rem #0005;
            border-radius: .8rem;
            /* overflow:hidden; */
            overflow:auto;
        }
        #con{
            padding-top:7rem;
        }
        #Addbtn{
            text-align:center;
        }
      #im{
        border:none;
      }
</style>
</head>
<body>
<?php include "userheader-1.php"; ?>
    
    <div class="container45">
    <main class="table" id="change">
    <div class="containerform " id="con">
        <div class="AddEmp-main" id="addform">
        <h2 style="text-align:center">Update Info</h2>
        <?php
             include "phpdata/db.php";

             $q="select * from employeed where id={$id}";

             $result =mysqli_query($con,$q);
             if(mysqli_num_rows($result)>0){

             while($row=mysqli_fetch_assoc($result)){

             
        ?>
        <form action="phpdata/userUpdateprofile.php" id="AddEmpForm" method="post" enctype="multipart/form-data">
            <div class="inputEmp" id="im">
            <img src="image/<?php echo $row['picture'];?>"  width="60px" height="60px"  alt=""/>
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            </div>
        <div class="AddEmp-inputbox col-3">
            <input type="file" class="inputEmp" placeholder="ChooseFile" name="pic"  require>
        </div>
        <div class="AddEmp-inputbox col-1" >
            <input type="text" class="inputEmp" placeholder="FirstName" name="fname" value="<?php echo $row['fname'];?>"  require>
        </div>
        <div class="AddEmp-inputbox col-2">
            
            <input type="text" class="inputEmp" placeholder="LasetName" name="lname" value="<?php echo $row['lname'];?>" require>
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="email" class="inputEmp" placeholder="Email" name="email" value="<?php echo $row['email'];?>"  require>
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="text" class="inputEmp" placeholder="Password" name="password" value="<?php echo $row['password'];?>" require>
        </div>
        <div class="AddEmp-inputbox col-5">
            <input type="date" class="inputEmp" placeholder="BirthDate" name="birth" value="<?php echo $row['birthday'];?>"  require>
        </div>
        <div class="AddEmp-inputbox col-6">
        <input type="text" class="inputEmp" placeholder="Gender" name="gender" value="<?php echo $row['gender'];?>"  require>
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="text" class="inputEmp" placeholder="Address" name="address" value="<?php echo $row['address'];?>" require>
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="text" class="inputEmp" placeholder="Contact NO" name="contact" value="<?php echo $row['contact'];?>" require>
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="text" class="inputEmp" placeholder="Dapartment" name="dept" value="<?php echo $row['depertment'];?>">
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="text" class="inputEmp" placeholder="Degree" name="degree" value="<?php echo $row['degree'];?>" require>
        </div>
        
        <div class=" col-3" id="submit">
            <input type="submit" value="Update Info" id="Addbtn" name="submit">
        </div>
        </form>
        <?php } } ?>
        </div>
    </div>
    </main>
    
    </div>
</body>
</html>