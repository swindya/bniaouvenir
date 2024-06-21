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

<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anaheim|Cabin|Cantarell|Dosis|Lato|Khula|Kanit|Rajdhani|Jura|Assistant|Merriweather+Sans|Montserrat|Mukta+Mahee|Mukta+Malar|Muli|Noto+Sans|Nunito|Nunito+Sans|Open+Sans|Oxygen|PT+Sans|PT+Sans+Narrow|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Slab|Slabo+27px|Titillium+Web|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ABeeZee|Abel|Amaranth|Arimo|Armata|Assistant|Barlow|Barlow+Semi+Condensed|Boogaloo|Cabin|Cabin+Condensed|Cambay|Cantarell|Caveat|Chivo|Cinzel|Contrail+One|Courgette|Cuprum|Didact+Gothic|Dosis|Economica|Electrolize|Fira+Sans|Gudea|Hammersmith+One|Hind|Hind+Madurai|Hind+Siliguri|Hind+Vadodara|Itim|Jaldi|Josefin+Slab|Kalam|Kanit|Khand|Khula|Maven+Pro|Merriweather+Sans|Molengo|Montserrat+Alternates|Mukta+Mahee|Muli|News+Cycle|Orbitron|Overpass|PT+Sans+Caption|PT+Sans+Narrow|Pavanam|Play|Playball|Poiret+One|Quattrocento+Sans|Questrial|Quicksand|Rajdhani|Righteous|Rokkitt|Ropa+Sans|Sacramento|Sarala|Scada|Share|Signika|Tangerine|Titillium+Web|Ubuntu+Condensed|Varela+Round|Yanone+Kaffeesatz|Yantramanav" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="cssmenu.css" />

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
    height: 26px; 
    width: 80px; 
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
    border: 1px solid #BBBBBB; 
	background-color: transparent;
    height: 25px; 
    width: 60px; 
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

<style>
*, *:after, *:before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  //font-family: "Open Sans";
}


/* Form Progress */
.progress1 {
  width: 800px;
  margin: 20px auto;
  text-align: center;
  height: 100%;
  background-color: #FFFFFF;
}
.progress1 .circle,
.progress1 .bar {
  display: inline-block;
  background: #fff;
  width: 40px; height: 40px;
  border-radius: 40px;
  border: 1px solid #d5d5da;
}
.progress1 .bar {
  position: relative;
  width: 200px;
  height: 6px;
  margin: 0 -5px 33px -5px;
  border-left: none;
  border-right: none;
  border-radius: 0;
}
.progress1 .circle .label {
  display: inline-block;
  width: 32px;
  height: 32px;
  line-height: 32px;
  border-radius: 32px;
  margin-top: 3px;
  color: #b5b5ba;
  font-size: 19px;
  padding-top: 0px;
}
.progress1 .circle .title {
  color: #b5b5ba;
  font-size: 15px;
  line-height: 30px;
  margin-left: -10px;
}

/* Done / Active */
.progress1 .bar.done,
.progress1 .circle.done {
 //background: #eee;
}
.progress1 .bar.active {
  background: linear-gradient(to right, #EEE 40%, #FFF 60%);
}
.progress1 .circle.done .label {
  color: #FFF;
  background: #8bc435;
  box-shadow: inset 0 0 2px rgba(0,0,0,.2);
}
.progress1 .circle.done .title {
  color: #444;
  weight: bold;
}
.progress1 .circle.active .label {
  color: #FFF;
  background: #0063EE;
  box-shadow: inset 0 0 2px rgba(0,0,0,.2);
  weight: bold;
}
.progress1 .circle.active .title {
  color: #0063EE;
  weight: bold;
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
function viewproduct(a)
{
	document.getElementsByName("productid")[0].value = a;
	document.forms["myproduct"].submit();
}
</script> 

<script>
function viewshopme(userid, levelid, jenisshopping)
{
//alert(userid+"--"+levelid+"--"+jenisshopping);

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
function hapusitemcart(userid, idku)
{
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
				if (staa==1 || staa=="1")
				{
					alert("Data sudah dihapus.");
					location.reload();
				}
			}
		};
		var strku = "delitemcart.php?userid="+userid+"&cartid="+idku;
		xmlhttp.open("GET",strku,true);
		xmlhttp.send();
	//}
	//else {
	//	return false;
	//}
		
}
</script>

<script>
function updateqty(userid, cartid, qty)
{
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
					location.reload();
				}
			}
		};
		var strku = "updateqtycart.php?userid="+userid+"&cartid="+cartid+"&qty="+qty;
		xmlhttp.open("GET",strku,true);
		xmlhttp.send();
	//}
	//else {
	//	return false;
	//}
		
}
</script>

<script>
function confirmcart(userid)
{
	//document.getElementsByName("seturut")[0].value = 1;
	document.forms["myconfirm"].submit();
}
</script>

</head>

<body>
<?php

include "koneksi.php";

//-------------------------------------------------
$userid = 0;
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];

if ($userid==0)
{
	$_SESSION['userid'];
}
//-------------------------------------------------


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
die();	
}
?>

<?php

/*
// Include and initialize phpmailer class
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->Username = 'user@example.com';
$mail->Password = '******';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('info@example.com', 'CodexWorld');
$mail->addReplyTo('info@example.com', 'CodexWorld');

// Add a recipient
$mail->addAddress('john@gmail.com');

// Add cc or bcc 
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

// Email subject
$mail->Subject = 'Send Email via SMTP using PHPMailer';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = "<h1>Send HTML Email using SMTP in PHP</h1>
    <p>This is a test email has sent using SMTP mail server with PHPMailer.</p>";
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}
*/

?>


<?php
/*
ini_set('display_errors', 1 );
error_reporting( E_ALL );
$from = "test@bnisouvenir.com";
$to = "swindya@gmail.com";
$subject = "Checking PHP mail";
$message = "PHP mail works just fine";
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

echo "The email message was sent.";
*/
?>



<?php

$useridku = $userid;


//---------------------------------------------------------------------------------------------------
$tglsaiki = date('Y-m-d');
$kodesaiki = date('Ymd');
//----------------------------------------------------------------------------------
$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
//echo $query . "<br>";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$namaku = $row['nama'];
		$alamatku = $row['alamat'];
		$emailku = $row['email'];
		$kodeoutletku = $row['kodeoutlet'];
		$telponku = $row['telpon'];
		$ketku = $row['keterangan'];
	}
}

//----------------------------------------------------------------------------------
$query = "SELECT * FROM cart WHERE userID=" . $userid . ";";
//echo $query . "<br>";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$prodidxu[$i] = $row['productID'];
		$namexu[$i] = $row['name'];
		$ketxu[$i] = $row['keterangan'];
		$qtyxu[$i] = $row['qty'];
		$unitpricexu[$i] = $row['unitprice'];
		$totalpricexu[$i] = $row['totalprice'];
	}
}
//----------------------------------------------------------------------------------
$query = "SELECT * FROM outlet WHERE kodeoutlet='" . $kodeoutletku . "';";
//echo $query . "<br>";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$jenisoutletku = $row['jenisoutlet'];
		$namaoutletku = $row['namaoutlet'];
	}
}

//---------------------------------------------------------------------------------------------------
// Show product in cart for user
//---------------------------------------------------------------------------------------------------
$query = "SELECT
			cart.ID AS ID,
			cart.name AS namaprod,
			cart.keterangan AS ket,
			cart.qty AS qty,
			cart.tgl AS tgl,
			cart.unitprice AS unitprice,
			cart.totalprice AS totalprice,
			cart.productID AS prodid,
			products.sku AS sku,
			products.imagename AS imagename,
			products.imagename2 AS imagename2,
			products.imagename3 AS imagename3,
			products.imagepath AS imagepath
			FROM cart
			INNER JOIN products ON cart.productID = products.ID WHERE userID=" . $userid . ";";

$row_cnt = 0;
$tot = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$IDkuu[$i] = $row['ID'];
		$unitpricekuu[$i] = $row['unitprice'];
		$namaprodkuu[$i] = $row['namaprod'];
		$ketkuu[$i] = $row['ket'];
		$qtykuu[$i] = $row['qty'];
		$tglkuu[$i] = $row['tgl'];
		$prodidkuu[$i] = $row['prodid'];
		$skukuu[$i] = $row['sku'];
		$imagename1kuu[$i] = $row['imagename'];
		$imagename2kuu[$i] = $row['imagename2'];
		$imagename3kuu[$i] = $row['imagename3'];
		$imagepathkuu[$i] = $row['imagepath'];
		$image1kuu[$i] = "DOC/IMAGES/thumb/" . $imagename1kuu[$i];
		$tot = $tot + ($qtykuu[$i] * $unitpricekuu[$i]);
	}
}
$jmldata = $i;

//---------------------------------------------------------------------------------------------------
$sql = "SELECT COUNT(ID) AS jmlid FROM orders WHERE tgl='" . $tglsaiki . "';";
$row_cnt = 0;
$result = mysqli_query($link, $sql);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$jmlorder = $row['jmlid'];
	}
}
//----------------------------------------------------------------------------------
$jmlorder = $jmlorder + 1;
if ($jmlorder < 10)
	$kodeorder = $kodesaiki . "000" . $jmlorder;
else if ($jmlorder >= 10 && $jmlorder < 100)
	$kodeorder = $kodesaiki . "00" . $jmlorder;
else if ($jmlorder >= 100 && $jmlorder < 1000)
	$kodeorder = $kodesaiki . "0" . $jmlorder;
else if ($jmlorder >= 1000 && $jmlorder < 10000)
	$kodeorder = $kodesaiki . $jmlorder;
//---------------------------------------------------------------------------------------------------

//===================================================================================================
// Jadikan ORDER. 
//===================================================================================================
$sql00 = "INSERT INTO orders(orderno, tgl, name, alamat, email, telpon, kodeoutlet, keterangan, createduser, createddatetime) VALUES('" . $kodeorder .
		"','" . $tglsaiki . "','" . $namaku . "','" . $alamatku . "','" . $emailku . "','" . $telponku . "','" . $kodeoutletku . "','" . 
		$ketku . "'," . $userid . ",now());";
//echo "<br><br><br><br>=============" . $sql00 . "<br>";
$result00 = mysqli_query($link, $sql00);
//---------------------------------------------------------------------------------------------------
$sql = "SELECT * FROM orders WHERE orderno='" . $kodeorder . "';";
$row_cnt = 0;
$result = mysqli_query($link, $sql);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$orderidy = $row['ID'];
	}
}
//---------------------------------------------------------------------------------------------------
for ($j=1; $j<=$jmldata; $j++)
{
	$sql00 = "INSERT INTO orderitem(orderID, orderno, productID, productname, qty, unitprice, createduser, createddatetime) VALUES(" . $orderidy .
			",'" . $kodeorder . "'," . $prodidkuu[$j] . ",'" . $namaprodkuu[$j] . "'," . $qtykuu[$j] . "," . $unitpricekuu[$j] . "," . 
			$userid . ",now());";
//echo "<br><br><br><br>=============" . $sql00 . "<br>";
	$result00 = mysqli_query($link, $sql00);
	
	//$sql01 = "UPDATE products SET jmlstok=jmlstok-" . $qtykuu[$j] . " WHERE ID=" . $prodidkuu[$j] . ";";
	//$result01 = mysqli_query($link, $sql01);
	
	//$sql02 = "UPDATE products SET jmlcart=jmlcart-" . $qtykuu[$j] . " WHERE ID=" . $prodidkuu[$j] . ";";
	//$result02 = mysqli_query($link, $sql02);
}
//---------------------------------------------------------------------------------------------------
$sqlx = "DELETE FROM cart WHERE userID=" . $userid . ";";
$resultx = mysqli_query($link, $sqlx);
//---------------------------------------------------------------------------------------------------

?>
<?php
include "menu1.php";
include "menu2merchandise.php";
?>

<form name="myorder" id="myorder" action="orderfinal.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
</form>



<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 100px;" width="1050px" border="0" cellspacing="0" cellpadding="0">
	<tr height="40px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>
	</tr>
	<tr height="30px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: left; font-size: 1.4em">
				<FONT color="blue">Terima kasih atas pemesanan barangnya.</FONT>
			</td>
	</tr>
	<tr height="30px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>
	</tr>
	<tr height="30px">
			<td colspan="3" style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.8em">
				<font face="Ubuntu" color="black">YOUR ORDER</font>
			</td>		
	</tr>
	<tr height="30px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em; width: 170px">
				<font face="Ubuntu" color="black">Order No</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em; width: 30px">
				<font face="Ubuntu" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.4em; width: 850px">
				<FONT color="#00B58C"><b><?php echo $kodeorder;?></b></FONT>
		</td>
	</tr>
	<tr height="10px">
			<td colspan="3" style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.8em">
			</td>		
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em;">
				<font face="Ubuntu" color="black">Nama PIC</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
				<font face="Ubuntu" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
				<?php echo $namaku;?>
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
				<font face="Ubuntu" color="black">Alamat</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em;">
				<font face="Ubuntu" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
				<?php echo $alamatku;?>
		</td>
	</tr>

	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<font face="Ubuntu" color="black">Nomor Telp/HP</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Ubuntu" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<?php echo $telponku;?>
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<font face="Ubuntu" color="black">Email</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Ubuntu" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<?php echo $emailku;?>
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<font face="Ubuntu" color="black">Divisi/Unit/Outlet</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Ubuntu" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<?php echo $jenisoutletku . " " . $namaoutletku;?>
		</td>
	</tr>
	<tr height="50px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left;  vertical-align: top; font-size: 1.1em;">
			<font face="Ubuntu" color="black">Keterangan</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em;">
			<font face="Ubuntu" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
			<?php echo $ketku;?>
		</td>
	</tr>
</table>


<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: auto;" width="1050px" border="0" cellspacing="0" cellpadding="0">
	<tr height="10px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left;  vertical-align: top; font-size: 1.1em; width: 170px">
			<font face="Ubuntu" color="black">Total Nominal</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em; width: 30px">
			<font face="Ubuntu" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.4em; width: 850px">
			<b><FONT color="#FF4444"><?php echo "Rp. " . number_format($tot,0);?></FONT></b>
		</td>
	</tr>
	<tr height="20px">
			<td colspan="3" style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.8em">
			</td>		
	</tr>
</table>


<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: auto;" width="1050px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="40px">
			No
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="550px">
			Produk
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="100px">
			Qty
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="120px">
			Unit Price
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="150px">
			Sub Total
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="100px">

		</td>
	</tr>
	<tr height="10px">
		<td colspan="7" style="padding-left: 0px; padding-top: auto; text-align: center; color: #444444">
			<hr color="red" style="border-top: 1px solid #ccc; background: transparent;"/>
		</td>
	</tr>

<?php
$total = 0;
for ($a=1; $a<=$jmldata; $a++)
{

?>
	<tr height="10px">
		<td colspan="7" style="padding-left: 0px; padding-top: auto; text-align: center; vertical-align: top">
		</td>
	</tr>
	<tr height="30px">
		<td style="padding-left: 0px; padding-top: auto; text-align: center; vertical-align: top" width="40px">
			<?php echo $a;?>
		</td>
		<td style="padding-left: 15px; padding-top: auto; text-align: left; vertical-align: top" width="480px">
			<p><?php echo $namaprodkuu[$a];?></p>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; vertical-align: top" width="100px">
			<!--input style="text-align: center; font-size: 1.0em; font-famili: Roboto" type="text" class="textboxnarrow" id="qty" name="qty" value="<?php echo number_format($qtyku[$a],0);?>" onchange="updateqty(<?php echo $userid;?>,<?php echo $IDku[$a];?>,this.value)"-->
			<?php echo number_format($qtykuu[$a],0);?>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: right; vertical-align: top" width="120px">
			<?php echo "Rp. " . number_format($unitpricekuu[$a],0);?>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: right; vertical-align: top" width="150px">
			<?php $subtot=$qtykuu[$a] * $unitpricekuu[$a]; $total=$total+$subtot; echo "Rp. " . number_format($subtot,0);?>
		</td>
	</tr>


<?php
}
?>
	<tr height="20px">
		<td colspan="7" style="padding-left: 0px; padding-top: auto; text-align: center;">
		</td>
	</tr>
	<!--tr height="20px">
		<td colspan="7" style="padding-left: 0px; padding-top: auto; text-align: right;">
			<FONT style="text-align: right; font-size: 1.5em; font-famili: Arial; color: #777777">Total&nbsp;:&nbsp;</FONT>
			<b><FONT color="#FF4444" size="5"><?php //echo "Rp. " . number_format($total,0);?></FONT></b>
		</td>
	</tr-->
	<tr height="30px">
		<td colspan="7" style="padding-left: 0px; padding-top: auto; text-align: center;">
		</td>
	</tr>
	<tr height="20px">
		<td colspan="7" style="padding-left: 0px; padding-top: auto; text-align: right;">
			
		</td>
	</tr>
</table>

<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: auto;" width="1050px" border="0" cellspacing="0" cellpadding="0">
	<tr height="50px" style="background-color: white;>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em">
			<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
			<div class="progress1">
			  <div class="circle done">
				<span class="label">1</span>
				<span class="title">Cart</span>
			  </div>
			  <span class="bar done"></span>
			  <div class="circle done">
				<span class="label">2</span>
				<span class="title">Confirmation</span>
			  </div>
			  <span class="bar done"></span>
			  <div class="circle done">
				<span class="label">3</span>
				<span class="title">Complete</span>
			  </div>
			</div>
		</td>
	</tr>
</table>

<?php
//--------------------------------------------------------------------------------------------------------------------
// SEND EMAIL
//--------------------------------------------------------------------------------------------------------------------
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "admin@bnisouvenir.com";
	$nama = "Admin";
    $to = strip_tags($emailku);    
    $subject = "Sukses Aktivasi pada bnisouvenir.com";    
	$headers = "From: " . strip_tags($from) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	$headers .= "CC: register@gmail.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	//$alamataktivasi = 'bnisouvenir.com/aktivasi.php?email='.$email.'&code='.$hash;
	
	$line0 = 'Dear ' . $namaku .  ',';
	$line1 = 'Permintaan Anda dengan nomor order #' . $kodeorder . ' telah kami konfirmasi. Berikut pesanan Anda:';
	$line2 = 'Anda bisa masuk dengan menggunakan username atau email anda dan kata sandi dengan mengunjungi www.bnisouvenir.com.';
	$line3 = 'Setelah masuk, Anda akan dapat mengakses layanan lain termasuk meninjau pesanan terakhir, mencetak faktur dan mengedit informasi akun  Anda.';
	$line4 = 'Terima Kasih,';
	$line5 = 'BNI Merchandising';
	
	$message = '<html><body>';
	$message .= '<img src="bnisouvenir.com/images/logobnismallok.png" width="140px" height="40px" alt="Activation" /><br><br>';
	$message .= '<table style="border-color: #666;" width="800px" border="0" cellspacing="0" cellpadding="0">';
	$message .= '<tr height="30px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line0 . '</td>';
	$total = 0;
	for ($a=1; $a<=$jmldata; $a++)
	{
		$subtot=$qtykuu[$a] * $unitpricekuu[$a]; 
		$total=$total+$subtot;
		$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="550px">' . $namaprodkuu[$a] . ', ' . number_format($qtykuu[$a],0) . ' item(s)</td>';
		$message .= '<td style="padding-right: 20px;text-align: right; font-size: 1.1em; font-family: Arial" width="250px">Rp. ' . number_format($subtot,0) . '</td></tr>';
	}
	$message .= '<tr height="10px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial"><hr></td></tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="550px"><i>Sub Total</i></td>';
	$message .= '<td style="padding-right: 20px;text-align: right; font-size: 1.1em; font-family: Arial" width="250px">Rp. ' . number_format($total,0) . '</td></tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="550px"><i>Shipping Cost</i></td>';
	$message .= '<td style="padding-right: 20px;text-align: right; font-size: 1.1em; font-family: Arial" width="250px">Rp. ' . number_format($total,0) . '</td></tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line1 . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line2 . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line3 . '</td><tr>';
	//$message .= '<tr height="25px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . 'Data Akses anda:' . '</td><tr>';
	//$message .= '<tr height="10px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">-------------------------</td><tr>';
	//$message .= '<tr height="10px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">Username: ' . $uname . '</td><tr>';
	//$message .= '<tr height="15px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">Password: ' . $pwd . '</td><tr>';
	//$message .= '<tr height="15px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">-------------------------</td><tr>';	
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line4 . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line5 . '</td><tr>';
	$message .= "</table>";
	$message .= "</body></html>";

    mail($to,$subject,$message, $headers);

//----------------------------------------------------------------------------------------------------------------------
?>



<?php


//---------------------------------------------------------------------------------------------------

mysqli_close($link);

?>

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
