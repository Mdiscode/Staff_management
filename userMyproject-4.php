

<?php
if(!session_start()){
    session_start();
}

  $id=$_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Status</title>
    <link rel="stylesheet" href="empcss/table.css">
    <link rel="stylesheet" href="empcss/admin.css">
    <link rel="stylesheet" href="empcss/usercss.css">
</head>
<body>
<?php include "userheader-1.php"; ?>
    
    <div class="container45">
    <main class="table">
        <section class="table_header">
            <h1>Project Status</h1>
        </section>
        <section class="table_body">
       <?php
           include "phpdata/db.php";

        //    $q="select * from employeed JOIN project where employeed.id={$id} = project.eid={$id}";
           $q="select * from project  where id={$id}";

           $result = mysqli_query($con,$q) or die("query unsuccessfuly");

           if(mysqli_num_rows($result)>0){

           
       ?>
    <table id="tv">
        <thead>
            
            <tr>
                <th>Project-ID</th>
                <th>Staff-ID</th>
                <th>Project-Name</th>
                <th>Due-Date</th>
                <th>Submission-Date</th>
                <th>Status</th>
                <!-- <th>Option</th> -->
                
            </tr>
        </thead>
        <tbody>
            <?php
                  while($row = mysqli_fetch_assoc($result)){

                  
            ?>
            <tr>
                <td><?php echo $row['pid'];?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['pname'];?></td>
                <td><?php echo $row['duedate'];?></td>
                <td><?php echo $row['subdate'];?></td>
                <td><?php echo $row['status'];?></td>
                <!-- <td> 
                    <a href="phpdata/deleteproject.php?id=<?php echo $row['pid'];?>" class="deleteemp">Delete</a>
                </td> -->
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