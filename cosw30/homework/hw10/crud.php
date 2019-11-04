<?php
// Add the database connection
include('database.php');
/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
//grab information from the form 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_pswd = $_POST['confirm_pswd'];
    
    
    if(empty($first_name) || empty($last_name) || empty($email) || 
        empty($password) || empty($confirm_pswd)) {
        echo '<p class="error">Error! One or more fields were left empty.</p>';
    } elseif ($confirm_pswd != $password) {
                echo '<p class="error">Error! Passwords do not match</p>';
    } else {
        $insert_query = "INSERT INTO USER_FERNANDEZ (first_name, last_name, email, password)
                    VALUES ('$first_name', '$last_name', '$email', '$password')";

        $result = mysqli_query($connection, $insert_query);
        
        if($result) {    
            echo '<p class="success">New user added to the database</p>';
            //print_r($result);
        } else {
            echo '<p class="error">Error entering new user</p>';
        }
    }
} //end of if($_SERVER)
/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/

// Create your query
$query = 'SELECT * FROM USER_FERNANDEZ';

// Run your query
$resultDb = mysqli_query($connection, $query);

// Check if the database returned anything
if($resultDb) {
    $rows = mysqli_fetch_all($resultDb, MYSQLI_ASSOC);
 } else {
    echo '<p class="error">Unable to collect information from the database.</p>';
}
?>

<!doctype html>
<html>
<head>
    <title>Sign Up!</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Cutive|Fruktur|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <fieldset id="formOuter">
    <form action="crud.php" method="POST">
        <h1>Sign Up for Daily <span id="spTitle">$Coupons$</span></h1>
        <div class="labels"><label for="first_name">First Name: </label></div>
        <div class="txtFields"><input type="text" id="first_name" name="first_name"></div><br>
        
            <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(empty($first_name)) {
                    echo '<p class="error">First Name must be entered</p>';
                } 
            } ?>

        <div class="labels"><label for="last_name">Last Name: </label></div>
        <div class="txtFields"><input type="text" id="last_name" name="last_name"></div><br>
        
            <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(empty($last_name)) {
                    echo '<p class="error">Last Name must be entered</p>';
                }
            } ?>

        <div class="labels"><label for="email">Email: </label></div>
        <div class="txtFields"><input type="email" id="email" name="email"></div><br>
        
            <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(empty($email)) {
                    echo '<p class="error">Email must be entered</p>';
                }    
            } ?>

        <div class="labels"><label for="password">Password: </label></div>
        <div class="txtFields"><input type="password" id="password" name="password"></div><br>
        
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(empty($password)) {
                    echo '<p class="error">Password must be entered</p>';
                }
            } ?>
        
        <div class="labels"><label for="confirm_pswd">Confirm Password: </label></div>
        <div class="txtFields"><input type="password" id="confirm_pswd" name="confirm_pswd"></div><br>
        
            <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(empty($confirm_pswd)) {
                    echo '<p class="error">Confirm Password must be entered</p>';
                } elseif ($confirm_pswd != $password) {
                    echo '<p class="error">Passwords do not match</p>';
                }
            }
            ?>
            

        <div><button class="regBtn">Register</button></div>
    </form>


    <h2>List of Registered Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($rows as $row) {
                echo '<tr>
                        <td>'.$row['first_name'].'</td>
                        <td>'.$row['last_name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['password'].'</td>
                    </tr>';
            }
            ?>
        </tbody>
    </table>
    </fieldset>
</body>
</html>