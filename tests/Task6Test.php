<?php

use PHPUnit\Framework\TestCase;

require_once './Task6.php';

class Task6Test extends TestCase
{
    /**
     * @dataProvider providePositive
     */
    public function testPositive(int $year, int $lastYear, int $month, int $lastMonth, string $expected): void
    {
        $response = (new Task6())->main($year, $lastYear, $month, $lastMonth);
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        return [
            'Positive test 1' => [1980, 2000, 02, 04, 35],
            'Positive test 2' => [2000, 2009, 01, 07, 16],
            'Positive test 3' => [1980, 2021, 05, 10, 71],
        ];

    }

    /**
     * @dataProvider provideNegative
     */

    public function testNegative(int $year, int $lastYear, int $month, int $lastMonth): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new Task6())->main($year, $lastYear, $month, $lastMonth);
    }

    public function provideNegative(): array
    {
        return [
            'Year is negative' => [-1900, 2000, 02, 03],
            'Last year is negative' => [1900, -2000, 02, 03],
            'Month is invalid' => [-1900, 2000, 13, 02],
            'Last month is invalid' => [1900, -2000, 02, 22],
        ];
    }
}