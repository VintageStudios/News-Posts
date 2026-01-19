<?php													
	ini_set('session.use_trans_sid', false);			
	ini_set('url_rewriter.tags', '');					
	session_name('rocketcakelogin');					
	session_start();									
	if(!isset($_SESSION['user']))						
	{													
		$pagename = $_SERVER['REQUEST_URI'];			
		$_SESSION['targetpage'] = $pagename;			
		header('Location: login.php');				
		exit;											
	}													
 ?><!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title>Home | ex.Mod Panel</title>
	<link rel="stylesheet" type="text/css" href="mod_php.css?h=8954e327">
</head>
<body>
<div class="textstyle1">
<div id="container_12642722"><div id="container_12642722_padding" ><div class="textstyle1"><div id="container_57b27e8e"><div id="container_57b27e8e_padding" ><div class="textstyle2"><h1 id="heading_40a63007">Home | Mod Panel</h1></div>
<div style="clear:both"></div></div></div></div>
<div class="textstyle2"><div id="container_11a0051"><div id="container_11a0051_padding" ><div class="textstyle1"><h2 id="heading_18fb9fa2">Menu |</h2></div>
<div class="textstyle2">  <div id="button_316d5227">
    <div class="vcenterstyle1"><div class="vcenterstyle2">      <div class="textstyle2">
        <span class="textstyle3">Exit M.P</span>
        </div>
      </div></div>
    </div>
</div>
<div style="clear:both"></div></div></div></div>
<div style="clear:both"></div></div></div><span class="textstyle4"></span><div id="container_38ce2fa5"><div id="container_38ce2fa5_padding" ><div class="textstyle1"><div id="container_6631db7e"><div id="container_6631db7e_padding" ></div></div></div>
<div style="clear:both"></div></div></div>  </div>
</body>
</html>