<?php

// Define variables and initialize with empty values
$username = $fname = $lname = $password = $confirm_password = "";
$username_err = $fname_err = $lname_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    //validate first name
    if(empty(trim($_POST['fname']))){
        $fname_err = "First name is required.";     
    }  else{
        $fname = trim($_POST['fname']);
    }
    //validate last name
    if(empty(trim($_POST['lname']))){
        $lname_err = "Last name is required.";     
    }  else{
        $lname = trim($_POST['lname']);
    }
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please create a CID.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "This CID is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a PIN.";     
    } elseif(strlen(trim($_POST['password'])) <> 4 ){
        $password_err = "Pin must be 4 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm PIN.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'PIN did not match.';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($fname_err) && empty($lname_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username , password , fname , lname) VALUES (:username, :password , :fname , :lname)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $param_password, PDO::PARAM_STR);
            $stmt->bindParam(':fname', $param_fname, PDO::PARAM_STR);
            $stmt->bindParam(':lname', $param_lname, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = $username;
            $param_fname = $fname;
            $param_lname = $lname;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                session_start();
                $_SESSION['username'] = $username;      
                header("location: welcome.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>