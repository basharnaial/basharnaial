<?php

/*

  syntax: define (name, Value, Case-insensitive)
  By Default False
*/

define("SITE_STATUS", "open");

if(SITE_STATUS == "open")
{



  $firstName = "Bashar";
 echo $firstName . "<br>"; // Variable


    $firstName = "hassan";
    echo $firstName . "<br>"; // varible 




  define("FIRST_NAME", "Bashar");
  echo FIRST_NAME; // Constant 

echo "<br>";

  define("FIRST_NAME", "Mohammed");
  echo FIRST_NAME;


    $firstName = "hassan";
    echo $firstName . "<br>"; 

    echo PHP_INT_MAX;

echo "<br>";

    echo __FILE__;


} else { 

echo "Sorry Website is Close for Maintenance";

}