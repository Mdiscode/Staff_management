   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff-Leave</title>
    <link rel="stylesheet" href="empcss/table.css">
    <link rel="stylesheet" href="empcss/admin.css">
    <link rel="stylesheet" href="empcss/usercss.css">
</head>
<body>
<?php include "header.php"; ?>
    
    <div class="container45">
    <main class="table">
        <section class="table_header">
            <h1>Staff Leave Details</h1>
        </section>
        <section class="table_body">

        <?php 
              include "phpdata/db.php";

              $q="select * from employeed JOIN empleave where employeed.id = empleave.id";
              $result = mysqli_query($con,$q);

              if(mysqli_num_rows($result)>0){

              
        ?>
        <table id="tv">
        <thead>
            <tr>
                <th>SId</th>
                <th>Name</th>
                <th>Start-Date</th>
                <th>End-Date</th>
                <th>Total-Days</th>
                <th>Reason</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
             <?php 

              while($row=mysqli_fetch_array($result)){

              
              ?>
            <tr>
                <td><?php echo $row['lvid'];?></td>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['startdate'];?></td>
                <td><?php echo $row['enddate'];?></td>
                <td>90</td>
                <td><?php echo $row['reason'];?></td>
                <td><?php echo $row['status'];?></td>
                <td id="option">
                    <a href="phpdata/approve.php?id=<?php echo $row['id'];?>" class="updateemp">Approve</a>  
                    <a href="phpdata/cancle.php?id=<?php echo $row['id'];?>" class="deleteemp">Cancle</a></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
    <?php  } ?>
        </section>
    </main>
    
    </div>
</body>
</html>