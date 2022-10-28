<?php

namespace empleados\clases;

require_once('clases/empleado.php');

use empleados\clases\Empleado;

//*********************No se podran crear clases adicionales que hereden de esta ??????

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





    //************funcion que calculara el sueldo. Se obligara a implementarlo en las tres clases ????????
    public function calcularSueldo(): int
    {
        parent::calcularSueldo();
        //sueldo = base + complemento * añosEmpresa
        $añoActual = 2022;
        $añosEmpresa = $añoActual - $this->añoAlta;
        return  $this->getSalarioBase() + $this->getComplemento() * $añosEmpresa;
    }

    //***********metodo que retorna los 4 atributos usando la tecnica de delegacion con getters ?????????? y añadiendo el nuevo atributo
    public function obtenerDatos(): string
    {
        return parent::obtenerDatos() . ' / ' . $this->añoAlta;
    }
}
