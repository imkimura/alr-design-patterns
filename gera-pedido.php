<?php

require './vendor/autoload.php';

use Kimura\DesignPattern\Command\{GerarPedido, GerarPedidoHandler};

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido(
    $valorOrcamento,
    $numeroItens,
    $nomeCliente
);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);