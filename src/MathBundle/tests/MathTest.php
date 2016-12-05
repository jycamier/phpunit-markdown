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

        $this->assertEquals(150, $math->getNumber());
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

        $this->assertEquals(90, $math->getNumber());
    }

    /**
     * Test d'initialisation
     */
    public function testInitialize()
    {
        $math = new Math(1e+2);
        $this->assertEquals(100, $math->getNumber());

        $math = new Math(100);
        $this->assertEquals(100, $math->getNumber());

        $math = new Math('100');
        $this->assertEquals(100, $math->getNumber());
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

        $this->assertEquals(150, $math->getNumber());
    }
}
