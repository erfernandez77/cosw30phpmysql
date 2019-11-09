<?php
// Add the database connection
include('database.php');
/*
*GET superglobal gets data from url 
*   CHECK IF THE URL HAS A $_GET VARIABLE CALLED ID
*/
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo $id;
} else {
    // redirect to crud.php
    header('Location: crud.php');
    exit;
}
/*
*   AFTER SUBMITTING THE UPDATE FORM, UPDATE THE INFO
*   IN THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    
    
    // Validate the inputs (check if they're empty)!!!!
    if(empty($first_name) || empty($last_name) || empty($email) || 
        empty($password)) {
        echo '<p class="error">Error! One or more fields were left empty.</p>';
    } else {
        // If they aren't empty, create and run your query
        //WHERE condition is user id = $_GET id 
        // single quotes needed for SQL for strings only! 
        $update_query = "UPDATE USER_FERNANDEZ
                         SET first_name = '$first_name', 
                             last_name = '$last_name', 
                             email = '$email', 
                             password = '$password'
                        WHERE user_id = $id";

        $result = mysqli_query($connection, $update_query);
        
        if($result) {    
            echo '<p class="success">User successfully updated</p>';
            header('Location: crud.php');
            exit;
        } else {
            echo '<p class="error">Error updating user</p>';
        }
    }
    
    
    
    
    //can put an errors array 
    /*$errors = [];
    if (condition failed) {
        $errors[] = 'Error message';
    }
    if(empty($errors)) {
        if the errors array is empty = no errors then run update query 
    }
    */
    
                    
                    
                    
    // Check if the database returned anything
        // If the UPDATE query was successful, redirect to
        // the crud.php page
        // Else, output an error message
}
/*
*   QUERY THE DATABASE FOR THE USER THAT HAS THE GET ID
*/
// Create your query
//$id = $_GET['id']
$query = "SELECT * FROM USER_FERNANDEZ WHERE user_id = $id";
// Run your query
$resultDb = mysqli_query($connection, $query);
// Check if the database returned anything
if($resultDb) {
    // If the database query was successful, store
    // the users information into a variable
    //assoc() gathers a single row 
    $user = mysqli_fetch_assoc($resultDb);
    //print_r($user);
    $first_name = $user['first_name'];
    $last_name  = $user['last_name'];
    $email      = $user['email'];
    $password   = $user['password'];
} else {
    echo "<p class=\"error\">Error! Unable to access information from the database.</p>";
}
?>

<!doctype html>
<html>
<head>
    <title>Updating Users</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Cutive|Fruktur|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div id="page-container">
        <div id="content-wrap">
            <fieldset id="formOuter">
                <form class="formClass" action="update.php?id=<?php echo $id; ?>" method="POST">
                    <h1>Update User</h1>
                    <div class="labels"><label for="first_name">First Name: </label></div>
                    <div class="txtFields"><input type="text" id="first_name" name="first_name" 
                        value="<?php echo $first_name; ?>"></div><br>
        
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if(empty($first_name)) {
                                    echo '<p class="error">First Name must be entered</p>';
                                } 
                            } ?>
        

                    <div class="labels"><label for="last_name">Last Name: </label></div>
                    <div class="txtFields"><input type="text" id="last_name" name="last_name" 
                        value="<?php echo $last_name; ?>"></div><br>
        
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if(empty($last_name)) {
                                    echo '<p class="error">Last Name must be entered</p>';
                                }
                            } ?>
        

                    <div class="labels"><label for="email">Email: </label></div>
                    <div class="txtFields"><input type="email" id="email" name="email" value="<?php echo $email; ?>"></div><br>
        
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if(empty($email)) {
                                    echo '<p class="error">Email must be entered</p>';
                                }    
                            } ?>
        

                    <div class="labels"><label for="password">Password: </label></div>
                    <div class="txtFields"><input type="text" id="password" name="password" value="<?php echo $password; ?>"></div><br>
        
                        <?php
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if(empty($password)) {
                                    echo '<p class="error">Password must be entered</p>';
                                }
                            } ?>
        
        
                    <!-- for help with processing the form 
                    <input type="hidden" name="user_id" value="<?php echo $id; ?>"/>-->
        
                    <button class="subBtn">Update User</button>
        
                    <div>
                        <p id="note">*If user was successfully updated, you will be redirected to view updated table</p>
                    </div>
        
                </form>
        
                <div id="backBtnDiv"><a href="crud.php" class="subBtn" title="Information will not be updated">Go Back</a></div>
            </fieldset>
    
        </div>
        <footer>
            <p>&copy; Elisa Fernandez Long Beach, CA 2019</p>
        </footer>
    </div>
</body>
</html>