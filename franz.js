/* (c) 2011 by Martin Giger*/

var content;
var image;
var ger;
var fra;
var answer;
var res;
var a = 0;
var k = 0; //fistrun of test() in write
var x = new Array(); //de
var y = new Array(); //fr
var z = new Array(); //img
var v=0; //arrayitems->number of questions
var l=0; //number of index
var t=0; //right answer?
var logo=0; //logout?
var loca = location.host;
var locb = location.pathname;
var protocol = location.protocol;
var state = new Array(); //States
var username;
var states = new Array();

if(locb.match("/+[a-z]+.php$")!=null) {
	var k = locb.match("/+[a-z]+.php$");
	locb = locb.replace(k, "");
	var url = protocol+"//"+loca+locb+"/";
}
else
	var url = protocol+"//"+loca+locb;

$(document).ready(function() {
	var login = GetCookie("login");

	if(login!=1&&protocol!="file:") {
		location.href=url+"error.php";
	}
	$("#resultwrap").slideToggle(1);
	username = GetCookie("uname");
	$("#unm").text(username);
	initialize();

function initialize() {
	image = $("#image");
	ger = $("#german");
	fra = $("#franz");
	res = $("#result");
	$("#textf").val("");
	$.getJSON("db.json", function(data){
		$.each(data.db,function(i,db) { 
			x[i]=db.de;
			y[i]=db.fr;
			z[i]=db.image;
			v++;
		});
	});
	
	$.getJSON("userstates.json", function(datax){
		states = datax;
		$.each(datax.db,function(j,dbx) {
			var dbusrn = dbx.username;
			if(dbusrn==username) {
				$.each(dbx.states,function(ij,dby) {
					state[ij]=dby.state;
				});
			}
		});
	});
}
function write() {
	$("#state").text(state[l]);
	if(state[l]==0) {
		ger.css("padding-top: 2px;");
		fra.css("padding-bottom: 2px;");
	}
	
	if(state[l]<2) {
		img(z[l]);
	}
	
	if(state[l]==2) {
		ger.text(x[l]);
		ger.css("padding-top: 2px;");
	}
	if(state[l]===undefined)
		ger.text("error");
	