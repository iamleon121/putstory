<?php 

session_start();
include 'playerclass.php';



$textInBtn="开始新";
$restart="none";
if($_GET['r']==1){
    $_SESSION['player']="null";
    setcookie("player", $_SESSION['player'], time()+3600*48);
}
if(isset($_SESSION['player'])&&($_SESSION['player']!="null")){
    $player=json_decode($_SESSION['player']);
    if(isset($_GET['ch']))
      $player->CH=$_GET['ch'];
    $ch=$player->CH;
    $textInBtn="继续";
    $restart="block";

}elseif(isset($_COOKIE['player'])&&($_SESSION['player']!="null")){
    $player=json_decode($_COOKIE['player']);
    if(isset($_GET['ch']))
      $player->CH=$_GET['ch'];
    $ch=$player->CH;
    $textInBtn="欢迎回来 继续";
    $restart="block";

}else{


$player = new PlayerDEF;
$playerjson = json_encode($player);
$_SESSION['player']=$playerjson;
setcookie("player", $_SESSION['player'], time()+3600*48);
}



?>
<!DOCTYPE html>
<html>
<head>
<title>PutStory 互动故事</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w325/w3.css">
<script src="/lib/aj.js"></script>
</head>

<body id="main" style="max-width:400px;margin:0 auto" class="w3-sand">



<div class="w3-container w3-teal w3-center w3-card-4">
  <h3>代码疑云</h3>
</div>


<div class="w3-container">
  <p></p>
</div>

<div class="w3-container">
  <p>《代码疑云》是一部现代题材的原创有声互动故事，讲述了数据技术滥用造成的问题。故事时长约为90分钟，可随时退出，进度会保留48小时，在故事进行中时常会出现几个选项，按照你的心情和想法选择既可。</p>
</div>

<div class="w3-container">
  <p>如果你喜欢这类作品或有任何建议，请联系或留言给作者，新的故事之后会陆续推出，现有技术还存在很多瑕疵，将来也会逐步完善，感谢收听体验。</p>
</div>

<div class="w3-container">
  <p></p>
</div>

<div class="w3-container w3-center"><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" onclick="loadscene('<?php echo $player->LO ?>',<?php echo $ch ?>)"><?php echo $textInBtn?>故事</a>
</div>
<div class="w3-container w3-center" style="display:<?php echo $restart ?>"><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="?r=1">重新开始</a>
</div>


<div style="max-width:400px" class="w3-container w3-teal w3-bottom w3-center">
  
  <h6>制作:Leon WX:2458230 iamleon@yeah.net</h6>
</div>


</body>
</html> 