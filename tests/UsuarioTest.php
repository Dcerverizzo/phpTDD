<?php

use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{

    public function testNome()
    {
        $usuario = new Usuario();
        $usuario->__set('nome', 'User');
        $this->assertEquals('User', $usuario->__get('nome'));
    }

    public function testIdade()
    {
        $usuario = new Usuario();
        $usuario->__set('idade', '19');
        $this->assertEquals('19', $usuario->__get('idade'));
    }

    public function testIdadeCompleto()
    {
        $usuario = new Usuario();
        $usuario->__set('idade', '19');
        $this->assertEquals('19 anos', $usuario->idadeCompleto('idade'));
    }


}
