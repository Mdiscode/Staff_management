
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Staff</title>
    <link rel="stylesheet" href="empcss/table.css">
    <link rel="stylesheet" href="empcss/admin.css">
    <link rel="stylesheet" href="empcss/usercss.css">
    <style>
        #change{

        width:92vw;
        height:96vh;
        background:#fff5;
        backdrop-filter:blur(7px);
        box-shadow:0 .4rem .8rem #0005;
        border-radius: .8rem;
        /* overflow:hidden; */
        overflow:auto;
}
#add{
    padding-top:12rem;
}
        
    </style>
</head>
<body>
<?php include "header.php"; ?>
    
    <div class="container45">
    <main class="table" id="change">
        
        <div class="containerform" id="add">
        <div class="AddEmp-main" id="addform">
        <h2 style="text-align:center">Registration Form</h2>
        <form action="phpdata/savedata.php" id="AddEmpForm" method="post" enctype="multipart/form-data">
        
        <div class="AddEmp-inputbox col-1" >
            <input type="text" class="inputEmp" placeholder="FirstName" name="fname" require>
        </div>
        <div class="AddEmp-inputbox col-2">
            
            <input type="text" class="inputEmp" placeholder="LasetName" name="lname" require>
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="email" class="inputEmp" placeholder="Email" name="email" require>
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="text" class="inputEmp" placeholder="Password" name="password" require>
        </div>
        <div class="AddEmp-inputbox col-5">
            <input type="date" class="inputEmp" placeholder="BirthDate" name="birthday" require>
        </div>
        <div class="AddEmp-inputbox col-6">
        <input type="text" class="inputEmp" placeholder="Gender" name="gender" require>
        
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="text" class="inputEmp" placeholder="Address" name="address" require>
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="text" class="inputEmp" placeholder="Contact NO" name="contact" require>
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="text" class="inputEmp" placeholder="Dapartment" name="depertment">
        </div>
        <div class="AddEmp-inputbox col-3">
            <input type="text" class="inputEmp" placeholder="Degree" name="degree" require>
        </div>
        <div class="AddEmp-inputbox col-3 ">
            <input type="text" class="inputEmp" placeholder="Salary" name="salary">
        </div>
        
        
        <div class="AddEmp-inputbox col-3">
            <input type="file" class="inputEmp" placeholder="ChooseFile" name="image" require>
        </div>
        <div class=" col-3" id="submit">
            <input type="submit" value="Submit" id="Addbtn" name="submit">
        </div>
        </form>
        </div>
    </div>
    
</main>
    
    </div>
</body>
</html>