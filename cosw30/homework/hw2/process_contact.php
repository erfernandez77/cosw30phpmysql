<?php

    //Capture data from our form 
    
    //required fields
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
        if($gender=="none") {
            $gender = "Prefer Not to Say";
        }
        
    
    
    
    //not required fields
    $donation = $_POST['donation'];
    $comments = $_POST['comments'];
    
    $mail_list = $_POST['mail_list'];
        if (isset($mail_list)) {
            $mail_list = "Yes";
        } else {
            $mail_list = "No";
        }
        
    $interest1 = $_POST['interest1'];  
    $interest2 = $_POST['interest2'];
    $interest3 = $_POST['interest3'];
    $interest4 = $_POST['interest4'];
    $interest5 = $_POST['interest5'];
    $interest6 = $_POST['interest6'];
        
        
        
    
    //Output Error message if a required field is empty 
    if(empty("$fname") || empty("$lname") || empty("$email") || empty("$age") || empty("$gender")){
        echo "<h1>Oh, no!</h1>";
        echo "<p>One or more required fields were left empty.</p>";
        echo "<p>Please fill out all required fields.</p>";
        echo '<a href="contact.html">Go Back</a>';
    } else {
        //All required fields were not empty
         echo "<h1>Thank you $fname for supporting Jon Snow!</h1>";
            
            echo "<p>Your Information: </p>";
            echo "<p>First Name: $fname</p>";
            echo "<p>Last Name: $lname</p>";
            echo "<p>Email Address: $email</p>";
            echo "<p>Gender: $gender</p>";
            echo "<p>Age: $age</p>";
            
            echo "<p>Interests: </p>";
                if (isset($interest1)) {
                    //$interest1 = "Sword Fighting/Training";
                    echo "<p>Sword Fighting/Training</p>";
                }
                if (isset($interest2)) {
                    //$interest2 = "Praying in the godswood ";
                    echo "<p>Praying in the godswoods </p>";
                } 
                if (isset($interest3)) {
                    //$interest3 = "Fighting the Nightwalkers";
                    echo "<p>Fighting the Nightwalkers</p>";
                } 
                if (isset($interest4)) {
                    //$interest4 = "Playing with Direwolves";
                    echo "<p>Playing with Direwolves</p>";
                } 
                if (isset($interest5)) {
                    //$interest5 = "Riding dragons";
                    echo "<p>Riding dragons</p>";
                } 
                if (isset($interest6)) {
                    //$interest6 = "Listening to Old Nan's stories";
                    echo "<p>Listening to Old Nan's stories</p>";
                }
            
            
            echo "<p>Contribution Amount: \$$donation</p>";
            echo "<p>Added to mailing List: $mail_list</p>";
            echo "<p>Comments: $comments</p>";
    }
    
  

?>