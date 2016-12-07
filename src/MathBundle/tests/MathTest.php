<?php

namespace Jycamier\MathBundle;

use PHPUnit\Framework\TestCase;

/**
 * Class MathTest
 *
 * @package Eheuje
 * @author  Jean-Yves Camier <jycamier@clever-age.com>
 */
class MathTest extends TestCase
{
    /**
     * @param $init
     * @param $a
     * @param $b
     * @param $result
     *
     * @dataProvider additionProvider
     */
    public function testPlus($init, $a, $b, $result)
    {
        $math = new Math($init);
        $math
            ->plus($a)
            ->plus($b);

        self::assertEquals($result, $math->getNumber());
    }

    /**
     * @return array
     */
    public function additionProvider()
    {
        return [
            'first add with integer' => [100, 27, 23, 150],
            'second add string' => ['100.000', '27.27', '23.23', '150.50'],
            'third add and string' => [100, 27, '23', 150],
        ];
    }

    /**
     * @param $init
     * @param $a
     * @param $b
     * @param $result
     *
     * @dataProvider minusProvider
     */
    public function testMinus($init, $a, $b, $result)
    {
        $math = new Math($init);
        $math
            ->minus($a)
            ->minus($b);

        self::assertEquals($result, $math->getNumber());
    }


    /**
     * @return array
     */
    public function minusProvider()
    {
        return [
            'first minus with integer' => [123, 23, 10, 90],
            'minus with string and int' => [123, 23, '10', 90],
        ];
    }

    /**
     * @param $init
     * @param $result
     *
     * @dataProvider initDataProvider
     */
    public function testInitialize($init, $result)
    {
        $math = new Math($init);

        self::assertEquals($result, $math->getNumber());
    }

    /**
     * @return array
     */
    public function initDataProvider()
    {
        return [
            'initialization with int' => [100, 100],
            'initialization with scientific notation' => [1e+2, 100],
            'initialization with float' => ['100', 100],
        ];
    }

    /**
     * @param int $init
     * @param int $value
     * @param int $result
     *
     * @dataProvider divisionDataProvider
     */
    public function testDividedBy($init, $value, $result)
    {
        $math = new Math($init);
        $math->devide($value);

        self::assertEquals($result, $math->getNumber());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDevidedByZero()
    {
        $math = new Math(1000);
        $math->devide(0);
    }

    /**
     * @return array
     */
    public function divisionDataProvider()
    {
        return [
            'standard division with integer values' => [100, 2, 50],
            'standard division with string values' => ['100', '2', 50],
        ];
    }
}
