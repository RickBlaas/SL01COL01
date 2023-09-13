<?php

// Lijst van variables

    $firstName = 'Rick';
    $lastName  = 'Blaas';
    $telnummer = '0683251899';
    $email = 'rickblaas@live.nl';
    $dateofbirth = '04-09-1997';
    $stad = 'Hilversum';
    $nationaliteit = 'Nederlands';
    $hobby= 'Gamen';
    $talen = 'Nederlands, Engels';
    $rijbewijs = true;

if ($rijbewijs === true) {
    echo " Heeft een rijbewijs";
} else {
    echo " Heeft geen rijbewijs";
}

// Laat alle variable zien op de pagina

echo " $firstName <br> $lastName <br> $telnummer <br> $email <br> $dateofbirth <br> $stad <br> $nationaliteit <br> $hobby <br> $talen <br> $rijbewijs ";

/*
 Hier wordt gekeken of de secondes gelijk of lager zijn dan 30, als het gelijk of lager is dan is de achtergrond groen.
 Als het meer dan 30 is dan wordt het rood.
 */

if (date("s")<= 30){
    echo '<body style="background-color:green">';
} else  {
    echo '<body style="background-color:red">';
}