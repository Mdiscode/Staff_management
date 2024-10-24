<?php
if(!session_start()){
    session_start();
}
//   if(isset($_SESSION['id'])){
//     $id=$_SESSION['id'];
//     // echo $id;
//   }else{
//     echo "not set";
//   }
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="empcss/table.css">
    <link rel="stylesheet" href="empcss/admin.css">
    <link rel="stylesheet" href="empcss/usercss.css">
    <style>
        #tv td{
            text-align:center;
        }
        div.hd{
            width:100%;
            /* height:100vh; */
            color: rebeccapurple;
            margin: 0.5rem 0 0.5rem 0;
            background: blanchedalmond;
            
            font-size:1.5rem;
        }
    </style>
</head>
<body>
<?php include "userheader-1.php"; ?>
    
    <div class="container45">
    <main class="table">
        <section class="table_header">
            <h1>Staff Details</h1>
        </section>
        <section class="table_body">

        <?php include "phpdata/db.php";
          $query = "select * from employeed where id = {$id}";
        //   echo $query;
          $result =mysqli_query($con,$query) or die("connection failed");

          if(mysqli_num_rows($result)>0){

          
        ?>
        <div class="hd">
        <h1>Staff LeaderBoard</h1>
          </div>
        <table id="ty">
        
    <thead>
        <tr>
            <th>Seq.</th>
            <th>Staff-Name</th>
            <th>Staff-Address</th>
            <th>Staff-Contact</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row =mysqli_fetch_assoc($result)){
        //   print_r($row);
        ?>

        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['fname'];?></td>
            <td><?php  echo $row['address'];?></td>
            <td><?php echo $row['contact'];?></td>
        </tr>
        <?php }?>
    </tbody>
    
</table>
<?php } ?>


<!-- ///Due project  -->
 
<?php include "phpdata/db.php";
          $query = "select * from project where id = {$id}";
        //   echo $query;
          $result =mysqli_query($con,$query) or die("connection failed");

          if(mysqli_num_rows($result)>0){

          
        ?>
        <div class="hd">
        <h1>Due Project</h1>
          </div>
        <table id="ty">
        
    <thead>
        <tr>
            <th>Project Name</th>
            <th>Due Date</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row =mysqli_fetch_assoc($result)){
        //   print_r($row);
        ?>

        <tr>
            <td><?php echo $row['pname'];?></td>
            <td><?php echo $row['duedate'];?></td>
            
        </tr>
        <?php }?>
    </tbody>
    
</table>
<?php } ?>

<!-- ///--Salary----  -->


<?php include "phpdata/db.php";
          $query = "select * from salary where id = {$id}";
        //   echo $query;
          $result =mysqli_query($con,$query) or die("connection failed");

          if(mysqli_num_rows($result)>0){

          
        ?>
        <div class="hd">
        <h1>Salary Status</h1>
          </div>
        <table id="ty">
        
    <thead>
        <tr>
            <th>Base Salary</th>
            <th>Bonus</th>
            <th>Total Salary</th>
            
        </tr>
    </thead>
    <tbody>
        <?php while($row =mysqli_fetch_assoc($result)){
        //   print_r($row);
        ?>

        <tr>
            <td><?php echo $row['base'];?></td>
            <td><?php echo $row['bonus'];?></td>
            <td><?php  echo $row['total'];?></td>
            
        </tr>
        <?php }?>
    </tbody>
    
</table>
<?php } ?>


<!-- ///---Leave Satus-----  -->


<?php include "phpdata/db.php";
          $query = "select * from empleave where id = {$id}";
        //   echo $query;
          $result =mysqli_query($con,$query) or die("connection failed");

          if(mysqli_num_rows($result)>0){

          
        ?>
        <div class="hd">
        <h1>Leave Status</h1>
          </div>
        <table id="ty">
        
    <thead>
        <tr>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Total Days</th>
            <th>Reason</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row =mysqli_fetch_assoc($result)){
        //   print_r($row);
        ?>

        <tr>
            <td><?php echo $row['startdate'];?></td>
            <td><?php echo $row['enddate'];?></td>
            <td><?php  echo $row['totaldays'];?></td>
            <td><?php  echo $row['reason'];?></td>
            <td><?php echo $row['status'];?></td>
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