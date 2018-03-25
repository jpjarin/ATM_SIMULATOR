<?php
// Include config file
require_once 'controllers/config.php';
require 'controllers/register_control.php';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/myStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/form_style.css">
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <h2 class="text-center">Sign Up</h2>
            <p class="text-center">Please fill this form to create an account.</p>
        <form class="form-sigin" name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input name="fname" onfocus="this.value=''" type="text" class="form-control" value="<?php echo $fname; ?>" placeholder="<?php echo $fname_err; ?>">
                
            </div>
            
            <div class="form-group <?php echo (!empty($lname_err)) ? 'has-error' : ''; ?>">
                <label>Last Name</label>
                <input name="lname" onfocus="this.value=''" type="text" class="form-control" value="<?php echo $lname; ?>" placeholder="<?php echo $lname_err; ?>">
                
            </div>
            
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>CID</label>
                <div class="form-inline">
                <input type="hidden" name="length" value="5">
                <input readonly name="username" type="text" class="form-control" value="<?php echo $username; ?>" placeholder="<?php echo $username_err; ?>">
                <input type="button" class="btn btn-info" value="Generate" onClick="generate();">
   
                
                </div>
            </div>   
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>4-Digit PIN</label>
                <input type="password" onfocus="this.value=''" name="password" class="form-control" maxlength="4" value="<?php echo $password; ?>" placeholder="<?php echo $password_err; ?>">
                
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm PIN</label>
                <input type="password" onfocus="this.value=''" name="confirm_password" class="form-control" maxlength="4" value="<?php echo $confirm_password; ?>" placeholder="<?php echo $confirm_password_err; ?>">
               
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
    </div>
    <script src="js/usernameGenerator.js"></script>   
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>