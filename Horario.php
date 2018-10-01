<?php
$horario = [
['BBDD','IAW','SEG','SRI','SEG'] , // 8-9
['EIE','SEG','SEG','SRI','SEG'] , // 9-10
['ASO','SRI','ASO','ASO','SRI'] , // 10-11
['ASO','SRI','ASO','ASO','SRI'] , // 11-12
['IAW','BBDD','EIE','IAW','ING'] , // 12-13
['IAW','BBDD','EIE','IAW','ING'] // 13-14
];

$dia = date ('N');
$hora = date('G');

//echo $horario[$dia-1][$hora-8] . '<br><br>';

// print $horario
echo '<table border=1>';
foreach ($horario as $dia) {
echo '<tr>';
  foreach ($dia as $asig) {
  echo '<td>';
    echo $asig . '<br>';
    echo '</td>';
  }
  echo '</tr>';
}
echo '</table><br>';


echo '<table border=1>';
for($x=0;$x<count($horario);$x++){
  echo '<tr>';
  for($y=0;$y<count($horario[$x]);$y++){
    echo '<td>'.$horario[$x][$y].'</td>';
  }
  echo '</tr>';
}
echo '</table><br>';
