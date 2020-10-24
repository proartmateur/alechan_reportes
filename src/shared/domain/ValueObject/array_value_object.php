<?php

namespace Reportes\Shared\Domain\ValueObject;

use Exception;

abstract class ArrayValueObject
{
    protected $value;

    public function __construct($value)
    {
        if (!is_array($value)) {
            throw new Exception("Se esperaba un array pero se obtuvo un " . gettype($value));
        }
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }

}