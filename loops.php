<?php

// https://www.w3schools.com/php/php_looping_for.asp

// print 'a' 100 veces

//WHILE

$x = 0;
while($x < 100) {
    echo "The number is: $x <br>";
    $x++;
}

// FOR

for ($x = 1; $x <= 100; $x++) {
  echo 'vuelta '. $x . ': ';
  echo 'a';
  echo '<br>';
}
