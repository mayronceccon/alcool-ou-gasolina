<?php

require_once 'vendor/autoload.php';

use APP\Preco;
use APP\GasolinaAlcool;

$precoGasolina = new Preco(4.5);
$precoAlcool = new Preco(3.99);

$obj = new GasolinaAlcool($precoGasolina, $precoAlcool);
$resultado = $obj->calcular();
echo $resultado;
