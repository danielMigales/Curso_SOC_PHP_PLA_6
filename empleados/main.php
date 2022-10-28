<?php

//incorporar archivos de las clases
require_once('clases/empleado.php');
require_once('clases/empleadofijo.php');
require_once('clases/empleadohoras.php');
require_once('clases/empleadotemporal.php');

use empleados\clases\Empleado;
use empleados\clases\EmpleadoFijo;
use empleados\clases\EmpleadoHoras;
use empleados\clases\EmpleadoTemporal;

//instanciar un empleado fijo
try {
    $empleadoFijo = new EmpleadoFijo('12345678H', 'Connie Corleone', 50, 'Formacion', 2017); //4 años de antiguedad
    echo 'Empleado Fijo' . '<br>';
    echo $empleadoFijo->obtenerDatos();
    echo '<br>';
    echo 'Salario: ' . $empleadoFijo->calcularSueldo();
    echo '<br><br>';
} catch (\Throwable $e) {
    echo $e->getMessage();
}

//instanciar un empleado por horas
try {
    $empleadoHoras = new EmpleadoHoras('12345679I', 'Peter Clemenza', 50, 'Limpieza', 300); //300 horas trabajadas
    echo 'Empleado Horas' . '<br>';
    echo $empleadoHoras->obtenerDatos();
    echo '<br>';
    echo 'Salario: ' . $empleadoHoras->calcularSueldo();
    echo '<br><br>';
} catch (\Throwable $e) {
    echo $e->getMessage();
}

//instanciar un empleado temporal
try {
    $empleadoTemporal = new EmpleadoTemporal('12345670K', 'Luca Brasi', 50, 'Limpieza', '30/09/2000', '30/10/2014');
    echo 'Empleado Temporal' . '<br>';
    echo $empleadoTemporal->obtenerDatos();
    echo '<br>';
    echo 'Salario: ' . $empleadoTemporal->calcularSueldo();
    echo '<br><br>';
} catch (\Throwable $e) {
    echo $e->getMessage();
}
