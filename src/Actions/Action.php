<?php

namespace Kimura\DesignPattern\Actions;

use Kimura\DesignPattern\Pedido;

interface Action
{
    public function executaAcao(Pedido $pedido): void;
}