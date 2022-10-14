<?php

class Task5
{
    public function sum(string $a, string $b): string
    {
        $maxLength = max(strlen($a), strlen($b));

        $a = str_pad($a, $maxLength, '0', STR_PAD_LEFT);
        $b = str_pad($b, $maxLength, '0', STR_PAD_LEFT);

        $result = '';

        $buf = 0;

        for ($i = $maxLength - 1; $i >= 0; $i--) {
            $sum = substr($a, $i, 1) + substr($b, $i, 1) + $buf;
            if (strlen($sum) > 1) {
                $result = substr($sum, 1, 1) . $result;
                $buf = substr($sum, 0, 1);
            } else {
                $result = $sum . $result;
                $buf = 0;
            }
        }
        if ($buf == 1) {
            $result = '1' . $result;
        }

        return $result;
    }

    public function main(int $n): string
    {
        if ($n <= 0) {
            throw new \InvalidArgumentException('Invalid input!');
        }
        if ($n === 1) {
            return 0;
        }
        $n1 = 0;
        $n2 = 1;
        $n3 = 0;

        while (strlen(strval($n3)) !== $n) {
            $n3 = $this->sum($n1, $n2);
            $n1 = $n2;
            $n2 = $n3;
        }

        return sprintf('%s', $n3);
    }
}