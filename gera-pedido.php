<?php

require './vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new \Kimura\DesignPattern\Command\GerarPedido(
    $valorOrcamento,
    $numeroItens,
    $nomeCliente
);
$gerarPedido->execute();