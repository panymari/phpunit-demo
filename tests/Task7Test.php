<?php

use PHPUnit\Framework\TestCase;

require_once './Task7.php';

class Task7Test extends TestCase
{
    /**
     * @dataProvider providePositive
     */
    public function testPositive(array $arr, int $position, array $expected): void
    {
        $response = (new Task7())->main($arr, $position);
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        return [
            'Positive test 1' => [[1, 2, 3, 4, 5], 3, [1, 2, 3, 5]],
            'Positive test 2' => [[6, 8, 20, 11, 50, 100, 1, 80], 5, [6, 8, 20, 11, 50, 1, 80]],
            'Positive test 3' => [[11, 12, 13, 81, 89, 54, 66], 0, [12, 13, 81, 89, 54, 66]],
        ];

    }

    /**
     * @dataProvider provideNegative
     */

    public function testNegative(array $arr, int $position): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new Task7())->main($arr, $position);
    }

    public function provideNegative(): array
    {
        return [
            'There is no such position here!' => [[1, 2, 3, 4, 5], 10],
            'Negative position value' => [[1, 2, 3, 4, 5], -3],
            'Array is empty!' => [[], 4],
        ];
    }
}