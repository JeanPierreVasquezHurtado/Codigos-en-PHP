<?php 

namespace App\Model;

class Pais
{
    public $nombre = "";

    public $departamentos = "";

    public $provincias = "";

    public $ciudades = "";

    //constructor
    public function __construct($nom, $depa, $provin, $ciuda)
    {
        $this->establecerNombre($nom);
        $this->establecerDepartamentos($depa);
        $this->establecerProvincias($provin);
        $this->establecerCiudades($ciuda);
    }
    //encapsulamientos 
    public function obtenerNombre()
    {
        return $this->nombre;
    }
    public function establecerNombre($nom)
    {
        $this->nombre = $nom;
    }

    public function obtenerDepartamentos()
    {
        return $this->departamentos;
    }
    public function establecerDepartamentos($depa)
    {
        $this->departamentos = $depa;
    }

    public function obtenerProvincias()
    {
        return $this->provincias;
    }
    public function establecerProvincias($provin)
    {
        $this->provincias = $provin;
    }

    public function obtenerCiudades()
    {
        return $this->ciudades;
    }
    public function establecerCiudades($ciuda)
    {
        $this->ciudades = $ciuda;
    }
}