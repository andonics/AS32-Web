<?php

$cars = array("Volvo", "BMW", "Toyota");
//echo "I like " . $cars[2] . ", " . $cars[0] . " and " . $cars[1] . ".";
//echo count($cars)

/*for ($x = 0; $x < count($cars); $x++) {
  echo $cars[$x];
  echo '<br>';
}
*/

foreach($cars as $coche) {
  echo $coche;
  echo "<br>";
}
