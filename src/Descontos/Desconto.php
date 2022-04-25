<?php

namespace Kimura\DesignPattern\Descontos;

use Kimura\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDescontos(Orcamento $orcamento): float;
}