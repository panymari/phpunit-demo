<?php

class Task3
{
    public function main($value): int
    {
        if (1 >= $value || !is_integer($value)) {
            throw new \InvalidArgumentException('Invalid input!');
        }

        $digitValue = 0;

        while ($value > 0 || $digitValue > 9) {
            if ($value === 0) {
                $value = $digitValue;
                $digitValue = 0;
            }
            $digitValue += $value % 10;
            $value = (int)$value / 10;
        }

        return $digitValue;
    }
}
