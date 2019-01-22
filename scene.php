<?php

function scene($id){

global $audioLink,$btnDisplay1,$btnDisplay2,$btnDisplay3,$btnDisplay4,$textInBtn1,$textInBtn2,$textInBtn3,$textInBtn4,$endbtn,$leadout,$player;

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
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="上床睡上一会";
$textInBtn2="";
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
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="上床睡上一会";
$textInBtn2="";
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
$audioLink="/sound/e01020102.mp3";
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
$textInBtn1="告诉她是曾经的合作伙伴";
$textInBtn2="仔细告诉她你的身份";
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

case "e010701":
$audioLink="/sound/e01070101.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="你推开门走了进去";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010702":
$audioLink="/sound/e01070201.mp3";
if($player->PC[5])
$audioLink="/sound/e01070202.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="让他好好休息后离开";
$textInBtn2="告诉他不是他的错";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010703":
$audioLink="/sound/e01070301.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="躲到一边招架";
$textInBtn2="抬手大力还击";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010704":
$audioLink="/sound/e01070401.mp3";
if($player->PC[15])
$audioLink="/sound/e01070402.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="和你的朋友说话";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010705":
$audioLink="/sound/e01070501.mp3";
if($player->PC[15])
$audioLink="/sound/e01070502.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="和你的朋友说话";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010706":
$audioLink="/sound/e01070601.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="让他好好休息后离开";
$textInBtn2="告诉大刘关于算法的事情";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010707":
$audioLink="/sound/e01070701.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="让他好好休息后离开";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

//第八章 第八章 第八章 第八章 第八章 第八章

case "e010801":
$audioLink="/sound/e01080101.mp3";
if($player->PC[18])
$audioLink="/sound/e01080102.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="听他说关于雷琳博士的事情";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010802":
$audioLink="/sound/e01080202.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="告诉他很快把算法交给他";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010803":
$audioLink="/sound/e01080301.mp3";
if($player->PC[18])
$audioLink="/sound/e01080302.mp3";
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

//第九章 第九章 第九章 第九章 第九章 第九章

case "e010901":
$audioLink="/sound/e01090101.mp3";
if($player->PC[18])
$audioLink="/sound/e01090102.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="试图关闭算法程序的命令行";
$textInBtn2="立刻运行一个终止算法函数";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e010902":
$audioLink="/sound/e01090201.mp3";
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

case "e010903":
$audioLink="/sound/e01090301.mp3";
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

case "e010904":
$audioLink="/sound/e01090401.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
if($player->PS>0)
$btnDisplay3="block";
$btnDisplay4="none";
$textInBtn1="上前帮兰茜一起开门";
$textInBtn2="阻止艾文先生对兰茜的攻击";
$textInBtn3="拿出携带的甩棍制服艾文先生";
$textInBtn4="";
$leadout=$id;
break;

case "e010905":
$audioLink="/sound/e01090501.mp3";
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

case "e010906":
$audioLink="/sound/e01090601.mp3";
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

case "e010907":
$audioLink="/sound/e01090701.mp3";
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

//第十章 第十章 第十章 第十章 第十章 第十章

case "e011001":
$audioLink="/sound/e01100101.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="来到办公室附近的公园见莫";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011002":
$audioLink="/sound/e01100202.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="回到办公室联系雷琳博士";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011003":
$audioLink="/sound/e01100301.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="来到雷琳博士的研究机构";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011004":
$audioLink="/sound/e01100401.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="看着莫离开研究机构";
$textInBtn2="试图挽留莫别离开";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011005":
$audioLink="/sound/e01100501.mp3";
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

case "e011006":
$audioLink="/sound/e01100601.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="不去干预实验过程";
$textInBtn2="要求雷琳博士停止实验";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011007":
$audioLink="/sound/e01100702.mp3";
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

case "e011008":
$audioLink="/sound/e01100801.mp3";
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

//十一章 十一章 十一章 十一章 十一章 十一章 

case "e011101":
$audioLink="/sound/e01110102.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="尝试着输入密码打开房门";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011102":
$audioLink="/sound/e01110201.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="不去管他继续往前走";
$textInBtn2="进去把他救下来";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011103":
$audioLink="/sound/e01110301.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
if($player->PS>0)
$btnDisplay3="block";
$btnDisplay4="none";
$textInBtn1="你和大刘迅速的藏到一边";
$textInBtn2="你捡起产品和大刘藏到一边";
$textInBtn3="你准备好了短棍藏到一边";
$textInBtn4="";
$leadout=$id;
break;

case "e011104":
$audioLink="/sound/e01110401.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="尝试着输入密码打开房门";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011105":
$audioLink="/sound/e01110501.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="尝试着输入密码打开房门";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011106":
$audioLink="/sound/e01110601.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="尝试着输入密码打开房门";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011107":
$audioLink="/sound/e01110701.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="你惊慌失措跑了起来";
$textInBtn2="你摘下口罩试图让他认出你";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011108":
$audioLink="/sound/e01110801.mp3";
$btnDisplay1="block";
if($player->PS>0)
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="你躲在了房间的门边";
$textInBtn2="你赶紧把房门给轻轻关上了";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011109":
$audioLink="/sound/e01110901.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="离开大崔回到走廊";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011110":
$audioLink="/sound/e01111001.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="在走廊上继续往里面走";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011111":
$audioLink="/sound/e01111101.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="跟着助手往实验室走去";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011112":
$audioLink="/sound/e01111201.mp3";
if($player->EC[9])
$audioLink="/sound/e01111202.mp3";
if($player->EC[10])
$audioLink="/sound/e01111203.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="快步跑出了实验室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011113":
$audioLink="/sound/e01111301.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="快步跑出了实验室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011114":
$audioLink="/sound/e01111401.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="一瘸一拐的跑出实验室";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011115":
$audioLink="/sound/e01111501.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="站在一边看着这一切";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

//十二章 十二章 十二章 十二章 十二章 十二章

case "e011201":
$audioLink="/sound/e01120101.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="捡起枪交给罗科";
$textInBtn2="不去把枪捡起来";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011202":
$audioLink="/sound/e01120201.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
if($player->PS>0)
$btnDisplay3="block";
$btnDisplay4="none";
$textInBtn1="把枪直接丢到罗科那里";
$textInBtn2="把枪直接交到罗科的手里";
$textInBtn3="把枪上膛交到罗科的手里";
$textInBtn4="";
$leadout=$id;
break;

case "e011203":
$audioLink="/sound/e01120301.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="赶紧朝向门外跑去";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011204":
$audioLink="/sound/e01120401.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="查看现在的情况";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011205":
$audioLink="/sound/e01120501.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="查看现在的情况";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011206":
$audioLink="/sound/e01120601.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="赶紧朝向门外跑去";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011207":
$audioLink="/sound/e01120701.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="尾声";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011208":
$audioLink="/sound/e01120801.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="尾声";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011209":
$audioLink="/sound/e01120901.mp3";
$btnDisplay1="block";
$btnDisplay2="block";
if($player->PS>0)
$btnDisplay3="block";
$btnDisplay4="none";
$textInBtn1="喊着莫的名字";
$textInBtn2="喊着让莫快醒醒";
$textInBtn3="喊着让莫别被控制";
$textInBtn4="";
$leadout=$id;
break;

case "e011210":
$audioLink="/sound/e01121001.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="查看周围的情况";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011211":
$audioLink="/sound/e01121101.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="查看周围的情况";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011212":
$audioLink="/sound/e01121201.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="查看周围的情况";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011213":
$audioLink="/sound/e01121301.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="尾声";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011214":
$audioLink="/sound/e01121401.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="尾声";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "e011215":
$audioLink="/sound/e01121501.mp3";
$btnDisplay1="block";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$textInBtn1="尾声";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;

case "end":
if($player->EC[11]==1||$player->EC[12]==1)
$audioLink="/sound/e01end01.mp3";
elseif($player->PC[17])
$audioLink="/sound/e01end02.mp3";
else
$audioLink="/sound/e01end03.mp3";
$btnDisplay1="none";
$btnDisplay2="none";
$btnDisplay3="none";
$btnDisplay4="none";
$endbtn="block";
$textInBtn1="";
$textInBtn2="";
$textInBtn3="";
$textInBtn4="";
$leadout=$id;
break;




}
}


?>