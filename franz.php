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
	<script src="jquery-1.5.min.js" type="text/javascript"></script>
    <script src="franz.js" type="text/javascript"></script>
	<script src="cookies.js" type="text/javascript"></script>
  </head>
  <body>
	<div id="nav">
		<table id="navtbl">
			<tr>
				<td class="actual"><a href="index.php">Home</a></td>
				<td><a href="javascript:write()">debug</a></td>
			</tr>
		</table>
		<table id="usertbl">
			<tr>
				<td><a href="javascript:logout()">Logout</a></td>
				<td><a href="userdata.php" id="unm"></a></td>
			</tr>
		</table>
	</div>
    <div id="content">
		<div id="quescon">
		<span id="state">empty</span>
		<div id="germanwrap"><span id="german"></span></div>
		<img src="" alt="" id="image" height="200" width="200" />
		<div id="franzwrap"><span id="franz"></span></div>
		</div>
		<form>
			<input type="text" id="textf" class="textf" value=""/>
		</form>
		<div id="next" class="buttons">></div>
		<div id="resultwrap"><span id="result"></span></div>
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
