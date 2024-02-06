<?php

require 'vendor/autoload.php';

use DesignPatterns\CalculadoraDeImpostos;
use DesignPatterns\Impostos\Icms;
use DesignPatterns\Impostos\Iss;
use DesignPatterns\Orcamento;

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms);
echo $calculadora->calcula($orcamento, new Iss);