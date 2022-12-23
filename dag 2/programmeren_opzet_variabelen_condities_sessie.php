<?php
/**
 * opzet via Model, View en Controller
 */
// eerst alles om het programma te starten (Model)
// hier komen alle variabelen voor ons programma
// de getallen
$i_hoogste = 10 ; // bovengrens
$i_laagste = 0 ; // ondergrens
// getal gaat in een sessiecookie
session_start() ;
if(array_key_exists("teraden", $_SESSION)){
    $i_teraden = $_SESSION["teraden"] ;
} else {
    $i_teraden = random_int($i_laagste,$i_hoogste) ; // willekeurig
    $_SESSION["teraden"] = $i_teraden ;
}
$post_geraden = null ; // getal wat door de speler wordt doorgegeven
$get_geraden = null ;
// de teksten
$s_welkom = "Welkom bij dit spel. Raad een getal van $i_laagste tot en met $i_hoogste." ;
$s_hoger = "Je moet hoger raden." ;
$s_lager = "Je moet lager raden." ;
$s_goed = "Goed! Je kunt meteen weer opnieuw gaan raden" ;
$s_vals = "Je moet wel een geheel getal opgeven." ;
// html code
$html_form_start = '<form action="" method="post">' ;
$html_form_end = '</form>' ;
$html_form_midden = '' ;
$html_output = '' ;
// vervolgens alles gaan verwerken (Controller)
// hier komt de motor van het programma
// lussen van het formulier met for of do of while 
for ($i=$i_laagste; $i <= $i_hoogste; $i++) { 
    # code...
    $html_form_midden .= '<input type="submit" value="'.$i.'" name="geraden">' ;
}
/**
 * $var++   :  $var = $var + 1
 * $var--   :  $var = $var - 1
 * $var+=2  :  $var = $var + 2
 * $var-=2  :  $var = $var - 2
 * $var.="txt"  : $var = $var . "txt" 
 * $var*=3  :  $var = $var * 3
 * $var/=3  :  $var = $var / 3
 * Kijk verder voor dingen als modulus, exponenten etc...
 */
// is er een getal doorgegeven via het formulier
// is de array key 'geraden' aanwezig?
if ( !array_key_exists("geraden", $_POST) ){ // uitroepteken is NOT
    $html_output = $s_welkom ;
} else {
    // er is dus een getal geraden
    if(!is_numeric($_POST["geraden"])){
        $html_output = $s_vals ;
    } else {
        $post_geraden = (int)$_POST["geraden"] ; // cast naar integer
        // sla de spelgegevens op (beurten)
        // is het hoger?
        if($post_geraden > $i_teraden){
            $html_output = $s_lager ;
        }
        // is het lager?
        elseif($post_geraden < $i_teraden){
            $html_output = $s_hoger ;
        }
        // is het goed?
        elseif($post_geraden == $i_teraden){
            $html_output = $s_goed ;
            // is eigenlijk niet meer nodig
            // spel is over. Kunnen we de sessie array nu vast/blijvend opslaan?
            session_destroy() ; 
            // session_unset() ;
        }
    }
}

$html_output .= $html_form_start . $html_form_midden . $html_form_end ;

// tenslotte de voorkant van het programma (HTML&CSS&JS) (View)
// hier komt de webpagina(s) van het programma


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   // hier wat code
    echo $html_output ; // klein verschil met print
    // debug veld
    // print_r($_POST) ;
    var_dump($post_geraden) ;
    ?>

</body>
</html>