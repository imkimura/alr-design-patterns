<?php

use Kimura\DesignPattern\CalculadoraDeDescontos;
use Kimura\DesignPattern\CalculadoraDeImpostos;
use Kimura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

/**
 * $calculadora = new CalculadoraDeImpostos();
 * $orcamento = new Orcamento();
 * $orcamento->valor = 100;
 *
 * echo $calculadora->calcula($orcamento, new \Kimura\DesignPattern\Impostos\Icms());
*/

$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 700;
$orcamento->quantidade = 6;

echo $calculadora->calculaDesconto($orcamento);