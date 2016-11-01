<?php

namespace Kata\Tests;


use Kata\HelloWorld;

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider validNamesProvider
     *
     * @param string $name
     * @param $expectedResult
     */
    public function validNames($name, $expectedResult)
    {
        $this->assertEquals(
            $expectedResult,
            (new HelloWorld())->say($name)
        );
    }

    public function validNamesProvider()
    {
        return [
            [null, 'Hello World'],
            ['', 'Hello World'],
            [' ', 'Hello World'],
            ['Ramon Puiggené', 'Ramon Puiggené'],
        ];
    }
}
