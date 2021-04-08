<?php

include 'Point2D.php';

class Point3D extends Point2D
{
    public $z = 0.0;

    public function __construct($x, $y, $z)
    {
//        $this->x=$x;
//        $this->y=$y;
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param float $z
     */
    public function setZ($z)
    {

    }

    public function setXYZ($x, $y, $z)
    {
        /*$this->x=$x;
        $this->y=$y;
        $this->z=$z;*/
    }

    public function getXYZ()
    {
        return $this->x . ", " . $this->y . ", " . $this->z;
    }

    public function toString()
    {
        return 'day so' . '[ ' . $this->getXYZ() . ' ]';
    }

}