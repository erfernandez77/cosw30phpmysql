<?php 

    $numParagraphs = $_POST['paragraphs'];
    $text = $_POST['text'];
    
    //explode function creates an array from a string 
    // (delimiter, string to be manipulated)
    $textExplode = explode(' ', $text);   
    
    //prints array with key/value pairs
    
    //echo "Original Array: <br>";
    //print_r($textExplode);
    
    shuffle($textExplode); //returns boolean value T or F 
    
  
    
    //Use implode function, to turn array back into a string 
    //(delimiter/glue, string to be manipulated)
    $textImplode = implode(' ', $textExplode);
    

    for($i = 0; $i < $numParagraphs; $i++)  {
        //Output a paragraph 
        echo "<p>$textImplode</p>";
    }
    
    
    
    /*
    $text = "Spicy jalapeno bacon ipsum dolor amet pork leberkas pork belly 
    prosciutto, frankfurter buffalo strip steak andouille capicola tri-tip 
    turducken rump shankle. Pork chop kielbasa cow, beef jowl hamburger 
    bresaola. Frankfurter strip steak filet mignon, cupim doner fatback 
    tongue tri-tip jerky beef ribs pork loin andouille pastrami corned beef. 
    Ground round venison prosciutto rump sirloin shoulder chicken flank strip 
    steak alcatra tongue beef pork belly pig jowl. Turducken shank drumstick 
    venison beef ribs, tail meatball pig.";
    */
    
    
?>


