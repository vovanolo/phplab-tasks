<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentWrapperTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     * @param $input
     */
    public function testPositive($input)
    {
        $this->expectException(InvalidArgumentException::class);

        sayHelloArgumentWrapper($input);
    }

    public function positiveDataProvider()
    {
        return [
            [[1, 2, 3, 4, 5]],
            [null],
            [78.457]
        ];
    }
}