<?php
session_start();
require_once 'controllers/config.php';
include 'controllers/welcome_control.php';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/home_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/form_style_2.css">
</head>
<body>
    <div class="container">
        <div class="card card-container">
        <h1>Welcome, <b><?php echo htmlspecialchars($row['fname']); ?></b>
            <b><?php echo htmlspecialchars($row['lname']); ?></b>.</h1>
            <hr>
            <button type="button" class="center btn btn-primary btn-block" 
                    data-toggle="modal" data-target="#depositModal">Deposit</button>
            <button type="button" class="center btn btn-info btn-block">Withdraw</button>
            <hr>
            <p><a href="logout.php" class="btn btn-danger btn-block">Sign Out</a></p>
    </div>
    </div>
    
    <!-- Modal-->
        <div id="depositModal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Deposit</h4>
              </div>
              <div class="modal-body">
                  
              </div>
              <div class="modal-footer">
              </div>
            </div>

          </div>
        </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>