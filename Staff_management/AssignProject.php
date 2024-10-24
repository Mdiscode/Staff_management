

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
        height: 60vh;
       }
    </style>
</head>
<body>
<?php include "header.php"; ?>
    
    <div class="container45">
    <main class="table" id="no">
        <section class="table_header">
            <h1>Staff Assign Project</h1>
        </section>
        <section>

    <div class="containerform" id="Assigncon">
        <div class="AddEmp-main">
            <h2 style="text-align:center">Assign Project</h2>
            <form action="phpdata/AssignProjectdata.php" id="Mpform" method="post">
            <div class="AddEmp-inputbox">
                    <input type="text" class="inputEmp Mpspan" placeholder="Employee-Id" name="eid">
                </div>
                <div class="AddEmp-inputbox">
                    <input type="text"  class="inputEmp Mpspan" placeholder="Project Name" name="pname">
                </div>
                
                
                
                <div class="AddEmp-inputbox">
                    <input type="text" class="inputEmp" placeholder="due-date" name="duedate">
                </div>
                <div class="AddEmp-inputbox">
                    <input type="text" class="inputEmp Mpspan" placeholder="subbision-date" name="subdate">
                </div>
                <div class="Assign-group">
                    <input type="submit" id="Addbtn" value="Submit" name="submit" >
                </div>
            </form>
        </div>
    </div>
        </section>
    </main>
    
    </div>
</body>
</html>