<?php
$i_laagste = 1 ;
$i_hoogste = 10 ;
$s_welkom = 'Welkom bij het spelletje hoger/lager. Geef een getal op tussen 1 en 10.' ;
$s_hogerRaden = 'U moet hoger raden.' ;
$s_lagerRaden = 'U moet lager raden.' ;
$s_goedGeraden = 'Helemaal goed! U kunt meteen opnieuw spelen.' ;
$s_geenGetalFout = 'U heeft geen getal doorgegeven. Geef een getal op tussen 1 en 10.' ;
$b_waarheid = true ; # Boolean true of false
$f_decimaalGetal = 10.56 ; # kommagetal, let op de PUNT
$a_lijst = array(1,2,3,4,5,'hallo') ; # arrays zijn DE variabelen bij programmeren
# bouw het formulier
$html_form_start = '<form class="" action="'.$_SERVER["PHP_SELF"].'" method="post">' ;
$html_form_end = '</form>' ;
$html_form_buttons = '' ;
for ($i=$i_laagste; $i <= $i_hoogste; $i++) {  # $i++  is als: $i = $i + 1
  // code...
  $html_form_buttons = $html_form_buttons .
              '<input type="submit" name="getal" value="' . $i .  '">' ;
}
$html_form = $html_form_start . $html_form_buttons . $html_form_end ;
