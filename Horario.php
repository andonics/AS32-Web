<?php
$horario = [
['BBDD','IAW','SEG','SRI','SEG'] , // 8-9
['EIE','SEG','SEG','SRI','SEG'] , // 9-10
['ASO','SRI','ASO','ASO','SRI'] , // 10-11
['ASO','SRI','ASO','ASO','SRI'] , // 11-12
['IAW','BBDD','EIE','IAW','ING'] , // 12-13
['IAW','BBDD','EIE','IAW','ING'] // 13-14
];

$dia = date ('N')-1;
$hora = date('G')-8;

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


echo "<br><br>";
echo "<table border='1'>";
for ($i=0; $i<count($horario); $i++) {
    echo "<tr>";
    for ($j=0; $j<count($horario[$i]); $j++) {
        echo "<td>";
        if ($i == $hora && $j == $dia) {
            echo "<b>" . $horario[$i][$j] . "</b><br>";
        } else {
            echo $horario[$i][$j] . "<br>";
        }
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";
