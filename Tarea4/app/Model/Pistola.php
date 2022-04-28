<?php 

namespace App\Model;

class Pistola
{
    public $canion = "";

    public $culata = "";

    public $mira = "";

    public $gatillo = "";

    //constructor
    public function __construct($canio, $culat, $mir, $gati)
    {
        $this->establecerCanion($canio);
        $this->establecerCulata($culat);
        $this->establecerMira($mir);
        $this->establecerGatillo($gati);
    }
    //encapsulamientos 
    public function obtenerCanion()
    {
        return $this->canion;
    }
    public function establecerCanion($canio)
    {
        $this->canion = $canio;
    }

    public function obtenerCulata()
    {
        return $this->culata;
    }
    public function establecerCulata($culat)
    {
        $this->culata = $culat;
    }

    public function obtenerMira()
    {
        return $this->mira;
    }
    public function establecerMira($mir)
    {
        $this->mira = $mir;
    }

    public function obtenerGatillo()
    {
        return $this->gatillo;
    }
    public function establecerGatillo($gati)
    {
        $this->gatillo = $gati;
    }
}