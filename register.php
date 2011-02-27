<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" dir="ltr" xml:lang="de">
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
    WoTr - Register
    </title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<script src="jquery-1.5.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	var u;
	var p;
	var un=0;
	var pass=0;
	var jsond = new Array();
	var b = 0;
	var c = 0;
	var lub=0;
	var loca = location.host;
	var locb = location.pathname;
	var protocol = location.protocol;
	if(locb.match("/+[a-z]+.php$")!=null) {
	var k = locb.match("/+[a-z]+.php$");
	locb = locb.replace(k, "");
	var url = protocol+"//"+loca+locb+"/";
}
else
	var url = protocol+"//"+loca+locb;

$.getJSON("getjson.php?file=userdb.json", function(data){
		jsond = data;
	});

$(document).ready(function() {
	$("#resultwrap").slideToggle(1);
	$("#username").val("Username");
	$("#pw").val("Password");
	$("#username").focus(function() {
		if(un==0) {
			$("#username").val("");
			un++;
		}
	});
	$("#pw").focus(function() {
		if(pass==0) {
			$("#pw").val("");
			pass++;
		}
	});
	$("#pw").focusout(function() {
		if($("#pw").val()=="") {
			$("#pw").val("Password");
			pass--;
		}
	});
	$("#username").focusout(function() {
		if($("#username").val()=="") {
			$("#username").val("Username");
			un--;
		}
	});
	$("#username").keyup(function () {
		u = $("#username").val();
	});
	$("#pw").keyup(function () {
		p = $("#pw").val();
	});
	$("#register").click(function() {
		if(b==0) {
			if(unt(u)==1) {
				register(u,p);
			}
			else {
				$("#resultwrap").css({"background":"DeepSkyBlue"});
				$("#resultwrap").text("User with this username already exists.");
				if(c==0) {
					$("#resultwrap").slideToggle();
					c++;
				}
			}
		}
		else {
			location.href=url;
		}
	});
});
function register(uname,pwd) {
	jsond.users.push({user: uname,pw: pwd});
	$("#result").ajaxSend(function() {
		$("#resultwrap").css({"background":"DeepSkyBlue"});
		$(this).text("Sending...");
		if(c==0) {
			$("#resultwrap").slideToggle();
			c++;
		}
	});
	$.post("json.php", {json:jsond,file:"userdb.json"});
	$("#result").ajaxSuccess(function() {
		$("#resultwrap").css({"background":"green"});
		$(this).text("Registration complete.");
		if(c==0) {
			$("#resultwrap").slideToggle();
		}
		$("#register").text("back");
		b++;
	});
	$("#result").ajaxError(function() {
		$("#resultwrap").css({"background":"red"});
		$(this).text("Error.");
		if(c==0) {
			$("#resultwrap").slideToggle();
			c++;
		}
	});
}

function unt(unw) {
	while(jsond.users[lub]!==undefined) {
		if(unw==jsond.users[lub].user) {
			return 2;
		}
		lub++;
	}
	return 1;
}
</script>
<style type="text/css">
#pw {
	width:100%;
}
#username {
	width: 100%;
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
				<td class="active"><a href="register.php">Registration</a></td>
				<td>Not logged in</td>
			</tr>
		</table>
	</div>
	<div id="content">
	<b>Register account</b>
	<input id="username" type="text" class="textf"/>
	<input id="pw" type="password" class="textf"/>
	<div class="buttons" id="register">Register</div>
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