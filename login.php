<?php												
	$pagename = basename($_SERVER['PHP_SELF']);		
													
	ini_set('session.use_trans_sid', false);		
	ini_set('url_rewriter.tags', '');				
	session_name('rocketcakelogin');				
	session_start();   								
													
	$targetpage = '';								
	$user = '';										
	$password = '';									
													
	if (isset($_SESSION['targetpage']))	$targetpage = $_SESSION['targetpage'];
	if (isset($_POST['name'])) $user = $_POST['name'];				
	if (isset($_POST['password'])) $password = $_POST['password'];	
																	
	$users = array("Moderation");									
	$passwords = array("53c9ccf15ee56b1586f4e6944f35d7ea");							
																	
	$password = md5('rocketcake' . $password);											
																	
	$loggedin = false; 												
																	
	for ($i=0;$i<count($users); ++$i) 								
	{    															
		if ($users[$i] == $user &&									
			$passwords[$i] == $password)   							
		{															
			$loggedin = true;										
			break;													
		} 															
	} 																
																	
	if ($user != '')												
	{																
		if (!$loggedin) 											
		{   														
			$suffix = '';											
			if ($user != '') $suffix = '?msg=wrongpassword';		
																	
			header('Location: ' . $pagename . $suffix );			
			exit; 													
		}															
		else														
		{    														
			$_SESSION['user'] = $user;    							
			if ($targetpage == '')									
				echo ('logged in.');								
			else													
				header('Location: ' . $targetpage);					
				                                					
			if (!is_writable(session_save_path())) 					
				echo '<br/><br/><i>Warning: PHP session save path is not writable: ' . session_save_path() . ' Contact your hosting provider to fix this or update your php.ini file.</i>'; 
				                                					
			exit; 													
		}															
	}																
?><!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title></title>
	<link rel="stylesheet" type="text/css" href="login_php.css?h=52b091c3">
</head>
<body>
<div class="textstyle1">
<span class="textstyle2"><br/><br/><br/></span>  </div>
<div class="textstyle3">
<form  action=""
enctype="application/x-www-form-urlencoded"
method="POST" id="form_676c710d"><div id="form_676c710d_padding" ><div class="textstyle1">  <span class="textstyle2">Enter password:<br/><br/>Name:<br/></span>
<input type="text" value="" title="" name="name"  id="edit_7d581cae" >
  <span class="textstyle2"><br/><br/>Password:<br/></span>
<input type="password" value="" title="" name="password"  id="edit_7bca7fc7" >
  <span class="textstyle2"><br/><br/></span>
<input name="Button1" type="submit" value="OK" title=""  id="button_41e9c75f" >
  <span class="textstyle2"><br/></span>
</div>
<div style="clear:both"></div></div></form>  </div>
<div class="textstyle1">
<script type="text/javascript">// this code will display a "wrong password!" message on the page if the password was wrong

var wrongPasswordText = "Wrong password!"

if (window.location.search.indexOf("msg=wrongpassword") != -1)
{
  var arrs = document.getElementsByTagName("input");
  if (arrs.length && arrs[arrs.length-1])
  {
    var newelem = document.createElement("div");
    newelem.innerHTML = '<span style="color:red;">' + wrongPasswordText + '</span><br/>';			
    arrs[arrs.length-1].parentNode.insertBefore(newelem, arrs[arrs.length-1]);
  }
}
</script>  </div>
</body>
</html>