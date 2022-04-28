<?php 

namespace App\Model;

class Ropa
{
    public $marca = "";

    public $modelo = "";

    public $color = "";

    public $talla = "";

    //constructor
    public function __construct($marc, $model, $colo, $tall)
    {
        $this->establecerMarca($marc);
        $this->establecerModelo($model);
        $this->establecerColor($colo);
        $this->establecerTalla($tall);
    }
    //encapsulamientos 
    public function obtenerMarca()
    {
        return $this->marca;
    }
    public function establecerMarca($marc)
    {
        $this->marca = $marc;
    }

    public function obtenerModelo()
    {
        return $this->modelo;
    }
    public function establecerModelo($model)
    {
        $this->modelo = $model;
    }

    public function obtenerColor()
    {
        return $this->color;
    }
    public function establecerColor($colo)
    {
        $this->color = $colo;
    }

    public function obtenerTalla()
    {
        return $this->talla;
    }
    public function establecerTalla($tall)
    {
        $this->talla = $tall;
    }
}