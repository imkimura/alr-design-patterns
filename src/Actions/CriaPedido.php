<?php

namespace Kimura\DesignPattern\Actions;

use Kimura\DesignPattern\Pedido;

class CriaPedido implements Action
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Cria pedido no banco de dados " . PHP_EOL;
    }
}