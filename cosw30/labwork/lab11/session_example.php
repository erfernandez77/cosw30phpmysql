<?php
session_start();
// session_start() must always be the first
// thing declared on the PHP page. If it is not 
// first you will run into issues
?>
<!doctype html>
<html>
<head></head>
<body>

<?php
//session is a super global variable 
$_SESSION = [];
// add to session specify index and assign it a value 

// remove all session variables
session_unset();
// destroy the session
session_destroy();
?>

</body>
</html>