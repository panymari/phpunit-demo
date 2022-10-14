<?php


class Task2
{
    public function main(string $date): int
    {
        if (!preg_match('/^(0[1-9]|[12][0-9]|3[01])(\/|-|\.)(0[1-9]|1[012])(\/|-|\.)(19|20)\d\d$/', $date)) {
            throw new \InvalidArgumentException('Invalid input date!');
        }

        if ($date == date('d.m.Y') || $date == date('d-m-Y')) {
            return 0;
        }

        $dayMonth = substr($date, 0, 5);
        $nextYearDate = $dayMonth . '.' . date('Y') + 1;

        $currentDate = strtotime(date('d-m-Y'));
        $currentDateNextYear = strtotime($nextYearDate);
        $targetDate = strtotime($date);

        if ($targetDate > $currentDate) {
            $difference = $currentDate - $targetDate;
        } else {
            $difference = $currentDateNextYear - $currentDate;
        }

        return abs(round($difference / (60 * 60 * 24)));
    }
}
