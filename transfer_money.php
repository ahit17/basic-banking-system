<!DOCTYPE html>
<?php
include 'connection.php';
$select1="SELECT * from User_data";
$select2="SELECT * from User_data";
$query1=$conn->query($select1);
$query2=$conn->query($select2);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="transfer_money.css">
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
          <li><a href= "about.html">About</a></li>
          <li><a href= "contact_me.php">Contact me</a></li>
      </ul>
  </div> 
    <h1 class="transfer">Money Transfer</h1>
    <form class="money" action="transaction.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Sender Name</label>
    <select name="sender" class="form-control" id="exampleFormControlSelect1" required>
    <?php
                  while($result=mysqli_fetch_array($query1))
                  {
                 ?>
                  <option value="<?php echo $result['Username']?>"><?php echo $result['Username']?></option>
                   <?php
              }
              ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Reciever Name</label>
    <select name="receiver" class="form-control" id="exampleFormControlSelect1" required>
       <?php
                  while($res=mysqli_fetch_array($query2))
                  {
                 ?>
                  <option value="<?php echo $res['Username']?>"><?php echo $res['Username']?></option>
                   <?php
              }
              ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Amount</label>
    <input name="amount" type="number" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="right">
    <button type="submit" name="button">Transact</button>
  </div>
    </form>
  </body>
</html>
