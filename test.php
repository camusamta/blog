<?php

// just for the purposes of playing around a bit with my very limited PHP knowledge, here, the article dates will always show as having been posted three months ago

$monthsArray = [JAN, FEB, MAR, APR, MAY, JUN, JULY, AUG, SEP, Oct, NOV, DEC];
$currMonth = date('M');


for ($i=0;$i<12;$i++) {

if ($monthsArray[$i] == $currMonth) {

$upDate = $monthsArray[$i - 1];

};

};

echo $upDate;

?>
