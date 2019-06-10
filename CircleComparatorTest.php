<?php
include "CircleComparator.php";
$circleOne = new Circle('circleOne', 8);
$circleTwo = new Circle('circleOTwo', 2);
$circleComparator = new CircleComparator();

;
echo $circleComparator->compare($circleOne, $circleTwo);