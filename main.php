<?php
//include_once 'Point2D.php';
include_once 'Point3D.php';

/*//
$c1=new Point2D(5,9);
//$c1->setXY(3,8);
echo 'Point 2D: '.$c1->toString().'<br>';*/

$c2= new Point3D(5,6,2);
//$c2->setXYZ(5,6,2);

echo 'Point 3D: '.print_r($c2->toString()).'<br>';
//print_r($c2->toString());