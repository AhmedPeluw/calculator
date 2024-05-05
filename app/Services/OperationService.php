<?php

namespace App\Services;

class OperationService
{
    public function performOperation($numberOne, $numberTwo, $operator)
    {
        switch ($operator) {
            case '+':
                return $this->add($numberOne, $numberTwo);
            case '-':
                return $this->subtract($numberOne, $numberTwo);
            case '*':
                return $this->multiply($numberOne, $numberTwo);
            case '/':
                return $this->divide($numberOne, $numberTwo);
            default:
                throw new \InvalidArgumentException("Opérateur invalide");
        }
    }

    private function add($numberOne, $numberTwo)
    {
        return $numberOne + $numberTwo;
    }

    private function subtract($numberOne, $numberTwo)
    {
        return $numberOne - $numberTwo;
    }

    private function multiply($numberOne, $numberTwo)
    {
        return $numberOne * $numberTwo;
    }

    private function divide($numberOne, $numberTwo)
    {
        if ($numberTwo == 0) {
            throw new \InvalidArgumentException("La division par zéro n'est pas autorisée");
        }
        return $numberOne / $numberTwo;
    }
}
