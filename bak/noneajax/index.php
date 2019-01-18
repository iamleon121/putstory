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
    $textInBtn="继续";
    $restart="block";

}elseif(isset($_COOKIE['player'])&&($_SESSION['player']!="null")){
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
<title>putstory E11</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w325/w3.css">
<body>

<div class="w3-container w3-teal w3-center w3-card-4">
  <h3>代码疑云</h3>
</div>

<div class="w3-container">
  <p></p>
</div>

<div class="w3-container">
  <p>《代码疑云》是一部现代题材的原创有声互动故事，讲述了在信息社会时代下技术滥用的问题。</p>
</div>

<div class="w3-container">
  <p>故事的进度会保留48小时，在故事进行中时常会出现几个选项，按照你的心情和想法选择既可。</p>
</div>

<div class="w3-container">
  <p></p>
</div>

<div class="w3-container w3-center"><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="teller.php"><?php echo $textInBtn?>故事</a>
</div>
<div class="w3-container w3-center" style="display:<?php echo $restart ?>"><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="?r=1">重新开始</a>
</div>


<div class="w3-container w3-teal w3-bottom w3-center">
  
  <h6>制作:Leon iamleon@yeah.net</h6>
</div>

</body>
</html> 