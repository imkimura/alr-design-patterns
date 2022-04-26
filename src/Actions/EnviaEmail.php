<?php

namespace Kimura\DesignPattern\Actions;

use Kimura\DesignPattern\Pedido;

class EnviaEmail
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Envia e-mail para cliente " . PHP_EOL;
    }
}