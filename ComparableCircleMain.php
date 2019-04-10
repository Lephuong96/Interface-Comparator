<?php
include "ComparableCircle.php";
$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleOTwo', 2);
$circleThree = new ComparableCircle('circleThree', 4);

var_dump($circleOne->compareTo($circleTwo));
$test = $circleOne->compareTo($circleTwo);
echo ('Comparable: <br>');
echo $test;