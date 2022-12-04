function getXMLHTTPRequest(){
    if (window.XMLHttpRequest){
        return new XMLHttpRequest();
    }
    else{
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}

function all(){
    var xmlhttp = getXMLHTTPRequest();
    var page = 'mhs_all.php';
    var inner = 'data';
    xmlhttp.open("GET", page, true);
    xmlhttp.onreadystatechange = function() {
        document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
            document.getElementById(inner).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send(null);
}

function a20(){
    var xmlhttp = getXMLHTTPRequest();
    var page = 'mhs_20.php';
    var inner = 'data';
    xmlhttp.open("GET", page, true);
    xmlhttp.onreadystatechange = function() {
        document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
            document.getElementById(inner).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send(null);
}

function a21(){
    var xmlhttp = getXMLHTTPRequest();
    var page = 'mhs_21.php';
    var inner = 'data';
    xmlhttp.open("GET", page, true);
    xmlhttp.onreadystatechange = function() {
        document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
            document.getElementById(inner).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send(null);
}

function a16(){
    var xmlhttp = getXMLHTTPRequest();
    var page = 'mhs_16.php';
    var inner = 'data';
    xmlhttp.open("GET", page, true);
    xmlhttp.onreadystatechange = function() {
        document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
            document.getElementById(inner).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send(null);
}

function a17(){
    var xmlhttp = getXMLHTTPRequest();
    var page = 'mhs_17.php';
    var inner = 'data';
    xmlhttp.open("GET", page, true);
    xmlhttp.onreadystatechange = function() {
        document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
            document.getElementById(inner).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send(null);
}

function a18(){
    var xmlhttp = getXMLHTTPRequest();
    var page = 'mhs_18.php';
    var inner = 'data';
    xmlhttp.open("GET", page, true);
    xmlhttp.onreadystatechange = function() {
        document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
            document.getElementById(inner).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send(null);
}

function a19(){
    var xmlhttp = getXMLHTTPRequest();
    var page = 'mhs_19.php';
    var inner = 'data';
    xmlhttp.open("GET", page, true);
    xmlhttp.onreadystatechange = function() {
        document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
            document.getElementById(inner).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send(null);
}
function a22(){
    var xmlhttp = getXMLHTTPRequest();
    var page = 'mhs_22.php';
    var inner = 'data';
    xmlhttp.open("GET", page, true);
    xmlhttp.onreadystatechange = function() {
        document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
            document.getElementById(inner).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send(null);
}

