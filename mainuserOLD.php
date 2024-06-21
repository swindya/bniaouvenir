<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="logobnilogo.jpg" />
<title>Menu User</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<script src="icheck.js"></script>

<link rel="stylesheet" href="chosen.css">
<!--script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script-->
<link type='text/css' href='./simplemodal/basic/css/basicb.css' rel='stylesheet' media='screen' />
<link type='text/css' href='./simplemodal/basic/css/basic2.css' rel='stylesheet' media='screen' />

<script src="script.js"></script>


<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anaheim|Cabin|Cantarell|Dosis|Lato|Khula|Kanit|Rajdhani|Jura|Assistant|Merriweather+Sans|Montserrat|Mukta+Mahee|Mukta+Malar|Muli|Noto+Sans|Nunito|Nunito+Sans|Open+Sans|Oxygen|PT+Sans|PT+Sans+Narrow|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Slab|Slabo+27px|Titillium+Web|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ABeeZee|Abel|Amaranth|Arimo|Armata|Assistant|Barlow|Barlow+Semi+Condensed|Boogaloo|Cabin|Cabin+Condensed|Cambay|Cantarell|Caveat|Chivo|Cinzel|Contrail+One|Courgette|Cuprum|Didact+Gothic|Dosis|Economica|Electrolize|Fira+Sans|Gudea|Hammersmith+One|Hind|Hind+Madurai|Hind+Siliguri|Hind+Vadodara|Itim|Jaldi|Josefin+Slab|Kalam|Kanit|Khand|Khula|Maven+Pro|Merriweather+Sans|Molengo|Montserrat+Alternates|Mukta+Mahee|Muli|News+Cycle|Orbitron|Overpass|PT+Sans+Caption|PT+Sans+Narrow|Pavanam|Play|Playball|Poiret+One|Quattrocento+Sans|Questrial|Quicksand|Rajdhani|Righteous|Rokkitt|Ropa+Sans|Sacramento|Sarala|Scada|Share|Signika|Tangerine|Titillium+Web|Ubuntu+Condensed|Varela+Round|Yanone+Kaffeesatz|Yantramanav" rel="stylesheet">


<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>


  
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #404040;
  position: absolute;
  top: 0;
  width: 100%;
  height: 50px;
}

.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding:2px 6px;
  text-decoration: none;
  font-size: 12px;
}

.main {
  padding: 6px;
  margin-top: 0px;
  height: 0px; /* Used in this example to enable scrolling */
}
</style>  
<style>
	@import url(Kaushan.css);
	body{
		background-color: transparent;
	}
	#popup {
		visibility: hidden;
		opacity: 0;
		position: fixed;
		margin-top: -200px;
		background: black;
		color:black;
	}
	#popup:target {
		visibility:visible;
		opacity: 1;
		background-color: rgba(0,0,0,0.2);
		position: fixed;
		padding-top: 4%;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		z-index: 99;
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
	}
	#tombol{
		top:50%;
		left:50%;
	}
	.popwrapper{
		background: #111144;
		position: relative;
		margin:auto;
		width: 500px;
		height: auto;
		padding: 10px;
		border-radius: 3px;
	}
	#header{
		height: 100px;
		padding-top:10px;
	}
	.navigasi{
		font-size: 24px;
		font-weight: 400;
	}
	#navigasi a:hover{
		color: white;
		border-bottom: 2px solid black;
	}
	.content{
		padding-top:40px;
		color: white;
	}
	.navbar-brand{
		font-size: 36px;
	}
</style>
<style>
	@import url(http://fonts.googleapis.com/css?family=Kaushan+Script);
	body{
		background-color: transparent;
	}
	#popup1 {
		visibility: hidden;
		opacity: 0;
		position: fixed;
		margin-top: -200px;
		background: black;
		color:black;
	}
	#popup1:target {
		visibility:visible;
		opacity: 1;
		background-color: rgba(0,0,0,0.2);
		position: fixed;
		padding-top: 4%;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		z-index: 99;
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
	}
	#tombol{
		top:50%;
		left:50%;
	}
	.popwrapper{
		background: #111144;
		position: relative;
		margin:auto;
		width: 620px;
		height: auto;
		padding: 10px;
		border-radius: 3px;
	}
	#header{
		height: 100px;
		padding-top:50px;
	}
	.navigasi{
		font-size: 24px;
		font-weight: 400;
	}
	#navigasi a:hover{
		color: white;
		border-bottom: 2px solid black;
	}
	.content{
		padding-top:20px;
		color: white;
	}
	.navbar-brand{
		font-size: 36px;
	}
</style>
<style>
@import url(font-awesome-4.7.0/css/font-awesome.css);
}
@import url(titillium.css);
.fa-2x {
font-size: 2em;
}
.fa {
position: relative;
display: table-cell;
width: 70px;
height: 46px;
text-align: center;
vertical-align: middle;
font-size:20px;
}


.main-menu:hover,nav.main-menu.expanded {
width:50px;
overflow:visible;
}

.main-menu {
background:#018585;
border-right:1px solid #e5e5e5;
position:absolute;
top:0;
bottom:0;
height:100%;
left:0;
width:70px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
-webkit-transform:translateZ(0) scale(1,1);
z-index:1000;
}

.main-menu>ul {
margin:17px 0px;
}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#fff;
 font-family: arial;
font-size: 14px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}

.main-menu .nav-icon {
position:relative;
display:table-cell;
width:60px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:18px;
}

.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:180px;
  font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
position:absolute;
left:0;
bottom:10px;
}

.no-touch .scrollable.hover {
overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y:auto;
overflow:visible;
}

a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color:#ff9705;
}
.area {
float: left;
background: #e2e2e2;
width: 100%;
height: 100%;
}
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}

</style>

<style>
.button, .button:visited {
background-color: #222;
display: inline-block;
padding: 5px 10px 6px;
color: #fff;
text-decoration: none;
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
border-bottom: 1px solid rgba(0,0,0,0.25);
position: relative;
cursor: pointer;
font-family: calibri;
}
.button:hover {
background-color: #111;
color: #fff;
} .button:active {
top: 1px;
} 
.small.button, .small.button:visited {
font-size: 11px
} 
.button, .button:visited,
.medium.button, .medium.button:visited {
font-family: Roboto;
font-size: 13px;
font-weight: normal;
line-height: 1;
text-shadow: 0 -1px 1px rgba(0,0,0,0.25); 
} 
.medium.button, .medium.button:visited {
font-size: 15px;
padding: 8px 14px 9px;
} 
.large.button, .large.button:visited {
font-size: 20px;
padding: 24px 20px 24px;
} 
.pink.button, .magenta.button:visited {
background-color: #e22092;
} 
.pink.button:hover {
background-color: #c81e82;
} 
.green.button, .green.button:visited {
background-color: #91bd09;
} 
.green.button:hover {
background-color: #749a02;
} 
.red.button, .red.button:visited {
background-color: #e62727;
}
.red.button:hover {
background-color: #cf2525;
}
.orange.button, .orange.button:visited {
background-color: #ff5c00;
} 
.orange.button:hover {
background-color: #d45500;
}
.blue.button, .blue.button:visited {
background-color: #2981e4;
}
.blue.button:hover {
background-color: #2575cf;
}
.yellow.button, .yellow.button:visited {
background-color: #ffb515;
}
.yellow.button:hover {
background-color: #fc9200;
} 
</style>
<style> 
  .textbox { 
    border: 1px transparent; 
	background-color: #FFFFFF;
    height: 20px; 
    width: 160px; 
    font-size: 14px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 4px #d9d9d9; 
    -moz-box-shadow: 0px 0px 4px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 4px #d9d9d9; 
} 
 
.textbox:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style> 
<style> 
  .textboxmid { 
    border: 1px transparent; 
	background-color:  #FFFFFF;
    height: 20px; 
    width: 160px; 
    font-size: 14px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxmid:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
} 
 </style>
<style> 
  .textboxwide { 
    border: 1px transparent; 
	background-color:  #FFFFFF;
    height: 20px; 
    width: 280px;
	font-size: 14px;
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxwide:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
} 
 </style> 
 <style> 
  .textboxnarrow { 
    border: 1px transparent; 
	background-color: #FFFFFF;
    height: 20px; 
    width: 60px; 
    font-size: 14px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxnarrow:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style> 
 <style> 
  .textboxtgl { 
    border: 1px transparent; 
	background-color: #FFFFFF;
    height: 20px; 
    width: 120px; 
    font-size: 14px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 2px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxtgl:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
} 
 </style> 
<style> 
  .textboxtahun { 
    border: 1px transparent; 
	background-color: transparent;
    height: 20px; 
    width: 30px; 
    font-size: 14px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 2px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxtahun:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
} 
 </style>
 
<style>
/* -------------------- Page Styles (not required) */
div { margin: 0px; }

/* -------------------- Select Box Styles: bavotasan.com Method (with special adaptations by ericrasch.com) */
/* -------------------- Source: http://bavotasan.com/2011/style-select-box-using-only-css/ */
.styled-select {
   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
   height: 26px;
   overflow: hidden;
   width: 240px;
}

.styled-select select {
   background: transparent;
   border: none;
   font-size: 14px;
   height: 26px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 268px;
}

.styled-select.slate {
   background: url(http://i62.tinypic.com/2e3ybe1.jpg) no-repeat right center;
   height: 30px;
   width: 240px;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   font-size: 16px;
   height: 30px;
   width: 268px;
}

/* -------------------- Rounded Corners */
.rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
}

.semi-square {
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
}

/* -------------------- Colors: Background */
.slate   { background-color: #ddd; }
.green   { background-color: #779126; }
.blue    { background-color: #3b8ec2; }
.yellow  { background-color: #eec111; }
.black   { background-color: #000; }

/* -------------------- Colors: Text */
.slate select   { color: #000; }
.green select   { color: #fff; }
.blue select    { color: #fff; }
.yellow select  { color: #000; }
.black select   { color: #fff; }


/* -------------------- Select Box Styles: danielneumann.com Method */
/* -------------------- Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/ */
#mainselection select {
   border: 0;
   color: #EEE;
   background: transparent;
   font-size: 20px;
   font-weight: bold;
   padding: 2px 10px;
   width: 378px;
   *width: 350px;
   *background: #58B14C;
   -webkit-appearance: none;
}

#mainselection {
   overflow:hidden;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
}


/* -------------------- Select Box Styles: stackoverflow.com Method */
/* -------------------- Source: http://stackoverflow.com/a/5809186 */
select#soflow, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: 13px;
   margin: 0px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 180px;
}

select#soflow-color {
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
   background-color: #779126;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}
select#soflow1, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: 13px;
   margin: 0px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 320px;
}

select#soflow1-color {
   color: #fff;
   background-image: url(15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
   background-color: #779126;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}
</style>
<style>
.containerku {
 position: absolute; visibility: visible; left: 1310px; top: 20px; z-index: 200;
}
</style>

<style>
body {
    background-image: url("images/bni3low.jpg");
	background-size: cover;
}
</style>

<style> 
textarea {
    width: 450px;
    height: 50px;
    padding: 5px 5px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 13px;
	font-family: "Arial", Times, serif;
    resize: none;
}
</style>

<script>
function hapususer(forme, userid, useridmu) 
{
	var r = confirm("Konfirmasi Penghapusan :!\nApakah anda yakin akan hapus data ?");
	if (r==true)
	{	
		//var useri = "userid" + i;
		//var useridku = document.getElementsByName(useri)[0].value;
		if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} 
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					//document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				//alert(xmlhttp.responseText);
				window.location.reload();
			}
		}
		var url = "deluser.php?useridmu=" + useridmu + "&userid=" + userid;
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
		//document.forms.submit();
}
</script>
<script>
function adduserkuku() {

	var namamu = document.getElementsByName("namanew")[0].value;
	var usern = document.getElementsByName("usernamenew")[0].value;
	var passw1 = document.getElementsByName("passwdnew")[0].value;
	var passw2 = document.getElementsByName("passwdrnew")[0].value;
	var level = document.getElementsByName("levelnew")[0].value;
	var outlet = document.getElementsByName("outletnew")[0].value;
	var email = document.getElementsByName("emailnew")[0].value;

	
	if (namamu==null || namamu=="" || usern==null || usern=="" || passw1==null || passw1=="" || passw2==null ||
		passw2=="" || level==null || level=="" || email==null || email=="" || outlet==null || outlet==-1 || outlet.length<6)
	{
		alert("Harap isi/lengkapi data.");
		return false;
	}
	else
	{

		if (passw1 != passw2)
		{
			alert ("Periksa kembali data password.");
			return false
		}
		else
		{
			if (level < 100 && (outlet==null || outlet=="" || outlet.length<6))
			{
				alert("Harap isi/lengkapi data dengan benar.");
				return false;
			}
			else
			{
				document.forms["adduser"].submit();
				return true;
			}
		}
		
	}
}

</script>
<script>
function disenable(myform, i, aa) {
for (ii = 1; ii <= i; ii++) { 
	var mydi = 'nama'+ii;
	document.getElementById('nama'+ii).style.backgroundColor='transparent';
	document.getElementById('nama'+ii).readOnly = true;
	document.getElementById('jabatan'+ii).style.backgroundColor='transparent';
	document.getElementById('jabatan'+ii).readOnly = true;
	document.getElementById('nomorktp'+ii).style.backgroundColor='transparent';
	document.getElementById('nomorktp'+ii).readOnly = true;
	document.getElementById('tgllahir'+ii).style.backgroundColor='transparent';
	document.getElementById('tgllahir'+ii).readOnly = true;
	document.getElementById('tglexpire'+ii).style.backgroundColor='transparent';
	document.getElementById('tglexpire'+ii).readOnly = true;
}
document.getElementById(aa).style.backgroundColor='white';
document.getElementById(aa).readOnly = false;
}
</script>
<script>
function lockme(myform, i, aa) {

if (document.getElementById(aa).style.backgroundColor=='white') {
	document.getElementById(aa).readOnly = false;
}
else {
	for (ii = 1; ii <= i; ii++) { 
		document.getElementById('nama'+ii).style.backgroundColor='transparent';
		document.getElementById('nama'+ii).readOnly = true;
		document.getElementById('jabatan'+ii).style.backgroundColor='transparent';
		document.getElementById('jabatan'+ii).readOnly = true;
		document.getElementById('nomorktp'+ii).style.backgroundColor='transparent';
		document.getElementById('nomorktp'+ii).readOnly = true;
		document.getElementById('tgllahir'+ii).style.backgroundColor='transparent';
		document.getElementById('tgllahir'+ii).readOnly = true;
		document.getElementById('tglexpire'+ii).style.backgroundColor='transparent';
		document.getElementById('tglexpire'+ii).readOnly = true;
	}	
}
</script>

<script>
function getpwd(userid) 
{

		if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} 
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					//document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				//alert(xmlhttp.responseText);
				window.location.reload();
				window.location.refresh();
			}
		}
		var url = "getuserpwd.php?userid=" + userid;
		xmlhttp.open("GET",url,true);
		xmlhttp.send();

}
</script>

<script>
function editfill(id, nama, user, level, levelidid, outlet, email, levelidku)
{
//alert(id+"--"+nama+"--"+user+"--"+level+"--"+levelidid+"--"+ outlet + "=" + levelidid);
//alert(document.getElementById("levelidedit").value);
	document.getElementsByName("namaedit")[0].value = nama;
	document.getElementsByName("usernameedit")[0].value = user;
	//document.getElementsByName("passwdedit")[0].value = "aaa";
	//document.getElementsByName("passwd1edit")[0].value = "bbb";
	document.getElementsByName("useridedit")[0].value = id;
	//document.getElementById("tahuna").options[thmu].selected = true;
	document.getElementsByName("outletedit")[0].value = outlet;
	document.getElementsByName("leveledit")[0].value = levelidid;
	document.getElementsByName("emailedit")[0].value = email;
	//document.getElementById("leveledit").options[].selected = true;
	
	if (level===levelidku || level >= 100)
	{
		document.getElementsByName("leveledit")[0].disabled = true;
	}
	else
	{
		document.getElementsByName("leveledit")[0].disabled = false;
	}
//document.edituser.levelidedit.selectedIndex = level;
}
</script>
<script>
function edituserku()
{

	//var namaku = document.getElementsByName("namaedit")[0].value;
	//var usernameku = document.getElementsByName("usernameedit")[0].value;
//alert(namaku);
/*
	var passwordku = document.getElementsByName("passwdedit")[0].value;
	var password1ku = document.getElementsByName("passwd1edit")[0].value;

	//var levelku = document.getElementsById("leveledit").options[].value;
	var e = document.getElementById("levelidedit");
	var levelku = e.options[e.selectedIndex].value;
	
	if (namaku==null || usernameku==null || passwordku==null || password1ku==null || levelku==null ||
		namaku=="" || usernameku=="" || passwordku=="" || password1ku=="" || levelku=="")
	{
		alert("Masih ada data yg kosong. Harap lengkapi/isi semua data.");
		return false;
	}

	if (passwordku !== password1ku)
	{
		alert("Password tidak konsisten/sama. Harap dikoreksi.");
		return false;
	}
	document.forms["edituser"].submit();
*/
}
</script>

<script>
function carioutletku(userid,str) {

		var level = document.getElementsByName("levelnew")[0].value;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
//alert(this.responseText);
                document.getElementsByName('outletnew')[0].innerHTML = this.responseText;
				//document.getElementsByName("satuan")[0].value = this.responseText;
				//return this.responseText;
            }
        };
		var strku = "carioutletusernew.php?userid="+userid+"&mystr="+str+"&levelid="+level;
//alert(strku);
        xmlhttp.open("GET",strku,true);
        xmlhttp.send();

	
}
</script>

<script>
function carioutleteditku(userid,str) {

		var level = document.getElementsByName("leveledit")[0].value;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
//alert(this.responseText);
                document.getElementsByName('outletedit')[0].innerHTML = this.responseText;
				//document.getElementsByName("satuan")[0].value = this.responseText;
				//return this.responseText;
            }
        };
		var strku = "carioutletuseredit.php?userid="+userid+"&mystr="+str+"&levelidid="+level;
//alert(strku);
        xmlhttp.open("GET",strku,true);
        xmlhttp.send();

	
}
</script>

<script>
function carioutletlevel(userid, a) {

//alert(userid + "--"+a);
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
//alert(this.responseText);
                document.getElementsByName('outletnew')[0].innerHTML = this.responseText;
				//document.getElementsByName("satuan")[0].value = this.responseText;
				//return this.responseText;
            }
        };
		var strku = "carioutletlevel.php?userid="+userid+"&level="+a;
//alert(strku);
        xmlhttp.open("GET",strku,true);
        xmlhttp.send();

	
}
</script>


<script>
function getoutlet(userid, level) {

		var outlet = document.getElementsByName("outletedit")[0].value;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByName('outletedit')[0].innerHTML = this.responseText;
//alert(this.responseText);
				//document.getElementsByName("satuan")[0].value = this.responseText;
				//return this.responseText;
            }
        };
		var strku = "carioutletwil.php?userid="+userid+"&level="+level+"&outlet="+outlet;
//alert(strku);
        xmlhttp.open("GET",strku,true);
        xmlhttp.send();

	
}
</script>

<script>
function cekdataedit() {

var nameku = document.getElementsByName("namaedit")[0].value;
var usernameku = document.getElementsByName("usernameedit")[0].value;
var pwdku = document.getElementsByName("passwdedit")[0].value;
var pwd1ku = document.getElementsByName("passwd1edit")[0].value;
var levelku = document.getElementsByName("leveledit")[0].value;
var outletku = document.getElementsByName("outletedit")[0].value;

if (nameku=="" || nameku==null || usernameku=="" || usernameku==null || pwdku=="" || pwdku==null || levelku=="" ||
	levelku==null || outletku=="" || outletku==null)
{
	alert("Data masih ada yang tidak lengkap/benar.");
	return false;
}

document.forms["edituser"].submit();
}
</script>

</head>
<body>

<?php
include "koneksi.php";

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

//---------------------------------------------------------
if (!isset($_POST["useridusr"])) {
	$userid=0;
}
else
	$userid=$_POST["useridusr"];
//---------------------------------------------------------


$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    //die ('Can't use database : ' . mysqli_error());
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";

die();
	
}

$levelidku=0;

# query the users table for name and surname 
$sql00 = "SELECT
	user.ID AS userid,
	user.nama AS nama,
	user.username AS username,
	user.levelid AS levelid,
	user.email AS email,
	userlevel.ID,
	userlevel.level AS level 
	FROM user
	INNER JOIN userlevel ON userlevel.ID = user.levelid 
	WHERE user.ID=" . $userid . ";";

$row_cnt = 0;
$result = mysqli_query($link, $sql00);
if ($result) {
		$row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$useridku = $row['userid'];
			$namaku = $row['nama'];
			$unameku = $row['username'];
			$levelidku = $row['levelid'];
			$levelku = $row['level'];
	}
}

//echo "<br><br><br>" . $namaku . "+" . $sandicabangku . "+" . $jenisoutletku . "+" . $levelidku . "<br>";

$now = time(); // Checking the time now when home page starts.
$_SESSION['expire'] = $_SESSION['start'] + ($menit * 60);
if (isset($_SESSION['expire'])) {
	if ($now > $_SESSION['expire']) {
		unset($_SESSION['username']); 
		unset($_SESSION['passwd']); 
		unset($_SESSION['perusahaanid']); 
		unset($_SESSION['tahun']); 
		$_SESSION['statuslogin'] = 7;//session expired
?>
<script>
window.top.location.href = "index.php"; 
</script>

<?php
die;
	}
}

?>

<?php
include "menu1.php";
include "menu2setting.php";
?>

<?php


$bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Cari level dari level persis dibawah user (levelidku - 1)
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	$sql = "SELECT * FROM userlevel WHERE (ID <= " . ($levelidku - 1) . ");";

	$row_cnt = 0;
	$result = mysqli_query($link, $sql);
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$levelbawahku = $row['level'];
		}
	}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Daftar User LEVEL
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	$jmllevel = 0;
	$a = 0;

	$sql = "SELECT * FROM userlevel WHERE ((ID <= " . $levelidku . " AND ID >= 0)) ORDER BY ID ASC;";

	$row_cnt = 0;
	$result = mysqli_query($link, $sql);
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$a++;
			$levelidids[$a] = $row['IDID'];
			$levelids[$a] = $row['ID'];
			$levels[$a] = $row['level'];
//echo "<br><br><br>-----------------------------" . $levels[$a];
		}
	}
	$jmllevel = $a;
//echo "<br><br><br>-----------------------------" . $jmllevel;
//----------------------------------------------------------------------

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Daftar User LEVEL utk EDIT
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	$jmlleveli = 0;
	$a = 0;

	$sql = "SELECT * FROM userlevel WHERE (ID <= " . $levelidku . " AND ID >= 0);";

	$row_cnt = 0;
	$result = mysqli_query($link, $sql);
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$a++;
			$levelididsi[$a] = $row['IDID'];
			$levelidsi[$a] = $row['ID'];
			$levelsi[$a] = $row['level'];
		}
	}
	$jmlleveli = $a;
//-------------------------------------------------------------------------------
	
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Daftar OUTLET
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++





?>




<table align="left" style="text-align: left; margin-left: 300px; margin-right: auto; margin-top: 35px;" width="990px" border="0" cellspacing="0" cellpadding="0">
	<tr height="10px">
		<td style="padding-left: 10px; text-align: left; font-size: 12; width: 500px">
		</td>
	</tr>
	<tr height="40px">
		<td style="padding-left: 0px; text-align: left; font-size: 12; width: 500px">
			<font face="arial" size="5" color="black"><b>USER ACCOUNT</b></font>
		</td>
	</tr>
	<tr height="10px">
		<td style="padding-left: 20px; text-align: left; font-size: 12; width: 500px">
		</td>
	</tr>
</table>

<font face="arial" size="5" color="green">

</font>

    <div id="popup1">
        <div class="container popwrapper">
			<div style="text-align:right;">
				<FONT face="arial" color="#000000" size="2">
				<a href="#close" name="closemodal" title="close modal dialog"><img src="./images/exit.png" /></a>
				</FONT>
            </div>
            <div style="padding:20px;">
                <center>
			<form method="post" class="signin" name="adduser" id="adduser" action="adduser.php">
				<table style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="580px">
					<tr height="40px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#99DD44" size="5"><b>Data User Baru</b></FONT>
						</td>
					</tr>
					<tr height="40px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 20px; text-align: left; font-size: 1.1em" width="150px">
							<FONT face="Barlow" color="#97DDFF">Nama</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em" width="20px">
							<FONT face="arial"  color="#97DDFF">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="350px">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #DDDDDD;" class="textboxwide" id="namanew" name="namanew"  onfocus="this.value=''" value="" type="text" placeholder="Nama..." size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 20px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#97DDFF">Username</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em">
							<FONT face="arial"  color="#97DDFF">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #DDDDDD;" class="textboxmid" id="usernamenew" name="usernamenew"  onfocus="this.value=''" type="text" size="30" placeholder="Username...">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 20px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#97DDFF">Password</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em">
							<FONT face="arial" color="#97DDFF">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #DDDDDD;" class="textboxmid" id="passwdnew" name="passwdnew"  onfocus="this.value=''" type="password" size="30" placeholder="Password...">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 20px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#97DDFF">Retype Password</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#97DDFF">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #DDDDDD;" class="textboxmid" id="passwdrnew" name="passwdrnew"  onfocus="this.value=''" type="password" size="30" placeholder="Password...">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 20px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#97DDFF">Level</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#97DDFF">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<div class="side-by-side clearfix">
								<select style="font-size: 1.0em;" id="soflow" name="levelnew" placeholder="Level Access..." onchange="carioutletlevel(<?php echo $userid;?>, this.value);">
									<option value="-1">Silahkan Pilih...</option>
<?php
									if ($levelidku > 200)
									{
?>							
										<option value="<?php echo $levelidids[$i];?>"><?php print $levelbawahku;?></option>
<?php		
									}
										
									else
									{
										for ($i=1;$i<=$jmllevel-1;$i++) {
?>
										<option value="<?php print $levelidids[$i];?>"><?php print $levels[$i];?></option>
<?php
										}
									}
?>
								</select> 
							</div>
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 20px; text-align: left; font-size: 1.1em" valign="top">
							<FONT face="arial" color="#97DDFF">Outlet</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em" valign="top">
							<FONT face="arial" color="#97DDFF">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<!--input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #AAAAAA;" id="carioutlet" name="carioutlet" class="textboxmid"  onfocus="this.value=''" type="text" onchange="carioutletku(<?php echo $useridku;?>,this.value);" placeholder="Search.."-->
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #AAAAAA;" id="carioutlet" name="carioutlet" class="textboxmid" type="text" onchange="carioutletku(<?php echo $useridku;?>,this.value);" placeholder="Search..">
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 20px; text-align: left;" valign="top">
							<FONT face="arial" color="#97DDFF"></FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" valign="top">
							<FONT face="arial" color="#97DDFF"></FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<div class="side-by-side clearfix">
								<select Style="font-size: 1.0em;" id="soflow1" name="outletnew">
<?php
									if ($levelidku==2)
									{
										for ($i=1;$i<=$jmloutletuseradd;$i++) {
?>
											<option value="<?php print $kodeoutletadd[$i];?>"><?php print $jenisoutletadd[$i] . "-" . $namaoutletadd[$i];?></option>
<?php
										}
									
									}
									else if ($levelidku==3)
									{
										for ($i=1;$i<=$jmloutletuseradd;$i++) {
?>
											<option value="<?php print $kodeoutletadd[$i];?>"><?php print $jenisoutletadd[$i] . "-" . $namaoutletadd[$i];?></option>
<?php
										}										
									}
									else if ($levelidku==4)
									{
										for ($i=1;$i<=$jmloutletuseradd;$i++) {
?>
											<option value="<?php print $kodeoutletadd[$i];?>"><?php print $jenisoutletadd[$i] . "-" . $namaoutletadd[$i];?></option>
<?php
										}										
									}
									else if ($levelidku==5)
									{
										for ($i=1;$i<=$jmloutletuseradd;$i++) {
?>
											<option value="<?php print $kodeoutletadd[$i];?>"><?php print $jenisoutletadd[$i] . "-" . $namaoutletadd[$i];?></option>
<?php
										}											
									}
									else if ($levelidku==6)
									{
										for ($i=1;$i<=$jmloutletuseradd;$i++) {
?>
											<option value="<?php print $kodeoutletadd[$i];?>"><?php print $jenisoutletadd[$i] . "-" . $namaoutletadd[$i];?></option>
<?php
										}											
									}
									else if ($levelidku==7)
									{
										
									}
									else if ($levelidku >= 100)
									{
										for ($i=1;$i<=$jmloutlet;$i++) {
?>
										<option value="<?php print $kodeoutletadd[$i];?>"><?php print $jenisoutlets[$i] . "-" . $namaoutlets[$i];?></option>
<?php
										}
									}
?>
								</select> 
							</div>
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 20px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#97DDFF">Email</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em">
							<FONT face="arial" color="#97DDFF">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #DDDDDD;" class="textboxwide" id="emailnew" name="emailnew" type="text" placeholder="Email...">
						</td>
					</tr>
					<!--/form-->
					<!--form name="uploadktp" action="uploadktp.php" method="post"-->

					</form>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						<input type="hidden" id="useridnew" name="useridnew" value="<?php echo $userid;?>">
						</td>
					</tr>
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<!--button input type="submit">Tambahkan</button-->
							<!--a class="button orange medium" onclick="addktp(this.form);return false;">Tambahkan</a-->
							<a class="button orange medium" onclick="adduserkuku();">Tambahkan</a>
						</td>
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>

    <div id="popup">
        <div class="container popwrapper">
			<div style="text-align:right;">
				<FONT face="arial" color="#000000" size="2">
				<a href="#close" name="closemodal" title="close modal dialog"><img src="./images/exit.png" /></a>
				</FONT>
            </div>
            <div style="padding:20px;">
                <center>
			<form method="post" class="signin" name="edituser" id="edituser" action="edituser.php">
				<table style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="500px">
					<tr height="40px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#DDDD35" size="5"><b>Edit User<b></FONT>
						</td>
					</tr>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left; font-size: 1.1em" width="180px">
							<FONT face="arial" color="#99FD99" >Nama</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em" width="20px">
							<FONT face="arial"  color="#99FD99" >:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="280px">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #DDDDDD;" class="textboxwide" id="namaedit" name="namaedit" value="" type="text" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#99FD99" >Username</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em">
							<FONT face="arial"  color="#99FD99" >:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #DDDDDD;" class="textboxmid" id="usernameedit" name="usernameedit" value="" type="text" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#99FD99" >Password</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em">
							<FONT face="arial"  color="#99FD99" >:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #DDDDDD;" class="textboxmid" id="passwdedit" name="passwdedit" type="password" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#99FD99" >Retype Password</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em">
							<FONT face="arial"  color="#99FD99" >:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #DDDDDD;" class="textboxmid" id="passwd1edit" name="passwd1edit" type="password" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#99FD99" >Level</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em">
							<FONT face="arial" color="#99FD99" >:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<div class="side-by-side clearfix">
								<select style="font-size: 1.0em" id="soflow" name="leveledit" placeholder="Level Access" onchange="getoutlet(<?php echo $userid;?>,this.value);">
<?php
									if ($levelidku > 100)
									{
?>							
										<option value="<?php echo ($levelidku -1);?>"><?php print $levelbawahku;?></option>
										<!--option value="<?php echo ($levelidku);?>"><?php print $levelku;?></option-->
<?php		
									}
										
									else
									{
										for ($i=1;$i<=$jmllevel;$i++) {
?>
										<option value="<?php print $levelidids[$i];?>"><?php print $levels[$i];?></option>
<?php
										}
									}
?>
								</select> 
							</div>
						</td>
					</tr>
					<tr height="30px">
						<td style="padding-left: 10px; text-align: left; font-size: 1.1em" valign="top">
							<FONT face="arial" color="#99FD99">Outlet</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em" valign="top">
							<FONT face="arial" color="#99FD99">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #AAAAAA;" id="carioutletedit" name="carioutletedit" class="textboxmid" type="text" onchange="carioutleteditku(<?php echo $useridku;?>,this.value);" placeholder="Search..">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#99FD99" ></FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em">
							<FONT face="arial" color="#99FD99" ></FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<div class="side-by-side clearfix">
								<select style=" font-size: 1.0em" id="soflow1" name="outletedit" data-placeholder="Daftar Outlet">
									<option value="-1">Pilih...</option>
<?php
									for ($i=1;$i<=$jmloutletuseredit;$i++) {
?>
									<option value="<?php echo $kodeoutletss[$i];?>">
									<?php echo $jenisoutletss[$i] . "-" . $namaoutletss[$i];?></option>
<?php
									}
?>
								</select> 
							</div>
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left; font-size: 1.1em">
							<FONT face="arial" color="#99FD99" >Email</FONT>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 1.1em">
							<FONT face="arial" color="#99FD99" >:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #000000; font-family: Arial; font-weight: normal; font-size: 1.0em; background-color: #DDDDDD;" class="textboxwide" id="emailedit" name="emailedit" type="text">
						</td>
					</tr>
					<!--/form-->
					<!--form name="uploadktp" action="uploadktp.php" method="post"-->

					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
							<input type="hidden" id="id" name="id" value="<?php echo $perushid;?>">
							<input type="hidden" id="useridedit" name="useridedit">
						</td>
					</tr>
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<!--button input type="submit">Tambahkan</button-->
							<!--a class="button orange medium" onclick="addktp(this.form);return false;">Tambahkan</a-->
							<a class="button orange medium" OnClick="cekdataedit();">Update</a>
						</td>
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>


<?php
//echo $levelidku;
	if ($levelidku >= 100 || $levelidku > 1) 
	{
?>
<table align="left" style="text-align: left; margin-left: 300px; margin-right: auto; margin-top: auto;" width="990px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td style="padding-left: auto; text-align: right; font-size: 12; width:860px">
			<div id='basic-modal'>
				<a href="#popup1">
					<img src="./img/useradd.png">
				</a> &nbsp;
				<a href="#popup1" class="medium button blue">Tambah User</a>
			</div>
		</td>
	</tr>
</table>
<?php
	}
?>

<DIV align="left">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="990px" border="0" cellpadding="0" cellspacing="0">
		<tr height="10px">
			<td style="padding-left: 10px; text-align: left; font-size: 12;">
			</td>
		</tr>
	</table>
</DIV>
<?php

//=====================================================================================================
//
// 1). Kalau user org Wil (kodeoutlet panjangnya 6 digit dgn 3 digit berulang, mis 603 -> 603603) maka
//			orang2/semua user Cabang diwilayahnya akan muncul (3 digit pertama dr kodeoutlet = kode wilayah dan 2 digit terakhir
//			dari kodeoutlet adalah 00 dan panjang kodeoutlet adalah 8)
// 2). Kalau user org Cabang (kodeoutlet panjangnya 8 digit dan 2 digit terakhir adalah 00) maka
//			semua user KCP dan outlet kecil lainnya akan muncul (2 digit terakhir bukan 00)
//
//=====================================================================================================


if ($jmluser > 0)
{
?>
<DIV align="left">
	<table align="left" style="text-align: left; margin-left: 300px; margin-right: auto; margin-top: 0px;" width="1010px" border="0" cellpadding="0" cellspacing="0">
		<tr height="44px" bgcolor="#003CC8"> 
            <td style="padding-left: auto; text-align: center; font-size: 1.1em;  width: 50px;">
				<font face="Roboto" color="white">NO</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 100px">
				<font face="Roboto" color="white">USERNAME</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 150px">
				<font face="Roboto" color="white">NAMA USER</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 160px">
				<font face="Roboto" color="white">LEVEL</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 350px">
				<font face="Roboto" color="white">OUTLET</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 100px">
				<font face="Roboto" color="white">UPDATE</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 100px">
				<font face="Roboto" color="white">HAPUS</font>
			</td>
        </tr>
<?php

	$bulan = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Des');
	$status = 0;
	$j = 0;
	for ($i=1; $i <= $jmluser; $i++)
	{
		$lenkodeoutlet = strlen($kodeoutletmu[$i]);

?>
        <tr height="35px" <?php if (($j%2)==0) echo 'bgcolor="#ffffff"'; else echo 'bgcolor="#D7F2FF"'; $j++;?>>
            <td style="padding-right: auto; text-align: center; font-size: 1.1em;">
				<font face="Roboto" color="black"><?php print $j;?></font>
			</td>
            <td style="padding-left: 10px; text-align: left; font-size: 1.1em;">
				<font face="Roboto" color="black">
					<?php print $usernamemu[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: left; font-size: 1.1em;">
				<font face="Roboto" color="black">
					<?php print $namamu[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: left; font-size: 1.1em;">
				<font face="Roboto" color="black">
					<?php print $levelmu[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 1.1em;">
				<font face="Roboto" color="black">
					<?php print $namaoutletmu[$i];?>
				</font>
			</td>
            <!--td style="padding-left: 10px; text-align: center; font-size: 1.1em;">
				<font face="Roboto" color="black">
					<?php print $emailmu[$i];?>
				</font>
			</td-->
			<td style="padding-left: auto; text-align: center; font-size: 12;">
<?php

			if (($levelidmu[$i] < $levelidku) || ($levelidmu[$i] == $levelidku && $useridmu[$i]==$useridku))
			{
?>

				<div id='basic-modal2'>
					<a href="#popup" onclick="editfill(<?php print $useridmu[$i];?>,'<?php print $namamu[$i];?>','<?php print $usernamemu[$i];?>',
					<?php print $levelidmu[$i];?>,<?php print $levelididmu[$i];?>,<?php print $kodeoutletmu[$i];?>,'<?php print $emailmu[$i];?>',<?php print $levelidku;?>);" class="small button yellow">Edit</a>
				</div>
<?php
			}
?>
			</td> 
			
			<td style="padding-left: auto; text-align: center; font-size: 12;">
<?php
			if ($levelidmu[$i] < $levelidku)
			{
?>
				<form method="post" class="signin" name="deluser<?php print $useridmu[$i];?>" id="deluser<?php print $useridmu[$i];?>">
					<input type="hidden" id="userid<?php print $i;?>" name="userid<?php print $i;?>" value="<?php print $userid;?>">
					<a href="javascript:void(0)" target=_blank class="button red small" onclick="hapususer(this.form,<?php print $userid;?>,<?php print $useridmu[$i];?>); return false;">Hapus</a>
				<!--a href="javascript:void(0)" target=_blank class="button red small" onclick="hapusktp(this.form, <?php print $useridmu[$i];?>)">Hapus</a-->
				</form>
<?php
			}
?>
			</td>        		
        </tr>
<?php
	
	}

?>
    </table>
<?php
}
else
{
?>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="660px" border="0" cellspacing="0" cellpadding="0">
	<tr height="50px">
		<td style="padding-left: 0px; text-align: left; font-size: 12; width=300px">
			<font face="arial" size="4" color="red">
				TIDAK ADA DATA
			</font>
		</td>
	</tr>
</table>

<?php
}
?>	
	
</DIV>

<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="660px" border="0" cellpadding="2" cellspacing="0">
    <tr height="30px"> 
        <td style="padding-left: 30px; text-align: left; font-size: 12">
			<h1>
				</h1>
		</td>
    </tr>
</table>



<br><br>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td></td>
	</tr>
</table>



  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  
<script type='text/javascript' src='./simplemodal/basic/js/jquery.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/basicb.js'></script>

<script type='text/javascript' src='./simplemodal/basic/js/jquery2.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/jquery.simplemodal2.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/basic2.js'></script>  



  <script src="jquery.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>
<?php
//*******************************************************************************************************
	$_SESSION['userid'] = $userid;
	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;
	//$_SESSION["sppd"] = $sppd;

//*******************************************************************************************************

?>