﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" dir="ltr" xml:lang="de">
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
    WoTr - Change Userdata
    </title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<script src="jquery-1.5.min.js" type="text/javascript"></script>
	<script src="cookies.js" type="text/javascript"></script>
	<script src="franz.js" type="text/javascript"></script>
	<script type="text/javascript">
	var jsond = new Array();
	var user =  new Array();
	var password;
	var passwordpr
	var login = GetCookie("login");
	var username = GetCookie("uname");
	var f = usercheck();
	var m=0;
	var a=0;
	var loca = location.host;
	var locb = location.pathname;
	var protocol = location.protocol;
	if(locb.match("/+[a-z]+.php$")) {
		var k = locb.match("/+[a-z]+.php$");
		locb = locb.replace(k, "");
	}
	var url = protocol+loca+locb+"/";
	if(login!=1&&protocol!="file:") {
		location.href=url+"error.php";
	}
	$.getJSON("getjson.php?file=userdb.json", function(data){
		$.each(data.users,function(i,db) { 
			user[i]=db.user;
			m++;
		});
		jsond = data;
	});
	$(document).ready(function() {
		if(GetCookie("save")!=1) {
			$("#stay").hide();
		}
		$("#username").text(username);
		$("#password").keyup(function() {
			password = $("#password").val();
		});
		$("#passwordpr").keyup(function() {
			passwordpr = $("#passwordpr").val();
		$("#save").click(function() {
			if(password==passwordpr) {
				save(username,password);
			}
			else {
				if(a==0){
					notification("red","the values aren't equal!");
				}
				else {
					$("#result").animate({top: "0px"}, 100 ).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
				}
	});
	function save(uname,pwd) {
	echo date("Y");
?> by Martin Giger
	<table id="htable">
		<tr>
			<td><a href="help.php">Help</a></td>
		</tr>
	</table>