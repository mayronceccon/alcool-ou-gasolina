<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use APP\Preco;
use APP\GasolinaAlcool;

class GasolinaAlcoolTest extends TestCase
{
    public function testCalculoVantagemGasolina1(): void
    {
        $precoGasolina = new Preco(4.5);
        $precoAlcool = new Preco(3.5);

        $gasolinaAlcool = new GasolinaAlcool($precoGasolina, $precoAlcool);
        $resultado = $gasolinaAlcool->calcular();

        $this->assertEquals('Gasolina', $resultado);
    }

    public function testCalculoVantagemGasolina2(): void
    {
        $precoGasolina = new Preco(4.22);
        $precoAlcool = new Preco(3.1);

        $gasolinaAlcool = new GasolinaAlcool($precoGasolina, $precoAlcool);
        $resultado = $gasolinaAlcool->calcular();

        $this->assertEquals('Gasolina', $resultado);
    }

    public function testCalculoMesmoCusto1(): void
    {
        $precoGasolina = new Preco(4.5);
        $precoAlcool = new Preco(3.15);

        $gasolinaAlcool = new GasolinaAlcool($precoGasolina, $precoAlcool);
        $resultado = $gasolinaAlcool->calcular();

        $this->assertEquals('Gasolina ou Álcool', $resultado);
    }

    public function testCalculoMesmoCusto2(): void
    {
        $precoGasolina = new Preco(5.2);
        $precoAlcool = new Preco(3.64);

        $gasolinaAlcool = new GasolinaAlcool($precoGasolina, $precoAlcool);
        $resultado = $gasolinaAlcool->calcular();

        $this->assertEquals('Gasolina ou Álcool', $resultado);
    }

    public function testCalculoVantagemAlcool1(): void
    {
        $precoGasolina = new Preco(5.22);
        $precoAlcool = new Preco(2.6);

        $gasolinaAlcool = new GasolinaAlcool($precoGasolina, $precoAlcool);
        $resultado = $gasolinaAlcool->calcular();

        $this->assertEquals('Álcool', $resultado);
    }

    public function testCalculoVantagemAlcool2(): void
    {
        $precoGasolina = new Preco(4.1);
        $precoAlcool = new Preco(2.75);

        $gasolinaAlcool = new GasolinaAlcool($precoGasolina, $precoAlcool);
        $resultado = $gasolinaAlcool->calcular();

        $this->assertEquals('Álcool', $resultado);
    }
}
