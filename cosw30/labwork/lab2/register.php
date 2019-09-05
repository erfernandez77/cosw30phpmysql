<!doctype html> 
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
    </head>
    
    <body>
        
        <h1>Registration Form</h1>
        
            <p>Register Today</p>
        
        <form action="process_register.php" method="POST">
            
            <label for="first_name">First Name: </label>
            <input type="text" id="first_name" name="first_name" required>
            
            <br><br>
            
            <label for="last_name">Last Name: </label>
            <input type="text" id="last_name" name="last_name" required>
            
            <br><br>
            
            <label for="email">Email Address: </label>
            <input type="email" id="email" name="email" placeholder="example@example.com" required>
            
            <br><br>
            
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" required>
            
            <br><br>
            
            <label for="confirm_password">Confirm Password: </label>
            <input type="password" id="confirm_password" name="confirm_password">
            
            <br><br>
            
            
            <button>Register!</button>
        </form>
        
        
        
    </body>
</html>