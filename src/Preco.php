<?php

declare(strict_types=1);

namespace APP;

class Preco
{
    private $preco;

    public function __construct(float $preco)
    {
        if ($preco < 0) {
            throw new \InvalidArgumentException('Preço Inválido');
        }

        $this->preco = $preco;
    }

    public function getPreco(): float
    {
        return (float) $this->preco;
    }
}
