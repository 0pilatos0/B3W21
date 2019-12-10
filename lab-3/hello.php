<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php

    $n = rand (0, 10);
    $s = rand (0, 10);
    echo $n . "<br>";
    echo $s . "<br>";
    echo "optellen:" . "<br>";
    echo $n + $s . "<br>";
    echo "aftrekken:" . "<br>";
    echo $n - $s . "<br>";
    echo "vermenigvuldiging:" . "<br>";
    echo $n * $s . "<br>";
    echo "delen:" . "<br>";
    echo $n / $s . "<br>";

    Lab 3b
    $myArray = array(3, 5, 8, 12);
    print_r ($myArray);
    $getal = 6;

    for ($x = 0; $x <= 10; $x+=1) {
        echo $getal * $x . "<br>";
    } 
    
 ?> 
 </body>
</html>