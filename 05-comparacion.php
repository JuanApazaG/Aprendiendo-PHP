<?php include 'includes/header.php';

//comparacion en php
//comparacion son utiles
$numero1 = 20;
$numero2 = 40;
$numero3 = 40;
$numero4 = '30';

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero1);
echo "<br>";

var_dump($numero2 === $numero1);
echo "<br>";
//si el numero de la izquierda es mayo nos da -1 y 0 si es igual 1 si el de la derecha es mayor
var_dump($numero2 <=> $numero1); 
echo "<br>";

var_dump($numero1 <=> $numero2);
echo "<br>";

var_dump($numero2 <=> $numero3);
echo "<br>";
include 'includes/footer.php';