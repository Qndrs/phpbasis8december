<?php
/**
 * opslaan van data in een bestand vereist string data
 * een array is geen string
 * kun je arrays naar strings omzetten?
 * convert2string (of zoiets)
 * string naar array: explode
 * array naar string : implode
 * serialize en unserialize (cookie methode)
 * xml kan niet (html, rss)
 * json kan makkelijk (json_encode, json_decode)
 */
$lijst = [1,'twee'=>2,3,4,'lijstje'=>['vijftig'=>50,60],6,7,8,9,0] ;
// echo implode(" en " , $lijst) ; // werkt alleen met platte lijsten
// echo serialize($lijst) ;
// $stringlijst = serialize($lijst) ;
// $nieuweLijst = unserialize($stringlijst) ;
$stringlijst = json_encode($lijst) ;
// echo $stringlijst ;
// file_put_contents("json_informatie.json",$stringlijst, FILE_APPEND ) ;
/**
 * toevoegen van NOG een json resultaat
 * eerst voorgaande lezen
 * omzetten naar array
 * array aanvullen met het laatste resultaat
 * array omzetten naar json en opslaan
 * file_exists
 * file_get_contents
 * file_put_contents
 */
if(file_exists("json_informatie.json")){
    // dan eerste lezen
    $file_get[] = json_decode(file_get_contents("json_informatie.json")) ;
    $file_get[] = $lijst ;
    file_put_contents("json_informatie.json",json_encode($file_get)) ;
    var_dump($file_get) ;
    // die("hier moet nog wat gebeuren") ;
} else {
    $stringlijst = json_encode($lijst) ;
    file_put_contents("json_informatie.json",$stringlijst, FILE_APPEND ) ;
}


$nieuweLijst = json_decode($stringlijst) ;
// var_dump($nieuweLijst) ;