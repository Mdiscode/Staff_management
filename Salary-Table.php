


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee-Salary</title>
    <link rel="stylesheet" href="empcss/table.css">
    <link rel="stylesheet" href="empcss/admin.css">
</head>
<body>
<?php include "header.php"; ?>
    
    <div class="container45">
    <main class="table">
        <section class="table_header">
            <h1>Staff Salary</h1>
        </section>
        <section class="table_body">
      
        <?php
              include "phpdata/db.php";
              $q="select * from employeed JOIN salary where employeed.id= salary.id";
              $result = mysqli_query($con,$q) or die("query run unsuccessfuly.");

              if(mysqli_num_rows($result)>0){

              
        ?>
        <table >
        <thead>
            <tr>
                <th>Staff-ID</th>
                <th>Name</th>
                <th>Base Salary</th>
                <th>Bonus</th>
                <th>Total-Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($result)){

            
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['base'];?></td>
                <td><?php echo $row['bonus'];?></td>
                <td><?php echo $row['total']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
        </section>
    </main>
    
    </div>
</body>
</html>