<?php

  $num1 = 100;
  $num2 = 500;

  if ($num1 > $num2) {

   echo "Yes " . $num1 . " Is Larger Than " . $num2;  

  } elseif ($num1 == $num2) {

   echo "Yes " . $num1 . " Is equal " . $num2; 
 


  } else {
 
  echo "No" . $num1 . " Is Smaller Than " . $num2;

  }

 echo "<br>";

  $num0 = 100000;
  $num99 = 20000;

  if ($num0 > $num99) {
    echo "Yes" . $num0 . "is Larger Than" . $num99; 
  } elseif ($num0 != $num99) {
    echo "no";
  }