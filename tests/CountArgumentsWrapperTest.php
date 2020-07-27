<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsWrapperTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     * @param $input
     */
    public function testPositive(...$input)
    {
        $this->expectException(InvalidArgumentException::class);

        countArgumentsWrapper($input);
    }

    public function positiveDataProvider()
    {
        return [
            [25, 'mo', 74],
            [[0, 1, 2, 3], ['por', 'lion']],
            [true, 'false', false]
        ];
    }
}