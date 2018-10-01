<?php
$horario = array(
  array('BBDD','EIE','ASO','ASO','IAW','IAW'), //lunes 0
  array('IAW','SEG','SRI','SRI','BBDD','BBDD'), //martes 1
  array('SEG','SEG','ASO','ASO','EIE','EIE'), //miercoles 2
  array('SRI','SRI','ASO','ASO','IAW','IAW'), //jueves 3
  array('SEG','SEG','SRI','SRI','ING','ING') //viernes 4
);

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


echo '<table border=2>';
for($x=0;$x<6;$x++){
  echo '<tr>';
  for($y=0;$y<5;$y++){
    echo '<td>'.$horario[$y][$x].'</td>';
  }
  echo '</tr>';
}
echo '</table><br>';
