<?php

namespace Kimura\DesignPattern\Impostos;

use Kimura\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}