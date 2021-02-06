<?php

declare(strict_types=1);

namespace Hoge\Hoge;

final class Hoge
{
    public function print(int $number): string
    {
        if ($number % 15 === 0) {
            return 'Fizz Buzz';
        } 
        if ($number % 3 === 0) {
            return 'Fizz';
        } 
        if ($number % 5 === 0) {
            return 'Buzz';
        }
        return "{$number}";
    }
}
