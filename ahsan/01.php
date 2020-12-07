<?php 

$age = 21; 
$sal =20000;

$mar= "married";

$elig=($age >= 21 or $sal >= 20000 or $mar == "married");
var_dump($elig);

?>