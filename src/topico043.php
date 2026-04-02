<?php
$a=10;
$b="10";
echo "Igualdade = ".($a==$b)."<br>";
echo "Idêntico = ".($a===$b)."<br>";
echo "Não igual = ".($a!=$b)."<br>";
echo "Não Idêntico = ".($a!==$b)."<br>";
echo"<hr>";
$c=20;
$d=40;
$e=500;
$f=!($c>$d);//true
var_dump($f);
echo"<hr>";
$g=($c<$e)&&($e>1000);//false
var_dump($g);
echo"<hr>";
$f=($c<$e) || ($e>1000);//true
var_dump($f);
echo"<hr>";
$a=50;
$b=120;
$c=200;
$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = $d<br>e = $e";
/*
= atribuir/receber
== igualdade
=== identico

*/

?>