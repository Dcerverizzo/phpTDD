<?php

use PHPUnit\Framework\TestCase;

class AssertativaTest extends TestCase
{

    private $array = array(
        'nome' => 'usuario',
        'idade' => 23,
        'sexo' => 'masculino',
    );

    public function testArrayHasKey()
    {
        $this->assertArrayHasKey('nome', $this->array);
    }

    public function testCount()
    {
        $this->assertCount(3, $this->array);
    }

    public function testEmpty()
    {
        $this->assertEmpty($this->array);
    }

}
