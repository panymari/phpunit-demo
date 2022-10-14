<?php

class Task12
{
    private int $value1;
    private int $value2;
    public int $result;

    public function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function getValue1(): int
    {
        return $this->value1;
    }

    public function getValue2(): int
    {
        return $this->value2;
    }

    public function getResult(): int
    {
        return $this->result;
    }

    public function add(): Task12
    {
        $this->result = $this->getValue1() + $this->getValue2();

        return $this;
    }

    public function subtract(): Task12
    {
        $this->result = $this->getValue1() - $this->getValue2();

        return $this;
    }

    public function multiply(): Task12
    {
        $this->result = $this->getValue1() * $this->getValue2();

        return $this;
    }

    public function divide(): Task12
    {
        if ($this->getValue2() === 0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        $this->result = $this->getValue1() / $this->getValue2();

        return $this;
    }

    public function divideBy(int $input): Task12
    {
        if ($input === 0) {
            throw new \InvalidArgumentException('Division by zero');
        }

        $this->result /= $input;

        return $this;
    }
    public function multiplyBy(int $input): Task12
    {
        $this->result *= $input;

        return $this;
    }
    public function subtractBy(int $input): Task12
    {
        $this->result -= $input;

        return $this;
    }
    public function addBy(int $input): Task12
    {
        $this->result += $input;

        return $this;
    }
}
