<?php

namespace Kimura\DesignPattern\Actions;

use Kimura\DesignPattern\Pedido;

class EnviaEmail implements Action
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Envia e-mail para cliente " . PHP_EOL;
    }
}