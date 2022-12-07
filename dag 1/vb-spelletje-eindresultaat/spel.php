<?php
# beschrijving functionaliteit
/*
Beschrijving van hoger/lager spelletje
t: Welkom bij hoger/lager. Kies een getal tussen 1 en 10
programma: kiest een te raden getal in het geheugen
interface: knoppen met getallen / hyperlinks / plaatjes / textveld
deelnemer: geeft een getal door
programma: doorgegeven getal gaan beoordelen
-> is het een getal?
-> zo nee: doorgeven dat het geen getal is, nieuw poging
-> zo ja: is het hoger dan het te raden getal: t: u moet lager raden
          is het lager dan het te raden getal: t: u moet hoger raden
          is het goed geraden: t: goed geraden! (wilt U nog een keer?)
*/
# sessie realiseren
require_once('spelinitialisatie.php') ;
# sluit de variabelen in
require_once('spelvariabelen.php') ;

# beoordelen wat is verzonden (is het een getal en wat is het dan?)
if (array_key_exists('getal', $_POST)) { # && is 'and' || is 'or'
  if (is_numeric($_POST['getal'])) {
    // code...het is een getal
    # sla het getal op in de beurten lijst in de session lijst
    $_SESSION['beurten'][] = $_POST['getal'] ;
    if ($_POST['getal'] > $i_teRaden) {
      // code...
      $s_output = $s_lagerRaden ;
    } else
    if ($_POST['getal'] < $i_teRaden) {
      // code...
      $s_output = $s_hogerRaden ;
    } else
    #if ($_POST['getal'] == $i_teRaden) {
    {  // code...
      $s_output = $s_goedGeraden ;
      # sla alle gegevens op in een bestand
      session_destroy(); # gooit alle sessie data weg
    }
  } else {
    // code...het is niet numeric
    $s_output = $s_geenGetalFout ;
  }
} else {
  // code...er is geen POST doorgegeven
  // code...de eerste keer dat iemand bij het spel komt
  # voorbereiding van de output
  $s_output = $s_welkom ;
}


 ?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Output van mijn PHP</title>
  </head>
  <body>
    <?php echo '<h1>' . $s_output . '</h1>' ;  ?>
    <?php echo $html_form ; ?>
    <pre>
    <?php #var_dump($i_teRaden) ; ?>

    <?php #var_dump($b_waarheid) ; ?>

    <?php #var_dump($_POST) ; ?>

    <?php #var_dump($_SERVER["PHP_SELF"]) ; ?>

    <?php #echo json_encode($_SESSION) ; ?>
    </pre>
  </body>
</html>
