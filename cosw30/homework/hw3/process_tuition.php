<?php 
//Elisa Fernandez 
//09/14/2019
//COSW 30 - 72223
//Tuition Calculator Assignment 

//Capture data from our form 

$resident = $_POST['resident'];
$units = $_POST['units'];
$services = $_POST['services'];
$parking = $_POST['parking'];

//Mandatory Health fee
$healthFee = 20;
    
//Calculations

$tuition = $units * $resident;
$registration = $tuition + $healthFee + $services + $parking;
$award = rand(0, $registration);
$total = $registration - $award;

//Output fees and total balance

echo "<h1>LBCC Tuition Calculator Results:</h1>";
echo "<p>Cost of Tuition: $units x \$$resident = <strong>\$$tuition</strong></p>";
echo "<p>Student Health Fee: <strong>\$$healthFee</strong></p>";
echo "<p>College Services Card: <strong>\$$services</strong></p>";
echo "<p>Parking Permit: <strong>\$$parking</strong></p>";
echo "<p><strong>Total Registration Costs: \$$registration</strong></p>";
echo "<p>Scolarship Award: <strong>\$$award</strong></p>";
echo "<p><strong>Total Tuition Due: \$$total</strong></p>";

?>