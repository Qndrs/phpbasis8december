<?php
// eenvoudige functies
$getalletje1 = 1 ;
$getalletje2 = 4 ;
$getal1 = 100;

echo optellen($getalletje1) . '<br>' ; //+ optellen($getalletje2) ;
echo $getalletje1 ;

function optellen(&$getal1 , $getal2 = 3){ // let op de & !!
    $getal1 = $getal1 - 50 ;
    return $getal1 + $getal2;
}