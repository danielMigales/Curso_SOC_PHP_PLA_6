<?php

namespace empleados\clases;

use \Exception;

//de esta clase no se podrra crear ninguna instancia
abstract class Empleado
{
    //atributos
    private string $nif;
    private ?string $nombre = null;
    private int $edad;
    private string $departamento;

    //constructor que utiliza setters para informar los atributos
    public function __construct(string $nif, string $nombre, int $edad, string $departamento)
    {
        global $errores;
        $errores = '';

        //asignacion con delegacion setters
        $this->setNif($nif);
        $this->setNombre($nombre);
        $this->setEdad($edad);
        $this->setDepartamento($departamento);

        //control errores
        if (!empty($errores)) {
            throw new Exception($errores);
        }
    }

    //setters con validacion
    public function setNif(string $nif): void
    {
        global $errores;

        //validacion
        if (empty($nif)) {
            //throw new Exception("Nif obligatorio<br>");
            $errores .= "Nif obligatorio<br>";
            return;
        }
        $this->nif = $nif;
    }

    public function setNombre(string $nombre): void
    {
        global $errores;

        //validacion
        if (empty($nombre)) {
            //throw new Exception("Nombre obligatorio<br>");
            $errores .= "Nombre obligatorio<br>";
            return;
        }
        $this->nombre = $nombre;
    }

    public function setEdad(int $edad): void
    {
        global $errores;
        //validacion
        if (empty($edad)) {
            //throw new Exception("Edad obligatoria<br>");
            $errores .= "Edad obligatoria<br>";
            return;
        }
        $this->edad = $edad;
    }

    public function setDepartamento(string $departamento): void
    {
        global $errores;
        //validacion
        if (empty($departamento)) {
            //throw new Exception("Departamento obligatorio<br>");
            $errores .= "Departamento obligatorio<br>";
            return;
        }
        $this->departamento = $departamento;
    }

    //getters
    public function getNif(): string
    {
        return $this->nif;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function getDepartamento(): string
    {
        return $this->departamento;
    }

    abstract protected function calcularSueldo();

    public function obtenerDatos(): string
    {
        return  'Datos: ' . $this->getNif() . ' / ' . $this->getNombre() . ' / ' . $this->getEdad() . ' / ' . $this->getDepartamento();
    }
}
