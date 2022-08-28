<?php
ini_set('display errors', 1);
ini_set('display_setup_errors', 1);
error_reporting(E_ALL);

//definición
function contar($aArray) {
    $contador = 0;
    foreach ($aArray as $item) {
        $contador ++;
    }
    return $contador;
}

//uso
$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => "60",
    "precio" => "58000",
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => "0",
    "precio" => "22000",
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "55341Q1201E",
    "stock" => "5",
    "precio" => "45000",
);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "42.468.129",
    "nombre" => "Minerva di Alessandro",
    "edad" => 19,
    "peso" => 67,
);
$aPacientes[] = array(
    "dni" => "20.919.248",
    "nombre" => "Donato Mosquera",
    "edad" => 53,
    "peso" => 88.50,
);
$aPacientes[] = array(
    "dni" => "44.738.669",
    "nombre" => "Dorian Ros",
    "edad" => 18,
    "peso" => 72,
);
$aNotas = array(9, 8, 9.50, 4, 7, 8);

echo "<br>Cantidad de productos: " .contar($aProductos);
echo "<br>Cantidad de pacientes: " .contar($aPacientes);
echo "<br>Cantidad de notas : " .contar($aNotas);
?> 