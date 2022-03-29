<?php

namespace Kimura\DesignPattern;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}