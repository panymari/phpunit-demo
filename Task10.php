<?php

class Task10
{
    public function main(int $input): array
    {
        $resultArr[] = $input;
        if ($input < 1) {
            throw new \InvalidArgumentException('Input must be only positive value!');
        }
        while ($input > 1) {
            if ($input % 2 === 0) {
                $input = $input / 2;
            } else {
                $input = $input * 3 + 1;
            }
            array_push($resultArr, $input);
        }

        return $resultArr;
    }
}
