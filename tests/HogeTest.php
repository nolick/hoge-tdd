<?php

declare(strict_types=1);

namespace Hoge\Hoge;

use PHPUnit\Framework\TestCase;

class HogeTest extends TestCase
{
    /** @var Hoge */
    protected $hoge;

    protected function setUp(): void
    {
        $this->hoge = new Hoge();
    }

    public function testIsInstanceOfHoge(): void
    {
        $actual = $this->hoge;
        $this->assertInstanceOf(Hoge::class, $actual);
        $this->assertTrue(true);
    }
}
