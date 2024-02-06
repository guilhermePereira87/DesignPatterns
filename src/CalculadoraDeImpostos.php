<?php

namespace DesignPatterns;

use DesignPatterns\Impostos\Imposto;

/**
 * Recebe valor e string Imposto.
 */
class CalculadoraDeImpostos {

    public function calcula(Orcamento $orcamento, Imposto $imposto): float {

       return $imposto->calculaImposto($orcamento);
    }
}