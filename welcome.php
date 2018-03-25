<?php
session_start();
require_once 'controllers/config.php';
require 'controllers/welcome_control.php';
require 'controllers/transaction.php';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ATM SIMULATOR</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/home_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/form_style_2.css">
</head>
<body>
    <div class="container">
        <div class="card card-container">
        <h1>Welcome, <b><?php echo ucfirst($row['fname']); ?></b>
            <b><?php echo ucfirst($row['lname']); ?></b>.</h1>
            <hr>
            <button type="button" class="center btn btn-info btn-block"
                    data-toggle="modal" data-target="#balanceModal">Check Balance</button>
            <button type="button" class="center btn btn-primary btn-block" 
                    data-toggle="modal" data-target="#depositModal">Deposit</button>
            <button type="button" class="center btn btn-info btn-block"
                    data-toggle="modal" data-target="#withdrawModal">Withdraw</button>
            <hr>
            <p><a href="logout.php" class="btn btn-danger btn-block">Sign Out</a></p>
    </div>
    </div>
    
    <!-- Balance Modal-->
        <div id="balanceModal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                
                <h3 class="modal-title text-center">Account Balance</h3>
              </div>
                <div class="modal-body"><br>
                  <div class="well"><h4>₱ <?php echo number_format($row['balance'],2); ?></h4>
                  </div>
              </div>
              <div class="modal-footer">
                  <div class="text-center">
                  <button type="button" class="btn btn-link btn-xs" data-dismiss="modal">Close</button>
              </div>
              </div>
            </div>

          </div>
        </div>
    
    <!-- Deposit Modal-->
        <div id="depositModal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">How much will you deposit?</h4>
              </div>
              <div class="modal-body">
                  
                  <form method="post">
                      <div class="form-group"><br><div class="input-group">
                          <span class="input-group-addon"><i>₱</i></span>
                          <div class="quantity">
                          <input id="deposit" name="deposit" type="number" step="100" min="0" 
                                 autofocus="" class="form-control input-lg">
                          </div>
                          </div>
                          <div class="text-center"><br><button type="submit" class="btn btn-primary">Deposit</button>
                          </div></div>
                  </form>
                  
              </div>
              <div class="modal-footer">
                  <div class="text-center">
                  <button type="button" class="btn btn-link btn-xs" data-dismiss="modal">Close</button>
              </div>
              </div>
            </div>

          </div>
        </div>
    
    <!-- Withdraw Modal-->
        <div id="withdrawModal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">How much will you withdraw?</h4>
              </div>
              <div class="modal-body">
                  
                  <form method="post">
                      <div class="form-group"><br><div class="input-group">
                          <span class="input-group-addon"><i>₱</i></span>
                          <input id="withdraw" name="withdraw" placeholder="" type="number" step="100" min="0" 
                                 autofocus="" class="form-control input-lg"></div>
                          <div class="text-center"><br><button type="submit" class="btn btn-primary">Withdraw</button>
                          </div>
                      </div>
                  </form>
                  
              </div>
              <div class="modal-footer">
                  <div class="text-center">
                  <button type="button" class="btn btn-link btn-xs" data-dismiss="modal">Close</button>
              </div>
              </div>
            </div>

          </div>
          </div></div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/blur.js"></script>
</body>
</html>