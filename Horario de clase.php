<?php

$hora = date("H");
$dia = date("N");

if ($dia = "1"){
    if ($hora < "8") {
      echo "No tienes clase";
    }
    elseif ($hora < "9") {
      echo "BBDD";
    }
    elseif ($hora < "10") {
      echo "EIE";
    }
    elseif ($hora < "12") {
      echo "ASO";
    }
    elseif ($hora < "14") {
      echo "IAW";
    }
    else {
      echo "No tienes clase";
    }
}
elseif ($dia = "2"){
    if ($hora < "8") {
      echo "No tienes clase";
    }
    elseif ($hora < "9") {
      echo "IAW";
    }
    elseif ($hora < "10") {
      echo "Seguridad";
    }
    elseif ($hora < "12") {
      echo "SRI";
    }
    elseif ($hora < "14") {
      echo "BBDD";
    }
    else {
      echo "No tienes clase";
    }
}
elseif ($dia = "3"){
    if ($hora < "8") {
      echo "No tienes clase";
    }
    elseif ($hora < "10") {
      echo "Seguridad";
    }
    elseif ($hora < "12") {
      echo "ASO";
    }
    elseif ($hora < "14") {
      echo "EIE";
    }
    else {
      echo "No tienes clase";
    }
}
elseif ($dia = "4"){
    if ($hora < "8") {
      echo "No tienes clase";
    }
    elseif ($hora < "10") {
      echo "SRI";
    }
    elseif ($hora < "12") {
      echo "ASO";
    }
    elseif ($hora < "14") {
      echo "IAW";
    }
    else {
      echo "No tienes clase";
    }
}
elseif ($dia = "5"){
    if ($hora < "8") {
      echo "No tienes clase";
    }
    elseif ($hora < "10") {
      echo "Seguridad";
    }
    elseif ($hora < "12") {
      echo "SRI";
    }
    elseif ($hora < "14") {
      echo "Ingles";
    }
    else {
      echo "No tienes clase";
    }
}
else {
  echo "No tienes clase";
}
?>
