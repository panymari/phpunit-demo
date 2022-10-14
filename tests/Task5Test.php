<?php

use PHPUnit\Framework\TestCase;

require_once './Task5.php';

class Task5Test extends TestCase
{
    /**
     * @dataProvider providePositive
     */
    public function testPositive(int $n, string $expected): void
    {
        $response = (new Task5())->main($n);
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        return [
            'Good' => [99, '121253296785055132210628998331901307849293052175954107980980734350044979474331514800545696516184354'],
            'Good Two' => [12, '139583862445'],
            'Good Three' => [155, '12370325933216525298289036805444482769759805440621396808218380305165743695894655736924257395390702345089651108425656165172311749028233154775588727791956661'],
            'Good Four' => [187, '1168127103595313565197059121655703139196765746521048059031379147028015381017457261222224216531536039129305956087714517625797701347217670824543976357537086354573860269353297582671685161779'],
        ];

    }

    /**
     * @dataProvider provideNegative
     */

    public function testNegative(int $n): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new Task5())->main($n);
    }

    public function provideNegative(): array
    {
        return [
            'Zero' => [0],
            'Negative number' => [-12]
        ];
    }
}