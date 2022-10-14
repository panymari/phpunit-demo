<?php

use PHPUnit\Framework\TestCase;

require_once './Task3.php';

class Task3Test extends TestCase
{
    /**
     * @dataProvider providePositive
     */
    public function testPositive(int $inputNumber, int $expected): void
    {
        $response = (new Task3())->main($inputNumber);
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        return [
            'Positive test 1' => [5689, 1],
            'Positive test 2' => [1234, 1],
            'Positive test 3' => [56, 2]
        ];
    }

    /**
     * @dataProvider provideNegative
     */

    public function testNegative(int $inputNumber): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new Task3())->main($inputNumber);
    }

    public function provideNegative(): array
    {
        return [
            'Negative values' => [-12],
            'Too small value' => [1]
        ];
    }
}