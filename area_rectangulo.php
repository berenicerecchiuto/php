<?php

 ini_set('display errors', 1);
ini_set('display_setup_errors', 1);
error_reporting(E_ALL);

//Definicióm
function calcularAreaRect($base, $altura){
    $resultado = $base * $altura;   
    return $resultado; 
  
}
echo "El área es" .calcularAreaRect(100,0.60). "<br>";
echo "El área es" .calcularAreaRect(800, 300);
?>