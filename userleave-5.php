


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign-Project</title>
    <link rel="stylesheet" href="empcss/table.css">
    <link rel="stylesheet" href="empcss/admin.css">
    <style>
        #no{
            overflow:hidden;
        }
       #Assigncon{
        height: 56vh;
       }
    </style>
</head>
<body>
<?php  include "userheader-1.php"  ?>
    
    <div class="container45">
    <main class="table" id="no">
        <section class="table_header">
            <h1>Leave Form</h1>
        </section>
        <section>
      
        <div class="containerform" id="Assigncon">
        <div class="AddEmp-main" id="addform">
            <h2 style="text-align:center">Apply Leave Form</h2>
            <form action="phpdata/userleave.php" id="AddEmpForm" method="post">
                <div class="AddEmp-inputbox col-3">
                    
                    <input type="text"  class="inputEmp " placeholder="Reason" name="reason">
                </div>
                <div class="AddEmp-inputbox col-3">
                <label for="leave">Start Date</label>
                    <input type="date" class="inputEmp Mpspan"  name="stdate">
                </div>
                <div class="AddEmp-inputbox col-3">
                <label for="leave">End Date</label>
                    <input type="date" class="inputEmp"  name="enddate">
                </div>
                <div class="Assign-group col-3">
                    <input type="submit" id="Addbtn" value="Submit"  name="subleave">
                </div>
            </form>
        </div>
    </div>
        </section>
    </main>
    
    </div>
</body>
</html>

