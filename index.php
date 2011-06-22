<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" dir="ltr" xml:lang="de">
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org"/>	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
    WoTr - Login
    </title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<script src="jquery-1.5.1.min.js" type="text/javascript"></script>
	<script src="cookies.js" type="text/javascript"></script>
	<script src="login.js" type="text/javascript"></script>
<style type="text/css">
#pw {
	width:156px;
}
#username {
	width: 100%;
}
</style>
</head>
<body>
  <div id="wrapper">
	<div id="nav">
		<table id="navtbl">
			<tr>
				<td class="active"><a href="index.php">Home</a></td>
			</tr>
		</table>
		<table id="usertbl">
			<tr>
				<td><a href="register.php">Registration</a></td>
				<td>Not logged in</td>
			</tr>
		</table>
	</div>
	<div id="navspacer"></div>
	<div id="content">
		<b>Protected area</b>
		<form>
			<input type="text" id="username" class="textf"/>
			<input type="password" id="pw" class="textf"/> <span class="buttons" id="clear">clear</span><br/>
			<input type="checkbox" id="save"/>Save login for 1 day<br/>
		</form>
		<div class="buttons" id="login">Login</div>
		<div id="resultwrap"><span id="result">Please enable JavaScript</span></div>
	</div>
	<div id="footspacer"></div>
	<div id="footer">	<?php include("version.php"); ?> 	<table id="htable">		<tr>			<td><a href="help.php">Help</a></td>		</tr>	</table>
	</div>
	</div>
</body>
</html>