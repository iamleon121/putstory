<?php
  include "scene.php";
  switch($leadin){
    //第一章 第一章 第一章 第一章 第一章 第一章
    case "begin":
      scene("e010100");
      break;

    case "e010100":
      {
      if($player->PS>0)
        $btnDisplay2="block";
      $textInBtn1="对此不以为然";
      $textInBtn2="在网上仔细查找文字的含义";
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
      break;

    case "e010101":
      {
      if($player->PS>0&&$player->IN[5])
        $btnDisplay2="block";
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
          if($PSM)
            $player->PS=$player->PS-1;
          $textInBtn1="不去理会那个人";
          $textInBtn2="认出了他并说服他进来";
          $audioLink="/sound/e01010301.mp3";
          if($player->AC[7])
            $audioLink="/sound/e01010301.mp3";
          break;
      }
      break;

    case "e010102":
      {
      if($player->PS>0&&$player->IN[5])
        $btnDisplay2="block";
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
          if($PSM)
            $player->PS=$player->PS-1;
          $textInBtn1="看着他出门离开";
          $textInBtn2="让他把文件袋留下来";
          $audioLink="/sound/e01010501.mp3";
          if($player->IN[1])
            $audioLink="/sound/e01010502.mp3";
          if($player->TE[2])
            $audioLink="/sound/e01010503.mp3";
          if($player->AC[7]&&$player->TE[2])
            $audioLink="/sound/e01010504.mp3";
          break;
      }
      break;

    case "e010103":
      {
      if($player->PS>0&&$player->IN[5])
        $btnDisplay2="block";
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
          if($PSM)
            $player->PS=$player->PS-1;
          $textInBtn1="看着他出门离开";
          $textInBtn2="让他把文件袋留下来";
          $audioLink="/sound/e01010501.mp3";
          if($player->IN[1])
            $audioLink="/sound/e01010502.mp3";
          if($player->TE[2])
            $audioLink="/sound/e01010503.mp3";
          if($player->AC[7]&&$player->TE[2])
            $audioLink="/sound/e01010504.mp3";
          break;
      }
      break;

    case "e010104":
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
          if($PSM)
            $player->PS=$player->PS-1;
          if($player->PS>0&&$player->IN[5])
            $btnDisplay2="block";
          $textInBtn1="原地不动看着他离开";
          $textInBtn2="马上追上去拦住他";
          $audioLink="/sound/e01010701.mp3";
          break;
      }
      break;

    case "e010105":
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
      break;

    case "e010106":
      switch($ch){
        case 1:
          $leadout="e010201";
          $btnDisplay2="block";
          $textInBtn1="!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
          $textInBtn2="!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
          $audioLink="/sound/e01020101.mp3";
          break;
        case 2:
          $leadout="e010113"; //挑战随机分支
          $textInBtn1="你睡着了并做了一个梦";
          $audioLink="/sound/e01011301.mp3";
          break;
      }
      break;

    case "e010107":
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
          if($PSM)
            $player->PS=$player->PS-1;
          $btnDisplay2="block";
          $textInBtn1="追上去将他拦住";
          $textInBtn2="追上去用力拉住他";
          $audioLink="/sound/e01010901.mp3";
          break;
      }
      break;

    case "e010108":
      switch($ch){
        case 1:
          $leadout="e010201";
          $btnDisplay2="block";
          $textInBtn1="!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
          $textInBtn2="!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
          $audioLink="/sound/e01020101.mp3";
          break;
        case 2:
          $leadout="e010113"; //挑战随机分支
          $textInBtn1="你睡着了并做了一个梦";
          $audioLink="/sound/e01011301.mp3";
          break;
      }
      break;

    case "e010109":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          if($player->PH[0]){
            $dienum=rand(1,6);
          }
          break;
        case 2:
          $player->PC[5]=1;
          $player->PS=$player->PS-1;
          $dienum=0;
          if($player->PH[0]){
            $dienum=rand(1,6);
              if($dienum>=5)
                $player->PS+1;
            $dienum=$dienum+rand(1,6);
          }
          break;
      }
      {
      if($dienum>=5){
        $leadout="e010110";
        $player->EC[0]=1;
        $player->PS=$player->PS+1;
        $textInBtn1="和他一起回到办公室";
        $audioLink="/sound/e01011001.mp3";
      }elseif($dienum>=3){
        $leadout="e010111";
        $textInBtn1="和他一起回到办公室";
        $audioLink="/sound/e01011101.mp3";
      }elseif($dienum>=1){
        $leadout="e010112";
        $player->PC[4]=1;
        $player->PS=$player->PS-1;
        $textInBtn1="回到办公室";
        $audioLink="/sound/e01011201.mp3";
      }
      }
      break;

    case "e010110":
      switch($ch){
        case 1:
          $leadout="e010105";
          if($player->PS>0&&$player->IN[5])
            $btnDisplay2="block";
          $textInBtn1="看着他出门离开";
          $textInBtn2="让他把文件袋留下来";
          $audioLink="/sound/e01010501.mp3";
          if($player->IN[1])
            $audioLink="/sound/e01010502.mp3";
          if($player->TE[2])
            $audioLink="/sound/e01010503.mp3";
          if($player->AC[7]&&$player->TE[2])
            $audioLink="/sound/e01010504.mp3";;
          break;
      }
      break;
      
    case "e010111":
      switch($ch){
        case 1:
          $leadout="e010105";
          if($player->PS>0&&$player->IN[5])
            $btnDisplay2="block";
          $textInBtn1="看着他出门离开";
          $textInBtn2="让他把文件袋留下来";
          $audioLink="/sound/e01010501.mp3";
          if($player->IN[1])
            $audioLink="/sound/e01010502.mp3";
          if($player->TE[2])
            $audioLink="/sound/e01010503.mp3";
          if($player->AC[7]&&$player->TE[2])
            $audioLink="/sound/e01010504.mp3";;
          break;
       
      }
      break;

    case "e010112":
      switch($ch){
        case 1:
          $leadout="e010106";
          $btnDisplay2="block";
          $textInBtn1="不打算睡觉了";
          $textInBtn2="上床睡上一会";
          $audioLink="/sound/e01010601.mp3";
          break;
      }
      break;

    case "e010113":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          if($player->ME[3]){
            $dienum=rand(1,6);
          }
          break;
      }
      {
      if($dienum>=5){
        $leadout="e010114";
        $player->PS=$player->PS+1;
        $textInBtn1="惊醒过来";
         $audioLink="/sound/e01011401.mp3";
      }elseif($dienum>=3){
        $leadout="e010115";
        $textInBtn1="惊醒过来";
        $audioLink="/sound/e01011501.mp3";
      }elseif($dienum>=1){
        $leadout="e010116";
        $player->PC[8]=1;
        $player->PS=$player->PS-1;
        $textInBtn1="惊醒过来";
        $audioLink="/sound/e01011601.mp3";
      }
      }
      break;

    case "e010114":
      switch($ch){
        case 1:
          $leadout="e010201";
          $btnDisplay2="block";
          $textInBtn1="!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
          $textInBtn2="!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
          $audioLink="/sound/e01020101.mp3";
          break;
      }
      break;

    case "e010115":
      switch($ch){
        case 1:
          $leadout="e010201";
          $btnDisplay2="block";
          $textInBtn1="!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
          $textInBtn2="!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
          $audioLink="/sound/e01020101.mp3";
          break;
      }
      break;

    case "e010116":
      switch($ch){
        case 1:
          $leadout="e010201";
          $btnDisplay2="block";
          $textInBtn1="!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
          $textInBtn2="!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
          $audioLink="/sound/e01020101.mp3";
          break;
      }
      break;


    //第二章 第二章 第二章 第二章 第二章 第二章 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  }



?>