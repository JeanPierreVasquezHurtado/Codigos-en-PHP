<?php

require_once __DIR__.'/bootstrap/app.php';

use App\Model\Pistola;

$pistola = new Pistola("Canion, ","Culata, ", "Mira, ", "Gatillo.");

echo $pistola->obtenerCanion();
echo $pistola->obtenerCulata();
echo $pistola->obtenerMira();
echo $pistola->obtenerGatillo();