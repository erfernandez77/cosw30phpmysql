<?php include('includes/header.php'); ?>
<?php include('includes/inc_login.php'); ?>

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

<main>
<img src="https://images.pexels.com/photos/1449058/pexels-photo-1449058.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="halloween" height="35%" width="35%">
    <h1>Login Here!</h1>

    <?php
        if(isset($error)) {echo "<p class=\"error\">$error</p>";}   //email not entered
        if(isset($errorpswd)) {echo "<p class=\"error\">$errorpswd</p>";}  //password not entered
        if(isset($success)) {echo "<p><strong>$success</strong></p>";}  //successful login
        if(isset($wrongLogin)) {echo "<p class=\"error\">$wrongLogin</p>";} //wrong login information
    ?>

    <form action="login.php" method="POST">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="example@example.com" value="<?php echo $email; ?>">

        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?php echo $password; ?>">

        <br>

        <button id="loginBtn">Login!</button>

    </form>

</main>

<?php include('includes/footer.php'); ?>