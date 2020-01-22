<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use APP\Preco;

class PrecoTest extends TestCase
{
    public function testPrecoVazio(): void
    {
        $this->expectException(TypeError::class);
        new Preco('');
    }

    public function testPrecoNull(): void
    {
        $this->expectException(TypeError::class);
        new Preco(null);
    }

    public function testPrecoString(): void
    {
        $this->expectException(TypeError::class);
        new Preco('Valor');
    }
    
    public function testPrecoNegativo(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Preço Inválido');
        new Preco(-10);
    }

    public function testPrecoZero(): void
    {
        $preco = new Preco(0.0);
        $this->assertEquals(0.0, $preco->getPreco());
    }

    public function testPreco10(): void
    {
        $preco = new Preco(10);
        $this->assertEquals(10.0, $preco->getPreco());
    }

    public function testPrecoCorreto15(): void
    {
        $preco = new Preco(15.0);
        $this->assertEquals(15.0, $preco->getPreco());
    }

    public function testPrecoCorreto1090(): void
    {
        $preco = new Preco(10.9);
        $this->assertEquals(10.9, $preco->getPreco());
    }

    public function testPrecoCorreto100(): void
    {
        $preco = new Preco(100.0);
        $this->assertEquals(100.0, $preco->getPreco());
    }
}
