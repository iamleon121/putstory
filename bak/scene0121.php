<?php

function scene($id){

global $audioLink,$btnDisplay1,$btnDisplay2,$btnDisplay3,$btnDisplay4,$textInBtn1,$textInBtn2,$textInBtn3,$textInBtn4,$leadout,$player;

switch($id){

//第一章 第一章 第一章 第一章 第一章 第一章

//样例 样例 样例 样例 样例 样例
case "e010100":
//$audioLink="/sound/e01010001.mp3";
//$btnDisplay1="block";
//$btnDisplay2="block";
//$btnDisplay3="block";
//$btnDisplay4="block";
//$textInBtn1="没钱支付房租了";
//$textInBtn2="陷入开发困难";
//$textInBtn3="迷茫自己的未来";
//$textInBtn4="为自己所做的担惊受怕";
//$leadout=$id;
break;

//占位 占位 占位 占位 占位 占位
case "e010101":
break;

case "e010102":
$audioLink="/sound/e01010201.mp3";
if($player->AC[7])
$audioLink="/sound/e01010202.mp3";
$btnDisplay1="block";
if($player->PS>0&&$player->IN[5])
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="不去理会那个人";
$textInBtn2="认出了他并说服他进来";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010103":
$audioLink="/sound/e01010301.mp3";
if($player->AC[7])
$audioLink="/sound/e01010302.mp3";
$btnDisplay1="block";
if($player->PS>0&&$player->IN[5])
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="不去理会那个人";
$textInBtn2="认出了他并说服他进来";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010104":
$audioLink="/sound/e01010401.mp3";
$btnDisplay1="block";
if($player->PS>0&&$player->IN[5])
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="原地不动看着他离开";
$textInBtn2="喊下他让他别离开";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010105":
$audioLink="/sound/e01010501.mp3";
if($player->IN[1])
$audioLink="/sound/e01010502.mp3";
if($player->TE[2])
$audioLink="/sound/e01010503.mp3";
if($player->AC[7]&&$player->TE[2])
$audioLink="/sound/e01010504.mp3";
$btnDisplay1="block";
if($player->PS>0&&$player->IN[5])
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="看着他出门离开";
$textInBtn2="让他把文件袋留下来";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010106":
$audioLink="/sound/e01010601.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="不打算睡觉了";
$textInBtn2="上床睡上一会";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010107":
$audioLink="/sound/e01010701.mp3";
$btnDisplay1="block";
if($player->PS>0&&$player->IN[5])
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="原地不动看着他离开";
$textInBtn2="马上追上去拦住他";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010108":
$audioLink="/sound/e01010801.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="不打算睡觉了";
$textInBtn2="上床睡上一会";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010109":
$audioLink="/sound/e01010901.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="追上去将他拦住";
$textInBtn2="追上去用力拉住他";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010110":
$audioLink="/sound/e01011001.mp3";
if($player->PC[5])
$audioLink="/sound/e01011002.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="和他一起回到办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010111":
$audioLink="/sound/e01011101.mp3";
if($player->PC[5])
$audioLink="/sound/e01011102.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="和他一起回到办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010112":
$audioLink="/sound/e01011201.mp3";
if($player->PC[5])
$audioLink="/sound/e01011202.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="和他一起回到办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010113":
$audioLink="/sound/e01011301.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="你睡着了并做了一个梦";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010114":
$audioLink="/sound/e01011401.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="惊醒过来";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010115":
$audioLink="/sound/e01011501.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="惊醒过来";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010116":
$audioLink="/sound/e01011601.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="惊醒过来";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

//第二章 第二章 第二章 第二章 第二章 第二章

case "e010201":
$audioLink="/sound/e01020101.mp3";
if($player->IN[2])
$audioLink="/sound/e01020202.mp3";
$btnDisplay1="block";
if($player->PS>0&&$player->IN[4])
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="听她继续说下去";
$textInBtn2="说服让她留下预付金";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010202":
$audioLink="/sound/e01020201.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="听她继续说下去";
$textInBtn2="表示希望她能说明白情况";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010203":
$audioLink="/sound/e01020301.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="听她继续说下去";
$textInBtn2="表示希望她能说明白情况";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010204":
$audioLink="/sound/e01020401.mp3";
if($player->AC[9])
$audioLink="/sound/e01020402.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="仔细回想一下当时的情景";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010205":
$audioLink="/sound/e01020501.mp3";
if($player->AC[9])
$audioLink="/sound/e01020502.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="仔细回想一下当时的情景";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010206":
$audioLink="/sound/e01020601.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="出去想办法拿回算法备份";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010207":
$audioLink="/sound/e01020701.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="出去想办法拿回算法备份";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010208":
$audioLink="/sound/e01020801.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="出去想办法拿回算法备份";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

//第三章 第三章 第三章 第三章 第三章 第三章

case "e010301":
$audioLink="/sound/e01030101.mp3";
if($player->IN[1]||$player->AC[9])
$audioLink="/sound/e01030102.mp3";
if($player->IN[1]||$player->AC[9]&&$player->TE[2])
$audioLink="/sound/e01030103.mp3";
if($player->IN[1]||$player->AC[9]&&$player->AC[3])
$audioLink="/sound/e01030104.mp3";
if($player->IN[1]||$player->AC[9]&&$player->TE[2]&&$player->AC[3])
$audioLink="/sound/e01030105.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="去雷琳博士的实验室碰碰运气";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;









}
}


?>