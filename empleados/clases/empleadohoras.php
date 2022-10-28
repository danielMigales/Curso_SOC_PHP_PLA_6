<?php

namespace empleados\clases;

require_once('clases/empleado.php');

use empleados\clases\Empleado;

class EmpleadoHoras extends Empleado
{
    //constantes salario base y complemento
    private static $precioxhora = 9.39;

    //atributo especifico
    private int $horasTrabajadas;

    //constructor
    public function __construct(string $nif, string $nombre, int $edad, string $departamento, int $horasTrabajadas)
    {
        //informar atributos de la superclase 
        parent::__construct($nif, $nombre, $edad, $departamento);

        //informar atributo específico de la subclase
        $this->setHorasTrabajadas($horasTrabajadas);
    }

    //getters
    public function getHorasTrabajadas(): int
    {
        return $this->horasTrabajadas;
    }

    public static function getPrecioxHora(): int
    {
        return self::$precioxhora;
    }

    //setters
    public function setHorasTrabajadas(int $horasTrabajadas): void
    {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function calcularSueldo()
    {
        //sueldo = sueldo por hora * numero de horas trabajadas
        return $this->getPrecioxHora() * $this->horasTrabajadas;
    }

    public function obtenerDatos(): string
    {
        return parent::obtenerDatos() . ' / ' . $this->getHorasTrabajadas();
    }
}
