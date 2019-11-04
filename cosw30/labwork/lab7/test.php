<?php
 function addtwo($a = 0, $b = 0)
 {
 return ($a * $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
?>
<html>
 <title>PHP - Add two numbers</title>
 <body>
 <form action="test.php" method="post">
 <input type="text" name="value1" value="0" />
 <input type="text" name="value2" value="0" />
 <input type="submit" value="Calculate values"/>
 </form>
 <?php
 echo $value1 . " + " . $value2 . " = ";
 echo addtwo($value1+$value2); 
 ?>
 </body>
</html>