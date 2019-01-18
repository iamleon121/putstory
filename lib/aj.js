function loadscene(leadin,choice)
{
    var getlink="";
    if (leadin.length==0||leadin==null)
    { 
        getlink="teller.php";
    }else{
        getlink="teller.php?in="+leadin+"&ch="+choice;
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
    
    xmlhttp.open("GET",getlink,true);
    xmlhttp.send();
}