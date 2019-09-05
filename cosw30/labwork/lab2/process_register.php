<?php

    //Capture the data from our form 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    
    
    
    //Check if the data is good (isn't empty, matches our credentials)
    //Output a little message for clarification 
    
    if (empty("$first_name") || empty("$last_name") ||empty("$email") ||
        empty("$password") ||empty("$confirm_password")) {
            
            //Once or more fields are empty 
            echo '<p>One or more fields were left empty.  All fields must be filled in.  
            Please try again!</p>';
            echo '<a href="register.php">Go Back</a>';
            
        } else {
            //All fields were filled out 
            //Check to see if passwords and confirm passwords are the same
            
            if ($password == $confirm_password){
                //passwords match 
                echo '<h1>You have successfully logged in!</h1>';
                echo "<p>Welcome $first_name $last_name!</p>";
                echo "<p>Your Email Address: $email</p>";
                echo "<p>Your Password: $password</p>";
                
            } else {
                //passwords do not match ... try again 
                echo '<h1>Passwords did not match.</h1>';
                echo '<p>Please try again...</p>';
                echo '<a href="register.php">Go Back</a>';
            }
        }
    
 
?>