<?php
function arrayToHtmlList($array) {
    // Check of de array leeg is
    if (empty($array)) return;
  
    // Start een HTML-lijst
    echo "<ul>";
  
    // Ga door elk element van de array heen
    foreach ($array as $key => $value) {
      // Als het huidige element een subarray is, voer de functie opnieuw uit
      // voor de subarray, anders toon het element als een lijstitem
      if (is_array($value)) {
        arrayToHtmlList($value);
      } else {
        echo "<li>" . $value . "</li>";
      }
    }
  
    // Sluit de HTML-lijst
    echo "</ul>";
  }
  $nummers = [0,1,2,3,4,[10,[100,['prijs'=>1000,2000],300],30,50],6,7,8,9] ;

  $myArray = array(
    "A" => array(
      "B",
      "C"
    ),
    "D" => array(
      "E",
      "F"
    ),
    "G"
  );
  
  arrayToHtmlList($nummers);
    