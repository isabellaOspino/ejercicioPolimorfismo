<?php
$parqueadero = new Parqueadero();

$parqueo = new Parqueo("liliana", "3628664093", "GRF784", "chevrolet", "negro", "auto", "2024-10-05 11:00:00", 2, 5);

$parqueadero->agregarParqueo($parqueo);


$parqueo->setHoraSalida("2024-10-05 12:30:00");

$infoVehiculo = $parqueadero->buscarVehiculo("GRF784");

if ($infoVehiculo) {
    print_r($infoVehiculo);
} else {
    echo "no se encuentra el vehiculo.";
}