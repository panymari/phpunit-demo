<?php

use PHPUnit\Framework\TestCase;

require_once './Task8.php';

class Task8Test extends TestCase
{
    /**
     * @dataProvider providePositive
     */
    public function testPositive(string $json, string $expected): void
    {
        $response = (new Task8())->main($json);
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        return [
            'Good' => ['{
            "Title": "The Cuckoos Calling", 
            "Author": "Robert Galbraith",
            "Detail": {
            "Publisher": "Little Brown"
            }}', "Title: The Cuckoos Calling\r\nAuthor: Robert Galbraith\r\nPublisher: Little Brown"],

        ];

    }

    /**
     * @dataProvider provideNegative
     */

    public function testNegative(string $json): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new Task8())->main($json);
    }

    public function provideNegative(): array
    {
        return [
            'Not a json' => ['Title: he Cuckoos Calling'],
            'Only number in string' => ['1'],
            'Not a json, just a string' => ['hello world'],
        ];
    }
}