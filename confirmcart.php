<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="logobnilogo.jpg" />
<title>Menu Persediaan</title>
 <meta charset="UTF-8">
<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();
?>
  <!--
Copyright (c) 2015 by Marc Malignan (http://codepen.io/MarcMalignan/pen/xlAgJ)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<link rel="stylesheet" href="chosen/docsupport/prism.css">
<link rel="stylesheet" href="chosen/chosen.css">
	
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
font-size: 28xpx;
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
   width: 380px;
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
   width: 450px;
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
    font-size: 60px;
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

<style type="text/css">
#table1 {
 border:0 solid #FFF;
 }
#table1 td {
 border:0px solid #CCC;
 }
a#link {
 display:block;
 width:100%;
 height:100%; 
 color:#666; 
 text-decoration:none;
 }
a#link #span1 {
 display:block;
 padding:1px;
 text-decoration:none;
 }
a#link #span2 {
 display:block;
 padding:1px;
 }
a#link:hover {
 background-color:#F2F2F2;
 color:#ccc;
 }
</style>

<style>
td img{
    display: block;
    margin-left: auto;
    margin-right: auto;
	text-align: center;
}
</style>
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
function checknohp()
{
	var nohp = document.getElementsByName("nohppic")[0].value;

	if (/\D/.test(nohp))
	{
		//alert("Periksa nomor hp anda kembali. Nomor harus berupa angka");
		//document.getElementsByName("nohppic")[0].value = 0;
		document.getElementById("hpwarning").style.visibility = "visible";
		document.getElementById("hpwarninglabel").style.visibility = "visible";
		//document.getElementById("norekwarninglabel").style.visibility = "visible";
		document.getElementById('hpwarninglabel').innerHTML = "Data harus berupa angka";
	}
	else
	{
		document.getElementById("hpwarning").style.visibility = "hidden";
		document.getElementById("hpwarninglabel").style.visibility = "hidden";
	}
}
</script>

<script>
function checknorek()
{
	var norek = document.getElementsByName("nomorrekpic")[0].value;

	if (/\D/.test(norek))
	{
		//alert("Periksa nomor hp anda kembali. Nomor harus berupa angka");
		//document.getElementsByName("nohppic")[0].value = 0;
		document.getElementById("norekwarning").style.visibility = "visible";
		document.getElementById("norekwarninglabel").style.visibility = "visible";
		//document.getElementById("norekwarninglabel").style.visibility = "visible";
		document.getElementById('norekwarninglabel').innerHTML = "Data harus berupa angka";
	}
	else
	{
		document.getElementById("norekwarning").style.visibility = "hidden";
		document.getElementById("norekwarninglabel").style.visibility = "hidden";
	}
}
</script> 

<script>
function updateproducts()
{
	document.forms["myupdatebarang"].submit();
}
</script> 

<script>
function addproducts()
{

	var namaproduk = document.getElementsByName("namaproduk")[0].value;
	var kodeproduk = document.getElementsByName("kodeproduk")[0].value;
	
	if (namaproduk.length < 2 || namaproduk===null || kodeproduk.length < 2)
	{
		alert("Lengkapi data terlebih dahulu.");
		return false;		
	}
	
	var picname = document.getElementsByName("uploadImage1")[0].value;
	if (picname.length < 5)
	{
		alert("Pilih foto produk terlebih dahulu.");
		return false;
	}
	else {
		document.forms["myaddbarang"].submit();
	}
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
function summary(userid)
{
	var nama = document.getElementsByName("namapic")[0].value;
	var alamat = document.getElementsByName("alamatpic")[0].value;
	var nohp = document.getElementsByName("nohppic")[0].value;
	var email = document.getElementsByName("emailpic")[0].value;
	var outletpic = document.getElementsByName("outletpic")[0].value;
	var ket = document.getElementsByName("ketpic")[0].value;
	var namarek = document.getElementsByName("namarekpic")[0].value;
	var nomorrek = document.getElementsByName("nomorrekpic")[0].value;
	
	if ((/\D/.test(nohp)) || (/\D/.test(nomorrek)))
	{
		alert("Format data invalid. No HP dan No Rekening harus berupa angka.")
		return false;
	}	
	
	if (nama.length>2 && alamat.length>2 && nohp.length>2 && email.length>2 && outletpic.length>2 && namarek.length>2 && nomorrek.length>2)
	{
		if (email.indexOf("@") ==-1)
		{
			alert("Masukkan alamat email anda dengan benar.");
			return false;
		}
		else
		{
			document.getElementsByName("outlet")[0].value = outletpic;
			document.forms["mysummary"].submit();
		}
	}
	else
	{
		alert("Lengkapi data dengan benar");
	}
}
</script> 

<script>
function loadme()
{
	document.getElementById("hpwarning").style.visibility = "hidden";
	document.getElementById("norekwarning").style.visibility = "hidden";
	document.getElementById("hpwarninglabel").style.visibility = "hidden";
	document.getElementById("norekwarninglabel").style.visibility = "hidden";
}
</script> 

</head>

<body onLoad="loadme();">
<?php

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

include "koneksi.php";

//----------------------------------------------------------------
$userid=0;
if (!isset($_POST["userid"])) {
	if (!isset($_GET["userid"])) {
			$userid=0;
	}
	else
		$userid = $_GET["userid"];
}
else
	$userid=$_POST["userid"];
//----------------------------------------------------------------
if ($userid==0)
{
	if (!isset($_POST["useridaddp"])) {
	}
	else
		$userid=$_POST["useridaddp"];
}
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

# query the users table for name and surname 
$useridku = $userid;

$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
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
		$namaku = $row['nama'];
		$alamatku = $row['alamat'];
		$usernameku = $row['username'];
		$telponku = $row['telpon'];
		$emailku = $row['email'];
		$kodeoutletmu = $row['kodeoutlet'];
		$keteranganku = $row['keterangan'];
		$namarekku = $row['namarek'];
		$nomorrekku = $row['nomorrek'];
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


?>


<?php
//include "allmenu.php";
//include "topbar.php";
//echo "<br><br><br>-------------------USERID:" . $query;
?>

 <script type="text/javascript" src="jquery.min.js"></script>


 
<?php
include "menu1.php";
include "menu2merchandise.php";
?>


<?php

$sql = "SELECT * FROM outlet ORDER BY ID;";
$result = mysqli_query($link, $sql);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$outletidku[$i] = $row['ID'];
		$kodeoutletku[$i] = $row['kodeoutlet'];
		$namaoutletku[$i] = $row['namaoutlet'];
		$jenisoutletku[$i] = $row['jenisoutlet'];
	}
}
$jmloutlet = $i;


//-------------------------------------------------------------------------------------------
//Baca data di tabel orderlistbarangvendorpfa
//-------------------------------------------------------------------------------------------


?>
<form id="mysummary" name="mysummary" method="post" action="cartsummary.php" enctype="multipart/form-data">
<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 140px;" width="860px" border="0" cellspacing="0" cellpadding="0">
	<tr height="10px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
				<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
				<input type="hidden" id="outlet" name="outlet">
			</td>
	</tr>
	<tr height="30px">
			<td colspan="3" style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.8em">
				<font face="Ubuntu" color="black">Confirmation Data</font>
			</td>		
	</tr>
	<tr height="30px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>
	</tr>
	<tr height="35px">
		<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.1em; width: 190px">
				<font face="Roboto" color="black">Nama PIC</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em; width: 30px">
				<font face="Roboto" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left; width: 400px">
				<input style="font-family: Roboto; font-size: 1.0em;" type="text" class="textboxwide" id="namapic" name="namapic" value="<?php echo $namaku;?>">
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em; width: 50px">
				<font face="Roboto" color="black"></font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em; width: 200px">
				<font face="Roboto" color="black"></font>
		</td>
	</tr>
	<tr height="35px">
		<td style="padding-right: 20px; padding-top: auto; text-align: right; vertical-align: top; font-size: 1.1em; width: 170px">
				<font face="Roboto" color="black">Alamat</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em; width: 30px">
				<font face="Roboto" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<textarea style="font-family: Roboto; font-size: 1.0em; font-family: Roboto;" rows="3" cols="56" id="alamatpic" name="alamatpic"><?php echo $alamatku;?></textarea>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">	
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">	
		</td>
	</tr>

	<tr height="35px">
		<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.1em;">
			<font face="Roboto" color="black">Nomor Telp/HP</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">
			<input style="font-family: Roboto; font-size: 1.0em;" type="text" class="textboxwide" id="nohppic" name="nohppic" onchange="checknohp();" value="<?php echo $telponku;?>">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">
			<img src="./images/warning.jpg" id="hpwarning" name="hpwarning" alt="" width="30" height="30">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">
			<font face="Roboto" color="red"><label id="hpwarninglabel" name="hpwarninglabel"></label></font>
		</td>
	</tr>
	<tr height="35px">
		<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.1em;">
			<font face="Roboto" color="black">Email</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left;">
			<input style="font-family: Roboto; font-size: 1.0em;" type="text" class="textboxwide" id="emailpic" name="emailpic" value="<?php echo $emailku;?>">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">	
		</td>
	</tr>		
	<tr height="35px">
		<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.1em;">
			<font face="Roboto" color="black">Divisi/Unit/Outlet</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left;">
			<input style="font-family: Roboto; font-size: 1.0em;" type="text" class="textboxwide" id="outletpic" name="outletpic" value="<?php echo $kodeoutletmu;?>">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">	
		</td>
	</tr>
	<tr height="35px">
		<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.1em;">
			<font face="Roboto" color="blue">Nama Rekening Pendebetan</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="2" style="padding-left: 10px; padding-top: auto; text-align: left;">
			<input style="font-family: Roboto; font-size: 1.0em;" type="text" class="textboxwide" id="namarekpic" name="namarekpic" value="<?php echo $namarekku;?>">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">	
		</td>
	</tr>
	<tr height="35px">
		<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.1em;">
			<font face="Roboto" color="blue">Nomor Rekening</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">
			<input style="font-family: Roboto; font-size: 1.0em;" type="text" class="textboxwide" id="nomorrekpic" name="nomorrekpic" onchange="checknorek();" value="<?php echo $nomorrekku;?>">
		</td>
		<td style="padding-left: au; padding-top: auto; text-align: left;">
			<img style="text-align: left;" src="./images/warning.jpg" id="norekwarning" name="norekwarning" alt="" width="30" height="30">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">
			<font face="Roboto" color="red"><label id="norekwarninglabel" name="norekwarninglabel"></label></font>
		</td>
	</tr>
	<!--tr height="35px">
		<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.0em;">
				<font face="Ubuntu" color="black">Packaging</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em;">
				<font face="Ubuntu" color="black">:</font>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.0em;" type="text" class="textboxwide" id="jenisproduk" name="jenisproduk" value="">
		</td>
	</tr-->
	<tr>
		<td style="padding-right: 20px; padding-top: auto; text-align: right;  vertical-align: top; font-size: 1.1em;">
			<font face="Roboto" color="black">Keterangan</font>
		</td>
		<td style="padding-left: 0px; padding-top: auto; text-align: center;  vertical-align: top; font-size: 1.1em;">
			<font face="Roboto" color="black">:</font>
		</td>
		<td colspan="2" style="padding-left: 10px; padding-right: auto; padding-top: auto; text-align: left;">
			<textarea style="font-family: Roboto; font-size: 1.0em; font-family: Roboto" rows="3" cols="56" id="ketpic" name="ketpic"><?php echo $keteranganku;?></textarea>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">	
		</td>
	</tr>
	<tr height="30px">
		<td colspan="4" style="padding-left: 0px; padding-top: auto; text-align: center;">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">	
		</td>
	</tr>
	<tr height="20px">
		<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
			<button type="button" class="btn btn-success btn-lg" onClick="summary(<?php echo $userid;?>);"> &nbsp;&nbsp;&nbsp;SAVE&nbsp;&nbsp;&nbsp; </button>
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">
		</td>
		<td style="padding-left: 10px; padding-top: auto; text-align: left;">	
		</td>
	</tr>

</table>
</form>

<form id="editbarang" name="editbarang" method="post" action="editbarang.php" enctype="multipart/form-data">

</form>

<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="920px" border="0" cellspacing="0" cellpadding="0">
		<tr height="10px">
			<td colspan="4" style="padding-left: 0px; padding-top: auto; text-align: center;">

			</td>
		</tr>
</table>

<form name="myviewhal" id="myviewhal" action="" method="post" enctype="multipart/form-data">
	<input type="hidden" id="userid" name="userid" value="<?php echo $useridku;?>">
	<input type="hidden" id="hal" name="hal">
</form>


<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="920px" border="0" cellspacing="0" cellpadding="0">
		<tr height="20px">
			<td colspan="4" style="padding-left: 0px; padding-top: auto; text-align: center;">

			</td>
		</tr>
</table>


<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: auto; background-color: white" width="1050px" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.0em">
			<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
			<div class="progress1">
			  <div class="circle done">
				<span class="label">1</span>
				<span class="title">Cart</span>
			  </div>
			  <span class="bar done"></span>
			  <div class="circle active">
				<span class="label">2</span>
				<span class="title">Confirmation</span>
			  </div>
			  <span class="bar half"></span>
			  <div class="circle">
				<span class="label">3</span>
				<span class="title">Complete</span>
			  </div>
			</div>
		</td>
	</tr>
</table>


<script src="chosen/docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="chosen/chosen.jquery.js" type="text/javascript"></script>
<script src="chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="chosen/docsupport/init.js" type="text/javascript" charset="utf-8"></script>

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
