<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Mark</title>
    <style>
        #assignbtn{
            border-radius: 7px;
            padding: 10px;
            background: blue;
            color: white;
            align-self:center;
      }
      #Assigncon{
        margin-top:-126px;
      }
      .Assign-group{ text-align:center}
    </style>
</head>
<body>
<?php
    include "header.php"
    ?>
    <div class="containerform" id="Assigncon">
        <div class="AddEmp-main">
            <h2 style="text-align:center">Project Mark</h2>
            <form action="#" id="Mpform" method="post">
                <div class="AddEmp-inputbox">
                    <input type="text"  class="inputEmp Mpspan" placeholder="Project Name" name="MpName">
                </div>
                <div class="AddEmp-inputbox">
                    <input type="text" class="inputEmp Mpspan" placeholder="Employee Name" name="MpEname">
                </div>
                <div class="AddEmp-inputbox">
                    <input type="text" class="inputEmp" placeholder="dd/mm/yy" name="Mpdate">
                </div>
                <div class="AddEmp-inputbox">
                    <input type="text" class="inputEmp" placeholder="submission date" name="MpSubmisionD">
                </div>
                <div class="AddEmp-inputbox">
                    <input type="text" class="inputEmp Mpspan" placeholder="Assign Mark" name="MpAssignMark">
                </div>
                <div class="Assign-group">
                    <input type="submit" id="assignbtn" value="AssignMark"  name="subAssignMark">
                </div>
            </form>
        </div>
    </div>
</body>
</html>