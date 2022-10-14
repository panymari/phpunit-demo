<?php

class Task7
{
    public function main(array $arr, int $position): array
    {
        if (count($arr) <= $position) {
            throw new \InvalidArgumentException('There is no such position here!');
        }
        if ($position < 0) {
            throw new \InvalidArgumentException('Invalid position!');
        }
        if (empty($arr)) {
            throw new \InvalidArgumentException('Array is empty!');
        }
        array_splice($arr, $position, 1);

        return $arr;
    }
}
