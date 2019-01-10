<?php 

session_start();
include 'playerclass.php';
$textInBtn="开始新";
if(isset($_SESSION['player'])){
    $textInBtn="继续";
}elseif(isset($_COOKIE['player'])){
    $textInBtn="继续";
}else{
$player = new PlayerDEF;




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
  <p>代码疑云故事是一部现代题材的原创有声互动故事，讲述了在信息社会时代下技术滥用的问题。</p>
</div>

<div class="w3-container">
  <p>在故事进行中时常会出现几个选项，按照你的心情和想法选择既可。</p>
</div>

<div class="w3-container">
  <p></p>
</div>

<div class="w3-container w3-center"><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="#"><?php echo $textInBtn?>故事</a><p></p>
</div>


<div class="w3-container w3-teal w3-bottom w3-center">
  
  <h6>制作:Leon iamleon@yeah.net</h6>
</div>

</body>
</html> 