<?php

namespace Kimura\DesignPattern;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        if ($orcamento->quantidade > 5) {
            return $orcamento->valor * 0.1;
        }

        return 0;
    }
}