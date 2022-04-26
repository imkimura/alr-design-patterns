<?php

require './vendor/autoload.php';

use Kimura\DesignPattern\{Orcamento, Pedido};

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$orcamento = new Orcamento();
$orcamento->quantidade = $numeroItens;
$orcamento->valor = $valorOrcamento;

$pedido = new Pedido();
$pedido->dataFinalizacao = new \DateTimeImmutable();
$pedido->nomeCliente = $nomeCliente;
$pedido->orcamento = $orcamento;

echo 'Cria' . PHP_EOL;
echo "{$nomeCliente}";