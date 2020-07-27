<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsTest extends TestCase
{
    /**
     * @dataProvider positiveDataProviderWithoutArgs
     * @param $expected
     */
    public function testPositiveWithoutArgs($expected)
    {
        $this->assertEquals($expected, countArguments());
    }

    /**
     * @dataProvider positiveDataProviderWithOneArg
     * @param $input
     * @param $expected
     */
    public function testPositiveWithOneArg($input, $expected)
    {
        $this->assertEquals($expected, countArguments($input));
    }

    /**
     * @dataProvider positiveDataProviderWithCoupleArgs
     * @param $inputA
     * @param $inputB
     * @param $expected
     */
    public function testPositiveWithCoupleArgs($inputA, $inputB, $expected)
    {
        $this->assertEquals($expected, countArguments($inputA, $inputB));
    }

    public function positiveDataProviderWithoutArgs()
    {
        return [[['argument_count' => 0, 'argument_values' => array()]]];
    }

    public function positiveDataProviderWithOneArg()
    {
        return [['one', ['argument_count' => 1, 'argument_values' => [0 => 'one']]]];
    }

    public function positiveDataProviderWithCoupleArgs()
    {
        return [['one', 'two', ['argument_count' => 2, 'argument_values' => [0 => 'one', 1 => 'two']]]];
    }
}