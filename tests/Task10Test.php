<?php

use PHPUnit\Framework\TestCase;

require_once './Task10.php';

class Task10Test extends TestCase
{
    /**
     * @dataProvider providePositive
     */
    public function testPositive(int $input, array $expected): void
    {
        $response = (new Task10())->main($input);
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        return [
            'Positive test 1' => [35, [
                0 => 35,
                1 => 106,
                2 => 53,
                3 => 160,
                4 => 80,
                5 => 40,
                6 => 20,
                7 => 10,
                8 => 5,
                9 => 16,
                10 => 8,
                11 => 4,
                12 => 2,
                13 => 1
            ]],
            'Positive test 2' => [12, [
                0 => 12,
                1 => 6,
                2 => 3,
                3 => 10,
                4 => 5,
                5 => 16,
                6 => 8,
                7 => 4,
                8 => 2,
                9 => 1]]
        ];

    }

    /**
     * @dataProvider provideNegative
     */

    public function testNegative(int $input): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new Task10())->main($input);
    }

    public function provideNegative(): array
    {
        return [
            'Negative input' => [-16],
            'Zero input' => [0]
        ];
    }
}