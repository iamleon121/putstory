<?php
  include "scene.php";
  switch($leadin){
    //第一章 第一章 第一章 第一章 第一章 第一章
    case "begin":
      $audioLink="/sound/e01010001.mp3";
      $btnDisplay2="block";
      $btnDisplay3="block";
      $btnDisplay4="block";
      $textInBtn1="没钱支付房租了";
      $textInBtn2="陷入开发困难";
      $textInBtn3="迷茫自己的未来";
      $textInBtn4="为自己所做的担惊受怕";
      $leadout="e010100";
      break;

    case "e010100":
      {
      $player->PC[$ch-1]=1;
      if($player->PS>0)
        $btnDisplay2="block";
      $textInBtn1="对此不以为然";
      $textInBtn2="在网上仔细查找文字的含义";
      $leadout="e010101";
      }
      switch($ch){
        case 1:
          $audioLink="/sound/e01010102.mp3";
          break;
        case 2:
          $audioLink="/sound/e01010104.mp3";
          break;
        case 3:
          $audioLink="/sound/e01010106.mp3";
          break;
        case 4:
          $audioLink="/sound/e01010108.mp3";
          break;
      }
      break;

    case "e010101":
      switch($ch){
        case 1:
          scene("e010102");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010103");
          break;
      }
      break;

    case "e010102":
      switch($ch){
        case 1:
          scene("e010104");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010105");
          break;
      }
      break;

    case "e010103":
      switch($ch){
        case 1:
          scene("e010104");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010105");
          break;
      }
      break;

    case "e010104":
      switch($ch){
        case 1:
          scene("e010106");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010107");
          break;
      }
      break;

    case "e010105":
      switch($ch){
        case 1:
          scene("e010106");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010108");
          break;
      }
      break;

    case "e010106":
      switch($ch){
        case 1:
          scene("e010201");
          break;
        case 2:
          scene("e010113");
          break;
      }
      break;

    case "e010107":
      switch($ch){
        case 1:
          scene("e010106");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010109");
          break;
      }
      break;

    case "e010108":
      switch($ch){
        case 1:
          scene("e010201");
          break;
        case 2:
          scene("e010113");
          break;
      }
      break;

    case "e010109":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
        case 2:
          $player->PC[5]=1;
          if($PSM)
            $player->PS=$player->PS-1;
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=5)
              if($PSM)
                $player->PS=$player->PS+1;
          $dienum=$dienum+rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=5){
        $player->EC[0]=1;
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e010110");
      }elseif($dienum>=3){
        scene("e010111");
      }elseif($dienum>=1){
        $player->PC[4]=1;
        if($PSM)
          $player->PS=$player->PS-1;
        scene("e010112");
      }
      }
      break;

    case "e010110":
      switch($ch){
        case 1:
          scene("e010105");
          break;
      }
      break;
      
    case "e010111":
      switch($ch){
        case 1:
          scene("e010105");
          break;
       
      }
      break;

    case "e010112":
      switch($ch){
        case 1:
          scene("e010106");
          break;
      }
      break;

    case "e010113":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=5){
        $player->EC[1]=1;
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e010114");
      }elseif($dienum>=3){
        scene("e010115");
      }elseif($dienum>=1){
        $player->PC[8]=1;
        if($PSM)
          $player->PS=$player->PS-2;
        scene("e010116");
      }
      }
      break;

    case "e010114":
      switch($ch){
        case 1:
          scene("e010201");
          break;
      }
      break;

    case "e010115":
      switch($ch){
        case 1:
          scene("e010201");
          break;
      }
      break;

    case "e010116":
      switch($ch){
        case 1:
          scene("e010201");
          break;
      }
      break;

    //第二章 第二章 第二章 第二章 第二章 第二章
    case "e010201":
      switch($ch){
        case 1:
          scene("e010202");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          $player->EC[2]=1;
          if($PSM)
            $player->PS=$player->PS+1;
          scene("e010203");
          break;
      }
      break;

    case "e010202":
      switch($ch){
        case 1:
          scene("e010204");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010205");
          break;
      }
      break;
  
    case "e010203":
      switch($ch){
        case 1:
          scene("e010204");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010205");
          break;
      }
      break;
  
    case "e010204":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=5){
        $player->EC[3]=1;
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e010206");
      }elseif($dienum>=3){
        scene("e010207");
      }elseif($dienum>=1){
        $player->PC[6]=1;
        if($PSM)
          $player->PS=$player->PS-1;
        scene("e0100208");
      }
      }
      break;

    case "e010205":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=5){
        $player->EC[3]=1;
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e010206");
      }elseif($dienum>=3){
        scene("e010207");
      }elseif($dienum>=1){
        $player->PC[6]=1;
        if($PSM)
          $player->PS=$player->PS-1;
        scene("e010208");
      }
      }
      break;

    case "e010206":
      switch($ch){
        case 1:
          scene("e010301");
          break;
      }
      break;

    case "e010207":
      switch($ch){
        case 1:
          scene("e010301");
          break;
      }
      break;

    case "e010208":
      switch($ch){
        case 1:
          scene("e010301");
          break;
      }
      break;
    //第三章 第三章 第三章 第三章 第三章 第三章 
    case "e010301":
      switch($ch){
        case 1:
          scene("e010302");
          break;
      }
      break;

    case "e010302":
      switch($ch){
        case 1:
          if($player->EC[3])
            scene("e010303");
          elseif($player->PC[6])
            scene("e010304");
          else
            scene("e010305");
          break;
      }
      break;

    case "e010303":
      switch($ch){
        case 1:
            scene("e010308");
          break;
      }
      break;

    case "e010304":
      switch($ch){
        case 1:
            scene("e010306");
          break;
      }
      break;

    case "e010305":
      switch($ch){
        case 1:
          scene("e010306");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010303");
          break;
      }
      break;

    case "e010306":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
        case 2:
          if($player->PS>0){
            if($PSM)
              $player->PS=$player->PS-1;
          }else{
          $player->PC[7]=1;
            if($PSM)
              $player->PS=$player->PS-1;
          }
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=5)
              if($PSM)
                $player->PS=$player->PS+1;
          $dienum=$dienum+rand(1,6);
          break;
        case 3:
          if($PSM)
            $player->PS=$player->PS-1;
          $player->PC[5]=1;
          if($PSM)
            $player->PS=$player->PS-1;
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=5)
              if($PSM)
                $player->PS=$player->PS+2;
          $dienum=$dienum+rand(1,6);
            if($dienum>=5)
              if($PSM)
                $player->PS=$player->PS+1;
          $dienum=$dienum+rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=5){
        $player->EC[4]=1;
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e010307");
      }elseif($dienum>=3){
        scene("e010307");
      }elseif($dienum>=1){
        scene("e010309");
      }
      }
      break;

    case "e010307":
      switch($ch){
        case 1:
          scene("e010308");
          break;
       
      }
      break;

    case "e010308":
      switch($ch){
        case 1:
          scene("e010318");
          break;
        case 2:
          if($player->EC[3]){
            scene("e010318");
          }else{
            if($PSM)
              $player->PS=$player->PS-1;
            scene("e010303");
          }
          break;
      }
      break;

    case "e010309":
      switch($ch){
        case 1:
          scene("e010310");
          break;
       
      }
      break;

    case "e010310":
      switch($ch){
        case 1:
          scene("e010311");
          break;
       
      }
      break;

    case "e010311":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          $dienum=0;
          $dienum=rand(1,6);
          if($dienum>=5)
            if($PSM)
              $player->PS=$player->PS+1;
          $dienum=$dienum+rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=5){
        $player->EC[4]=1;
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e010312");
      }elseif($dienum>=3){
        scene("e010313");
      }elseif($dienum>=1){
        $player->PC[18]=1;
        if($PSM)
          $player->PS=$player->PS-1;
        scene("e010314");
      }
      }
      break;

    case "e010312":
      switch($ch){
        case 1:
          scene("e010401");
          break;
       
      }
      break;

    case "e010313":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=5){
        scene("e010315");
      }elseif($dienum>=3){
        scene("e010316");
      }elseif($dienum>=1){
        $player->PC[9]=1;
        if($PSM)
          $player->PS=$player->PS-2;
        scene("e010317");
      }
      }
      break;

    case "e010314":
      switch($ch){
        case 1:
          scene("e010401");
          break;
       
      }
      break;

    case "e010315":
      switch($ch){
        case 1:
          scene("e010401");
          break;
       
      }
      break;

    case "e010316":
      switch($ch){
        case 1:
          scene("e010401");
          break;
       
      }
      break;

    case "e010317":
      switch($ch){
        case 1:
          scene("e010401");
          break;
       
      }
      break;

    case "e010318":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          $dienum=0;
          $dienum=rand(1,6);
          if($dienum>=5)
            if($PSM)
              $player->PS=$player->PS+1;
          $dienum=$dienum+rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=5){
        $player->EC[4]=1;
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e010312");
      }elseif($dienum>=3){
        scene("e010313");
      }elseif($dienum>=1){
        $player->PC[18]=1;
        if($PSM)
          $player->PS=$player->PS-1;
        scene("e010314");
      }
      }
      break;

    case "e010319":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          $dienum=0;
          $dienum=rand(1,6);
          if($dienum>=5)
            if($PSM)
              $player->PS=$player->PS+1;
          $dienum=$dienum+rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=5){
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e010320");
      }elseif($dienum>=3){
        scene("e010321");
      }elseif($dienum>=1){
        $player->PC[9]=1;
        if($PSM)
          $player->PS=$player->PS-1;
        scene("e010322");
      }
      }
      break;

    case "e010320":
      switch($ch){
        case 1:
          scene("e010323");
          break;
       
      }
      break;

    case "e010321":
      switch($ch){
        case 1:
          scene("e010323");
          break;
       
      }
      break;

    case "e010322":
      switch($ch){
        case 1:
          scene("e010323");
          break;
       
      }
      break;

    case "e010323":
      switch($ch){
        case 1:
          scene("e010401");
          break;
       
      }
      break;
    //第四章 第四章 第四章 第四章 第四章 第四章
    case "e010401":
      switch($ch){
        case 1:
          scene("e010402");
          break;
       
      }
      break;

    case "e010402":
      switch($ch){
        case 1:
          scene("e010501");
          break;
       
      }
      break;
    //第五章 第五章 第五章 第五章 第五章 第五章
    case "e010501":
      switch($ch){
        case 1:
          scene("e010502");
          break;
        case 2:
          scene("e010503");
          break;
        case 3:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010504");
          break;
      }
      break;

    case "e010502":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=3){
        scene("e010505");
      }elseif($dienum>=1){
        scene("e010506");
      }
      }
      break;

    case "e010503":
      switch($ch){
        case 1:
          scene("e010509");
          break;
       
      }
      break;

    case "e010504":
      switch($ch){
        case 1:
          scene("e010509");
          break;
       
      }
      break;

    case "e010505":
      switch($ch){
        case 1:
          scene("e010509");
          break;
       
      }
      break;

    case "e010506":
      //挑战!!挑战!!挑战!!
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
        case 2:
          if($player->PS>0){
            if($PSM)
              $player->PS=$player->PS-1;
          }else{
          $player->PC[11]=1;
            if($PSM)
              $player->PS=$player->PS-1;
          }
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=5)
              if($PSM)
                $player->PS=$player->PS+1;
          $dienum=$dienum+rand(1,6);
          break;
        case 3:
          if($PSM)
            $player->PS=$player->PS-1;
          $player->PC[11]=1;
          if($PSM)
            $player->PS=$player->PS-1;
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=5)
              if($PSM)
                $player->PS=$player->PS+2;
          $dienum=$dienum+rand(1,6);
            if($dienum>=5)
              if($PSM)
                $player->PS=$player->PS+1;
          $dienum=$dienum+rand(1,6);
          break;
      }
      {
      if($PSM)
        $player->LL=$dienum;
      else
        $dienum=$player->LL;
      if($dienum>=5){
        $player->EC[6]=1;
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e010507");
      }elseif($dienum>=1){
        $player->PC[10]=1;
        if($PSM)
          $player->PS=$player->PS-1;
        scene("e010508");
      }
      }
      break;

    case "e010507":
      switch($ch){
        case 1:
          scene("e010510");
          break;
       
      }
      break;

    case "e010508":
      switch($ch){
        case 1:
          scene("e010510");
          break;
       
      }
      break;

    case "e010509":
      switch($ch){
        case 1:
          scene("e010510");
          break;
       
      }
      break;

    case "e010510":
      switch($ch){
        case 1:
          scene("e010601");
          break;
       
      }
      break;
    //第六章 第六章 第六章 第六章 第六章 第六章
    case "e010601":
      switch($ch){
        case 1:
          scene("e010602");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010603");
          break;
      }
      break;

    case "e010602":
      switch($ch){
        case 1:
          scene("e010701");
          break;
       
      }
      break;

    case "e010603":
      switch($ch){
        case 1:
          scene("e010701");
          break;
       
      }
      break;
    //第七章 第七章 第七章 第七章 第七章 第七章
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  }



?>