<?php

require_once __DIR__.'/bootstrap/app.php';

use App\Model\Departamento;

$departamento = new Departamento("Cuartos, ","banios, ", "Cocina, ", "Ropero");

echo $departamento->obtenerCuartos();
echo $departamento->obtenerBanios();
echo $departamento->obtenerCocina();
echo $departamento->obtenerRopero();