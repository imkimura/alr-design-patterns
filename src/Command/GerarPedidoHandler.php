<?php

namespace Kimura\DesignPattern\Command;

use Kimura\DesignPattern\{Orcamento, Pedido};
use Kimura\DesignPattern\Actions\Action;
use Kimura\DesignPattern\Actions\CriaPedido;
use Kimura\DesignPattern\Actions\EnviaEmail;
use Kimura\DesignPattern\Actions\GeraLog;

class GerarPedidoHandler
{
    /** @var Action $acoesAposGerarPedido[] */
    private array $acoesAposGerarPedido = [];

    public function __construct(/* PedidoRepository, MailService */)
    {
    }

    public function adicionarAcao(Action $action)
    {
        $this->acoesAposGerarPedido[] = $action;
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

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
