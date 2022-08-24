<?php
//definicion de pacientes
ini_set('display errors', 1);
ini_set('display_setup_errors', 1);
error_reporting(E_ALL);

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
$aPacientes[] = array(
    "dni" => "38.468.129",
    "nombre" => "Clara Cotrill",
    "edad" => 23,
    "peso" => 58.70,
);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row py-5 text-center">
            <div class="col-12">
                <h1>Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre y Apellidos</th>
                            <th>Edad</th>
                            <th>Peso</th>
                            <th>dhsr</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($aPacientes as $paciente) { ?>
                            <tr>
                                <td><? echo $paciente["dni"]; ?></td>
                                <td><? echo $paciente["nombre"]; ?></td>
                                <td><? echo $paciente["edad"]; ?></td>
                                <td><? echo $paciente["peso"]; ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>

</html>
