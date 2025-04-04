<!-- <?php
session_start();
if($_SESSION['admin']==false){
       header("Location:index.php");
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="empcss/table.css">
    <link rel="stylesheet" href="empcss/admin.css">
    <link rel="stylesheet" href="empcss/usercss.css">
</head>
<body>
<?php include "header.php"; ?>
    
    <div class="container45">
    <main class="table">
        <section class="table_header">
            <h1>Staff LeaderBoard</h1>
        </section>
        <section class="table_body">

        <?php include "phpdata/db.php";
          $query = "select * from employeed JOIN rank where employeed.id = rank.eid";
          $result =mysqli_query($con,$query) or die("connection failed");

          if(mysqli_num_rows($result)>0){

          
        ?>
        
        <table>
    
    <thead>
        <tr>
            <th>Seq.</th>
            <th>Staff-ID</th>
            <th>Staff-Name</th>
            <th>Staff-Point</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row =mysqli_fetch_array($result)){

        ?>
        <tr>
            <td><?php echo $row['eid'];?></td>
            <td><?php echo $row['id'];?></td>
            <td><?php  echo $row['fname'];?></td>
            <td><?php echo $row['point'];?></td>
        </tr>
        <?php }?>
    </tbody>
    
</table>
<?php } ?>
        </section>
    </main>
    
    </div>
</body>
</html>