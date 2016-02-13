var fontcolour;
var fontsize;
var bgcolour;
$(document).ready(function(){
    $("#fontcolours").change(function(){
        fontcolour=$("#fontcolours").val();
        switch (fontcolour) {
            case "red":
            $("#heading").css("color", "red");
            break;
            case "white":
                $("#heading").css("color","white");
            break;
            case "black":
                $("#heading").css("color","black");
            break;
            case "purple":
                $("#heading").css("color","purple");
            break;
            default:
                $("#heading").css("color","black");
        }
        creatCookie("Fcolour",fontcolour,365);
        $.post("user.php",{active:"I am active"});
    });
    $("#fontsize").change(function(){
        fontsize=$("#fontsize").val();
        switch (fontsize) {
            case "one":
            $("#fontchange").css("font-size", "1.1em");
            break;
            case "two":
                $("#fontchange").css("font-size","1.3em");
            break;
            case "three":
                $("#fontchange").css("font-size","1.5em");
            break;
            case "four":
                $("#fontchange").css("font-size","1.7");
            break;
            default:
                $("#fontchange").css("font-size","1em");
        }
         creatCookie("Fsize",fontsize,365);
        $.post("user.php",{active:"I am active"});

    });
    $("#bgcolours").change(function(){
        bgcolour=$("#bgcolours").val();
        switch (bgcolour) {
            case "red":
            $("#info").css("background", "red");
            break;
            case "white":
                $("#info").css("background","white");
            break;
            case "green":
                $("#info").css("background","green");
            break;
            case "purple":
                $("#info").css("background","purple");
            break;
            default:
                $("#info").css("background","white");
        }
        creatCookie("BGcolour",bgcolour,365);
         $.post("user.php",{active:"I am active"});
    });
});
function creatCookie(name,value,exdays) {
        if (exdays) {
            var date=new Date();
            date.setTime(date.getTime()+(exdays*24*60*60*1000));
            var expires="; expires="+date.toGMTString();
        }
        else var expires="";
        document.cookie= name+"="+value+expires+";path=/";
    }
   
  

function findCookie(cname) {
    var name=cname+"=";
    var ca =document.cookie.split(';');
    for (var i=0; i<ca.length; i++) {
        var c=ca[i].trim();
        if (c.indexOf(name)==0) {
            return c.substring(name.length,c.length)
        }
    }
    return "";
}
window.onload=function(){
    fontcolour=findCookie("Fcolour");
    fontsize=findCookie("Fsize");
    bgcolour=findCookie("BGcolour");
    
    switch (fontcolour) {
            case "red":
            $("#heading").css("color", "red");
            break;
            case "white":
                $("#heading").css("color","white");
            break;
            case "black":
                $("#heading").css("color","black");
            break;
            case "purple":
                $("#heading").css("color","purple");
            break;
            default:
                $("#heading").css("color","black");
        }
        
    switch (fontsize) {
            case "one":
            $("#fontchange").css("font-size", "1.1em");
            break;
            case "two":
                $("#fontchange").css("font-size","1.3em");
            break;
            case "three":
                $("#fontchange").css("font-size","1.5em");
            break;
            case "four":
                $("#fontchange").css("font-size","1.7");
            break;
            default:
                $("#fontchange").css("font-size","1em");
        }
    switch (bgcolour) {
            case "red":
            $("#info").css("background", "red");
            break;
            case "white":
                $("#info").css("background","white");
            break;
            case "green":
                $("#info").css("background","green");
            break;
            case "purple":
                $("#info").css("background","purple");
            break;
            default:
                $("#info").css("background","white");
        }

}
