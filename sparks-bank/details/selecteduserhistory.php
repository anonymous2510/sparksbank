




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4..2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
</head>

<body>

      <!-- navbar --> 
      <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="../index.html">SPARKS BANK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="../index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewuser.php">View Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transfermoney.php">Transfer Money</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php">Transaction History</a>
              </li>
          </div>
       </nav>


  <div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
              
                <th class="text-center">User</th>
                <th class="text-center">Current balance</th>
               
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';
            $f = $_COOKIE['from'];

            $o = $_COOKIE['o'];

            $query = mysqli_query($conn, "SELECT name, balance FROM users where id = $f");
            $q = mysqli_query($conn, "SELECT name, balance FROM users where id = $o");
            

            $rows = mysqli_fetch_array($query);
            $row = mysqli_fetch_array($q);
                    ?>

            <tr>
          
            <td class="py-2"><?php echo $rows['name']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?></td></tr>
            <tr> 
                <td class="py-2"><?php echo $row['name']; ?></td>
            <td class="py-2"><?php echo $row['balance']; ?></td></tr>
                
        <?php
           

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3..1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSsnCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4..3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>