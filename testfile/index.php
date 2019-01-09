<?php 
session_start();

?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8"> 
<title>putstory</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../lib/w3.css">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4448280052581449",
    enable_page_level_ads: true
  });
</script>
</head>
<body>

<div class="w3-container w3-red">
  <h1>Put Story</h1>
</div>

<img src="image/scene1-1.jpg" alt="Car" style="width:100%">

<div class="w3-container">
  <p>这是一个正在编辑的测试页面，属于putstory网站</p>
  
  <p><audio controls autoplay><source src="sound/s1-1.mp3" type="audio/mpeg"></audio></p>
  <a class="w3-btn w3-green" href="../default.html">查看</a>
  <a class="w3-btn w3-green" href="../default.html">访问</a>
  <a class="w3-btn w3-green" href="../default.html">更多</a>
</div>
<?php

if(isset($_SESSION['views']))
{
    $_SESSION['views']=$_SESSION['views']+1;
}
else
{
    $_SESSION['views']=1;
}
// 检索 session 数据
echo "浏览量：". $_SESSION['views'];
?>
</body>
</html>