<?php

namespace empleados\clases;

require_once('clases/empleado.php');

use empleados\clases\Empleado;

//*********************No se podran crear clases adicionales que hereden de esta ??????

class EmpleadoTemporal extends Empleado
{
    //constantes salario base y complemento
    private static $salarioFijo = 1349.27;

    //atributo especifico
    private string $fechaAlta;
    private string $fechaBaja;

    //constructor
    public function __construct(string $nif, string $nombre, int $edad, string $departamento, string $fechaAlta, string $fechaBaja)
    {
        //informar atributos de la superclase 
        parent::__construct($nif, $nombre, $edad, $departamento);

        //informar atributo específico de la subclase
        $this->setFechaAlta($fechaAlta);
        $this->setFechaBaja($fechaBaja);
    }

    //getters
    public function getFechaAlta(): string
    {
        return $this->fechaAlta;
    }

    public function getFechaBaja(): string
    {
        return $this->fechaBaja;
    }

    public static function getSalarioFijo(): int
    {
        return self::$salarioFijo;
    }

    //setters
    public function setFechaAlta(string $fechaAlta): void
    {
        $this->fechaAlta = $fechaAlta;
    }

    public function setFechaBaja(string $fechaBaja): void
    {
        $this->fechaBaja = $fechaBaja;
    }




    //************funcion que calculara el sueldo. Se obligara a implementarlo en las tres clases ????????
    public function calcularSueldo()
    {
        //sueldo = ?????????
        return $this->getSalarioFijo();
    }

    //***********metodo que retorna los 4 atributos usando la tecnica de delegacion con getters ?????????? y añadiendo el nuevo atributo
    public function obtenerDatos(): string
    {
        return parent::obtenerDatos() . ' / ' . $this->fechaAlta . ' / ' . $this->fechaBaja;
    }
}
