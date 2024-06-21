<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="logobnilogo.jpg" />
<title>Menu Persediaan</title>
 <meta charset="UTF-8">
<?php
session_start();
?>

<script src="jquery-1.11.2.min.js"></script>
<script src="icheck.js"></script>

<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anaheim|Cabin|Cantarell|Dosis|Lato|Khula|Kanit|Rajdhani|Jura|Assistant|Merriweather+Sans|Montserrat|Mukta+Mahee|Mukta+Malar|Muli|Noto+Sans|Nunito|Nunito+Sans|Open+Sans|Oxygen|PT+Sans|PT+Sans+Narrow|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Slab|Slabo+27px|Titillium+Web|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ABeeZee|Abel|Amaranth|Arimo|Armata|Assistant|Barlow|Barlow+Semi+Condensed|Boogaloo|Cabin|Cabin+Condensed|Cambay|Cantarell|Caveat|Chivo|Cinzel|Contrail+One|Courgette|Cuprum|Didact+Gothic|Dosis|Economica|Electrolize|Fira+Sans|Gudea|Hammersmith+One|Hind|Hind+Madurai|Hind+Siliguri|Hind+Vadodara|Itim|Jaldi|Josefin+Slab|Kalam|Kanit|Khand|Khula|Maven+Pro|Merriweather+Sans|Molengo|Montserrat+Alternates|Mukta+Mahee|Muli|News+Cycle|Orbitron|Overpass|PT+Sans+Caption|PT+Sans+Narrow|Pavanam|Play|Playball|Poiret+One|Quattrocento+Sans|Questrial|Quicksand|Rajdhani|Righteous|Rokkitt|Ropa+Sans|Sacramento|Sarala|Scada|Share|Signika|Tangerine|Titillium+Web|Ubuntu+Condensed|Varela+Round|Yanone+Kaffeesatz|Yantramanav" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="cssmenu.css" />

<link type='text/css' href='./simplemodal/basic/css/basicb.css' rel='stylesheet' media='screen' />
<link type='text/css' href='./simplemodal/basic/css/basic2.css' rel='stylesheet' media='screen' />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
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
font-size: 15px;
font-weight: bold;
line-height: 1;
text-shadow: 0 -1px 1px rgba(0,0,0,0.25); 
} 
.medium.button, .medium.button:visited {
font-size: 15px;
padding: 8px 14px 9px;
} 
.large.button, .large.button:visited {
font-size: 34px;
padding: 8px 14px 9px;
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
    border: 1px #555555; 
	background-color: transparent;
    height: 16px; 
    width: 160px; 
    font-size: 13px; 
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
    border: 1px solid #BBBBBB; 
	background-color: transparent;
    height: 28px; 
    width: 180px; 
    font-size: 13px; 
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
    border: 1px solid #BBBBBB; 
	background-color: transparent;
    height: 30px; 
    width: 420px; 
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
    border: 1px solid #999999; 
	background-color: transparent;
    height: 28px; 
    width: 70px; 
    font-size: 13px; 
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
	background-color: transparent;
    height: 16px; 
    width: 20px; 
    font-size: 13px; 
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
    height: 16px; 
    width: 30px; 
    font-size: 13px; 
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
   margin: 0px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 160px;
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
   width: 280px;
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
    margin: 0px 0px;
}
.navbar-default .navbar-nav > li.dropdown:hover > a, 
.navbar-default .navbar-nav > li.dropdown:hover > a:hover,
.navbar-default .navbar-nav > li.dropdown:hover > a:focus {
    background-color: rgb(231, 231, 231);
    color: rgb(85, 85, 85);
}
li.dropdown:hover > .dropdown-menu {
    display: block;
}
</style>


<style type="text/css">	
.navbar-login
{
    width: 200px;
    padding: 10px;
    padding-bottom: 0px;
}

.navbar-login-session
{
    padding: 10px;
    padding-bottom: 0px;
    padding-top: 0px;
}

.icon-size
{
    font-size: 70px;
}

</style>	


<style>
.glyphicon {
    font-size: 20px;
}
</style>

<style>
.icon-size{
 
   font-size:25px;
 
}
</style>

<style>
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.col-item
{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
	margin-left: 0px;
}
.col-item .photo img
{
    margin: 0 auto;
    width: 100%;
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
	width: 100%;
}

.col-item:hover .info {
    background-color: #F5F5DC;
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
	text-align: left;
}

.price-text-color
{
    color: #219FD1;
}


.col-item .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}
</style>

<style>
  table.center {
	position: relative;
    width:100%; 
    margin-left:auto; 
    margin-right:auto;
  }
</style>
<style>
  table.center2 {
	position: relative;
    width:30%; 
    margin-left:auto; 
    margin-right:auto;
  }
</style>


<Style>

.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  width: 340px;
  height: 280px;
}

/* ------------------- Carousel Styling ------------------- */

.carousel-inner {
  border-radius: 10px;
}

.carousel-caption {
  background-color: rgba(0,0,0,.5);
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 10;
  padding: 0 0 10px 25px;
  color: #fff;
  text-align: left;
}

.carousel-indicators {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  z-index: 15;
  margin: 0;
  padding: 0 25px 25px 0;
  text-align: right;
}

.carousel-control.left,
.carousel-control.right {
  background-image: none;
}


/* ------------------- Section Styling - Not needed for carousel styling ------------------- */

.section-white {
   padding: 10px 0;
}

.section-white {
  background-color: #fff;
  color: #555;
}

@media screen and (min-width: 768px) {

  .section-white {
     padding: 1.5em 0;
  }

}

@media screen and (min-width: 992px) {

  .container {
    max-width: 780px;
	max-height: 360px;
  }

}

</style>



<style type="text/css">

#table1 {
 border:1px solid #000;
 }
#table1 td {
 background-color:#ccc;
 border:1px solid #000;
 }
a#link {
 display:block;
 width:100%;
 height:100%; 
 font-family:verdana,arial,helvetica,sans-serif;
 font-size:16px;
 color:#666; 
 text-decoration:none;
 }
a#link #span1 {
 display:block;
 padding:10px;
 text-decoration:underline;
 }
a#link #span2 {
 display:block;
 padding:10px;
 }
a#link:hover {
 background-color:#EEEEEE;
 color:#ccc;
 }

</style>


<script>
 
	$(document).ready(function() {
		//responsive menu toggle
		$("#menutoggle").click(function() {
			$('.xs-menu').toggleClass('displaynone');

			});
		//add active class on menu
		$('ul li').click(function(e) {
			e.preventDefault();
			$('li').removeClass('active');
			$(this).addClass('active');
		});
	//drop down menu	
			$(".drop-down").hover(function() {
				$('.mega-menu').addClass('display-on');
			});
			$(".drop-down").mouseleave(function() {
				$('.mega-menu').removeClass('display-on');
			});
	
	});
</script>


<script>
/*! Visit www.menucool.com for source code, other menu scripts and web UI controls
*  Please keep this notice intact. Thank you. */

var sse1 = function () {
    var rebound = 20; //set it to 0 if rebound effect is not prefered
    var slip, k;
    return {
        buildMenu: function () {
            var m = document.getElementById('sses1');
            if(!m) return;
            var ul = m.getElementsByTagName("ul")[0];
            m.style.width = ul.offsetWidth+1+"px";
            var items = m.getElementsByTagName("li");
            var a = m.getElementsByTagName("a");

            slip = document.createElement("li");
            slip.className = "highlight";
            ul.appendChild(slip);

            var url = document.location.href.toLowerCase();
            k = -1;
            var nLength = -1;
            for (var i = 0; i < a.length; i++) {
                if (url.indexOf(a[i].href.toLowerCase()) != -1 && a[i].href.length > nLength) {
                    k = i;
                    nLength = a[i].href.length;
                }
            }

            if (k == -1 && /:\/\/(?:www\.)?[^.\/]+?\.[^.\/]+\/?$/.test) {
                for (var i = 0; i < a.length; i++) {
                    if (a[i].getAttribute("maptopuredomain") == "true") {
                        k = i;
                        break;
                    }
                }
                if (k == -1 && a[0].getAttribute("maptopuredomain") != "false")
                    k = 0;
            }

            if (k > -1) {
                slip.style.width = items[k].offsetWidth + "px";
                //slip.style.left = items[k].offsetLeft + "px";
                sse1.move(items[k]); //comment out this line and uncomment the line above to disable initial animation
            }
            else {
                slip.style.visibility = "hidden";
            }

            for (var i = 0; i < items.length - 1; i++) {
                items[i].onmouseover = function () {
                    if (k == -1) slip.style.visibility = "visible";
                    if (this.offsetLeft != slip.offsetLeft) {
                        sse1.move(this);
                    }
                }
            }

            m.onmouseover = function () {
                if (slip.t2)
                    slip.t2 = clearTimeout(slip.t2);
            };

            m.onmouseout = function () {
                if (k > -1 && items[k].offsetLeft != slip.offsetLeft) {
                    slip.t2 = setTimeout(function () { sse1.move(items[k]); }, 50);
                }
                if (k == -1) slip.t2 = setTimeout(function () { slip.style.visibility = "hidden"; }, 50);
            };
        },
        move: function (target) {
            clearInterval(slip.timer);
            var direction = (slip.offsetLeft < target.offsetLeft) ? 1 : -1;
            slip.timer = setInterval(function () { sse1.mv(target, direction); }, 15);
        },
        mv: function (target, direction) {
            if (direction == 1) {
                if (slip.offsetLeft - rebound < target.offsetLeft)
                    this.changePosition(target, 1);
                else {
                    clearInterval(slip.timer);
                    slip.timer = setInterval(function () {
                        sse1.recoil(target, 1);
                    }, 15);
                }
            }
            else {
                if (slip.offsetLeft + rebound > target.offsetLeft)
                    this.changePosition(target, -1);
                else {
                    clearInterval(slip.timer);
                    slip.timer = setInterval(function () {
                        sse1.recoil(target, -1);
                    }, 15);
                }
            }
            this.changeWidth(target);
        },
        recoil: function (target, direction) {
            if (direction == -1) {
                if (slip.offsetLeft > target.offsetLeft) {
                    slip.style.left = target.offsetLeft + "px";
                    clearInterval(slip.timer);
                }
                else slip.style.left = slip.offsetLeft + 2 + "px";
            }
            else {
                if (slip.offsetLeft < target.offsetLeft) {
                    slip.style.left = target.offsetLeft + "px";
                    clearInterval(slip.timer);
                }
                else slip.style.left = slip.offsetLeft - 2 + "px";
            }
        },
        changePosition: function (target, direction) {
            if (direction == 1) {
                //following +1 will fix the IE8 bug of x+1=x, we force it to x+2
                slip.style.left = slip.offsetLeft + Math.ceil(Math.abs(target.offsetLeft - slip.offsetLeft + rebound) / 10) + 1 + "px";
            }
            else {
                //following -1 will fix the Opera bug of x-1=x, we force it to x-2
                slip.style.left = slip.offsetLeft - Math.ceil(Math.abs(slip.offsetLeft - target.offsetLeft + rebound) / 10) - 1 + "px";
            }
        },
        changeWidth: function (target) {
            if (slip.offsetWidth != target.offsetWidth) {
                var diff = slip.offsetWidth - target.offsetWidth;
                if (Math.abs(diff) < 4) slip.style.width = target.offsetWidth + "px";
                else slip.style.width = slip.offsetWidth - Math.round(diff / 3) + "px";
            }
        }
    };
} ();

if (window.addEventListener) {
    window.addEventListener("load", sse1.buildMenu, false);
}
else if (window.attachEvent) {
    window.attachEvent("onload", sse1.buildMenu);
}
else {
    window["onload"] = sse1.buildMenu;
}
</script>

<script>
(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);
</script>
 

<script>
function stokperbarang()
{
	document.forms["mystokperbarang"].submit();
}
</script> 

<script>
 $(function() {
       $('a[href*="#"]:not([href="#"])').click(function() {
         if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
           var target = $(this.hash);
           target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html, body').animate({
               scrollTop: target.offset().top
             }, 1000);
             return false;
           }
         }
       });
     });
</script>
<script>
function carouselcombo()
{
	document.getElementsByName("mysort")[0].value = a;
	document.forms["mymain"].submit();
}
</script> 
<script>
function viewproduct(a, levelidku)
{
	if (levelidku==1 || levelidku==2)
	{
		document.getElementsByName("barangid")[0].value = a;
		document.forms["meeditproduct"].submit();		
	}
	else
	{
		document.getElementsByName("prodid")[0].value = a;
		document.forms["myproduct"].submit();
	}
}
</script> 

<script>
function viewshopme(userid, levelid, jenisshopping)
{

	if (levelid==1 || levelid==2)
	{
		document.getElementsByName("jenissethargabarang")[0].value = jenisshopping;
		document.getElementsByName("seturut")[0].value = document.getElementsByName("mysort")[0].value;
		document.forms["mesetshopping"].submit();
	}
	else
	{
		document.getElementsByName("jenishargabarang")[0].value = jenisshopping;
		document.getElementsByName("urut")[0].value = document.getElementsByName("mysort")[0].value;
		document.forms["meshopping"].submit();		
	}

}
</script>

<script>
function viewshopmemore(userid, levelid, jenisshopping)
{
//alert(userid+"--"+levelid+"--"+jenisshopping);

	if (levelid==1 || levelid==2)
	{
		document.getElementsByName("jenissethargabarang")[0].value = jenisshopping;
		document.getElementsByName("seturut")[0].value = 100;
		document.forms["mesetshopping"].submit();
	}
	else
	{
		document.getElementsByName("jenishargabarang")[0].value = jenisshopping;
		document.getElementsByName("urut")[0].value = 100;
		document.forms["meshopping"].submit();		
	}

}
</script>

<script>
function productdetail(a)
{
	document.getElementsByName("productid")[0].value = a;
	document.forms["myproduct"].submit();
}
</script>

<script>
function addtocart(userid, a)
{
	//document.getElementsByName("prodcartid")[0].value = a;
	
	//var r = confirm('Delete item in cart ?');
	//if (r) {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var staa = this.responseText;
//alert(staa);
				if (staa==1 || staa=="1")
				{
					alert("Data sudah dimasukkan cart (keranjang).");
					document.forms["myviewcart"].submit();
				}
				else if (staa==0)
				{
					alert("Produk sudah ada di cart");
					document.forms["myviewcart"].submit();
				}
			}
		};
		var strku = "addtocart.php?userid="+userid+"&productid="+a+"&qty=1";
//alert(strku);
		xmlhttp.open("GET",strku,true);
		xmlhttp.send();	
	
	
	
}
</script>
<script>
function hapususer(userid, a)
{
	//document.getElementsByName("prodcartid")[0].value = a;
	var r = confirm('Delete user in list ?');
	if (r) {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var staa = this.responseText;
				if (staa==1 || staa=="1")
				{
					alert("Data sudah dihapus.");
					location.reload();
				}
			}
		};
		var strku = "deluser.php?userid="+userid+"&id="+a;
		xmlhttp.open("GET",strku,true);
		xmlhttp.send();	
	}
	
	
}
</script>
<script>
function editfill(id, nama, user, levelidid, email)
{

//alert(id+"--"+nama+"--"+user+"--"+levelidid+"--"+ email);
/*
	document.getElementsByName("namaedit")[0].value = nama;
	document.getElementsByName("usernameedit")[0].value = user;
	//document.getElementsByName("passwdedit")[0].value = "aaa";
	//document.getElementsByName("passwd1edit")[0].value = "bbb";
	document.getElementsByName("useridedit")[0].value = id;
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
*/
}
</script>



</head>

<body>
<?php

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

include "koneksi.php";

//----------------------------------------------------------------
$uname=0;
if (!isset($_POST["uname"])) {
	$uname=0;
}
else
{
	$uname=$_POST["uname"];
	$_SESSION['start'] = time();
}
//----------------------------------------------------------------
$pwd=0;
if (!isset($_POST["pwd"])) {
	$pwd=0;
}
else
	$pwd=$_POST["pwd"];
//----------------------------------------------------------------
$userid=0;
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//----------------------------------------------------------------
if ($userid==0)
{
	if (!isset($_POST["useridmain"])) {
		$userid=0;
	}
	else
		$userid=$_POST["useridmain"];
}
if ($userid==0 && strlen($uname)<2)
	$userid=$_SESSION["userid"];
//----------------------------------------------------------------
$sortharga=0;
if (!isset($_POST["sortharga"])) {
	$sortharga=0;
}
else
	$sortharga=$_POST["sortharga"];
//----------------------------------------------------------------

$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    //die ('Can't use database : ' . mysqli_error());
?>
<meta http-equiv="refresh" content="0; url=index.php" />
<?php
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";

die();
	
}


$query = "SELECT * FROM user WHERE (ID=" . $userid . ");";

//echo "<br><br><br>------" . $userid . "++" . $sortharga . "==" . $query;
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$useridku = $row['ID'];
	}
}

$query = "SELECT
				user.nama AS nama,
				user.username AS username,
				user.passwd,
				user.pwd,
				userlevel.level AS level,
				user.levelid AS levelid
				FROM user
				INNER JOIN userlevel ON user.levelid = userlevel.ID
			WHERE (user.ID=" . $userid . ");";
//echo "<br><br><br><br>mainmainmain----------------" . $query;
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$namaku = $row['nama'];
		$usernameku = $row['username'];
		$levelidku = $row['levelid'];
		$levelku = strtoupper($row['level']);
	}
}
 
$now = time(); // Checking the time now when home page starts.
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
if (isset($_SESSION['expire'])) {
	if ($now > $_SESSION['expire']) {
		unset($_SESSION['username']); 
		unset($_SESSION['passwd']); 
		$_SESSION['statuslogin'] = 7;//session expired
?>
<meta http-equiv="refresh" content="10; url=index.php" />
<?php
die;
	}
}

if ($row_cnt > 0) {
	$_SESSION['statuslogin'] = 0;
?>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<?php
}
else  {
	$_SESSION['statuslogin'] = 8; //user not found in database or unauthorized
?>
<meta http-equiv="refresh" content="0; url=index.php" />
<?php
}
?>

<script type="text/javascript" src="jquery.min.js"></script>
 
 
<?php



$useridku = $userid;
//echo "<br><br><br><br><br><br>xxxxxxxxxxxxxxxxxx" . $namaku;

include "menu1.php";
include "menu2home.php";
?>

<?php

//echo "<br><br><br><br>----------------------------------" . $levelidku . "<br>";


$sql = "SELECT 	user.ID AS ID,
				user.nama AS nama,
				user.username AS username,
				user.email AS email,
				userlevel.level AS level,
				user.levelid AS levelid
				FROM user
				INNER JOIN userlevel ON user.levelid = userlevel.ID;";

$row_cnt = 0;
$result = mysqli_query($link, $sql);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$idxu[$i] = $row['ID'];
		$namexu[$i] = $row['nama'];
		$usernamexu[$i] = $row['username'];
		$levelxu[$i] = $row['level'];
		$levelidxu[$i] = $row['levelid'];
		$emailxu[$i] = $row['email'];
	}
}
$jmldata = $i;

?>

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



<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 35px;" width="900px" border="0" cellspacing="0" cellpadding="0">
		<tr height="50px">
			<td style="padding-left: 0px; padding-top: auto; text-align: center; width: 900px">

			</td>
		</tr>

</table>
<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr height="30px">
		<td style="padding-left: 10px; text-align: left;">
		</td>
	</tr>
</table>

<?php
//echo "<br><br><br>--------------------" . $userid . "---" . $levelidku;

?>


<DIV align="left">
	<table align="left" style="text-align: left; margin-left: 300px; margin-right: auto; margin-top: 100px;" width="1010px" border="0" cellpadding="0" cellspacing="0">
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
	for ($i=1; $i <= $jmldata; $i++)
	{
		//$lenkodeoutlet = strlen($kodeoutletmu[$i]);

?>
        <tr height="35px" <?php if (($j%2)==0) echo 'bgcolor="#ffffff"'; else echo 'bgcolor="#D7F2FF"'; $j++;?>>
            <td style="padding-right: auto; text-align: center; font-size: 1.1em;">
				<font face="Roboto" color="black"><?php print $j;?></font>
			</td>
            <td style="padding-left: 10px; text-align: left; font-size: 1.1em;">
				<font face="Roboto" color="black">
					<?php echo $usernamexu[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: left; font-size: 1.1em;">
				<font face="Roboto" color="black">
					<?php echo $namexu[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: left; font-size: 1.1em;">
				<font face="Roboto" color="black">
					<?php echo $levelxu[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 1.1em;">
				<font face="Roboto" color="black">
					<?php //print $namaoutletmu[$i];?>
				</font>
			</td>
			<td style="padding-left: auto; text-align: center; font-size: 12;">
				<div id='basic-modal'>
					<a href="#popup1" onclick="editfill(<?php print $idxu[$i];?>,'<?php print $namexu[$i];?>','<?php print $usernamexu[$i];?>',
					<?php print $levelidxu[$i];?>,'<?php print $emailxu[$i];?>';" class="small button yellow">Edit</a>
				</div>
			</td> 
			
			<td style="padding-left: auto; text-align: center; font-size: 12;">
				<!--form method="post" class="signin" name="deluser<?php print $idxu[$i];?>" id="deluser<?php print $idxu[$i];?>"-->
					<input type="hidden" id="userid<?php print $i;?>" name="userid<?php print $i;?>" value="<?php print $userid;?>">
					<a href="javascript:void(0)" target=_blank class="button red small" onclick="hapususer(<?php print $userid;?>,<?php print $idxu[$i];?>);">Hapus</a>
				<!--a href="javascript:void(0)" target=_blank class="button red small" onclick="hapusktp(this.form, <?php print $useridmu[$i];?>)">Hapus</a-->
				<!--/form-->
			</td>        		
        </tr>
<?php
	
	}

?>
    </table>
</DIV>



<form method="post" name="mymain" id="mymain" action="shopping.php" enctype="multipart/form-data">
	<input type="hidden" id="useridmain" name="useridmain" value="<?php echo $userid;?>">
	<input type="hidden" id="sortharga" name="sortharga">
</form>

<form method="post" name="myproduct" id="myproduct" action="shopproduct.php" enctype="multipart/form-data">
	<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
	<input type="hidden" id="prodid" name="prodid">
</form>


<form name="meshopping" id="meshopping" action="shopping.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridshop" name="useridshop" value="<?php echo $useridku;?>">
	<input type="hidden" id="jenishargabarang" name="jenishargabarang" value="urut">
	<input type="hidden" id="urut" name="urut">
</form>
<form name="mesetshopping" id="mesetshopping" action="set_shopping.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridsshop" name="useridsshop" value="<?php echo $useridku;?>">
	<input type="hidden" id="jenissethargabarang" name="jenissethargabarang">
	<input type="hidden" id="seturut" name="seturut">
</form>

<form method="post" name="myviewcart" id="myviewcart" action="viewtocart.php" enctype="multipart/form-data">
	<input type="hidden" id="useridvc" name="useridvc" value="<?php echo $useridku;?>">
</form>

<form name="meeditproduct" id="meeditproduct" action="editproduct.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridedit" name="useridedit" value="<?php echo $useridku;?>">
	<input type="hidden" id="barangid" name="barangid">
	<input type="hidden" id="seturut" name="seturut">
</form>


</body>
<?php


//*******************************************************************************************************

	$_SESSION['userid'] = $userid;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;



//*******************************************************************************************************

?>
</html>
