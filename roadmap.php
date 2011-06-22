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
	<script src="jquery-1.5.1.min.js" type="text/javascript"></script>
	<script src="cookies.js" type="text/javascript"></script>
    <script type="text/javascript">
	var loca = location.host;
	var locb = location.pathname;
	var protocol = location.protocol;
	if(locb.match("/+[a-z]+.php$")) {
		var temp= locb.match("/+[a-z]+.php$");
		locb = locb.replace(temp, "");
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
<div id="wrapper">
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
	<div id="navspacer"></div>
	<div id="content">
		<b>Roadmap</b>
		<a href="help.php">Back to help</a>
		<ul>
			<li style="color:darkorange;">logo (<a href="wotrlogo.php">Mockup</a>)</li>
			<li>Write a help</li>
			<li>Securer login (php looks up username & pw)</li>
			<li>Cleanup JavaScript</li>
			<li>Different languages</li>
			<li>Make the hole system translateable</li>
			<li>Word only mode</li>
			<li>Let users set the picture when entering a word series
				<ul><li>Make suggestions for the picture (google image search)</li></ul>
			</li>
			<li style="color:darkorange;">Fix help button (partially??)</li>
			<li>Socialize: Login with Facebook/Twitter and sharing</li>
			<li>Replace tables with unordered lists. (in nav & footer?)</li>
			<li>Fix enter for next word</li>
			<li>Statistics</li>
			<li style="color:darkorange;">When clicking on "Not logged in" open an overlay to login. <a href="error.php">Test it here</a>.</li>
			<li>recaptcha at Registration</li>
		</ul>
		<span style="color:green;">green</span>: work in progress
		<span style="color:darkorange;">orange</span>: bugged, but preview availalbe
	</div>
	<div id="footspacer"></div>
	<div id="footer">
	<?php include("version.php"); ?> 
	<table id="htable">
		<tr>
			<td><a href="help.php">Help</a></td>
		</tr>
	</table>
	</div>
</div>
</body>
</html>
