<?php

namespace app\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Subtraction extends OperationAbstract implements OperationInterface
{
    public function calculate()
    {
        if (count($this->operands) === 0) {
            throw new NoOperandsException();
        }

        return array_reduce($this->operands, function ($a, $b) {
            if ($a !== null && $b !== null) {
                return $a - $b;
            }

            return $b;
        }, null);
    }

}