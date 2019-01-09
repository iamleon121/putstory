<?php session_start(); ?>
<?php

$p=$_SESSION['p'];

print_r($p);


$pp=json_decode($p);

echo $pp->NM."r";
echo $pp->tt()."r";


?>