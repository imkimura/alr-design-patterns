<?php

namespace Kimura\DesignPattern\Command;

use Kimura\DesignPattern\{Orcamento, Pedido};

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
        echo "Cria pedido no banco de dados " . PHP_EOL;
        // MailService
        echo "Envia e-mail para cliente " . PHP_EOL;
        // Log
        echo "Gerar log de criação de pedido" . PHP_EOL;
    }
}
