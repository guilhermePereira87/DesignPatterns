<?php

namespace DesignPatterns\Impostos;

use DesignPatterns\Orcamento;

class Iss implements Imposto {
   public function calculaImposto (Orcamento $orcamento): float {
    return $orcamento->valor * 0.06;
   }
}
