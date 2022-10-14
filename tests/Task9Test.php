<?php

use PHPUnit\Framework\TestCase;

require_once './Task9.php';

class Task9Test extends TestCase
{
    /**
     * @dataProvider providePositive
     */
    public function testPositive(array $arr, int $number, array $expected): void
    {
        $response = (new Task9())->main($arr, $number);
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        return [
            'Positive test 1' => [[2, 7, 7, 1, 8, 2, 7, 8, 7], 16, [["2 + 7 + 7 = 16"], ["7 + 1 + 8 = 16"]]],
            'Positive test 2' => [[2, 7, 7, 1, 2, 2, 12, 2, 2], 16, [
                ["2 + 7 + 7 = 16"],
                ["2 + 2 + 12 = 16"],
                ["2 + 12 + 2 = 16"],
                ["12 + 2 + 2 = 16"],
            ]],

        ];

    }

    /**
     * @dataProvider provideNegative
     */

    public function testNegative(array $arr, int $number): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new Task9())->main($arr, $number);
    }

    public function provideNegative(): array
    {
        return [
            'Negative number' => [[2, 7, 7, 1, 8, 2, 7, 8, 7], -16],
            'Zero number' => [[2, 7, 7, 1, 8, 2, 7, 8, 7], 0],
            'Negative value in array' => [[-2, 7, -7, 1, 8, 2, -7, 8, 7], 0],
        ];
    }
}