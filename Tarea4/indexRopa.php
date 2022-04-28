<?php

require_once __DIR__.'/bootstrap/app.php';

use App\Model\Ropa;

$ropa = new Ropa("Adidas, ","Polo Overside, ", "Negro, ", "Talla M.");

echo $ropa->obtenerMarca();
echo $ropa->obtenerModelo();
echo $ropa->obtenerColor();
echo $ropa->obtenerTalla();