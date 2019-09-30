<?php
    $first_name = "";
    $last_name = "";
    $email = "";
    $password = "";
    $comfirmpassword = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Store post data into our variables
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        //Validate
        if(empty($first_name)){   //first name is empty
            $error_firstname = 'First name must be entered';
        }
        if(empty($last_name)) {   //last name is empty
            //Output an error message
            $error_lastname = 'Last Name must be entered';
        }
        if(empty($email)) {   //email is empty
            //Output an error message
            $error = 'Email must be entered';
        }
        if(empty($password)) {   //password is empty
            //Output an error message
            $error_password = 'Password must be entered';
        }
        if(empty($confirm_password)) {   //confirm password is empty
            //Output an error message
            $error_confirmpassword = 'Comfrim Password must be entered';
        }
        if($confirm_password != $password) {
            //Output an error message
            $error_pswds = 'Passwords do not match';
        }
        if(!isset($error_firstname) && !isset($error_lastname) &&
            !isset($error) && !isset($error_password) && !isset($error_confirmpassword) &&
            !isset($error_pswds)) {  //no errors
                    $congrats = "You have successfully registered!";
        }
    }
?>