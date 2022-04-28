<?php

require_once __DIR__.'/bootstrap/app.php';

use App\Model\Pais;

$pais = new Pais("Peru, ","24 departamentos, ", "195 provincias, ", "1.793 ciudades aprox.");

echo $pais->obtenerNombre();
echo $pais->obtenerDepartamentos();
echo $pais->obtenerProvincias();
echo $pais->obtenerCiudades();