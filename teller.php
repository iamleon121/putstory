<?php 
session_start();
//include 'playerclass.php';

$audioDisplay="block";
$audioLink="/sound/e01010001.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$btnLink1="";
$btnLink2="";
$btnLink3="";
$btnLink4="";
$player;
$ch;
//$cl;

/*if(!(isset($_GET['ch']))||!(isset($_GET['cl']))){
  $audioDisplay="none";
  $textInBtn1="请从介绍页面继续故事";
  $btnLink1="index.php";
  $player=null;
}else*/

if(isset($_SESSION['player'])&&($_SESSION['player']!="null")){
  $player=json_decode($_SESSION['player']);
  if(isset($_GET['ch']))
    $player->CH=$_GET['ch'];
  $ch=$player->CH;
  //$cl=$_GET['cl'];

}elseif(isset($_COOKIE['player'])&&($_COOKIE['player']!="null")){
  $player=json_decode($_COOKIE['player']);
  if(isset($_GET['ch']))
    $player->CH=$_GET['ch'];
  $ch=$player->CH;
  //$cl=$_GET['cl'];

}else{
  $audioDisplay="none";
  $textInBtn1="请从介绍页面继续故事";
  $btnLink1="index.php";
  $player=null;
}

if($player!=null){
  $player->CH=$ch;
  $leadin=$player->LO;
  
  switch($leadin){
    
    case "begin":
      {
      $audioLink="/sound/e01010001.mp3";
      $btnDisplay1="block";
      $btnDisplay2="block";
      $btnDisplay3="block";
      $btnDisplay4="block";
      $textInBtn1="没钱支付房租了";
      $textInBtn2="陷入开发困难";
      $textInBtn3="迷茫自己的未来";
      $textInBtn4="为自己所做的担惊受怕";
      $btnLink1="?ch=1";
      $btnLink2="?ch=2";
      $btnLink3="?ch=3";
      $btnLink4="?ch=4";
      $player->LO="e010100";
      }
      switch($ch){
        case 1:         
          break;
      }
      break;
    case "e010100":
      {
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="block";
      if($player->PS<=0)
        $btnDisplay2="none";
      $btnDisplay3="none";
      $btnDisplay4="none";
      $textInBtn1="对此不以为然";
      $textInBtn2="在网上仔细查找文字的含义";
      $textInBtn3="";
      $textInBtn4="";
      $btnLink1="?ch=1";
      $btnLink2="?ch=2";
      $btnLink3="?ch=3";
      $btnLink4="?ch=4";
      $player->LO="e010100";
      }
      switch($ch){
        case 1:
          $audioLink="/sound/e01010101.mp3";
          if($player->AC[7]==1)
            $audioLink="/sound/e01010102.mp3";
          break;
        case 2:
          $audioLink="/sound/e01010103.mp3";
          if($player->AC[7]==1)
            $audioLink="/sound/e01010104.mp3";
          break;
        case 3:
          $audioLink="/sound/e01010105.mp3";
          if($player->AC[7]==1)
            $audioLink="/sound/e01010106.mp3";
          break;
        case 4:
          $audioLink="/sound/e01010107.mp3";
          if($player->AC[7]==1)
            $audioLink="/sound/e01010108.mp3";
          break;
      }
      break;









  }

  








}

$playerjson = json_encode($player);
$_SESSION['player']=$playerjson;
setcookie("player", $_SESSION['player'], time()+3600*48);
?>


<!DOCTYPE html>
<html>
<title>putstory E11</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w325/w3.css">
<body>

<div class="w3-container w3-teal w3-center w3-card-4">
  <h3>代码疑云</h3>
</div>

<div class="w3-container">
  <p>如果没有自动播放故事，请手动点击播放按钮收听。</p>
</div>

<div class="w3-container w3-center" style="display: <?php echo $audioDisplay ?> ">
  <audio controls autoplay>
    <source src="<?php echo $audioLink ?>" type="audio/mpeg">
  </audio>
</div>

<div class="w3-container">
  <p> </p>
</div>

<div class="w3-container w3-center" style="display: <?php echo $btnDisplay1 ?> "><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="<?php echo $btnLink1 ?>"><?php echo $textInBtn1 ?></a>
</div>
<div class="w3-container w3-center" style="display: <?php echo $btnDisplay2 ?> "><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="<?php echo $btnLink2 ?>"><?php echo $textInBtn2 ?></a>
</div>
<div class="w3-container w3-center" style="display: <?php echo $btnDisplay3 ?> "><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="<?php echo $btnLink3 ?>"><?php echo $textInBtn3 ?></a>
</div>
<div class="w3-container w3-center" style="display: <?php echo $btnDisplay4 ?> "><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="<?php echo $btnLink4 ?>"><?php echo $textInBtn4 ?></a>
</div>



<div class="w3-container w3-teal w3-bottom w3-center">
  
  <h6>制作:Leon iamleon@yeah.net</h6>
</div>

</body>
</html> 