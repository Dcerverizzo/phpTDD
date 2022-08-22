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
