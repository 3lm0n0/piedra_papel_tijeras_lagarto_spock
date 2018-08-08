function ajax(url,params,post)
{
    var ajax;
    if (window.XMLHttpRequest)
    {
        ajax=new XMLHttpRequest();//IE7+, Firefox, Chrome, Opera, Safari
    }
    else if (ActiveXObject("Microsoft.XMLHTTP"))
    {
        ajax=new ActiveXObject("Microsoft.XMLHTTP");//IE6/5
    }
    else if (ActiveXObject("Msxml2.XMLHTTP"))
    {
        ajax=new ActiveXObject("Msxml2.XMLHTTP");//other
    }
    else
    {
        alert("Error: Your browser does not support AJAX.");
        return false;
    }

    ajax.onreadystatechange=function()
    {
        if (ajax.readyState==4&&ajax.status==200)
        {
            alert(ajax.responseText);
            document.getElementById('response').innerHTML=ajax.responseText;
        }
    }

    if (post==false)
    {
        ajax.open("GET",url,true);
        ajax.send(null);
    }
    else
    {
        ajax.open("POST",url,true);
        //Envias el header requerido para enviar parametros via POST
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.setRequestHeader("Content-length", params.length);
        ajax.setRequestHeader("Connection", "close");
        ajax.send(params);
    }
    return ajax;
}
