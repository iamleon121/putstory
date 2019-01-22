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
          scene("e010113");
          break;
        
      }
      break;
    //挑战!!挑战!!挑战!!
    case "e010109":
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
    //挑战!!挑战!!挑战!!
    case "e010113":
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
    //挑战!!挑战!!挑战!!  
    case "e010204":
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
    //挑战!!挑战!!挑战!!
    case "e010205":
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
    //挑战!!挑战!!挑战!!
    case "e010306":
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
            scene("e010319");
          }else{
            if($PSM)
              $player->PS=$player->PS-1;
            scene("e010319");
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
    //挑战!!挑战!!挑战!!
    case "e010311":
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
    //挑战!!挑战!!挑战!!
    case "e010313":
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
    //挑战!!挑战!!挑战!!
    case "e010318":
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
    //挑战!!挑战!!挑战!!
    case "e010319":
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
    //挑战!!挑战!!挑战!!
    case "e010502":
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
    //挑战!!挑战!!挑战!!
    case "e010506":
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
    case "e010701":
      switch($ch){
        case 1:
          if($player->EC[6])
            scene("e010702");
          else
            scene("e010703");
          break;
       
      }
      break;

    case "e010702":
      switch($ch){
        case 1:
          scene("e010801");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010706");
          break;
      }
      break;
    //挑战!!挑战!!挑战!!
    case "e010703":
      switch($ch){
        case 1:
          $dienum=0;
          $dienum=rand(1,6);
          break;
        case 2:
          $player->PC[15]=1;
          if($PSM)
            $player->PS=$player->PS-1;
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=3)
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
      if($dienum>=3){
        scene("e010704");
      }elseif($dienum>=1){
        $player->PC[5]=1;
        if($PSM)
          $player->PS=$player->PS-1;
        scene("e010705");
      }
      }
      break;

    case "e010704":
      switch($ch){
        case 1:
          scene("e010702");
          break;
       
      }
      break;

    case "e010705":
      switch($ch){
        case 1:
          scene("e010702");
          break;
       
      }
      break;

    case "e010706":
      switch($ch){
        case 1:
          scene("e010801");
          break;
        case 2:
          $player->EC[8]=1;
          if($PSM)
            $player->PS=$player->PS+2;
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e010707");
          break;
      }
      break;

    case "e010707":
      switch($ch){
        case 1:
          scene("e010801");
          break;
       
      }
      break;
    //第八章 第八章 第八章 第八章 第八章 第八章
    case "e010801":
      switch($ch){
        case 1:
          scene("e010802");
          break;
       
      }
      break;

    case "e010802":
      switch($ch){
        case 1:
          scene("e010803");
          break;
       
      }
      break;

    case "e010803":
      switch($ch){
        case 1:
          scene("e010901");
          break;
       
      }
      break;
    //第九章 第九章 第九章 第九章 第九章 第九章
    //挑战!!挑战!!挑战!!
    case "e010901":
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
            if($dienum>=6)
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
      if($dienum>=6){
        $player->EC[8]=1;
        if($PSM)
          $player->PS=$player->PS+2;
        scene("e010902");
      }elseif($dienum>=4){
        scene("e010903");
      }elseif($dienum>=1){
        scene("e010904");
      }
      }
      break;

    case "e010902":
      switch($ch){
        case 1:
          scene("e011001");
          break;
       
      }
      break;

    case "e010903":
      switch($ch){
        case 1:
          scene("e011001");
          break;
       
      }
      break;
    //挑战!!挑战!!挑战!!
    case "e010904":
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
          $player->PC[13]=1;
            if($PSM)
              $player->PS=$player->PS-1;
          }
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=6)
              if($PSM)
                $player->PS=$player->PS+1;
          $dienum=$dienum+rand(1,6);
          break;
        case 3:
          if($PSM)
            $player->PS=$player->PS-1;
          $player->PC[13]=1;
          if($PSM)
            $player->PS=$player->PS-1;
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=6)
              if($PSM)
                $player->PS=$player->PS+2;
          $dienum=$dienum+rand(1,6);
            if($dienum>=6)
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
      if($dienum>=6){
        $player->EC[8]=1;
        if($PSM)
          $player->PS=$player->PS+2;
        scene("e010905");
      }elseif($dienum>=3){
        scene("e010906");
      }elseif($dienum>=1){
        $player->PC[12]=1;
        if($PSM)
          $player->PS=$player->PS-2;
        scene("e010907");
      }
      }
      break;

    case "e010905":
      switch($ch){
        case 1:
          scene("e011001");
          break;
       
      }
      break;

    case "e010906":
      switch($ch){
        case 1:
          scene("e011001");
          break;
       
      }
      break;

    case "e010907":
      switch($ch){
        case 1:
          scene("e011001");
          break;
       
      }
      break;
    //第十章 第十章 第十章 第十章 第十章 第十章
    case "e011001":
      switch($ch){
        case 1:
          scene("e011002");
          break;
       
      }
      break;

    case "e011002":
      switch($ch){
        case 1:
          scene("e011003");
          break;
       
      }
      break;

    case "e011003":
      switch($ch){
        case 1:
          scene("e011004");
          break;
       
      }
      break;

    case "e011004":
      switch($ch){
        case 1:
          scene("e011005");
          break;
        case 2:
          if($PSM)
            $player->PS=$player->PS-1;
          scene("e011006");
          break;
      }
      break;

    case "e011005":
      switch($ch){
        case 1:
          scene("e011101");
          break;
       
      }
      break;

    case "e011006":
      switch($ch){
        case 1:
          scene("e011007");
          break;
        case 2:
          scene("e011008");
          break;
      }
      break;

    case "e011007":
      switch($ch){
        case 1:
          scene("e011101");
          break;
       
      }
      break;

    case "e011008":
      switch($ch){
        case 1:
          scene("e011101");
          break;
       
      }
      break;
    //十一章 十一章 十一章 十一章 十一章 十一章
    case "e011101":
      switch($ch){
        case 1:
          if($player->PC[6]==0&&$player->PC[10]==0)
            scene("e011102");
          else
            scene("e011103");
          break;
       
      }
      break;

    case "e011102":
      switch($ch){
        case 1:
          scene("e011107");
          break;
        case 2:
          scene("e011108");
          break;
      }
      break;
    //挑战!!挑战!!挑战!!
    case "e011103":
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
          $player->PC[15]=1;
            if($PSM)
              $player->PS=$player->PS-1;
          }
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=6)
              if($PSM)
                $player->PS=$player->PS+1;
          $dienum=$dienum+rand(1,6);
          break;
        case 3:
          if($PSM)
            $player->PS=$player->PS-1;
          $player->PC[15]=1;
          if($PSM)
            $player->PS=$player->PS-1;
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=6)
              if($PSM)
                $player->PS=$player->PS+2;
          $dienum=$dienum+rand(1,6);
            if($dienum>=6)
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
      if($dienum>=6){
        $player->EC[9]=1;
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e011104");
      }elseif($dienum>=4){
        scene("e011105");
      }elseif($dienum>=1){
        $player->PC[14]=1;
        if($PSM)
          $player->PS=$player->PS-1;
        scene("e011106");
      }
      }
      break;

    case "e011104":
      switch($ch){
        case 1:
          scene("e011102");
          break;
       
      }
      break;

    case "e011105":
      switch($ch){
        case 1:
          scene("e011102");
          break;
       
      }
      break;

    case "e011106":
      switch($ch){
        case 1:
          scene("e011102");
          break;
       
      }
      break;
    //挑战!!挑战!!挑战!!
    case "e011107":
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
            if($dienum>=6)
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
      if($dienum>=6){
        $player->EC[8]=1;
        if($PSM)
          $player->PS=$player->PS+2;
        scene("e011112");
      }elseif($dienum>=4){
        scene("e011113");
      }elseif($dienum>=1){
        $player->PC[16]=1;
        if($PSM)
          $player->PS=$player->PS-2;
        scene("e011114");
      }
      }
      break;
    //挑战!!挑战!!挑战!!
    case "e011108":
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
            if($dienum>=6)
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
      if($dienum>=6){
        $player->EC[10]=1;
        if($PSM)
          $player->PS=$player->PS+1;
        scene("e011109");
      }elseif($dienum>=4){
        scene("e011110");
      }elseif($dienum>=1){
        $player->PC[15]=1;
        if($PSM)
          $player->PS=$player->PS-1;
        scene("e011111");
      }
      }
      break;

    case "e011109":
      switch($ch){
        case 1:
          scene("e011107");
          break;
       
      }
      break;

    case "e011110":
      switch($ch){
        case 1:
          scene("e011107");
          break;
       
      }
      break;

    case "e011111":
      switch($ch){
        case 1:
          scene("e011107");
          break;
       
      }
      break;

    case "e011112":
      switch($ch){
        case 1:
          scene("e011115");
          break;
       
      }
      break;

    case "e011113":
      switch($ch){
        case 1:
          scene("e011115");
          break;
       
      }
      break;

    case "e011114":
      switch($ch){
        case 1:
          scene("e011115");
          break;
       
      }
      break;

    case "e011115":
      switch($ch){
        case 1:
          scene("e011201");
          break;
       
      }
      break;


    //十二章 十二章 十二章 十二章 十二章 十二章
    case "e011201":
      switch($ch){
        case 1:
          scene("e011202");
          break;
        case 2:
          scene("e011203");
          break;
      }
      break;
    //挑战!!挑战!!挑战!!
    case "e011202":
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
          $player->PC[5]=1;
            if($PSM)
              $player->PS=$player->PS-1;
          }
          $dienum=0;
          $dienum=rand(1,6);
            if($dienum>=6)
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
            if($dienum>=6)
              if($PSM)
                $player->PS=$player->PS+2;
          $dienum=$dienum+rand(1,6);
            if($dienum>=6)
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
      if($dienum>=6){
        $player->EC[11]=1;
        if($PSM)
          $player->PS=$player->PS+2;
        scene("e011204");
      }elseif($dienum>=4){
        scene("e011205");
      }elseif($dienum>=1){
        scene("e011206");
      }
      }
      break;

    case "e011203":
      switch($ch){
        case 1:
          scene("e011209");
          break;
       
      }
      break;

    case "e011204":
      switch($ch){
        case 1:
          scene("e011207");
          break;
       
      }
      break;

    case "e011205":
      switch($ch){
        case 1:
          scene("e011208");
          break;
       
      }
      break;

    case "e011206":
      switch($ch){
        case 1:
          scene("e011209");
          break;
       
      }
      break;

    case "e011207":
      switch($ch){
        case 1:
          scene("end");
          break;
       
      }
      break;

    case "e011208":
      switch($ch){
        case 1:
          scene("end");
          break;
       
      }
      break;

    //挑战!!挑战!!挑战!!
    case "e011209":
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
          $player->PC[16]=1;
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
          $player->PC[16]=1;
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
        $player->EC[12]=1;
        if($PSM)
          $player->PS=$player->PS+2;
        scene("e011210");
      }elseif($dienum>=4){
        scene("e011211");
      }elseif($dienum>=1){
        $player->PC[127]=1;
        if($PSM)
          $player->PS=$player->PS-2;
        scene("e011212");
      }
      }
      break;

    case "e011210":
      switch($ch){
        case 1:
          scene("e011213");
          break;
       
      }
      break;

    case "e011211":
      switch($ch){
        case 1:
          scene("e011214");
          break;
       
      }
      break;

    case "e011212":
      switch($ch){
        case 1:
          scene("e011215");
          break;
       
      }
      break;

    case "e011213":
      switch($ch){
        case 1:
          scene("end");
          break;
       
      }
      break;

    case "e011214":
      switch($ch){
        case 1:
          scene("end");
          break;
       
      }
      break;

    case "e011215":
      switch($ch){
        case 1:
          scene("end");
          break;
       
      }
      break;

    case "end":
      switch($ch){
        case 1:
          $player = new PlayerDEF;
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
       
      }
      break;
  
  
  
  
  
  
  
  
  
  
  
  }



?>