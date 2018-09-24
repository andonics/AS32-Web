<?php

//$cars = array("Volvo", "BMW", "Toyota");
//echo "I like " . $cars[2] . ", " . $cars[0] . " and " . $cars[1] . ".";
//echo count($cars)

/* ----------------FOR----------------

for ($x = 0; $x < count($cars); $x++) {
  echo $cars[$x];
  echo '<br>';
}
--------------------------------------
*/

/* -------------FOREACH---------------

foreach($cars as $coche) {
  echo $coche;
  echo "<br>";
}
--------------------------------------
*/

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo $age['Peter']; //$age[0]
