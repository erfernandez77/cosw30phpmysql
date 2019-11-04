<?php 

//name array
$names = ['Ele', 'Diana', 'Bayleigh', 'Patrick', 'Ryan'];

//$nametest = "Mario";

function greeting($nametest) {
    echo "<p>Hello, my name is " .$nametest. " </p>";
}

// greeting("Mario");
// greeting("Elisa");
// greeting("Stephanie");


foreach($names as $name) {
    greeting($name);
}


//<p>Hello, my name is </p>

?>

