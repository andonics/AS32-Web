<?php

$num = [1,2,3,4,5,6,7,8,9,10,11,12]; // $suma =

$suma = 0;
echo 'suma: ' . $suma . '<br>';
echo 'for...<br>';
for ($i=0; $i < count($num); $i++) {
  $suma = $suma + $num[$i];
  echo 'i: ' . $i . '; ';
  echo '$num[$i] ' . $num[$i] . '; ';
  echo 'suma: ' . $suma . '<br>';
}
echo '...for<br>';

echo $suma;

/*$num = array(
array('1','2','3','4')
array('5','6','7','8')
array('9','10','11','12')
);

for ($suma = 0;)
*/
