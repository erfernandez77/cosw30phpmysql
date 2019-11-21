<?php
session_start();

// Check if the user is already logged in
// If they aren't, redirect to login.php

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}



include('includes/header.php');
include('includes/database.php');



$query = 'SELECT * FROM USER_FERNANDEZ';


$resultDb = mysqli_query($connection, $query);


if($resultDb) {
    $rows = mysqli_fetch_all($resultDb, MYSQLI_ASSOC);
 } else {
    echo '<h3> Error! Unable to collect information from the database.</h3>';
    echo '<p>Please try again later!</p>';
}

?>

<main class="container">

    <h1>You Logged In! Hello <?php echo $_SESSION['first_name']; ?></h1>

    <h2>Here's a list of other users</h2>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through and output all users -->
            <?php
                foreach($rows as $row) {
                    echo '<tr>
                            <td>'.$row['first_name'].'</td>
                            <td>'.$row['last_name'].'</td>
                            <td>'.$row['email'].'</td>
                        </tr>';
                }
            ?>
        </tbody>
    </table>

</main>

<?php include('includes/footer.php'); ?>