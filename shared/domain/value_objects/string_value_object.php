<?php


abstract class StringValueObject
{
    protected $value;

    public function __construct($value)
    {
        if (!is_string($value)) {
            throw new Exception("Se esperaba un string pero se obtuvo un " . gettype($value));
        }
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value();
    }
}