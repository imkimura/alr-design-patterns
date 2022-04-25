<?php

namespace Kimura\DesignPattern\Descontos;

use Kimura\DesignPattern\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculaDescontos(Orcamento $orcamento): float
    {
        return 0;
    }
}