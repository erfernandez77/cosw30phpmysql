

<?php
    $choice = $_POST['choice'];
    $firstNum = $_POST['firstNum'];
    $secondNum = $_POST['secondNum'];
    
    function outputDis($firstNum, $secondNum, $choice){
        echo "<p>First Number: $firstNum</p>";
        echo "<p>Second Number: $secondNum</p>";
        echo "<p>Operator: $choice</p>";
    }
    
    function multiply($firstNum, $secondNum) {
        return ($firstNum * $secondNum);
    }
    
    function add($firstNum, $secondNum) {
        return ($firstNum + $secondNum);
    }
    
    function subtract($firstNum, $secondNum) {
        return ($firstNum - $secondNum);
    }
    
    function divide($firstNum, $secondNum) {
        return ($firstNum / $secondNum);
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Homework 7 - Function Machine</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Grenze|Josefin+Slab&display=swap" rel="stylesheet"> 
        
    </head>    
    
    <body>
        
        <div id="form-container">
        
        <form action="functions.php" method="POST">
            <h1>Function Machine</h1>
            
            <label for="firstNum">Enter first number: 
                <input type="number" id="firstNum" name="firstNum" required>
            </label>
            
            <br>
            
            <label for="secondNum">Enter second number: 
                <input type="number" id="secondNum" name="secondNum" required>
            </label>
            
            <br>
            
            <label>Choose an operator: 
                <select name="choice" required>
                    <option value="Multiplication">Multiplication</option>
                    <option value="Addition">Addition</option>
                    <option value="Subtraction">Subtraction</option>
                    <option value="Division">Division</option>
                </select>
            </label>
            
            <br>
            

            <input class="btn" type="submit" value="Calculate Now!">
            
            <br>
            
        
        
        <?php 
            
            if ($choice == "Multiplication") {
                echo outputDis($firstNum, $secondNum, $choice);
                $total =  multiply($firstNum, $secondNum);
                echo "<h3 class=\"output\">$firstNum * $secondNum = $total</h3>";
            }
            
            elseif ($choice == "Addition") {
                echo outputDis($firstNum, $secondNum, $choice);
                $total =  add($firstNum, $secondNum);
                echo "<h3 class=\"output\">$firstNum + $secondNum = $total</h3>";
            }
            
            elseif ($choice == "Subtraction") {
                echo outputDis($firstNum, $secondNum, $choice);
                $total =  subtract($firstNum, $secondNum);
                echo "<h3 class=\"output\">$firstNum - $secondNum = $total</h3>";
            }
            
            elseif ($choice == "Division") {
                echo outputDis($firstNum, $secondNum, $choice);
                $total =  divide($firstNum, $secondNum);
                echo "<h3 class=\"output\">$firstNum / $secondNum = $total</h3>";
            }
        
        ?>
        
        <a class="btn" href="functions.php">Try Again!</a>
        
        </form>
        
        </div>
        
    </body>
    
</html>