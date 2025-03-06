<?php
print "Hello";
require_once("config.php");
//local variable
function myFunction() {
    $localVar = " <br>I am a student <br>"; 
    echo $localVar; 
}
myFunction();

//function parameter
function greet($name) {
    echo "Hello, " . $name . "! <br>";
}
greet("Safalta");

//global variables
// $globalVar = "I am a global variable"; 

// function myFunction() {
//     global $globalVar; 
//     echo $globalVar;
// }

// myFunction(); 

//static variales
function counter() {
    static $count = 0; 
    $count++; 
    echo $count . "<br>";
}
counter(); 
counter(); 
counter(); 

//arithmetic operator
$a=15;
$b=100;
echo $a+$b;
echo "<br>";
//comparison operator
$a=55;
$b=45;
echo ($a>$b)? 'True':'False';
echo "<br>";

//logical
$a = 10;
$b = 5;
$c = 20;
echo ($a > $b && $a < $c) ? 'True' : 'False'; 
echo "<br>";

//assignment operators
$a = 10;
$a += 5; 
echo $a;
echo "<br>";

//conditional operator
$a = 10;
$b = 5;    
$result = ($a > $b) ? 'a is greater than b' : 'b is greater than or equal to a';
echo $result;
?>
