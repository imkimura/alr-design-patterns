<?php

namespace Kimura\DesignPattern;

use Kimura\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Kimura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Kimura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDescontos($orcamento);
    }
}