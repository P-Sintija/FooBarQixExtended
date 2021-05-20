<?php

use App\Models\Foo;
use App\Models\Multiple;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testImplementation(): void
    {
        $foo = new Foo();
        $this->assertInstanceOf(Multiple::class, $foo);
    }

    public function testMultipleOf(): void
    {
        $foo = new Foo();
        $this->assertTrue(3 === $foo->multipleOf());
    }

    public function testName(): void
    {
        $foo = new Foo();
        $this->assertTrue('Foo' === $foo->name());
    }
}