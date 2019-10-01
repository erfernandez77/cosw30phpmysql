<?php
    $email = "";
    $password = "";
    $correctEmail = "test@test.com";
    $correctPassword = "123456";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Store post data into our variables
        $email = $_POST['email'];
        $password = $_POST['password'];
        //Validate
        if(empty($email)) {   //email is empty
            //Output an error message
            $error = 'Email must be entered';
        }
        if(empty($password)) {   //password is empty
            //Output an error message
            $errorpswd = 'Password must be entered';
        } else {
        if ($correctEmail == $email && $correctPassword == $password) {
             $success = "You have successfully logged in!";
        } else {
             $wrongLogin = "Your login information is not correct!";
        }
        }
    }
?>