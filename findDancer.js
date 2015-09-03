/**
 * Created by Lazar on 27.8.2015..
 */
function findDancer(username, sort) {

    var xmlhttp;
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("fillWithAjax").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "ajaxFindDancer?username=" + username + "&sort=" + sort, true);
    xmlhttp.send();
}