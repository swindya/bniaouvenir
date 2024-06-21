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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
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
padding: 8px 18px 9px;
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
/* Style buttons */
.btn {
    background-color: DodgerBlue; /* Blue background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 8px 12px; /* Some padding */
    font-size: 14px; /* Set a font size */
    cursor: pointer; /* Mouse pointer on hover */
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: RoyalBlue;
	color: white; /* White text */
}
</style>
<style> 
  .textbox { 
    border: 1px solid #555555; 
	//background-color: solid #99FFFF;
    height: 26px; 
    width: 100px; 
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
   height: 20px;
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
   width: 180px;
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

<script>
function cekdataedit()
{
	var myfile = document.getElementById("myfile");
	var fileVal = document.getElementById("myfile").value;
	var substr1 = "pdf";
	var substr2 = "jpg";
	var substr3 = "jpeg";
	
	var fileSize = myfile.files[0].size; // in bytes


	if (fileVal.length > 5)
	{
		if (fileVal.indexOf(substr1)>0 || fileVal.indexOf(substr2)>0 || fileVal.indexOf(substr3)>0)
		{
			if (fileSize < 3200000)
			{
				document.forms["myuploaddoc"].submit();
			}
			else
			{
				alert("Ukuran File terlalu besar. Pastikan file berukuran kurang dari 3MB");
				return false;
			}
		}
		else
		{
			alert("Isi/pilih file dokumen dengan benar. Hanya dokumen PDF atau JPG yang diperbolehkan utk diupload.");
			return false;
		}
	}
	else
	{
		alert("Isi/pilih file dokumen.");
		return false;
	}
	


	
	//
}
</script>

<script>
function updatestatusorder()
{
	var statusor = document.getElementsByName("statusorder")[0].value;
	var shipcost = document.getElementsByName("shippingcost")[0].value;
	shipcost = shipcost.split(',').join('');

	document.getElementsByName("shipcost")[0].value = shipcost;
	document.getElementsByName("statusorderid")[0].value = statusor;
	document.forms["myupdatestatusorder"].submit();
}
</script>

<script>
function printorder()
{
	document.forms["myprintorder"].submit();
}
</script>

<script>
function formatnumber(nField) {
//alert(this);
  //el.value = el.value.replace(/[^\d]/g,'').replace(/(\d\d?)$/,'.$1');
		if (/^0/.test(nField.value))
			{
			 nField.value = nField.value.substring(0,1);
			}
		if (Number(nField.value.replace(/,/g,"")))
			{
			 var tmp = nField.value.replace(/,/g,"");
	 		 tmp = tmp.toString().split('').reverse().join('').replace(/(\d{3})/g,'$1,').split('').reverse().join('').replace(/^,/,'');
			 if (/\./g.test(tmp))
				{
			 	 tmp = tmp.split(".");
				 tmp[1] = tmp[1].replace(/\,/g,"").replace(/ /,"");
				 nField.value = tmp[0]+"."+tmp[1]
				}
			 else 	{
				 nField.value = tmp.replace(/ /,"");
				} 
			}
		else	{
			 nField.value = nField.value.replace(/[^\d\,\.]/g,"").replace(/ /,"");
			}
}
</script>

</head>

<body>
<?php

include "koneksi.php";

//-------------------------------------------------
$userid = 0;
if (!isset($_POST["useridprint"])) {
	$userid = 0;
}
else
	$userid=$_POST["useridprint"];

if ($userid==0)
{
	if (!isset($_GET["useridd"])) {
		$userid=0;
	}
	else
		$userid=$_GET["useridd"];;
}
if ($userid==0)
{
	if (!isset($_GET["userid"])) {
		$userid=0;
	}
	else
		$userid=$_GET["userid"];;
}
if ($userid==0)
{
	if (!isset($_SESSION["userid"])) {
		$userid=0;
	}
	else
		$userid=$_SESSION["userid"];;
}
//-------------------------------------------------
$orderid = 0;
if (!isset($_POST["orderidprint"])) {
	$orderid=0;
}
else
	$orderid=$_POST["orderidprint"];
//-------------------------------------------------
if ($orderid==0)
{
	if (!isset($_GET["orderid"])) {
		$orderid=0;
	}
	else
		$orderid=$_GET["orderid"];
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
// Include and initialize phpmailer class
/*
require './PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'srv39.niagahoster.com';
$mail->SMTPAuth = true;
$mail->Username = 'admin@bnisouvenir.com';
$mail->Password = 'adminbnimcm46';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('admin@bnisouvenir.com', 'CodexWorld');
$mail->addReplyTo('admin@bnisouvenir.com', 'CodexWorld');

// Add a recipient
$mail->addAddress('swindya@gmail.com');

// Add cc or bcc 
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

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
//echo "<br><br><br><br><br>-----------" . $query . "<br>";

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
		$levelidku = $row['levelid'];
		$alamatku = $row['alamat'];
		$emailku = $row['email'];
		$kodeoutletku = $row['kodeoutlet'];
		$telponku = $row['telpon'];
		$ketku = $row['keterangan'];
	}
}

//----------------------------------------------------------------------------------
$query = "SELECT * FROM orders WHERE ID=" . $orderid . ";";


$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$noorderxu = $row['orderno'];
		$tglxu = $row['tgl'];
		$namexu = $row['name'];
		$kodeoutletxu = $row['kodeoutlet'];
		$alamatxu = $row['alamat'];
		$telponxu = $row['telpon'];
		$emailxu = $row['email'];
		$soidxu = $row['statusorderID'];
		$kodeoutletxu = $row['kodeoutlet'];
		$ketxu = $row['keterangan'];
		$docxu = $row['document_name'];
		$shipcostxu = $row['shipping_cost'];
		$useridxu = $row['createduser'];
	}
}

//----------------------------------------------------------------------------------
$query = "SELECT * FROM statusorder WHERE ID=" . $soidxu . ";";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$statusorderxu = $row['statusorder'];
	}
}

//echo "<br><br><br><br><br>-----------" . $tglxu . $query . "<br>";
//----------------------------------------------------------------------------------
//----------------------------------------------------------------------------------
$query = "SELECT * FROM user WHERE ID=" . $useridxu . ";";
//echo "<br><br><br><br><br>-----------" . $query . "<br>";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$norekxu = $row['nomorrek'];
		$namarekxu = $row['namarek'];
	}
}
//----------------------------------------------------------------------------------
$query = "SELECT * FROM statusorder WHERE ID=" . $soidxu . ";";
//echo $query . "<br>";

$row_cnt = 0;
$jenisoutletku = "";
$namaoutletku = "";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$statusorderku = $row['statusorder'];
	}
}

$query = "SELECT * FROM statusorder ORDER BY ID ASC;";
//echo $query . "<br>";

$row_cnt = 0;
$jenisoutletku = "";
$namaoutletku = "";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$statusorderidx[$i] = $row['ID'];
		$statusorderx[$i] = $row['statusorder'];
	}
}
$jmlstatusorder = $i;

//---------------------------------------------------------------------------------------------------
// Show product in cart for user
//---------------------------------------------------------------------------------------------------
$query = "SELECT
				products.name AS namaprod,
				products.sku AS sku,
				products.description AS ket,
				products.price AS price,
				products.jmlstok AS jmlstok,
				products.imagename AS imagename,
				products.imagepath AS imagepath,
				orderitem.qty AS qty,
				orderitem.unitprice AS unitprice
			FROM orderitem
				INNER JOIN products ON orderitem.productID = products.ID
			WHERE orderitem.orderID=" . $orderid . ";";

$row_cnt = 0;
$tot = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$unitpricekuu[$i] = 0;
		$skukuu[$i] = "";
		$namaprodkuu[$i] = "";
		$qtykuu[$i] = 0;
		$unitpricekuu[$i] = $row['unitprice'];
		$namaprodkuu[$i] = $row['namaprod'];
		$ketkuu[$i] = $row['ket'];
		$qtykuu[$i] = $row['qty'];
		$skukuu[$i] = $row['sku'];
		$imagename1kuu[$i] = $row['imagename'];
		$imagepathkuu[$i] = $row['imagepath'];
		$image1kuu[$i] = "DOC/IMAGES/thumb/" . $imagename1kuu[$i];
		$tot = $tot + ($qtykuu[$i] * $unitpricekuu[$i]);
	}
}
$jmldata = $i;

//echo "<br><br><br><br><br>-----------" . $jmldata . "==" . $query . "<br>";
//---------------------------------------------------------------------------------------------------

?>


<table align="left" style="text-align: left; margin-left: 150px; margin-right: auto; margin-top: 50px;" width="1150px" border="0" cellspacing="0" cellpadding="0">

	<tr height="30px">
			<td colspan="3" style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.8em">
				<font face="Ubuntu" color="black">ORDER DETAIL</font>
			</td>		
	</tr>
	<tr height="30px">
		<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em; width: 170px">
				<font face="Roboto" color="black">Tgl</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em; width: 30px">
				<font face="Roboto" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em; width: 400px">
				<FONT face="Roboto" color="black"><?php echo date('d M Y', strtotime($tglxu));?></FONT>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em; width: 150px">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em; width: 130px">
<?php
			if ($levelidku <= 2)
			{
?>
				<FONT color="Black">Shipping Cost :</FONT>
<?php
			}
?>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em; width: 150px">
<?php
			if ($levelidku <= 2)
			{
?>
			<FONT face="arial" color="black">
				<?php if ($shipcostxu) echo "Rp." . number_format($shipcostxu,0); else echo "-";?>
			</FONT>
<?php
			}
?>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: right; font-size: 1.4em; width: 120px">
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em;">
				<font face="Ubuntu" color="black">Order No</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
				<font face="Ubuntu" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.4em;">
				<FONT color="#00B58C"><b># <?php echo $noorderxu;?></b></FONT>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
<?php
			if ($levelidku <= 2)
			{
?>
				<FONT color="Black">Status :</FONT>
<?php
			}
?>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
<?php
			if ($levelidku <= 2)
			{
?>
				<FONT face="arial" color="black">
					<?php echo $statusorderxu;?>
				</FONT>
<?php
			}
?>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: right; font-size: 1.4em;">
		</td>
	</tr>

	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em;">
				<font face="Roboto" color="black">Nama PIC</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
				<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="5" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
				<FONT face="Roboto" color="black"><?php echo $namexu;?></font>
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
				<font face="Roboto" color="black">Alamat</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em;">
				<font face="Roboto" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
				<FONT face="Roboto" color="black"><?php echo $alamatxu;?></font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
<?php
			if ($levelidku <= 2)
			{
?>

<?php
			}
?>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: right; font-size: 1.4em;">
		</td>
	</tr>

	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<font face="Roboto" color="black">Nomor Telp/HP</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="5" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<FONT face="Roboto" color="black"><?php echo $telponxu;?></font>
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<font face="Roboto" color="black">Email</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="5" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<FONT face="Roboto" color="black"><?php echo $emailxu;?></font>
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<font face="Roboto" color="black">Divisi/Unit/Outlet</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="5" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 1.1em;">
			<FONT face="Roboto" color="black"><?php echo $kodeoutletxu;?></font>
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left;  vertical-align: top; font-size: 1.1em;">
			<font face="Roboto" color="black">Keterangan</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="5" style="padding-left: 10px; padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
			<FONT face="Roboto" color="black"><?php echo $ketxu;?></font>
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left;  vertical-align: top; font-size: 1.1em;">
			<font face="Roboto" color="black">Nomor Rekening</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="5" style="padding-left: 10px; padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
			<FONT face="Roboto" color="black"><?php echo $norekxu;?></font>
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left;  vertical-align: top; font-size: 1.1em;">
			<font face="Roboto" color="black">Nama Rekening</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="5" style="padding-left: 10px; padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
			<FONT face="Roboto" color="black"><?php echo $namarekxu;?></font>
		</td>
	</tr>
	<tr height="24px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left;  vertical-align: top; font-size: 1.1em;">
			<font face="Roboto" color="black">Upload Dokumen</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
			<FONT face="Roboto" color="black">
<?php
				if ($docxu)
					$mydoc=$docxu; 
				else 
					$mydoc="-";
				
				$filenamebaru = './DOC/ORDER/' . $mydoc;
				echo $mydoc;
?>
			</font>
		</td>
		<td style="padding-left: 10px; padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
		</td>
		<td colspan="2" style="padding-left: 10px; padding-right: auto; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
		</td>
		<td style="padding-left: 10px; padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
		</td>
	</tr>
	<tr height="20px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left;  vertical-align: top; font-size: 1.1em;">
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em;">
		</td>
		<td colspan="5" style="padding-left: 10px; padding-right: 20px; padding-top: auto; text-align: left; vertical-align: top; font-size: 1.1em;">
		</td>
	</tr>
</table>


<table align="left" style="text-align: center; margin-left: 150px; margin-right: auto; margin-top: auto;" width="1050px" border="0" cellspacing="0" cellpadding="0">
	<tr valign="top" height="35px">
		<td style="padding-right: 20px; padding-top: auto; text-align: left;  vertical-align: top; font-size: 1.1em; width: 170px">
			<font face="Roboto" color="black">Total Nominal</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em; width: 30px">
			<font face="Roboto" color="black">:</font>
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


<table align="left" style="text-align: left; margin-left: 150px; margin-right: auto; margin-top: auto;" width="1050px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="40px">
			No
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="140px">
			Kode Produk
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="450px">
			Produk & Deskripsi
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="80px">
			Qty
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="110px">
			Unit Price
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em" width="130px">
			Sub Total
		</td>
	</tr>
	<tr height="0px">
		<td colspan="6" style="padding-left: 0px; padding-top: auto; text-align: center; color: #444444">
			<hr color="red" style="border-top: 1px solid #ccc; background: transparent;"/>
		</td>
	</tr>

<?php
$total = 0;
for ($a=1; $a<=$jmldata; $a++)
{

?>

	<tr height="24px">
		<td style="padding-left: 0px; padding-top: auto; text-align: center; vertical-align: top">
			<?php echo $a;?>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; vertical-align: top">
			<?php echo $skukuu[$a];?>
		</td>
		<td style="padding-left: 15px; padding-top: auto; text-align: left; vertical-align: top">
			<p><?php echo $namaprodkuu[$a];?></p>
			<p><?php echo $ketkuu[$a];?></p>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; vertical-align: top">
			<!--input style="text-align: center; font-size: 1.0em; font-famili: Roboto" type="text" class="textboxnarrow" id="qty" name="qty" value="<?php echo number_format($qtyku[$a],0);?>" onchange="updateqty(<?php echo $userid;?>,<?php echo $IDku[$a];?>,this.value)"-->
			<?php echo number_format($qtykuu[$a],0);?>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: right; vertical-align: top">
			<?php echo "Rp. " . number_format($unitpricekuu[$a],0);?>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: right; vertical-align: top">
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


<?php

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
