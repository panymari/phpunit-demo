<?php

use PHPUnit\Framework\TestCase;

require_once './Task4.php';

class Task4Test extends TestCase
{
    /**
     * @dataProvider providePositive
     */
    public function testPositive(string $input, string $expected): void
    {
        $response = (new Task4())->main($input);
        $this->assertSame($expected, $response);
    }

    public function providePositive(): array
    {
        return [
            'Positive test 1' => ['The quick-brown_fox jumps over the_lazy-dog', 'TheQuickBrownFoxJumpsOverTheLazyDog'],
            'Positive test 2' => ['test string_That_also need to ---Convert', 'TestStringThatAlsoNeedToConvert']
        ];
    }
}