<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="logobnilogo.jpg" />
<title>Daftar Order</title>
 <meta charset="UTF-8">
<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();
?>

<meta http-equiv="refresh" content="300" />

  <!--
Copyright (c) 2015 by Marc Malignan (http://codepen.io/MarcMalignan/pen/xlAgJ)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

	
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anaheim|Cabin|Cantarell|Dosis|Lato|Khula|Kanit|Rajdhani|Jura|Assistant|Merriweather+Sans|Montserrat|Mukta+Mahee|Mukta+Malar|Muli|Noto+Sans|Nunito|Nunito+Sans|Open+Sans|Oxygen|PT+Sans|PT+Sans+Narrow|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Slab|Slabo+27px|Titillium+Web|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ABeeZee|Abel|Amaranth|Arimo|Armata|Assistant|Barlow|Barlow+Semi+Condensed|Boogaloo|Cabin|Cabin+Condensed|Cambay|Cantarell|Caveat|Chivo|Cinzel|Contrail+One|Courgette|Cuprum|Didact+Gothic|Dosis|Economica|Electrolize|Fira+Sans|Gudea|Hammersmith+One|Hind|Hind+Madurai|Hind+Siliguri|Hind+Vadodara|Itim|Jaldi|Josefin+Slab|Kalam|Kanit|Khand|Khula|Maven+Pro|Merriweather+Sans|Molengo|Montserrat+Alternates|Mukta+Mahee|Muli|News+Cycle|Orbitron|Overpass|PT+Sans+Caption|PT+Sans+Narrow|Pavanam|Play|Playball|Poiret+One|Quattrocento+Sans|Questrial|Quicksand|Rajdhani|Righteous|Rokkitt|Ropa+Sans|Sacramento|Sarala|Scada|Share|Signika|Tangerine|Titillium+Web|Ubuntu+Condensed|Varela+Round|Yanone+Kaffeesatz|Yantramanav" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="cssmenu.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">
<link rel="stylesheet" href="barloading1.css" type="text/css">
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>

<link type="text/css" rel="stylesheet" href="./datepicker/examples/libraries/syntaxhighlighter/public/css/shCoreDefault.css">

<link type="text/css" rel="stylesheet" href="libraries/syntaxhighlighter/public/css/shCoreDefault.css">
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shCore.min.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushJScript.min.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushXml.min.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushCss.min.js"></script>

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
font-size: 12px
} 
.button, .button:visited,
.medium.button, .medium.button:visited {
font-size: 16px;
font-weight: bold;
line-height: 1;
text-shadow: 0 -1px 1px rgba(0,0,0,0.25); 
} 
.medium.button, .medium.button:visited {
font-size: 16px;
padding: 10px 18px 12px;
} 
.large.button, .large.button:visited {
font-size: 22px;
padding: 8px 24px 9px;
} 
.pink.button, .magenta.button:visited {
background-color: #e22092;
} 
.pink.button:hover {
background-color: #c81e82;
} 
.green.button, .green.button:visited {
background-color: #019404;
} 
.green.button:hover {
background-color: #018304;
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
    font-size: 16px; /* Set a font size */
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
    border: 1px solid #999999; 
	background-color: transparent;
    height: 28px; 
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
    width: 120px; 
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
    width: 350px; 
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
   padding: 4px 10px;
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
   width: 480px;
}

select#soflow1-color {
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
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
input[type="radio"] {
  margin-top: -2px;
  vertical-align: middle;
  height: 100%;
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
function formatnumber(nField) {
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

<script>
function stokperoutlet()
{
	document.forms["mystokperoutlet"].submit();
}
</script>  

<script>
function stokperbarang()
{
	document.forms["mystokperbarang"].submit();
}
</script> 

<script>
function viewedit(userid, barangid)
{
	document.getElementsByName("barangid")[0].value = barangid;
	document.forms["editbarang"].submit();
}
</script> 

<script>
function viewhal(hal)
{
	document.getElementsByName("hal")[0].value = hal;
	document.forms["myviewhal"].submit();
}
</script> 

<script>
function vieworderfilter()
{
	//document.getElementsByName("hal")[0].value = hal;
	//var outlet = document.getElementsByName("outletx")[0].value;
	//var tgldari = document.getElementsByName("tgldarif")[0].value;
	//var tglsd = document.getElementsByName("tglsdf")[0].value;

	//document.getElementsByName("outletf")[0].value = outlet;
	//document.getElementsByName("tgldarifil")[0].value = tgldari;
	//document.getElementsByName("tglsdfil")[0].value = tglsd;
	document.getElementsByName("statusview")[0].value = 1;
	
	//document.getElementsByName("statusvieww")[0].value = 1;

	document.forms["myreportorder"].submit();
}
</script> 

<script>
function updateproducts()
{
	var hargaku = document.getElementsByName("harga0")[0].value;
	document.getElementsByName("harga")[0].value = numberWithCommas(hargaku);
	document.forms["myupdatebarang"].submit();
}
</script> 

<script>
$('.nav-main .dropdown-submenu > a:not(a[href="#"])').on('click', function() {
    self.location = $(this).attr('href');
});
</script>

<script type="text/javascript">     
function PreviewImage(no) 
{         
	var oFReader = new FileReader();         
	oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);         
	oFReader.onload = function (oFREvent) {             
		document.getElementById("uploadPreview"+no).src = oFREvent.target.result;         
	};     
} </script>

<script>
function numberWithCommas(x) {
	a = x;
	a=a.replace(/\,/g,'')
	a=Number(a)
	return a;
}
</script>

<script>
function carioutlet(userid, txtstring)
{
	
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementsByName('outletx')[0].innerHTML = this.responseText;
			//document.getElementsByName("satuan")[0].value = this.responseText;
//alert(this.responseText);
			//if (this.responseText == 1 || this.responseText == "1")
			//{
			//	alert("Produk sudah di-hapus");
			//}
			//location.reload();
		}
	};
	var strku = "viewordercmb.php?userid="+userid+"&mystr="+txtstring;
	xmlhttp.open("GET",strku,true);
	xmlhttp.send();

}
</script>

<script>
function clearperiode()
{
	document.getElementsByName("tgldarif")[0].value = "";
	document.getElementsByName("tglsdf")[0].value = "";
}
</script>

<script>
function clearperiodedelivery()
{
	document.getElementsByName("tgldeliverydari")[0].value = "";
	document.getElementsByName("tgldeliverysd")[0].value = "";
}
</script>

<script>
function clearnoorder()
{
	document.getElementsByName("orderno")[0].value = "";
}
</script>

<script>
function clearnama()
{
	document.getElementsByName("nama")[0].value = "";
}
</script>

<script>
function clearstatusorder()
{
	document.getElementsByName("statusorder")[0].value = 0;
}
</script>

<script>
function viewdetailorder(userid, orderid)
{
	document.getElementsByName("orderid")[0].value = orderid;
	document.forms["myviewdetailorder"].submit();
}
</script>

<script>
function viewrs()
{
//alert('OKE');
//alert(document.getElementsByName("searchstr")[0].value);
	//var cari = document.getElementsByName("searchstr")[0].value;
	document.getElementsByName("tglorderdari")[0].value = document.getElementsByName("tgldarif")[0].value;
	document.getElementsByName("tglordersd")[0].value = document.getElementsByName("tglsdf")[0].value;
	document.getElementsByName("nomororder")[0].value = document.getElementsByName("orderno")[0].value;
	document.getElementsByName("namaorder")[0].value = document.getElementsByName("nama")[0].value;
	document.getElementsByName("tgldelivdari")[0].value = document.getElementsByName("tgldeliverydari")[0].value;
	document.getElementsByName("tgldelivsd")[0].value = document.getElementsByName("tgldeliverysd")[0].value;
	document.getElementsByName("statusorderr")[0].value = document.getElementsByName("statusorder")[0].value;
	document.forms["myviewrs"].submit();
}
</script>

<script>
function viewrscsv()
{
//alert('OKE');
//alert(document.getElementsByName("searchstr")[0].value);
	//var cari = document.getElementsByName("searchstr")[0].value;
	document.getElementsByName("tglorderdaricsv")[0].value = document.getElementsByName("tgldarif")[0].value;
	document.getElementsByName("tglordersdcsv")[0].value = document.getElementsByName("tglsdf")[0].value;
	document.getElementsByName("nomorordercsv")[0].value = document.getElementsByName("orderno")[0].value;
	document.getElementsByName("namaordercsv")[0].value = document.getElementsByName("nama")[0].value;
	document.getElementsByName("tgldelivdaricsv")[0].value = document.getElementsByName("tgldeliverydari")[0].value;
	document.getElementsByName("tgldelivsdcsv")[0].value = document.getElementsByName("tgldeliverysd")[0].value;
	document.getElementsByName("statusorderrcsv")[0].value = document.getElementsByName("statusorder")[0].value;
	document.forms["myviewrscsv"].submit();
}
</script>

<script>
function printorder(userid, orderid)
{
	document.getElementsByName("orderidprint")[0].value = orderid;
	document.forms["myprintorder"].submit();
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
$userid=0;
if (!isset($_POST["useridvorder"])) {
	if (!isset($_GET["useridvorder"])) {
			$userid=0;
	}
	else
		$userid = $_GET["useridvorder"];
}
else
	$userid=$_POST["useridvorder"];
//----------------------------------------------------------------
if ($userid==0)
{
	if (!isset($_POST["useridedit"])) {
		$userid=0;
	}
	else
		$userid=$_POST["useridedit"];
}
//----------------------------------------------------------------
if ($userid==0)
{
	if (!isset($_POST["userid"])) {
		$userid=0;
	}
	else
		$userid=$_POST["userid"];
}

if ($userid==0)
{
	if (!isset($_POST["useridd"])) {
		$userid=0;
	}
	else
		$userid=$_POST["useridd"];
}

if ($userid==0)
{
	if (isset($_SESSION["userid"]))
		$userid=$_SESSION["userid"];
	else
		$userid=0;
}
//----------------------------------------------------------------
$tgldarif = "";
if (!isset($_POST["tgldarif"])) {
	$tgldarif="";
}
else
	$tgldarif=$_POST["tgldarif"];
//------------------------------------------------------------------------
$tglsdf = "";
if (!isset($_POST["tglsdf"])) {
	$tglsdf="";
}
else
	$tglsdf=$_POST["tglsdf"];
//------------------------------------------------------------------------
$noorder = "";
if (!isset($_POST["orderno"])) {
	$noorder=0;
}
else
	$noorder=$_POST["orderno"];
//------------------------------------------------------------------------
$nama="";
if (!isset($_POST["nama"])) {
	$nama="";
}
else
	$nama=$_POST["nama"];
//------------------------------------------------------------------------
$statusview = 0;
if (!isset($_POST["statusview"])) {
	$statusview=0;
}
else
	$statusview=$_POST["statusview"];
//------------------------------------------------------------------------
$tgldd = "";
if (!isset($_POST["tgldeliverydari"])) {
	$tgldd="";
}
else
	$tgldd=$_POST["tgldeliverydari"];
//------------------------------------------------------------------------
$tglds = "";
if (!isset($_POST["tgldeliverysd"])) {
	$tglds="";
}
else
	$tglds=$_POST["tgldeliverysd"];
//------------------------------------------------------------------------
$statusorder = "";
if (!isset($_POST["statusorder"])) {
	$sox="";
}
else
	$sox=$_POST["statusorder"];
//------------------------------------------------------------------------

//echo "<br><br><br><br><br>---------------------" . $outlet . "<br>";


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

# query the users table for name and surname 

$query = "SELECT
				user.ID AS userid,
				user.nama AS nama,
				user.username AS username,
				user.kodeoutlet AS kodeoutlet,
				user.passwd,
				user.pwd,
				userlevel.level AS level,
				user.levelid AS levelid
				FROM user
				INNER JOIN userlevel ON user.levelid = userlevel.ID
			WHERE (user.ID=" . $userid . ");";
//echo "<br><br><br><br>-------------" . $query;
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
		$useridku = $row['userid'];
		$namaku = $row['nama'];
		$usernameku = $row['username'];
		$kodeoutletku = $row['kodeoutlet'];
		$levelidku = $row['levelid'];
		$levelku = strtoupper($row['level']);
		if ($kodeoutletku==null || $kodeoutletku=="")
			$kodeoutletku = "";
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
<meta http-equiv="refresh" content="5; url=index.php" />
<?php
die;
	}
}

$useridku = $userid;
?>


<?php
//include "allmenu.php";
//include "topbar.php";
//echo "<br><br><br>-------------------USERID:" . $query;
?>

 <script type="text/javascript" src="jquery.min.js"></script>


 
<?php
include "menu1.php";
include "menu2setting.php";
?>


<?php

//echo "<br><br><br><br><br>---------------------" . $tgldarif . "<br>";
//-------------------------------------------------------------------------------------------
//Baca data di tabel orderlistbarangvendorpfa
//-------------------------------------------------------------------------------------------
if (($tgldarif=="" || $tgldarif==null || strlen($tgldarif)<5) && ($tglsdf=="" || $tglsdf==null || strlen($tglsdf)<5))
	$periodestr = "";
else if (($tgldarif=="" || $tgldarif==null || strlen($tgldarif)<5) && strlen($tglsdf)>6)
	$periodestr = " AND tgl = '" . $tglsdf . "'";
else if (($tglsdf=="" || $tglsdf==null || strlen($tglsdf)<5) && strlen($tgldarif)>6)
	$periodestr = " AND tgl = '" . $tgldarif . "'";
else if (strlen($tgldarif)>6 && strlen($tglsdf)>6)
	$periodestr = " AND (tgl BETWEEN '" . $tgldarif . "' AND '" . $tglsdf . "')";

if ($nama=="" || $nama==null)
	$namastr = "";
else
	$namastr = " AND (name LIKE '%{$nama}%' OR name=UPPER('{$nama}'))";

if ($noorder=="" || $noorder==null)
	$noorderstr = "";
else
	$noorderstr = " AND (orderno LIKE '%{$noorder}%' OR orderno='{$noorder}')";

if (($tgldd=="" || $tgldd==null) && ($tglds=="" || $tglds==null))
	$tgldstr = "";
else if (($tgldd=="" || $tgldd==null) && $tglds)
	$tgldstr = " AND (tglondelivery='{$tglds}')";
else if (($tglds=="" || $tglds==null) && $tgldd)
	$tgldstr = " AND (tglondelivery='{$tgldd}')";
else if ($tglds && $tgldd)
	$tgldstr = " AND tglondelivery BETWEEN '{$tgldd}' AND '{$tglds}'";

if ($sox=="" || $sox==null || $sox==0)
	$statusorderstr = "";
else
	$statusorderstr = " AND (statusorderID={$sox})";

//-----------------------------------------------------------------------------
		
if ($statusview==0)
{
	if ($levelidku==1 || $levelidku==2)
		$query = "SELECT * FROM orders WHERE (ID < 0) ORDER BY createddatetime DESC;";
	else
		$query = "SELECT * FROM orders WHERE (ID < 0) ORDER BY createddatetime DESC;";
}
else
{
	if ($levelidku==1 || $levelidku==2)
	{
		$query = "SELECT * FROM orders WHERE (ID>0" . $periodestr . $namastr . $noorderstr . $tgldstr . $statusorderstr . ") ORDER BY createddatetime DESC;";
//echo "<br><br><br><br><br>---------------------OK--" . $levelidku . $query;
	}
	else
		$query = "SELECT * FROM orders WHERE (createduser={$userid} AND ID>0 " . $periodestr . $namastr . $noorderstr . $tgldstr . $statusorderstr . 
				")) ORDER BY createddatetime DESC;";
}

//echo "<br><br><br><br><br>---------------------" . $tgldarif . $statusview . "AA" . $levelidku . $query;

$row_cnt = 0;
$jmllistbarang = 0;
$jmlorder = 0;
$j = 0;
$i = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}

if ($row_cnt>0) {
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$idx[$i] = $row['ID'];
		$tglx[$i] = $row['tgl'];
		$ordernox[$i] = $row['orderno'];
		$namex[$i] = $row['name'];
		$alamatx[$i] = $row['alamat'];
		$telponx[$i] = $row['telpon'];
		$emailx[$i] = $row['email'];
		$ketx[$i] = $row['keterangan'];
		$remarkx[$i] = $row['remarks'];
		$statusorderidxx[$i] = $row['statusorderID'];
	}
}
$jmlorder = $i;

//echo "<br><br><br>-----------------------" . $jmlorder;

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


?>
<table style="text-align: center; margin-left: 280px; margin-right: auto; margin-top: 70px;" width="840px" border="0" cellspacing="0" cellpadding="0">
	<tr height="50px">
			<td style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>
	</tr>
	<tr height="30px">
			<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.8em">
				<font face="Ubuntu" color="black">Daftar Order</font>
			</td>		
	</tr>
	<tr height="30px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>
	</tr>
</table>

<form name="myreportorder" id="myreportorder" action="mainreportorder.php" method="post" enctype="multipart/form-data">
<table style="text-align: left; margin-left: 280px; margin-right: auto; margin-top: 0px;" width="940px" border="0" cellspacing="0" cellpadding="0">
		<tr height="20px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: left; font-size: 11;">
			</td>
		</tr>

		<tr height="32px">
			<td style="padding-left: 0px; padding-top: auto; text-align: left; font-size: 1.1em;">
						<!--h2><font face="arial" color="black" size="3"><b>UPLOAD File :</b></font></h2-->
						<font face="arial" color="black">Periode Order</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
						<!--h2><font face="arial" color="black" size="3"><b>UPLOAD File :</b></font></h2-->
						<font face="arial" color="black" >:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<div class="main-wrapper">

				<input style="font-size: 1.0em;" id="datepicker-example1a" name="tgldarif" type="text" class="textboxmid" value="<?php if (strlen($tgldarif)>4) echo $tgldarif;?>">
				<font face="Assistant" color="black" size="3">
				&nbsp;s/d&nbsp;
				</font>
				<input style="font-size: 1.0em;" id="datepicker-example1b" name="tglsdf" type="text" class="textboxmid" value="<?php if (strlen($tglsdf)>4) echo $tglsdf;?>">

				&nbsp;&nbsp;<a class="small button red" onClick="clearperiode();"> Clear/Reset </a>
				</div>
			</td>
		</tr>
		<tr height="32px">
			<td style="padding-left: 0px; padding-top: auto; text-align: left; font-size: 1.1em;">
						<!--h2><font face="arial" color="black" size="3"><b>UPLOAD File :</b></font></h2-->
						<font face="arial" color="black" >No Order</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
						<!--h2><font face="arial" color="black" size="3"><b>UPLOAD File :</b></font></h2-->
						<font face="arial" color="black" >:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<div class="main-wrapper">
				<input style="font-size: 1.0em;" id="orderno" name="orderno" type="text" class="textbox" value="<?php if (strlen($noorder)>4) echo $noorder;?>">
				&nbsp;&nbsp;<a class="small button red" onClick="clearnoorder();"> Clear/Reset </a>
				</div>
			</td>
		</tr>
		<tr height="32px">
			<td style="padding-left: 0px; padding-top: auto; text-align: left; font-size: 1.1em;">
						<!--h2><font face="arial" color="black" size="3"><b>UPLOAD File :</b></font></h2-->
						<font face="arial" color="black" >Nama </font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
						<!--h2><font face="arial" color="black" size="3"><b>UPLOAD File :</b></font></h2-->
						<font face="arial" color="black" >:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<div class="main-wrapper">
				<input style="font-size: 1.0em;" id="nama" name="nama" type="text" class="textbox" value="<?php if (strlen($nama)>1) echo $nama;?>">
				&nbsp;&nbsp;<a class="small button red" onClick="clearnama();"> Clear/Reset </a>
				</div>
			</td>
		</tr>
		<tr height="32px">
			<td style="padding-left: 0px; padding-top: auto; text-align: left; font-size: 1.1em;">
						<!--h2><font face="arial" color="black" size="3"><b>UPLOAD File :</b></font></h2-->
						<font face="arial" color="black" >Periode Delivery</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
						<!--h2><font face="arial" color="black" size="3"><b>UPLOAD File :</b></font></h2-->
						<font face="arial" color="black" >:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<div class="main-wrapper">

				<input style="font-size: 1.0em;" id="datepicker-example2" name="tgldeliverydari" type="text" class="textboxmid" value="<?php if (strlen($tglds)>4) echo $tgldd;?>">
				<font face="Assistant" color="black" size="3">
				&nbsp;s/d&nbsp;
				</font>
				<input style="font-size: 1.0em;" id="datepicker-example14" name="tgldeliverysd" type="text" class="textboxmid" value="<?php if (strlen($tglds)>4) echo $tglds;?>">

				&nbsp;&nbsp;<a class="small button red" onClick="clearperiodedelivery();"> Clear/Reset </a>
				</div>
			</td>
		</tr>
		
		<tr height="32px">
			<td style="padding-left: 0px; padding-top: auto; text-align: left; font-size: 1.1em;">
						<!--h2><font face="arial" color="black" size="3"><b>UPLOAD File :</b></font></h2-->
						<font face="arial" color="black" >Status Order</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
						<!--h2><font face="arial" color="black" size="3"><b>UPLOAD File :</b></font></h2-->
						<font face="arial" color="black" >:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<div class="main-wrapper">		
					<FONT face="arial" color="blue">
						<select style=" font-size: 1.0em" id="soflow" name="statusorder">
							<option value="0">---</option>
		  <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
		<?php
				for ($a=1; $a<=$jmlstatusorder; $a++)
				{
		?>
							<option value="<?php echo $statusorderidx[$a];?>" <?php if ($sox==$statusorderidx[$a]) echo "selected";?>><?php echo $statusorderx[$a];?></option>
		<?php
				}
		?>
						</select>
					</FONT>		

						&nbsp;&nbsp;<a class="small button red" onClick="clearstatusorder();"> Clear/Reset </a>
				</div>
			</td>		
		<tr height="20px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: left; font-size: 1.2em;">
				<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
				<input type="hidden" id="statusview" name="statusview">
			</td>
		</tr>
		<tr height="20px">
			<td valign="top" style="padding-left: 0px; padding-top: 5px; text-align: left; font-size: 1.2em;">
				<div class="side-by-side clearfix">					
					<a class="medium button green" onClick="vieworderfilter();"> Filter </a>
				</div>
			</td>
			<td colspan="2" valign="top" style="padding-left: 0px; padding-top: 5px; text-align: right; font-size: 1.2em;">
			</td>				
		</tr>
</table>
</form>

<table style="text-align: left; margin-left: 280px; margin-right: auto; margin-top: 0px;" width="940px" border="0" cellspacing="0" cellpadding="0">
		<tr height="20px">
			<td colspan="3" style="padding-left: 0px; text-align: left; font-size: 12">
			</td>
		</tr>

		<tr height="20px">
			<td valign="top" colspan="2" style="padding-left: 0px; padding-top: 5px; text-align: left; font-size: 1.2em;">
				<div class="side-by-side clearfix">					
					<button class="btn" onclick="viewrscsv();"><i class="fa fa-file"></i> MS Excel</button>
				</div>
			</td>
			<td valign="top" valign="top" style="padding-left: 0px; padding-top: 5px; text-align: right; font-size: 1.2em;">
				<div class="side-by-side clearfix">					
					<button class="btn" onclick="viewrs();"><i class="fa fa-print"></i> Print</button>
				</div>
			</td>				
		</tr>
		<tr height="0px">
			<td colspan="3" style="padding-left: 0px; text-align: left; font-size: 12">
			</td>
		</tr>
</table>


<?php
/*
	$sisa = $jmlorder % 24;
	$totalhal = ($jmlorder - $sisa) / 24;

	$enddata = $hal * 24;
	$startdata = $enddata - 23;
	
	$a = $startdata;
	$jmlcol = 0;
	$jmlrow = 0;
	
	$aaa = 0;
*/	
//echo $jmlorder . "--" . $enddata;
?>


<table style="text-align: center; margin-left: 280px; margin-right: auto; margin-top: 0px;" width="940px" border="0" cellspacing="0" cellpadding="0">
		<tr height="10px">
			<td colspan="6" style="padding-left: 0px; padding-top: auto; text-align: center;">

			</td>
		</tr>
		<tr height="40px" STYLE="background-color: #7082EF;"> 
            <td style="padding-left: auto; text-align: center; font-size: 1.1em;  width: 40px;">
				<font face="Roboto" color="white">NO</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 140px">
				<font face="Roboto" color="white">ORDER NO</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 140px">
				<font face="arial" color="white">TGL ORDER</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 300px">
				<font face="arial" color="white">NAMA PEMESAN / OUTLET</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 140px">
				<font face="arial" color="white">TOTAL NILAI</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 180px">
				<font face="arial" color="white">STATUS</font>
			</td>
        </tr>
<?php
if ($jmlorder > 0)
{
	for ($a=1; $a<=$jmlorder;$a++)
	{
		
		$totnom = 0;
		
		$sql0 = "SELECT * FROM orderitem WHERE orderID=" . $idx[$a] . ";";
		$result = mysqli_query($link, $sql0);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			$k = 0;
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$idi = $row['ID'];
				$qtyi = $row['qty'];
				$unitpricei = $row['unitprice'];
				$totnom = $totnom + ($qtyi * $unitpricei);
			}
		}
		
		$sql0 = "SELECT * FROM statusorder WHERE ID=" . $statusorderidxx[$a] . ";";
		$result = mysqli_query($link, $sql0);
		if ($result) {
			$row_cnt = $result->num_rows;
		}
		if ($row_cnt>0) {
			$k = 0;
			while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
				$statusorder = $row['statusorder'];
			}
		}
		
		
		
		$b = $a % 2;
		if ($b==0)
		{
?>
		<tr height="40px" STYLE="background-color: #EAEAEA">

<?php
		}
		else if ($b>0)
		{
?>
		<tr height="40px" STYLE="background-color: #FFFFFF;">
<?php
		}
?>
            <td style="padding-left: auto; text-align: center; font-size: 1.1em;  width: 40px;">
				<font face="Roboto" color="#333333"><?php echo $a;?></font>
			</td>
            <td style="padding-left: 10px; text-align: left; font-size: 1.1em; width: 140px">
				<font face="Roboto" color="#009B8B">
				<!--a href='#' onclick="viewdetailorder(<?php echo $userid;?>,<?php echo $idx[$a];?>);"-->
				<a href='#' onClick="printorder(<?php echo $userid;?>,<?php echo $idx[$a];?>);">
				<?php echo $ordernox[$a];?>
				</a>
				</font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.0em; width: 140px">
				<font face="Roboto" color="#333333"><?php echo date('d-M-Y', strtotime($tglx[$a]));?></font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.0em; width: 400px">
				<font face="Roboto" color="#333333"><?php echo $namex[$a];?></font>
			</td>
            <td style="padding-right: 20px; text-align: right; font-size: 1.1em; width: 140px">
				<font face="Roboto" color="#888888"><?php echo "Rp. ";?></font>
				<font face="Roboto" color="#FF5555"><?php echo number_format($totnom,0);?></font>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 1.0em; width: 100px">
				<font face="Roboto" color="#5555FF">
				<?php echo $statusorder;?>
				</font>
			</td>
        </tr>
<?php
	}
}
?>		
		<tr height="10px">
			<td colspan="6" style="padding-left: 0px; padding-top: auto; text-align: center;">

			</td>
		</tr>
</table>

<!--form name="myfilter" id="myfilter" action="orderlist.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridd" name="useridd" value="<?php echo $userid;?>">
	<input type="hidden" id="outletf" name="outletf">
	<input type="hidden" id="tgldarifil" name="tgldarifil">
	<input type="hidden" id="tglsdfil" name="tglsdfil">
	<input type="hidden" id="statusviewf" name="statusviewf">
</form-->

<form id="myviewrs" name="myviewrs" method="post" target="_blank" action="viewreportorder.php" enctype="multipart/form-data">
	<input type="hidden" id="useridrs" name="useridrs" value="<?php echo $useridku;?>">
	<input type="hidden" id="tglorderdari" name="tglorderdari">
	<input type="hidden" id="tglordersd" name="tglordersd">
	<input type="hidden" id="nomororder" name="nomororder">
	<input type="hidden" id="namaorder" name="namaorder">
	<input type="hidden" id="tgldelivdari" name="tgldelivdari">
	<input type="hidden" id="tgldelivsd" name="tgldelivsd">
	<input type="hidden" id="statusorderr" name="statusorderr">
	<input type="hidden" id="myquery" name="myquery" value="<?php echo $query;?>">
</form>

<form id="myviewrscsv" name="myviewrscsv" method="post" target="_blank" action="viewreportorderxl.php" enctype="multipart/form-data">
	<input type="hidden" id="useridrscsv" name="useridrscsv" value="<?php echo $useridku;?>">
	<input type="hidden" id="tglorderdaricsv" name="tglorderdaricsv">
	<input type="hidden" id="tglordersdcsv" name="tglordersdcsv">
	<input type="hidden" id="nomorordercsv" name="nomorordercsv">
	<input type="hidden" id="namaordercsv" name="namaordercsv">
	<input type="hidden" id="tgldelivdaricsv" name="tgldelivdaricsv">
	<input type="hidden" id="tgldelivsdcsv" name="tgldelivsdcsv">
	<input type="hidden" id="statusorderrcsv" name="statusorderrcsv">
	<input type="hidden" id="myquerycsv" name="myquerycsv" value="<?php echo $query;?>">
</form>

<form name="myviewdetailorder" id="myviewdetailorder" target="_blank" action="viewdetailorder.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridd" name="useridd" value="<?php echo $useridku;?>">
	<input type="hidden" id="orderid" name="orderid">
</form>


<form name="myprintorder" id="myprintorder" action="printorder.php" method="post" target="_blank" enctype="multipart/form-data">
	<input type="hidden" id="useridprint" name="useridprint" value="<?php echo $userid;?>">
	<input type="hidden" id="orderidprint" name="orderidprint">
</form>

<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="920px" border="0" cellspacing="0" cellpadding="0">
		<tr height="30px">
			<td colspan="4" style="padding-left: 0px; padding-top: auto; text-align: center;">

			</td>
		</tr>
		<tr height="20px">
			<td colspan="4" style="padding-left: 0px; padding-top: auto; text-align: center;">
				<h2><font face="Ubuntu" color="black" size="1"><b>BNISOUVENIR.COM</b></font></h2>
			</td>
		</tr>
</table>
<table style="text-align: left; margin-left: 10px; margin-right: auto; margin-top: auto;" width="900px" border="0" cellspacing="0" cellpadding="0">
	<tr height="50px">
		<td style="padding-left: 10px; text-align: left;">
		</td>
	</tr>
</table>


<script type="text/javascript" src="./datepicker/examples/public/javascript/jquery-1.11.1.js"></script>
<script type="text/javascript" src="./datepicker/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="./datepicker/examples/public/javascript/core.js"></script>

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
