<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" dir="ltr" xml:lang="de">
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
    WoTr - Help
    </title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<script src="jquery-1.5.1.min.js" type="text/javascript"></script>
	<script src="cookies.js" type="text/javascript"></script>
    <script type="text/javascript">
	var loca = location.host;
	var locb = location.pathname;
	var protocol = location.protocol;
	if(locb.match("/+[a-z]+.php$")) {
		var temp = locb.match("/+[a-z]+.php$");
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
		<b>Help</b><br/>
		At the moment, there is only a <a href="roadmap.php">Roadmap</a>.
	</div>
	<div id="footspacer"></div>
	<div id="footer">
	<?php include("version.php"); ?> 
	<table id="htable">
		<tr>
			<td class="actual"><a href="help.php">Help</a></td>
		</tr>
	</table>
	</div>
	</div>
</body>
</html>