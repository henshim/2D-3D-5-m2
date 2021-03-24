<?php


class Point2D
{
    public $x = 0.0;
    public $y = 0.0;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        //$this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        //$this->y = $y;
    }

    public function setXY($x, $y)
    {
    }

    public function getXY()
    {
        return array($this->x,$this->y);
    }

    public function toString()
    {
        return 'so [' . $this->getXY().']';
    }
}