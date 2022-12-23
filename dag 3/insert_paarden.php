<?php
/**
 * verbinding maken (credentials nodig)
 * verstuur de SQL query: select * from paarden
 * sla antwoord op in variabele (een ding)
 * peuter de gegevens uit het antwoordding
 * 
 * gebruik bv: mysqli_
 */
define('DBHOST','127.0.0.1') ;
define('DBPORT', 3307) ;
define('DBUSER', 'root') ;
define('DBPASSWORD', 'opatel') ;
define('DBDATABASE','paarden') ;
// verbinding maken

$dbconnect = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, 
                            DBDATABASE, DBPORT ) ;
// paard toevoegen via insert
// insert into paarden (`naam`, geboren, ras_ID) values ('robert' , '2022-12-22' , 5)
$sql = "insert into paarden (`naam`, geboren, ras_ID) values ('robert' , '2022-12-22' , 5)";
$query_resultaat = mysqli_query($dbconnect, $sql) ;
// var_dump($query_resultaat) ;

$query_resultaat = mysqli_query($dbconnect,'select * from paarden') ;
mysqli_close($dbconnect) ;
// var_dump($query_resultaat) ;
// $resultaat_array = mysqli_fetch_array($query_resultaat) ;
// var_dump($resultaat_array) ;
// $resultaat_array = mysqli_fetch_assoc($query_resultaat) ;
// var_dump($resultaat_array) ;
while ($resultaat_array = mysqli_fetch_assoc($query_resultaat)) {
    # code...
    echo $resultaat_array['naam'] . '<br>' ;
}
