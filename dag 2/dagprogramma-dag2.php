<?php
/**
 * lijsten -> datastructuren
 * lijsten -> tabellen
 * 
 * lijsten -> name/value pairs
 * 
 * dingen -> name/value pairs
 *           functies (handelingen)
 * 
 * lussen en loopen
 * condities
 * 
 * functies
 */

$lijst = [1,2,3] ;
$lijst = array(1,2,3) ;
// lijsten beginnen zelf met 0 te tellen
$lijst = [1 => 1,
          2 => 2,
          30 => 3] ;
// wat is de lengte van een lijst?
// echo count($lijst) ;
$lijst[] = 40 ;
$lijst[0] = 41 ;
$lijst['name'] = 'value' ;
// var_dump($lijst) ; // print_r() kan ook
// echo $lijst['name'] ;
$teksten['nl']['welkom'] = "Hallo allemaal" ;
$teksten['nl']['totziens'] = "Tot ziens allemaal" ;
$teksten['en']['welkom'] = "Hello everybody" ;
$teksten['en']['totziens'] = "Goodbye everybody" ;
// var_dump($teksten) ;
// tabelidee: key , nl , en
//            welkom  , "hallo allemaal" , "hello everybody"
//            totziens , "Tot ziens allemaal" , "Goodbye everybody"
$taal = 'en' ;
// echo $teksten[$taal]['totziens'] ; 
// looping door een array / lussen door een lijst
$nummers = [0,1,2,3,4,[10,[100,200,300],30,50],6,7,8,9] ;
foreach ($nummers as $k => $v) {
    # Eerste niveau...
    if(is_array($v)){
        foreach ($v as $k1 => $v1) {
            # Tweede niveau...
            if(is_array($v1)){
                foreach ($v1 as $k12 => $v12) {
                    # Derde niveau...
                    echo 'de key12 is:' . $k12 . ' de value12 is: ' . $v12 . '<br>';
                    // echo "de key is: $k de value is: $v <br>" ; 
                }
            } else {
                # code...
                echo 'de key1 is:' . $k1 . ' de value1 is: ' . $v1 . '<br>';
                // echo "de key is: $k de value is: $v <br>" ; 
            }
        }
    } else {
        echo 'de key is:' . $k . ' de value is: ' . $v . '<br>';
        // echo "de key is: $k de value is: $v <br>" ; 
    }
}