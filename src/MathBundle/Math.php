<?php

namespace Jycamier\MathBundle;

/**
 * Class Math
 *
 * @author Jean-Yves Camier <jycamier@clever-age.com>
 */
class Math
{
    /** @var int|float */
    protected $number;

    /**
     * Math constructor.
     *
     * @param int|float $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * @param int|float $int
     */
    public function plus($int)
    {
        $this->number += $int;

        return $this;
    }

    /**
     * @param $number
     *
     * @return $this
     */
    public function minus($number)
    {
        $this->number -= $number;

        return $this;
    }

    /**
     * @return float|int
     */
    public function getNumber()
    {
        return $this->number;
    }
}
