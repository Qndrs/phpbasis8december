<?php
# computers make a lot of yes/no decisions
$number = 5 ;
if ($number == 5) {
    # code...
    echo 'The number is five! <br>' ;
} 
if ($number > 3) {
    # code...
    echo 'The number is larger then three! <br>' ;
}
if ($number <> 4) {
    # code...
    echo 'The number is unequal to four! <br>' ;
}
if ($number != 4 && $number <> 4) {
    # code...
    echo 'The number is not equal to four AND unequal to four! <br>' ;
}
if ($number != 4 || $number == 4) {
    # code...
    echo 'The number is not equal to four OR equal to four! <br>' ;
}
if ( ($number != 4 || $number == 4) && ($number != 4 && $number <> 4)) {
    # code...
    echo 'The condition evaluatues to true! <br>' ;
}
if (isset($number)) {
    # code...
    echo 'The variable $number exists! (isset)! <br>' ;
}
$returnValue = ($number == 5) ? 'It is five!<br>' : 'It is NOT five!<br>';
echo $returnValue ;
if (false) {
    # do this when it's true
} elseif (true){
    # do this when first 'if' is NOT true and second 'if' is TRUE
} else {
    # do this when all earlier conditions are NOT TRUE
    echo 'The last code block is executed!<br>' ;
}