<?php 
session_start();

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


if(isset($_SESSION['player'])&&($_SESSION['player']!="null")){
  $player=json_decode($_SESSION['player']);
  if(isset($_GET['ch']))
    $player->CH=$_GET['ch'];
  $ch=$player->CH;
  

}elseif(isset($_COOKIE['player'])&&($_COOKIE['player']!="null")){
  $player=json_decode($_COOKIE['player']);
  if(isset($_GET['ch']))
    $player->CH=$_GET['ch'];
  $ch=$player->CH;
  

}else{
  $audioDisplay="none";
  $textInBtn1="请从介绍页面继续故事";
  $btnLink1="index.php";
  $player=null;
}

if($player!=null){
  
  if(isset($_GET[in]))
    $leadin=$_GET['in'];
  else
     $leadin=$player->LO;
  $player->LO=$leadin;
  $leadout="";
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
      $leadout="e010100";
      }
      switch($ch){
        case 1:
          
          break;
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010100":
      {
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      if($player->PS)
        $btnDisplay2="block";
      $btnDisplay3="none";
      $btnDisplay4="none";
      $textInBtn1="对此不以为然";
      $textInBtn2="在网上仔细查找文字的含义";
      $textInBtn3="";
      $textInBtn4="";
      $leadout="e010101";
      
      $player->PC[$ch-1]=1;
      
      }
      switch($ch){
        case 1:
          $audioLink="/sound/e01010101.mp3";
          if($player->AC[7])
            $audioLink="/sound/e01010102.mp3";
          break;
        case 2:
          $audioLink="/sound/e01010103.mp3";
          if($player->AC[7])
            $audioLink="/sound/e01010104.mp3";
          break;
        case 3:
          $audioLink="/sound/e01010105.mp3";
          if($player->AC[7])
            $audioLink="/sound/e01010106.mp3";
          break;
        case 4:
          $audioLink="/sound/e01010107.mp3";
          if($player->AC[7])
            $audioLink="/sound/e01010108.mp3";
          break;
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010101":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      if($player->PS&&$player->IN[5])
        $btnDisplay2="block";
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="e010102";
          $textInBtn1="不去理会那个人";
          $textInBtn2="认出了他并说服他进来";
          $audioLink="/sound/e01010201.mp3";
          if($player->AC[7])
            $audioLink="/sound/e01010202.mp3";
          break;
        case 2:
          $leadout="e010103";
          $player->PS=$player->PS-1;
          $textInBtn1="不去理会那个人";
          $textInBtn2="认出了他并说服他进来";
          $audioLink="/sound/e01010301.mp3";
          if($player->AC[7])
            $audioLink="/sound/e01010301.mp3";
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010102":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      if($player->PS&&$player->IN[5])
        $btnDisplay2="block";
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="e010104";
          $textInBtn1="原地不动看着他离开";
          $textInBtn2="喊下他让他别离开";
          $audioLink="/sound/e01010401.mp3";
          
          break;
        case 2:
          $leadout="e010105";
          $player->PS=$player->PS-1;
          $textInBtn1="看着他出门离开";
          $textInBtn2="让他把文件袋留下来";
          $audioLink="/sound/e01010501.mp3";
          if($player->IN[1])
            $audioLink="/sound/e01010502.mp3";
          elseif($player->TE[2])
            $audioLink="/sound/e01010503.mp3";
          elseif($player->AC[7]&&$player->TE[2])
            $audioLink="/sound/e01010504.mp3";
          
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010103":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      if($player->PS&&$player->IN[5])
        $btnDisplay2="block";
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="e010104";
          $textInBtn1="原地不动看着他离开";
          $textInBtn2="马上叫他停下来";
          $audioLink="/sound/e01010401.mp3";
          
          break;
        case 2:
          $leadout="e010105";
          $player->PS=$player->PS-1;
          $textInBtn1="看着他出门离开";
          $textInBtn2="让他把文件袋留下来";
          $audioLink="/sound/e01010501.mp3";
          if($player->IN[1])
            $audioLink="/sound/e01010502.mp3";
          elseif($player->TE[2])
            $audioLink="/sound/e01010503.mp3";
          elseif($player->AC[7]&&$player->TE[2])
            $audioLink="/sound/e01010504.mp3";
          
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010104":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="e010106";
          $btnDisplay2="block";
          $textInBtn1="不打算睡觉了";
          $textInBtn2="上床睡上一会";
          $audioLink="/sound/e01010601.mp3";
          
          break;
        case 2:
          $leadout="e010107";
          $player->PS=$player->PS-1;
          if($player->PS&&$player->IN[5])
            $btnDisplay2="block";
          $textInBtn1="原地不动看着他离开";
          $textInBtn2="马上追上去拦住他";
          $audioLink="/sound/e01010701.mp3";
          
          
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010105":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="e010106";
          $btnDisplay2="block";
          $textInBtn1="不打算睡觉了";
          $textInBtn2="上床睡上一会";
          $audioLink="/sound/e01010601.mp3";
          
          break;
        case 2:
          $leadout="e010108";
          $player->PS=$player->PS-1;
          
          $btnDisplay2="block";
          $textInBtn1="不打算睡觉了";
          $textInBtn2="上床睡上一会";
          $audioLink="/sound/e01010801.mp3";
         
          
          break;
       
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010106":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="begin";
          
          $textInBtn1="剧终";
          $btnLink1="/index.php?r=1";
          
          break;
        case 2:
          $leadout="e010113"; //挑战随机分支

          
          $textInBtn1="你睡着了并做了一个梦";
          
          $audioLink="/sound/e01011301.mp3";
          
          
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010107":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="e010106";
          $btnDisplay2="block";
          $textInBtn1="不打算睡觉了";
          $textInBtn2="上床睡上一会";
          $audioLink="/sound/e01010601.mp3";
          
          break;
        case 2:
          $leadout="e010109";
          $player->PS=$player->PS-1;
          
          $btnDisplay2="block";
          $textInBtn1="追上去将他拦住";
          $textInBtn2="追上去用力拉住他";
          $audioLink="/sound/e01010901.mp3";
          
          
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010108":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="begin";
          
          $textInBtn1="剧终";
          $btnLink1="/index.php?r=1";
          
          break;
        case 2:
          $leadout="e010113"; //挑战随机分支

          
          $textInBtn1="你睡着了并做了一个梦";
          
          $audioLink="/sound/e01011301.mp3";
          
          
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010109":
      //挑战!!挑战!!挑战!!
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $dienum=0;
          if($player->PH[0]){
            $dienum=rand(1,6);
          }
          if($dienum>=5){
            $leadout="e010110";
            $player->EC[0]=1;
            
            $textInBtn1="和他一起回到办公室";
           
           $audioLink="/sound/e01011001.mp3";
           
          }elseif($dienum>=3){
            $leadout="e010111";
            
            
            $textInBtn1="和他一起回到办公室";
           
           $audioLink="/sound/e01011101.mp3";
           
          }elseif($dienum>=1){
            $leadout="e010112";
            $player->PC[4]=1;
            
            $textInBtn1="回到办公室";
           
           $audioLink="/sound/e01011201.mp3";
           
          }
          break;
        case 2:
          $player->PC[5]=1;

          $dienum=0;
          if($player->PH[0]){
            $dienum=rand(1,6);
              if($dienum>=5)
            $player->PS+1;
            $dienum=$dienum+rand(1,6);
          }
          if($dienum>=5){
            $leadout="e010110";
            $player->EC[0]=1;
            
            $textInBtn1="和他一起回到办公室";
           
           $audioLink="/sound/e01011002.mp3";
           
          }elseif($dienum>=3){
            $leadout="e010111";
            
           
            $textInBtn1="和他一起回到办公室";
           
           $audioLink="/sound/e01011102.mp3";
           
          }elseif($dienum>=1){
            $leadout="e010112";
            $player->PC[4]=1;
            
            $textInBtn1="回到办公室";
           
           $audioLink="/sound/e01011202.mp3";
          
          }
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010110":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      if($player->PS&&$player->IN[5])
        $btnDisplay2="block";
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="e010105";
          
          $textInBtn1="看着他出门离开";
          $textInBtn2="让他把文件袋留下来";
          $audioLink="/sound/e01010501.mp3";
          if($player->IN[1])
            $audioLink="/sound/e01010502.mp3";
          elseif($player->TE[2])
            $audioLink="/sound/e01010503.mp3";
          elseif($player->AC[7]&&$player->TE[2])
            $audioLink="/sound/e01010504.mp3";;
          break;
       
      }
      break;
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
    case "e010111":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      if($player->PS&&$player->IN[5])
        $btnDisplay2="block";
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="e010105";
          
          $textInBtn1="看着他出门离开";
          $textInBtn2="让他把文件袋留下来";
          $audioLink="/sound/e01010501.mp3";
          if($player->IN[1])
            $audioLink="/sound/e01010502.mp3";
          elseif($player->TE[2])
            $audioLink="/sound/e01010503.mp3";
          elseif($player->AC[7]&&$player->TE[2])
            $audioLink="/sound/e01010504.mp3";;
          break;
       
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010112":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="e010106";
          $btnDisplay2="block";
          $textInBtn1="不打算睡觉了";
          $textInBtn2="上床睡上一会";
          $audioLink="/sound/e01010601.mp3";
          
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010113":
      //挑战!!挑战!!挑战!!
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $dienum=0;
          if($player->ME[3]){
            $dienum=rand(1,6);
          }
          if($dienum>=5){
            $leadout="e010114";
            $player->PS+1;
            
            $textInBtn1="惊醒过来";
           
           $audioLink="/sound/e01011401.mp3";
          
          }elseif($dienum>=3){
            $leadout="e010115";
            
            
            $textInBtn1="惊醒过来";
           
           $audioLink="/sound/e01011501.mp3";
           
          }elseif($dienum>=1){
            $leadout="e010116";
            $player->PC[8]=1;
            
            $textInBtn1="惊醒过来";
           
           $audioLink="/sound/e01011601.mp3";
           
          }
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010114":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
     
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="begin";
          
          $textInBtn1="剧终";
          $btnLink1="/index.php?r=1";
          
          break;
       
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010115":
      {
      
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="begin";
          
          $textInBtn1="剧终";
          $btnLink1="/index.php?r=1";
          
          break;
       
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
      }
      break;
    case "e010116":
      {
     
      $audioLink="";
      $btnDisplay1="block";
      $btnDisplay2="none";
      
      $btnDisplay3="none";
      $btnDisplay4="none";
      
      $textInBtn3="";
      $textInBtn4="";
      
      
      }
      switch($ch){
        case 1:
          $leadout="begin";
         
          $textInBtn1="剧终";
          $btnLink1="/index.php?r=1";
          
          break;
        
      }
      {
      $btnLink1="?in=$leadout&ch=1";
      $btnLink2="?in=$leadout&ch=2";
      $btnLink3="?in=$leadout&ch=3";
      $btnLink4="?in=$leadout&ch=4";
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