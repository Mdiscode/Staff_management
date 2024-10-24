
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View-Staff-Detail</title>
    <link rel="stylesheet" href="empcss/table.css">
    <link rel="stylesheet" href="empcss/admin.css">
    <style>
        table td{
            min-width:12.1rem;
        }
        #option{
            min-width:12.6rem;
        }

    </style>
</head>
<body>
<?php include "header.php"; ?>
    
    <div class="container45">
    <main class="table">
        <section class="table_header">
            <h1>view Staff Details</h1>
        </section>
        <section class="table_body">
        <?php
        //    include "header.php";
           include "phpdata/db.php";

           $query="select * from employeed JOIN salary where employeed.id = salary.id";
           $result=mysqli_query($con,$query) or die("connection failed");

           if(mysqli_num_rows($result)>0){

    ?>

    <table id="tv">
        <thead id="hd">
            <tr>
                <th>SId</th>
                <th>Picture</th>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>contact</th>
                <th>Address</th>
                <th>Departmaent</th>
                <th>Degree</th>
                <th>salary</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php
               while($row = mysqli_fetch_array($result)){

               
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><img src="image/<?php echo $row['picture'];?>"  width="60px" height="60px"  alt=""/></td>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['birthday'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['depertment'];?></td>
                <td><?php echo $row['degree'];?></td>
                <td><?php echo $row['base'];?></td>
                <td id="option">
                <a href="UpdateEmp.php?id=<?php echo $row['id']; ?>" class="updateemp">Update</a> 
                 <a href="phpdata/admindelete.php?id=<?php echo $row['id']; ?>" class="deleteemp">Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
    <?php }  mysqli_close($con)?>
        </section>
    </main>
    
    </div>
</body>
</html>