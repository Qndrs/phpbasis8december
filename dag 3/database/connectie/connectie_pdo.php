<?php
# vul de credentials in in wat variabelen of constanten
define( 'DB_HOST', 'localhost:3306' );
define( 'DB_NAME', 'database' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'password' );
# maak de verbinding en controleer of deze werkt.
function verbinden(){
  $verbinding = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
  $db = null;
  try{
    return new PDO( $verbinding, DB_USER, DB_PASS );
  }catch( PDOException $e ){
    #return NULL;
    die($e) ;
  }
}