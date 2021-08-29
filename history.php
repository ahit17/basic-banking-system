<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="history.css">
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
	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';

            $sql ="select * from all_transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['T_No']; ?></td>
            <td class="py-2"><?php echo $rows['Sender']; ?></td>
            <td class="py-2"><?php echo $rows['Reciever']; ?></td>
            <td class="py-2"><?php echo $rows['Amount']; ?> </td>
            
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

</body>
</html>