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
     * on teste l'addition
     */
    public function testPlus()
    {
        $math = new Math(100);
        $math
            ->plus(27)
            ->plus(23);

        self::assertEquals(150, $math->getNumber());
    }

    /**
     * on teste la soustration
     */
    public function testMinus()
    {
        $math = new Math(123);
        $math
            ->minus(23)
            ->minus(10);

        self::assertEquals(90, $math->getNumber());
    }

    /**
     * Test d'initialisation
     */
    public function testInitialize()
    {
        $math = new Math(1e+2);
        self::assertEquals(100, $math->getNumber());

        $math = new Math(100);
        self::assertEquals(100, $math->getNumber());

        $math = new Math('100');
        self::assertEquals(100, $math->getNumber());
    }

    /**
     * on teste la soustration
     */
    public function testAddString()
    {
        $math = new Math('1e2');
        $math
            ->plus('23')
            ->plus('27');

        self::assertEquals(150, $math->getNumber());
    }


    public function testDividedBy()
    {
        $math = new Math(100);
        $math->devide(2);

        self::assertEquals(50, $math->getNumber());

//        $math = new Math(100);
//        $math->devide(0);
    }
}
