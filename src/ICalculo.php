<?php

declare(strict_types=1);

namespace APP;

interface ICalculo
{
    public function __construct(Preco $combustivel1, Preco $combustivel2);
    public function calcular(): string;
}
