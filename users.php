<!DOCTYPE html>
<?php
include 'connection.php';
$select="select * from user_data ";
$query=$conn->query($select);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="users.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC BANKING SYSTEM</title>
</head>
<body>
<div class="header">
    <div class = "logo">
       <img src="images/spark logo.png">
    </div>
    <h1><b>SPARKS BANK OF INDIA</b></h1>
    <nav class="navbar">
      <ul>
        
          <li><a href= "index.html">Home</a></li>
          <li><a href= "about.html">About Us</a></li>
          <li><a href= "contact_me.php">Contact us</a></li>
      </ul>
  </div> 
  <h2><b>USER'S DATA</b></h2>
  <table class="table_tb">
    <thead>
    <tr>
      <th scope="col">Sl.No</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">ACC NO</th>
      <th scope="col">Balance</th>
      <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody><?php
                  while($res=mysqli_fetch_array($query))
                  {
                 ?>
    <tr>
      <th scope="row"><?php echo $res['Sn No']?></th>
      <td><?php echo $res['Username']?></td>
      <td><?php echo $res['email id']?></td>
      <td><?php echo $res['ACC No.']?></td>
      <td><?php echo $res['Balance']?></td>
      <td><form action="transfer_money.php"><button type="submit" name="button">Transact</button></form></td>
    </tr>
    <?php
                  }
                  ?>
    
    </tbody>
    </table>

</div>

</body>
</html>