<?php
# reading an array that is nested inside an array
$mylist = [1,2,3,4, [1,2,[3],4] ,5,6,7,8] ;
# test and dump it
# var_dump($mylist) ;
foreach ($mylist as $key => $value) {
    # if $value is an array then do another foreach
    if (is_array($value)) {
        # loop through this array
        foreach ($value as $innerkey => $innervalue) {
            if (is_array($innervalue)) {
                # loop through this array
                foreach ($innervalue as $innerinnerkey => $innerinnervalue) {
                    echo $innerinnervalue . ' (inner-inner)<br>' ;
                }
            } else {
                echo $innervalue . ' (inner)<br>' ;
            }         
        }
    } else {
        echo $value . '<br>' ;
    }    
}
