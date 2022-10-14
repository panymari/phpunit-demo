<?php

class Task9
{
    public function main(array $arr, int $number): array
    {
        $flag = false;

        foreach ($arr as $value) {
            if ($value < 0) {
                $flag = true;
            }
        }

        if ($number <= 0 || count($arr) <= 2 || $flag) {
            throw new \InvalidArgumentException('Invalid input!');
        }

        $result = [];
        for ($i = 0;$i < count($arr) - 2; $i++) {
            if ($arr[$i] + $arr[$i + 1] + $arr[$i + 2] === $number) {
                array_push($result, ["{$arr[$i]} + {$arr[$i + 1]} + {$arr[$i + 2]} = $number"]);
            }
        }

        return $result;
    }
}
