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
        if(empty($first_name)){
            $error_firstname = 'First name must be entered';
        }
        if(empty($last_name)) {   //email is empty
            //Output an error message
            $error_lastname = 'Last Name must be entered';
        }
        if(empty($email)) {   //email is empty
            //Output an error message
            $error = 'Email must be entered';
        }
        if(empty($password)) {   //email is empty
            //Output an error message
            $error_password = 'Password must be entered';
        }
        if(empty($confirm_password)) {   //email is empty
            //Output an error message
            $error_confirmpassword = 'Comfrim Password must be entered';
        }
        if(!isset($error_firstname) && !isset($error_lastname) &&
            !isset($error) && !isset($error_password) && !isset($error_confirmpassword)) {
                    $congrats = "You have successfully registered!";
        }
    }
?>