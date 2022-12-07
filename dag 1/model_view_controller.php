<?php
/**
 * model : gegevens gedeelte (denk aan database en variabelen)
 * view : webpagina's (en formulieren) (html, css, js)
 * controller : php programma (motor)
 */
// model: definieer de variabelen
$s_welkom = "Welkom bij deze applicatie!" ;
$html_h1_open = "<h1>" ;
$html_h1_sluit = "</h1>" ;
// controller: verwerk de data
$html_welkom = $html_h1_open . $s_welkom . $html_h1_sluit ;
// view (output)
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
    <?php echo $html_welkom ; ?>
</body>
</html>