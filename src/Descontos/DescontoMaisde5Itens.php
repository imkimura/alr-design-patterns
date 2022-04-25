<?php

namespace Kimura\DesignPattern\Descontos;

use Kimura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        if ($orcamento->quantidade > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDescontos($orcamento);
    }
}