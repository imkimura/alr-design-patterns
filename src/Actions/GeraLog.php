<?php

namespace Kimura\DesignPattern\Actions;

use Kimura\DesignPattern\Pedido;

class GeraLog
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerar log de criação de pedido" . PHP_EOL;
    }
}