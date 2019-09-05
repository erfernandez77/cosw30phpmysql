<!doctype html> 
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <style></style>
    </head>
    
    <body>
        
        <h1>Login Form</h1>
        
             <p>Please enter your email address and password</p>
        
        <form action="process_login.php" method="POST">

            
            <label for="email">Email Address: </label>
            <input type="email" id="email" name="email" placeholder="example@example.com" required>
            
            <br><br>
            
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" required>
            
            <br><br>
            
            <button>Log In!</button>
            
            <!--<input type="submit" value="Submit">-->
        </form>
        
        
        
    </body>
</html>