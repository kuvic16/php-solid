<?php

namespace Acme;

/**
 * Area calculator class
 */
class AreaCalculator
{

    /**
     * calculate the area
     * 
     * @param array $squares
     * 
     * @return int
     */
    public function calculate($squares)
    {
        foreach ($squares as $square) {
            $area[] = $square->width * $square->height;
        }

        return array_sum($area);
    }
}
