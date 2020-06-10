<?php

use Acme\Shape;

/**
 * Circle class handler
 */
class Circle implements Shape
{
    /**
     * @var int
     */
    public $radius;

    /**
     * Initialize the class
     * 
     * @param int $radius
     */
    function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * Calculate the circle area
     * 
     * @return float
     */
    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}
