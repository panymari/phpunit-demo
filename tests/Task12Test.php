<?php

use PHPUnit\Framework\TestCase;

require_once './Task12.php';

class Task12Test extends TestCase
{
    /**
     * @dataProvider providePositive
     */
    public function testPositive(mixed $response, mixed $expected): void
    {
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        $task12Values1 = new Task12(12, 6);
        $task12Values2 = new Task12(0, -5);


        return [
            'Add' => [array_values((array)$task12Values1->add())[2], 18],
            'Subtract' => [array_values((array) $task12Values1->subtract())[2], 6],
            'Multiply' => [array_values((array) $task12Values1->multiply())[2], 72],
            'Divide' => [array_values((array) $task12Values1->divide())[2], 2],
            'Divide by' => [array_values((array) $task12Values1->add()->divideBy(9))[2], 2],
            'Multiply by' => [array_values((array) $task12Values1->subtract()->multiplyBy(5))[2], 30],
            'Subtract by' => [array_values((array) $task12Values1->multiply()->subtractBy(25))[2], 47],
            'Add by' => [array_values((array) $task12Values1->divide()->addBy(15))[2], 17],
            'Divide on negative' => [array_values((array) $task12Values2->divide())[2], 0],
            'Divide by negative' => [array_values((array) $task12Values1->multiply()->divideBy(-12))[2], -6],
        ];
    }

    /**
     * @dataProvider provideNegative
     */

    public function testNegative(): void
    {
        $task12 = new Task12(12, 6);
        $this->expectException(InvalidArgumentException::class);
        $task12->multiply()->divideBy(0);
    }

    public function provideNegative(): void
    {
        $task12_1 = new Task12(-1, 0);
        $this->expectException(InvalidArgumentException::class);
        array_values((array) $task12_1->divide())[2];
    }

}