<!DOCTYPE html>
<html>
<head>
<title>putstory E11</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w325/w3.css">

<script>
function loadscene(leadin,choice)
{
    
    if (leadin.length==0)
    { 
        
        return;
    }
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行的代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {    
        //IE6, IE5 浏览器执行的代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          document.getElementById("main").innerHTML=xmlhttp.responseText;
                  
        }
    }
    
    xmlhttp.open("GET","teller2.php?in="+leadin+"&ch="+choice,true);
    xmlhttp.send();
}
</script>
</head>
<body id="main">

<div class="w3-container w3-teal w3-center w3-card-4">
  <h3>代码疑云</h3>
</div>

<div class="w3-container">
  <p>如果没有自动播放，请手动点击播放按钮收听。</p>
</div>

<div class="w3-container w3-center" style="display: <?php echo $audioDisplay ?> ">
  <audio controls autoplay>
    <source src="<?php echo $audioLink ?>" type="audio/mpeg">
  </audio>
</div>

<div class="w3-container">
  <p> </p>
</div>

<div class="w3-container w3-center" style="display: <?php echo $btnDisplay1 ?> "><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" onclick="loadscene('begin',1)"><?php echo $textInBtn1 ?></a>
</div>
<div class="w3-container w3-center" style="display: <?php echo $btnDisplay2 ?> "><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="<?php echo $btnLink2 ?>"><?php echo $textInBtn2 ?></a>
</div>
<div class="w3-container w3-center" style="display: <?php echo $btnDisplay3 ?> "><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="<?php echo $btnLink3 ?>"><?php echo $textInBtn3 ?></a>
</div>
<div class="w3-container w3-center" style="display: <?php echo $btnDisplay4 ?> "><p></p><a class="w3-btn-block w3-teal w3-card-2 w3-xlarge w3-round" href="<?php echo $btnLink4 ?>"><?php echo $textInBtn4 ?></a>
</div>



<div class="w3-container w3-teal w3-bottom w3-center">
  
  <h6><?php echo $player->PS ?> 制作:Leon iamleon@yeah.net</h6>
</div>

</body>
</html> 