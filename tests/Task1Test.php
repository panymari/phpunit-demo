<?php

use PHPUnit\Framework\TestCase;

require_once './Task1.php';

class Task1Test extends TestCase
{

    /**
     * @dataProvider providePositive
     */
    public function testPositive(int $inputNumber, string $expected): void
    {
        $response = (new Task1())->main($inputNumber);
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        $moreThanThirty = rand(31, 1000);
        $moreThanTwenty = rand(21, 30);
        $moreThanTen = rand(11, 20);
        $equalOrLessThanTen = rand(-1000, 10);
        $negativeNumbers = rand(-1000, -1);

        return [
            'More than 30' => [$moreThanThirty, 'More than 30'],
            'More than 20' => [$moreThanTwenty, 'More than 20'],
            'More than 10' => [$moreThanTen, 'More than 10'],
            'Equal or less than 10' => [$equalOrLessThanTen, 'Equal or less than 10'],
            'Negative numbers' => [$negativeNumbers, 'Equal or less than 10'],
            'Zero' => [0, 'Equal or less than 10']
        ];
    }
}