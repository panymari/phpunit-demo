<?php

use PHPUnit\Framework\TestCase;

require_once "./Task2.php";

class Task2Test extends TestCase
{
    /**
     * @dataProvider providePositive
     */
    public function testPositive(string $date, int $expected): void
    {
        $response = (new Task2())->main($date);
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        $dateToday = date('d-m-Y');
        $nextDay = date('d-m-Y', strtotime(' +1 day'));
        $twelveDays = date('d-m-Y', strtotime(' +12 day'));
        $twentyDays = date('d-m-Y', strtotime(' +20 day'));

        return [
            'Zero' => [$dateToday, 0],
            'Next day' => [$nextDay, 1],
            'Twelve days' => [$twelveDays, 12],
            'TwentyDays days' => [$twentyDays, 20],
        ];
    }

    /**
     * @dataProvider provideNegative
     */

    public function testNegative(string $date): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new Task2())->main($date);
    }

    public function provideNegative(): array
    {
        return [
            'Invalid date' => ['41-10-2003'],
            'Invalid value' => ['2323']
        ];
    }
}