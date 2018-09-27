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

/*-----------MULTIDIMENSIONAL---------
https://www.w3schools.com/php/php_arrays_multi.asp


$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
*/

$horario = array(
  array('BBDD','EIE','ASO','ASO','IAW','IAW'), //lunes 0
  array('IAW','SEG','SRI','SRI','BBDD','BBDD'), //martes 1
  array('SEG','SEG','ASO','ASO','EIE','EIE'), //miercoles 2
  array('SRI','SRI','ASO','ASO','IAW','IAW'), //jueves 3
  array('SEG','SEG','SRI','SRI','ING','ING') //viernes 4
);

$dia = date ('N');
$hora = date('G');

echo $horario[$dia-1][$hora-8];
