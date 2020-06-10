<?php

namespace Acme;

/**
 * Square class
 */
class Square implements Shape
{
    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * Initialize the class
     * 
     * @param int $height
     * @param int $width
     */
    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * Calculate the area
     * 
     * @return int
     */
    public function area()
    {
        return $this->width * $this->height;
    }
}
