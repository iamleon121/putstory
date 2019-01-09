<?php session_start(); ?>
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

?>
<a href="./foo.php">foo</a>