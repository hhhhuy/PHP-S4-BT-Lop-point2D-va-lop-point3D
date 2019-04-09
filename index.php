<?php
include "point2D.php";
include "point3D.php";
$point2d = new Point2D();
$point2d->setXY(2, 8);
echo "Toa Do 2D la :" . $point2d . "<br/>";
$point3d = new Point3D();
$point3d->setXYZ(4, 1, 3);
echo "Toa Do 3D la :" . $point3d;
?>