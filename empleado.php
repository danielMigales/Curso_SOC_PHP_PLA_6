<?php

abstract class Empleado
{
    //atributos
    private string $nif;
    private string $nombre;
    private int $edad;
    private string $departamento;

    //constructor
    public function __construct(string $nif, string $nombre, int $edad, string $departamento)
    {
        global $errores;
        $errores = '';

        //asignacion con setters
        $this->setNif($nif);
        $this->setNombre($nombre);
        $this->setEdad($edad);
        $this->setDepartamento($departamento);

        //errores
        if (!empty($errores)) {
            throw new Exception($errores);
        }
    }

    //setters
    public function setNif(string $nif): void
    {
        global $errores;

        //validacion
        if (empty($nif)) {
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
            $errores .= "Nombre obligatorio<br>";
            return;
        }

        $this->nif = $nombre;
    }

    public function setEdad(int $edad): void
    {
        global $errores;

        //validacion
        if (empty($edad)) {
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

    public function getEdad(): string
    {
        return $this->edad;
    }

    public function getDepartamento(): string
    {
        return $this->departamento;
    }


    public function calculoSueldo(): void
    {
    }

    public function obtenerDatos()
    {
    }
}
