<?php
session_start();
# variabelen die gebruikt gaan worden
# als ik het getal nog niet in mijn geheugen (sessie) heb, pak dan een nieuw getal
if (array_key_exists('teRaden',$_SESSION)) {
  $i_teRaden = $_SESSION['teRaden'] ;
} else {
  $i_teRaden = mt_rand(1,10) ; # moet nog willekeurig
  $_SESSION['teRaden'] = $i_teRaden ;
}
