<?php
ini_set('display errors', 1);
ini_set('display_setup_errors', 1);
error_reporting(E_ALL);

//listado de numeros consecutivos
for ($i=2; $i <= 100; $i += 2) {
    echo $i . "<br>";
    if ($i==60){
        break;
    }
}
?>