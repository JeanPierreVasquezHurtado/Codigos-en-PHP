<?php 

namespace App\Model;

class Computadora
{
    public $gpu = "";

    public $discoDuro = "";

    public $pantalla = "";

    public $mouse = "";

    //constructor
    public function __construct($gp, $disDu, $panta, $mous)
    {
        $this->establecerGpu($gp);
        $this->establecerDiscoDuro($disDu);
        $this->establecerPantalla($panta);
        $this->establecerMouse($mous);
    }
    //encapsulamientos 
    public function obtenerGpu()
    {
        return $this->gpu;
    }
    public function establecerGpu($gp)
    {
        $this->gpu = $gp;
    }

    public function obtenerDiscoDuro()
    {
        return $this->discoDuro;
    }
    public function establecerDiscoDuro($disDu)
    {
        $this->discoDuro = $disDu;
    }

    public function obtenerPantalla()
    {
        return $this->pantalla;
    }
    public function establecerPantalla($panta)
    {
        $this->pantalla = $panta;
    }

    public function obtenerMouse()
    {
        return $this->mouse;
    }
    public function establecerMouse($mous)
    {
        $this->mouse = $mous;
    }
}