<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{

    public function testSoma()
    {

        $calc = new Calculadora();

        $this->assertEquals(
            3,
            $calc->soma(1, 2)
        );
    }

    public function testSomaNumeroNegativo()
    {

        $calc = new Calculadora();

        $this->assertEquals(
            -5,
            $calc->soma(-10, 5)
        );
    }

}
