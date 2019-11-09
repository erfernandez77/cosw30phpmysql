<?php
// Add the database connection
include('database.php');

/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
//grab information from the form 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name   = $_POST['first_name'];
    $last_name    = $_POST['last_name'];
    $email        = $_POST['email'];
    $password     = $_POST['password'];
    $confirm_pswd = $_POST['confirm_pswd'];
    
    
    if($_POST['fformName'] == "fformValue") {
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
            } else {
                echo '<p class="error">Error entering new user</p>';
            }
        }
    }
    
    
    if($_POST['deleteName'] == "deleteValue") {
        $user_id = $_POST['user_id'];
        $delete_query = "DELETE FROM USER_FERNANDEZ
                            WHERE user_id = '$user_id'";
        $resultDel = mysqli_query($connection, $delete_query);
        if($resultDel) {    
                echo '<p class="success">User was deleted</p>';
        } else {
            echo '<p class="error">Error deleting user. Try again later</p>';
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
//all() gathers all data in the table
//assoc() gathers only a single row
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
    <script src="https://kit.fontawesome.com/ca843b2e4f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="page-container">
        <div id="content-wrap">
            <fieldset id="formOuter">
                <form class="formClass" action="crud.php" method="POST">
                    <h1>Sign Up for Daily <span id="spTitle">$Coupons$</span></h1>
                    <div class="labels"><label for="first_name">First Name: </label></div>
                    <div class="txtFields"><input type="text" id="first_name" name="first_name"></div><br>
        
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if($_POST['fformName'] == "fformValue") {
                                    if(empty($first_name)) {
                                        echo '<p class="error">First Name must be entered</p>';
                                    } 
                                }
                            } 
                        ?>

                    <div class="labels"><label for="last_name">Last Name: </label></div>
                    <div class="txtFields"><input type="text" id="last_name" name="last_name"></div><br>
        
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if($_POST['fformName'] == "fformValue") {
                                    if(empty($last_name)) {
                                        echo '<p class="error">Last Name must be entered</p>';
                                    }
                                }    
                            } 
                        ?>

                    <div class="labels"><label for="email">Email: </label></div>
                    <div class="txtFields"><input type="email" id="email" name="email" placeholder="example@example.com"></div><br>
        
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if($_POST['fformName'] == "fformValue") {
                                    if(empty($email)) {
                                        echo '<p class="error">Email must be entered</p>';
                                    }    
                                }    
                            } 
                        ?>

                    <div class="labels"><label for="password">Password: </label></div>
                    <div class="txtFields"><input type="password" id="password" name="password"></div><br>
        
                        <?php
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if($_POST['fformName'] == "fformValue") {
                                    if(empty($password)) {
                                        echo '<p class="error">Password must be entered</p>';
                                    }
                                }    
                            } 
                        ?>
        
                    <div class="labels"><label for="confirm_pswd">Confirm Password: </label></div>
                    <div class="txtFields"><input type="password" id="confirm_pswd" name="confirm_pswd"></div><br>
        
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if($_POST['fformName'] == "fformValue") {
                                    if(empty($confirm_pswd)) {
                                        echo '<p class="error">Confirm Password must be entered</p>';
                                    } elseif ($confirm_pswd != $password) {
                                        echo '<p class="error">Passwords do not match</p>';
                                    }
                                }    
                            }
                        ?>
            

                    <div>
                        <input type="hidden" name="fformName" value="fformValue"/>
                        <button class="subBtn">Register</button>
                    </div>
                </form>


            <h2>List of Registered Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Edit</th>
                            <th>Delete</th>
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
                                    
                                    <td class="edCol"><a href="update.php?id='.$row['user_id'].'">Edit</a></td>
                        
                                    <td class="delCol"><form action="crud.php" method="POST">
                                        <input type="hidden" name="user_id" value="'.$row['user_id'].'"/>
                                        <input type="hidden" name="deleteName" value="deleteValue"/>
                                        <button class="delBtn"><i class="far fa-trash-alt delIcon"></i>Delete</button></form></td>
                                    </tr>';
                            }
                        ?>
            
                        <!-- for help with processing the form 
                        <input type="hidden" name="user_id" value="<?php echo $id; ?>"/>
                        <td class="delCol"><a href="crud.php?id='.$row['user_id'].'">Delete</a></td>-->
            
                    </tbody>
                </table>
            </fieldset>
    
        </div>
        <footer>
            <p>&copy; Elisa Fernandez Long Beach, CA 2019</p>
        </footer>
    </div>
</body>
</html>