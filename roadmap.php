<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" dir="ltr" xml:lang="de">
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
    WoTr - Roadmap
    </title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<script src="jquery-1.5.min.js" type="text/javascript"></script>
	<script src="cookies.js" type="text/javascript"></script>
    <script type="text/javascript">
	var loca = location.host;
	var locb = location.pathname;
	var protocol = location.protocol;
	if(locb.match("/+[a-z]+.php$")) {
		var k = locb.match("/+[a-z]+.php$");
		locb = locb.replace(k, "");
	}
	var url = protocol+loca+locb+"/";
	var username = GetCookie("uname");
	$(document).ready(function() {
		if(username!==null) {
			$("#unm").text(username);
			$("#lr").html("<a href='javascript:logout()'>Logout</a>");
		}
		else {
			$("#unm").text("Not logged in");
			$("#lr").html("<a href='register.php'>Registration</a>");
		}
	});
	
	function logout() {
	if(GetCookie("save")!=1) {
		DeleteCookie("uname");
		DeleteCookie("save");
	}
	else {
		SetCookie("nor",1);
	}
	DeleteCookie("login");
	location.href=url;
}
	</script>
	<style type="text/css">
	ul {
		padding-left: 1em;
		padding-right: 1em;
	}
	</style>
</head>
<body>
	<div id="nav">
		<table id="navtbl">
			<tr>
				<td><a href="index.php">Home</a></td>
			</tr>
		</table>
		<table id="usertbl">
			<tr>
				<td id="lr"></td>
				<td id="unm"></td>
			</tr>
		</table>
	</div>
	<div id="content">
		<b>Roadmap</b>
		<a href="help.php">Back to help</a>
		<ul>
			<li style="color:green;"style="color:green;">Save state of a word for a user & decide when you reach the next state</li>
			<li style="color:darkorange;">logo (<a href="wotrlogo.php">Mockup</a>)</li>
			<li>A dashboard</li>
			<li>Different series of words</li>
			<li>Write a help</li>
			<li>Securer login (php looks up username & pw)</li>
			<li>Cleanup JavaScript</li>
			<li>Different languages</li>
			<li>Word only mode</li>
			<li>Let users enter word series</li>
			<li>Fix help button (partially??)</li>
			<li>Help if a word was x times wrong</li>
			<li>Fix load (get rid of debug button)</li>
		</ul>
		<span style="color:green;">green</span>: work in progress
		<span style="color:darkorange;">orange</span>: bugged, but available
	</div>
	<div id="footer">
		WoTr V0.1 &copy; <?php
	echo date("Y");
?> by Martin Giger
	<table id="htable">
		<tr>
			<td><a href="help.php">Help</a></td>
		</tr>
	</table>
	</div>
</body>
</html>