<?php
namespace Example\Testing;

class FooTest extends \PHPUnit_Framework_TestCase
{
    public function testBar()
    {
        $foo = new Foo;
        $actual = $foo->bar('zim');
        $expect = 'zim';
        $this->assertSame($expect, $actual);
    }
}
