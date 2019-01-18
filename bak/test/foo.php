<?php session_start(); ?>
<?php setcookie("a", "aaa", time()+3600);?>
<?php
class PlayerJ{

  var $NM;

  var $PS;
  var $AC;
  var $IN;
  var $TE;
  var $ME;
  var $MA;
  var $PH;
  var $EC;
  var $PC;
  var $LO;
  
  function tt(){
    echo "TT is Good!";
  }
  
}

$p=new PlayerJ;
$p->NM="Leon";
echo $p->NM." ";
echo $p->tt()." ";

$j=json_encode($p);

$_SESSION['p']=$j;

if(!isset($_SESSION['t']))
  $_SESSION['t']=1;
echo $_SESSION['t'];
$_SESSION['t']=$_SESSION['t']+1;

?>

<a href="./foo.php?q=1">bar</a>