<?php

namespace DesignPatterns\Impostos;

use DesignPatterns\Orcamento;

interface Imposto {
    public function calculaImposto(Orcamento $orcamento): float;
}