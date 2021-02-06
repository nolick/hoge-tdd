<?php

declare(strict_types=1);

namespace Hoge\Hoge;

# [x]数字を入力したら、文字列を返す
# [x]ただし、3で割り切れる場合は「Fizz」（Bizz Buzzの場合は「Bizz」）、
# [x]5で割り切れる場合は「Buzz」、
# [x]両者で割り切れる場合（すなわち15で割り切れる場合）は「Fizz Buzz」（Bizz Buzzの場合は「Bizz Buzz」）を数の代わりに発言しなければならない。

use PHPUnit\Framework\TestCase;

class HogeTest extends TestCase
{
    /** @var Hoge */
    protected $hoge;

    protected function setUp(): void
    {
        $this->hoge = new Hoge();
    }

    // 日本語メソッドは@testアノテーションが必要
    /** 
     * @test
     */
    public function 数字を入力したら、文字列を返す(): void
    {
        $printedValue = $this->hoge->print(1);
        $this->assertSame('1', $printedValue);
    }

    /** 
     * @test
     */
    public function ただし、3で割り切れる場合は「Fizz」(): void 
    {
        $printedValue = $this->hoge->print(3);
        $this->assertSame('Fizz', $printedValue);
    }

    /** 
     * @test
     */
    public function ただし、5で割り切れる場合は「Buzz」(): void 
    {
        $printedValue = $this->hoge->print(5);
        $this->assertSame('Buzz', $printedValue);
    }

    /** 
     * @test
     */
    public function ただし、15で割り切れる場合は「FizzBuzz」(): void 
    {
        $printedValue = $this->hoge->print(15);
        $this->assertSame('Fizz Buzz', $printedValue);
    }

    // data provider
    // https://phpunit.readthedocs.io/ja/latest/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers
    /**
     * @test
     * @dataProvider fizzBuzzProvider
     */
    public function FizzBuzzPatternTest($number, $expected): void
    {
        $printedValue = $this->hoge->print($number);
        $this->assertSame($expected, $printedValue);
    }

    public function fizzBuzzProvider(): array
    {
        return [
            "1の場合は文字列1を返す" => [1, '1'],
            [3, 'Fizz'],
            [5, 'Buzz'],
            [10, 'Buzz'],
            [15, 'Fizz Buzz'],
            [36, 'Fizz'],
            [45, 'Fizz Buzz'],
        ];
    }
}