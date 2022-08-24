# - O que são testes unitários?

O teste unitário, assim como qualquer teste automatizado, não se preocupa principalmente em verificar se uma função específica funciona, mas se seu aplicativo continua funcionando após alguma alteração em sua base de código.

# - Como instalar PHP unit

Só seguir o manual aqui ó 👉[https://phpunit.de/manual/6.5/pt_br/installation.html](https://phpunit.de/manual/6.5/pt_br/installation.html)

# Exemplo de teste

### Classe Usuário para teste

```php
<?php

class Usuario
{
    private $nome;
    private $idade;

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }

    public function idadeCompleto()
    {
        return $this->idade . ' anos';
    }

}
```

### Classe de teste de usuário

```php
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
```

# Documentação para entender mais sobre os testes e os métodos

👉[https://phpunit.readthedocs.io/pt_BR/latest/assertions.html](https://phpunit.readthedocs.io/pt_BR/latest/assertions.html)

