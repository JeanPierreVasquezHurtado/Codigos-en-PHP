<?php 

namespace App\Model;

class Departamento
{
    public $cuartos = "";

    public $banios = "";

    public $cocina = "";

    public $ropero = "";

    //constructor
    public function __construct($cuarto, $bani, $coci, $rope)
    {
        $this->establecerCuartos($cuarto);
        $this->establecerBanios($bani);
        $this->establecerCocina($coci);
        $this->establecerRopero($rope);
    }
    //encapsulamientos 
    public function obtenerCuartos()
    {
        return $this->cuartos;
    }
    public function establecerCuartos($cuarto)
    {
        $this->cuartos = $cuarto;
    }

    public function obtenerBanios()
    {
        return $this->banios;
    }
    public function establecerBanios($bani)
    {
        $this->banios = $bani;
    }

    public function obtenerCocina()
    {
        return $this->cocina;
    }
    public function establecerCocina($coci)
    {
        $this->cocina = $coci;
    }

    public function obtenerRopero()
    {
        return $this->ropero;
    }
    public function establecerRopero($rope)
    {
        $this->ropero = $rope;
    }
}