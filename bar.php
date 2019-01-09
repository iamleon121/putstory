<?php session_start(); ?>
<?php setcookie("d", $_SESSION["p"], time()+3600);?>

<?php
//print_r($_SESSION["p"]. "ok");
//print_r($_COOKIE);


$d=$_COOKIE["d"];


$pp=json_decode($d);

echo $pp->NM;
echo $_SESSION["p"];
echo $_COOKIE["a"];


?>