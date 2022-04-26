<?php

namespace Kimura\DesignPattern\Command;

use Kimura\DesignPattern\{Orcamento, Pedido};
use Kimura\DesignPattern\Actions\CriaPedido;
use Kimura\DesignPattern\Actions\EnviaEmail;
use Kimura\DesignPattern\Actions\GeraLog;

class GerarPedidoHandler
{
    public function __construct(/* PedidoRepository, MailService */)
    {
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        // PedidosRepository
        $pedidosRepository = new CriaPedido();
        // MailService
        $geraLog = new GeraLog();
        // Log
        $enviaEmail = new EnviaEmail();

        $pedidosRepository->executaAcao($pedido);
        $geraLog->executaAcao($pedido);
        $enviaEmail->executaAcao($pedido);
    }
}
