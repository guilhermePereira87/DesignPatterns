<?php

require 'vendor/autoload.php';

use DesignPatterns\CalculadoraDeImpostos;
use DesignPatterns\Orcamento;

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, "ICMS");