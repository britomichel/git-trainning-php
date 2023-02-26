<!DOCTYPE html>
<html>
<body>

<?php

/* TIPOS DE DADOS	
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "<h2>$txt1</h2>";

echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "Study PHP at " . $txt2 . "<br>";


// - - - - - - - - - - - - - - - - - - - - - - - -

$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
} 

echo "<p>antes da funcao myTest, x = $x e y = $y</p>";
myTest();  // run function
echo "<p>depois da funcao myTest, x = $x e y = $y</p>";

function myTestIncrease() {
  static $x = 0;
  echo "<p>x = $x</p>";
  $x++;
}

myTestIncrease();
myTestIncrease();
myTestIncrease();

$x = 5985;
var_dump($x);
$x = 3.421;
var_dump($x);

echo "<h3>testar var_dump(var) em um array</h3>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

?>

</body>
</html>