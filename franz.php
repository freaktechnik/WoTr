<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" dir="ltr" xml:lang="de">
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
    WoTr
    </title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<script src="jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="franz.js" type="text/javascript"></script>
	<script src="cookies.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function () {
		initialize();
	});
	</script>
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
				<td><a href="javascript:logout()">Logout</a></td>
				<td><a href="userdata.php" id="unm"></a></td>
			</tr>
		</table>
	</div>
	<div id="navspacer"></div>
    <div id="content">
		<b id="name"></b>
		<div id="quescon">
		<div id="germanwrap"><span id="german"></span></div>
		<img src="" alt="" id="image" height="200" width="200" />
		<div id="franzwrap"><span id="franz"></span></div>
		</div>
			<input type="text" id="textf" class="textf" value=""/>
		<div id="next" class="buttons">></div>
		<div id="resultwrap"><span id="result"></span><div id="tip">h</div></div>
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
