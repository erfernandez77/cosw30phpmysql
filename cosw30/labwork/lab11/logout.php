<?php
//always have session_start() with any file you are using sessions
session_start();

// Unset the session
session_unset();

// Destroy the session
session_destroy();

// Output successful logout message

include('includes/header.php');
?>

<main class="container">

    <h1>You successfully logged out!</h1>

</main>

<?php include('includes/footer.php'); ?>