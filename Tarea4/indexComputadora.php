<?php

require_once __DIR__.'/bootstrap/app.php';

use App\Model\Computadora;

$computadora = new Computadora("Gpu, ","Disco Duro, ", "Pantalla, ", "Mouse.");

echo $computadora->obtenerGpu();
echo $computadora->obtenerDiscoDuro();
echo $computadora->obtenerPantalla();
echo $computadora->obtenerMouse();