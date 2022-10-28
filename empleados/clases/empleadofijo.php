<?php

namespace empleados\clases;

require_once('clases/empleado.php');

use empleados\clases\Empleado;

class EmpleadoFijo extends Empleado
{
    //constantes salario base y complemento
    private static $salarioBase = 1091.13;
    private static $complemento = 192.85;

    //atributo especifico
    private int $añoAlta;

    //constructor
    public function __construct(string $nif, string $nombre, int $edad, string $departamento, int $añoAlta)
    {
        //informar atributos de la superclase 
        parent::__construct($nif, $nombre, $edad, $departamento);

        //informar atribut específico de la subclase
        $this->setAñoAlta($añoAlta);
    }

    //getters
    public function getAñoAlta(): int
    {
        return $this->añoAlta;
    }

    public static function getSalarioBase(): int
    {
        return self::$salarioBase;
    }
    public static function getComplemento(): int
    {
        return self::$complemento;
    }

    //setters
    public function setAñoAlta(int $añoAlta): void
    {
        $this->añoAlta = $añoAlta;
    }

    public function calcularSueldo(): int
    {
        parent::calcularSueldo();
        //sueldo = base + complemento * añosEmpresa
        $añoActual = 2022;
        $añosEmpresa = $añoActual - $this->añoAlta;
        return  $this->getSalarioBase() + $this->getComplemento() * $añosEmpresa;
    }

    public function obtenerDatos(): string
    {
        return parent::obtenerDatos() . ' / ' . $this->getAñoAlta();
    }
}
