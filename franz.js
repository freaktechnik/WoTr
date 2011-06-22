/* (c) 2011 by Martin Giger*/

var jetzt = new Date(); //actual date
var content;
var image;
var ger;
var fra;
var answer;
var res;
var a = 0;
var k = 0; //fistrun of test() in write
var de = new Array(); //de
var fr = new Array(); //fr
var im = new Array(); //img
var v=0; //arrayitems->number of questions
var l=0; //number of index
var t=0; //right answer?
var logo=0; //finished?
var loca = location.host;
var locb = location.pathname;
var getr = get_GET_param("db");
var protocol = location.protocol;
var state = new Array(); //States
var username;
var states = new Array();
var firstwrong;
var url;
var tips=0; //tip displaying?
var dash = 0; //go back to dash on next click.

if(locb.match("/+[a-z]+.php$")!=null) {
	var temp = locb.match("/+[a-z]+.php$");
	locb = locb.replace(temp, "");
	url = protocol+"//"+loca+locb+"/";
}
else {
	url = protocol+"//"+loca+locb;
}

$(document).ready(function() {
	$.ajaxSetup({ cache:false });
	var login = GetCookie("login");

	if(login!=1&&protocol!="file:") {
		location.href=url+"error.php";
	}
	$("#resultwrap").slideToggle(1);
	$("#tip").hide();
	username = GetCookie("uname");
	$("#unm").text(username);
});

function initialize() {
	image = $("#image");
	ger = $("#german");
	fra = $("#franz");
	res = $("#result");
	$("#name").text(getr);
	$("#textf").val("");
	$.getJSON("db/"+getr+".json", function(data){
		$.each(data.db,function(i,db) { 
			de[i]=db.de;
			fr[i]=db.fr;
			im[i]=db.image;
			v++;
		});
		$.getJSON("states/"+username+".json", function(datax){
			states = datax;
			$.each(datax,function(j,datay) {
				if(datay.name==getr) {
					$.each(datay.states,function(ij,dby) {
						state[ij]=dby.state;
					});
				}
			});
			write();
		});
	});	
}

function write() {
	if(state[l]===undefined) {
		state[l]=0;
		var blubberi = 0;
		var kalb=0;
		while(kalb==0) {
			if(states[blubberi].name==getr) {
				states[blubberi].states.push({"state":"0"});
				kalb++;
			}
			blubberi++;
		}
		ger.text(de[l]);
		ger.css("padding-top: 2px;");
		img(im[l]);
		fra.text(fr[l]);
		fra.css("padding-bottom: 2px;");
	}
	
	else if(state[l]==0) {
		ger.text(de[l]);
		ger.css("padding-top: 2px;");
		img(im[l]);
		fra.text(fr[l]);
		fra.css("padding-bottom: 2px;");
	}
	
	else if(state[l]==1) {
		ger.text("");
		ger.css("padding-bottom: 0px;");
		img(im[l]);
		fra.text("");
		fra.css("padding-bottom: 0px;");
	}
	
	else if(state[l]==2) {
		ger.text(de[l]);
		ger.css("padding-top: 2px;");
		fra.text("");
		fra.css("padding-bottom: 0px;");
		img(0);
	}
	else if(state[l]>2) {
		if(l<v) {
			l++;
			write();
		}
		else {
			ger.text("Fehler. Diese funktion muss noch integriert werden.");
			ger.css("padding-top: 2px;");
		}
	}
	
	else {
		ger.text("error");
	}
		$("#textf").removeAttr("disabled");
	if(k==0) {
		test();
		k++;
	}
	firstwrong=0;
	$("#textf").focus();
}

function test() {
	$("#next").click(function(){
		subm();
	});
	
	$(document).keyup(function(e) {
		if(e.keyCode == 13) {
			subm();
		}
	});
	
	$("#tip").click( function() {
		if(tips==1) {
			fra.css("padding-bottom: 2px;");
			fra.text("Tip: "+fr[l]);
			tips=0;
			state[l]--;
			$("#tip").hide();
		}
		else {
			$("#tip").hide();
		}
	});
}
function subm() {
	if($("#textf").val()==fr[l]){
		$("#textf").attr("disabled", true);
		if(l<v-1&&t==0){
			notification("green","vrai!");
			t++;
			if(firstwrong==0) {
				state[l]++;
			}
		}
		else if(t==1&&l<v-1){
			$("#textf").val("");
			img("");
			$("#resultwrap").slideToggle();
			a=0;
			l++;
			t--;
			write();
		}
		else if(logo==1){
			var kalb=0;
			var blubberi = 0;
			while(kalb==0) {
				if(states[blubberi].name==getr) {
					$.each(state,function(durb,statedb) {
						states[blubberi].states[durb].state=statedb;
					});
					states[blubberi].lastdone.day=jetzt.getDate()
					states[blubberi].lastdone.month=jetzt.getMonth();
					states[blubberi].lastdone.year=jetzt.getFullYear();
					kalb++;
				}
				blubberi++;
			}
			$("#result").ajaxSend(function() {
				notification("DeepSkyBlue","Sending...");
			});
			$.post("json.php", {json:states,file:"states/"+username+".json"});
			$("#result").ajaxSuccess(function() {
				notification("green","Sent.");
				$("#next").text("dashboard");
				dash=1;
			});
			logo=0;
		}
		else if(dash==1) {
			location.href=url+"dashboard.php";
		}
		else {
			notification("green","fin.");
			$("#next").text("submit");
			logo++;
			if(firstwrong==0) {
				state[l]++;
			}
		}
	}
	else {
		if(a==0){
			notification("red","faux!");
			firstwrong++;
		}
		else if(t==1||logo==1) {
			notification("red","tu as changé la reponse");
		}
		else {
			$("#tip").show();
			tips=1;
			$("#result").animate({top: "0px"}, 100 ).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
		}
		$("#textf").val("");
	}
}
function img(im) {
	if(im!=0) {
		image.attr("src" , function(){
			if(im.match("http")==NULL) {
				return "images/" + im;
			}
			else {
				return im;
			}
		});
	}
	else {
		image.attr("src" , "");
	}
}

function notification(color,msg) {
	res.text(msg);
	$("#resultwrap").css({"background":color});
	if(a==0) {
		$("#resultwrap").slideToggle();
		a++;
	}
}
function logout() {
	if(GetCookie("save")!=1) {
		DeleteCookie("uname");
		DeleteCookie("save");
	}
	else {
		SetCookie("nor",1);
	}
	DeleteCookie("login");
	location.href=url+"index.php";
}
//get parameter from http://webseiten-professionell.wikidot.com/schnipsel:js-get-parameter-verarbeiten
function get_GET_params() {
   var GET = new Array();
   if(location.search.length > 0) {
      var get_param_str = location.search.substring(1, location.search.length);
      var get_params = get_param_str.split("&");
      for(i = 0; i < get_params.length; i++) {
         var key_value = get_params[i].split("=");
         if(key_value.length == 2) {
            var key = key_value[0];
            var value = key_value[1];
            GET[key] = value;
         }
      }
   }
   return(GET);
}
 
function get_GET_param(key) {
   var get_params = get_GET_params();
   if(get_params[key])
      return(get_params[key]);
   else
      return false;
}