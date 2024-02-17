<?php
/* Variables */
/* $booleano = false;
$numero = 1.658;
$saludo = "Hola mundo soy Pepito el Grande";
var_dump($booleano); */

/* Constantes */
#define('PI', 3.1416);
#echo (PI);
#var_dump(defined('PI'));


/* Impresiones en pantalla y constantes definidas por PHP */
/* $prueba = "hola";

echo "La impresion de variable trae el siguiente valor: $prueba <br>";
echo "El sistema operativo que tengo es: " . PHP_OS;
 */




/* Operadores */

/* $numero = 1;
$a = 1;
$b = 3;
$numeroTexto = '1'; */

//var_dump($numero === $numeroTexto && $numero == 1);

//$numero = $numero + 1;
/* La variable aumenta en 1 */
//$numero++;
/* La variable aumenta con otro numero */
//$numero=$numero+1;
//$numero += 1;

//$a = $a + $b;
//$a += $b; #$a=4
//$a++; #$a=5
//$a = $a - $b;
#$a -= $b;
/* $b *= $a;
echo $b; */

/* Condicionales */

/* $c = 1;
$d = '1';

if ($d > $c) {
    $d++;
    echo "El valor de d es  $d <br>";
    echo "D es mayor a C";
} elseif ($d === $c) {
    echo "D es igual a C";
} elseif ($c > $d) {
    echo "C es mayor a D";
} elseif ($c == $d) {
    echo "C es igual a D";
} */
$c = 10;
$d = 15;
$cEsMayorAd = $c > $d ? 'c es mayor a d' : ($c === $d ? 'c es igual a d' : 'c es menor a d');

echo $cEsMayorAd;
