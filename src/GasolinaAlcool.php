<?php

declare(strict_types=1);

namespace APP;
use APP\ICalculo;
use APP\Preco;

class GasolinaAlcool implements ICalculo
{
    private $gasolina;
    private $alcool;

    public function __construct(Preco $gasolina, Preco $alcool)
    {
        $this->gasolina = $gasolina->getPreco();
        $this->alcool = $alcool->getPreco();
    }

    public function calcular(): string
    {
        $diferenca = $this->alcool / $this->gasolina;
        if ($diferenca > 0.7) {
            return 'Gasolina';
        }

        if ($diferenca < 0.7) {
            return 'Álcool';
        }

        return 'Gasolina ou Álcool';
    }
}
