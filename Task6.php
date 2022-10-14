<?php

class Task6
{
    public function getDayOfTheWeek(string $day): int
    {
        return match ($day) {
            'Monday' => 1,
            'Tuesday' => 2,
            'Wednesday' => 3,
            'Thursday' => 4,
            'Friday' => 5,
            'Saturday' => 6,
            'Sunday' => 0,
        };
    }

    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        if ($year < 0 || $lastYear < 0 || $month > 12 || $lastMonth > 12) {
            throw new \InvalidArgumentException('Invalid input!');
        }
        $dayToCount = $this->getDayOfTheWeek($day);
        $mondayCounter = 0;
        while ($year < $lastYear || $month < $lastMonth) {
            if (date('w', strtotime("01.{$month}.{$year}")) == $dayToCount) {
                $mondayCounter += 1;
            }
            $month += 1;
            if ($month === 13) {
                $month = 1;
                $year += 1;
            }
        }

        return $mondayCounter;
    }
}

