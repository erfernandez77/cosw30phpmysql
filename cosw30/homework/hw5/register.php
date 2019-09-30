 <?php include('includes/header.php'); ?>
 <?php include('includes/inc_registration.php'); ?>

 <main>
 <h1>Registration Form</h1>

            <p>Register Today</p>
          <?php
                if(isset($error_firstname)) {
                    echo "<p class=\"error\">$error_firstname</p>";
                }
                if(isset($error_lastname)) {
                    echo "<p class=\"error\">$error_lastname</p>";
                }
                if(isset($error)) {
                    echo "<p class=\"error\">$error</p>";
                }
                if(isset($error_password)) {
                    echo "<p class=\"error\">$error_password</p>";
                }
                if(isset($error_confirmpassword)) {
                    echo "<p class=\"error\">$error_confirmpassword</p>";
                }
                if(isset($error_pswds)) {
                    echo "<p class=\"error\">$error_pswds</p>";
                }
                if(isset($congrats)) {
                   echo "<p><strong>$congrats</strong></p>";
                }
          ?>
        <form action="register.php" method="POST">

            <label for="first_name">First Name: </label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>">

            <br><br>

            <label for="last_name">Last Name: </label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>">

            <br><br>

            <label for="email">Email Address: </label>
            <input type="email" id="email" name="email" placeholder="example@example.com" value="<?php echo $email; ?>">

            <br><br>

            <label for="password">Password: </label>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>" >

            <br><br>

            <label for="confirm_password">Confirm Password: </label>
            <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $confirm_password; ?>">

            <br><br>


            <button id="regBtn">Register!</button>
        </form>

        </main>

    <?php include('includes/footer.php'); ?>