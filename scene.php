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
$audioLink="/sound/e01010202.mp3";
$btnDisplay1="block";
if($player->PS>0)
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
$audioLink="/sound/e01010302.mp3";
$btnDisplay1="block";
if($player->PS>0)
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
if($player->PS>0)
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
$audioLink="/sound/e01010504.mp3";
$btnDisplay1="block";
if($player->PS>0)
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
if($player->PS>0)
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
$audioLink="/sound/e01020202.mp3";
$btnDisplay1="block";
if($player->PS>0)
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

case "e010302":
$audioLink="/sound/e01030201.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="介绍自己的身份";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010303":
$audioLink="/sound/e01030301.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="进入雷琳博士的办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010304":
$audioLink="/sound/e01030401.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="趁机溜进研究机构里面";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010305":
$audioLink="/sound/e01030501.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="趁机溜进研究机构里面";
$textInBtn2="大声向他提起你的名字";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010306":
$audioLink="/sound/e01030601.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
if($player->PS>0)
$btnDisplay3="block";
$btnDisplay4="none";
$textInBtn1="趁保安转过身悄悄进去";
$textInBtn2="趁保安转过身快步溜进去";
$textInBtn3="趁保安转过身迅速跑过去";
$textInBtn4="";
$leadout=$id;
break;

case "e010307":
$audioLink="/sound/e01030701.mp3";
if($player->PC[7])
$audioLink="/sound/e01030702.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="进入雷琳博士的办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010308":
$audioLink="/sound/e01030807.mp3";
$btnDisplay1="block";
if($player->PS>0||$player->EC[3])
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="趁机溜进研究机构里面";
$textInBtn2="大声向他提起你的名字";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010309":
$audioLink="/sound/e01030901.mp3";
if($player->PC[7])
$audioLink="/sound/e01030902.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="在研究机构附近转一转";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010310":
$audioLink="/sound/e01031001.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="开门进入办公室中";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010311":
$audioLink="/sound/e01031107.mp3";
$btnDisplay1="block";
if($player->PS>0&&$player->EC[4])
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="打开办公电脑查找代码";
$textInBtn2="用破解程序在电脑上查找代码";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010312":
$audioLink="/sound/e01031201.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="返回自己的办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010313":
$audioLink="/sound/e01031301.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="迅速从窗口跳出去了";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010314":
$audioLink="/sound/e01031401.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="返回自己的办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010315":
$audioLink="/sound/e01031501.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="返回自己的办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010316":
$audioLink="/sound/e01031601.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="返回自己的办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010317":
$audioLink="/sound/e01031701.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="返回自己的办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010318":
$audioLink="/sound/e01031801.mp3";
$btnDisplay1="block";
if($player->PS>0&&$player->EC[4])
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="打开办公电脑查找代码";
$textInBtn2="用破解程序在电脑上查找代码";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010319":
$audioLink="/sound/e01031901.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="随便编套说辞搪塞过去";
$textInBtn2="认真思考一段假话隐瞒目的";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010320":
$audioLink="/sound/e01032001.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="请求雷琳博士交给你代码副本";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010321":
$audioLink="/sound/e01032101.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="请求雷琳博士交给你代码副本";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010322":
$audioLink="/sound/e01032201.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="请求雷琳博士交给你代码副本";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010323":
$audioLink="/sound/e01032301.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="回到自己的办公室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

//第四章 第四章 第四章 第四章 第四章 第四章

case "e010401":
$audioLink="/sound/e01040101.mp3";
if($player->PC[18])
$audioLink="/sound/e01040102.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="去往标注的秘密地址";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010402":
$audioLink="/sound/e01040202.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="躲到一边让罗科进来";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

//第五章 第五章 第五章 第五章 第五章 第五章

case "e010501":
$audioLink="/sound/e01050101.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
if($player->PS>0)
$btnDisplay3="block";
$btnDisplay4="none";
$textInBtn1="假意说只是做客马上离开";
$textInBtn2="告诉他是雷琳博士派他来的";
$textInBtn3="骗他说你是这里的住客";
$textInBtn4="";
$leadout=$id;
break;

case "e010502":
$audioLink="/sound/e01050201.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="边说着假话边向门外走去";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010503":
$audioLink="/sound/e01050301.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="在一边听罗科和莫说话";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010504":
$audioLink="/sound/e01050401.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="在一边听罗科和莫说话";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010505":
$audioLink="/sound/e01050501.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="在门外听罗科和莫说话";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010506":
$audioLink="/sound/e01050601.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
if($player->PS>0)
$btnDisplay3="block";
$btnDisplay4="none";
$textInBtn1="挣脱打手的控制";
$textInBtn2="回击控制你的打手";
$textInBtn3="全力反抗控制你的打手";
$textInBtn4="";
$leadout=$id;
break;

case "e010507":
$audioLink="/sound/e01050701.mp3";
if($player->PC[11])
$audioLink="/sound/e01050702.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="擦擦脸上的痕迹和莫说话";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010508":
$audioLink="/sound/e01050801.mp3";
if($player->PC[11])
$audioLink="/sound/e01050802.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="清理下脸上的伤和莫说话";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010509":
$audioLink="/sound/e01050901.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="来到莫的旁边和莫说话";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010510":
$audioLink="/sound/e01051001.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="听陈讲之前的事情";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

//第六章 第六章 第六章 第六章 第六章 第六章

case "e010601":
$audioLink="/sound/e01060101.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="听陈继续说下去";
$textInBtn2="对陈说些安慰同情的话";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010602":
$audioLink="/sound/e01060201.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="离开去你朋友的家";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010603":
$audioLink="/sound/e01060301.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="离开去你朋友的家";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

//第七章 第七章 第七章 第七章 第七章 第七章





















}
}


?>