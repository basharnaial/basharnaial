<?php 

// Data Type [1] String

$var1 = "I Love PHP"; // Data Type [1] String

$var2 = 100; // Data Type [2] Integer 

$var3 = True;  // Data Type [3] Boolean

$var4 =  10.5; // Data Type [4] Floating Poing Number DBL

$var5 = array(

    "A" => "Val1",
    "B" => "Val2",
    "C" => "Val3",
); // Data Type [5] Array 

// $var6 = "Hello PHP";
$var6 = NULL; // Data Type [6] NULL

class Book {

function Book() {
$this->genre = "Programmeing";

 }
}

$var7 = new Book(); 

// $var8 = mysqli_connect("localhost", "Bashar", "Pass123", "mydb");

$var8 = fopen('bashar.txt', 'r'); // Data Type Resource 

// Heading
echo "<h2>Get Type </h2>";

// function Name 
echo gettype($var1) . "<br/>";

echo gettype($var2) . "<br/>";

echo gettype($var3) . "<br/>";

echo gettype($var4) . "<br/>";

echo gettype($var5) . "<br/>";

echo gettype($var6) . "<br/>";

echo gettype($var7) . "<br/>";

echo gettype($var8) . "<br/>";

echo "<h2>Variable Dump </h2>";

// All deatils about variable
var_dump($var1); echo "<br/>";

var_dump($var2); echo "<br/>";

var_dump($var3); echo "<br/>";

var_dump($var4); echo "<br/>";

var_dump($var5); echo "<br/>";

var_dump($var6); echo "<br/>";

var_dump($var7); echo "<br/>";

var_dump($var8); echo "<br/>";







// $var3

if(0 > 0) {

echo "good";

}
else echo "bad" . "<br>";


echo $var6;