<?php

class Task4
{
    public function main(string $input): string
    {
        if (str_contains($input, '_') || str_contains($input, '-')) {
            $stringWithSpaces = ucwords(str_replace(['-', '_'], ' ', $input));

            return str_replace(' ', '', $stringWithSpaces);
        } else {
            $firstLetterUpperCaseString = ucwords($input);

            return str_replace(' ', '', $firstLetterUpperCaseString);
        }
    }
}
