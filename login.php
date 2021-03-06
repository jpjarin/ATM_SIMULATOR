<?php
require_once 'controllers/config.php';
require 'controllers/login_control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ATM SIMULATOR</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/myStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/form_style.css">
</head>
<body>
    
    <div class="container">
        <div class="card card-container">
            <h2 class="text-center">Login</h2>
        <p class="text-center">Please fill in your credentials to login.</p>
        <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>CID</label>
                <input type="text" onfocus="this.value=''" name="username"class="form-control" value="<?php echo $username; ?>" placeholder="<?php echo $username_err; ?>">
                
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>PIN</label>
                <input type="password" onfocus="this.value=''"name="password" class="form-control" maxlength="4" placeholder="<?php echo $password_err; ?>">
                
                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Create one now</a>.</p>
        </form>
        </div>
        </div>
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>