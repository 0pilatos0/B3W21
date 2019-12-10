<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
    define("Naam", "Yatzee");
    define("Keuze", TRUE);
    define("Getal", 0);

    if (Naam == "Yatzee"){
        if (Keuze == TRUE){
            if (Getal < 15){
                echo("Je wilt Yathzee spelen want dat vindt je gewoon leuk");
            }
            if (Getal > 30){
                echo("Je wilt Yathzee spelen want dat vindt je gewoon leuk");
            }
            else{
                echo("Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd");
            }
        }
        if (Keuze == FALSE){
            if (Getal > 100){
                echo("Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien");
            }

            else{
                echo("Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen");
            }
        }
    }
    if (Naam == "Monopoly"){
        if (Keuze == TRUE){
            if (Getal > 2){
                echo("Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg");
            }
            else{
                echo("Je wilt Monopoly spelen want je houd ervan om iedereen blut te maken");
            }
        }
        if (Keuze == FALSE){
            if (Getal == 2){
                echo("Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur");
            }
            if (Getal > 120){
                echo("Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur");
            }
            else{
                echo("Je wilt Monopoly niet spelen want je houd niet van hotels");
            }            
        }
    }
    if (Naam == "Schaken"){
        if (Keuze == TRUE){
            if (Getal == 2){
                echo("Je wilt Schaken want je vindt zwart en wit leuk");
            }
            else{
                echo("Je wilt Schaken want je denkt slimmer dan mij te zijn");
            }            
        }
        if (Keuze == FALSE){
            if (Getal == -1){
                echo("Je wilt echt niet Schaken");
            }
            else{
                echo("Je wilt gewoon niet Schaken");
            }            
        }
    }


 ?> 
 </body>
</html>