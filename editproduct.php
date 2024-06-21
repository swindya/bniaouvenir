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
font-size: 14px
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
input[type="radio"] {
  margin-top: -2px;
  vertical-align: middle;
  height: 100%;
}
</style>


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
function hapusimage(a, userid, idku)
{
	var retVal = confirm("Anda yakin akan hapus foto/image produk ?");
    if( retVal == true ){
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				//document.getElementsByName("satuan")[0].value = this.responseText;
//alert(this.responseText);
				//if (this.responseText == 1 || this.responseText == "1")
				//{
				//	alert("Produk sudah di-hapus");
				//}
				location.reload();
			}
		};
		var strku = "delimage.php?userid="+userid+"&aaa="+a+"&prodid="+idku;
//alert(strku);
		xmlhttp.open("GET",strku,true);
		xmlhttp.send();
	}

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
	if (!isset($_POST["useridedit"])) {
	}
	else
		$userid=$_POST["useridedit"];
}
if ($userid==0)
	$userid=$_SESSION["useridedit"];
//----------------------------------------------------------------
$prodid=0;
if (!isset($_POST["barangid"])) {
	$prodid=0;
}
else
	$prodid=$_POST["barangid"];
if ($prodid==0)
	$prodid=$_GET["barangid"];
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

$query = "SELECT
				user.ID AS userid,
				user.nama AS nama,
				user.username AS username,
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

//-------------------------------------------------------------------------------------------
//Baca data di tabel orderlistbarangvendorpfa
//-------------------------------------------------------------------------------------------

$query = "SELECT * FROM products WHERE (ID=" . $prodid . ");";
//echo "<br><br><br>---------------------" . $query;

$row_cnt = 0;
$jmllistbarang = 0;
$j = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$idx = $row['ID'];
		$namex = $row['name'];
		$skux = $row['sku'];
		$colorx = $row['color'];
		$slugx = $row['slug'];
		$descriptionx = $row['description'];
		$pricex = $row['price'];
		$jmlstokx = $row['jmlstok'];
		$discpricex = $row['discountprice'];
		$materialx = $row['bahan'];
		$sizex = $row['size'];
		$packagingx = $row['packaging'];
		$warrantyx = $row['warranty'];
		$kategorix = $row['kategori'];
		$imagefilenamex = $row['imagename'];
		$imagefilename2x = $row['imagename2'];
		$imagefilename3x = $row['imagename3'];
		$imagefilepathx = $row['imagepath'];
		$imagefilex = $imagefilepathx . "small/" . $imagefilenamex;
		$imagefile2x = $imagefilepathx . "small/" . $imagefilename2x;
		$imagefile3x = $imagefilepathx . "small/" . $imagefilename3x;
	}
}
$jmlbarang = $j;

//echo "<br><br><br><br><br>-----------------------" . $imagefilepathx . "--" . $imagefilex . "-" . $imagefilename2x . "-" . $imagefilename3x;


?>
<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 100px;" width="840px" border="0" cellspacing="0" cellpadding="0">
	<tr height="50px">
			<td style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>
	</tr>
	<tr height="30px">
			<td style="padding-right: 20px; padding-top: auto; text-align: left; font-size: 1.8em">
				<font face="Ubuntu" color="black">Update Product</font>
			</td>		
	</tr>
	<tr height="30px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>
	</tr>
</table>


<form id="myupdatebarang" name="myupdatebarang" method="post" action="updatebarang.php" enctype="multipart/form-data">
<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="940px" border="0" cellspacing="0" cellpadding="0">
	<tr valign="top">
		<td width="640px">
			<table style="text-align: center; margin-left: auto; margin-right: auto;" width="640px" border="0" cellspacing="0" cellpadding="0">
				<tr height="35px">
					<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em; width: 170px">
							<font face="Ubuntu" color="black">Nama Produk</font>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em; width: 30px">
							<font face="Ubuntu" color="black">:</font>
					</td>
					<td style="padding-left: 10px; padding-top: auto; text-align: left; width: 380px">
							<input style="font-size: 1.1em;" type="text" class="textboxwide" id="namaproduk" name="namaproduk" value="<?php echo $namex;?>">
					</td>
				</tr>

				<tr height="35px">
					<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
						<font face="Ubuntu" color="black">Kode Produk</font>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
						<font face="Ubuntu" color="black">:</font>
					</td>
					<td style="padding-left: 10px; padding-top: auto; text-align: left;">
						<input style="font-size: 1.1em;" type="text" class="textboxwide" id="kodeproduk" name="kodeproduk" value="<?php echo $skux;?>">
					</td>
				</tr>		
				<tr valign="middle" height="35px">
					<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
						<font face="Ubuntu" color="black">Kategori</font>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
						<font face="Ubuntu" color="black">:</font>
					</td>
					<td style="padding-left: 10px; padding-top: auto; text-align: left;">
						<input input type="radio" style="padding-top: 5px; width:18px; height:18px;" id="radio1" name="radio1" value="1" onclick="checkpermintaan(this.value)" <?php if ($kategorix=="GENERIC") echo "checked";?>/>
						&nbsp;<font face="Roboto" color="black" style="font-size: 1.2em;">Generic</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input input type="radio" style="width:18px; height:18px;" id="radio1" name="radio1" value="2" onclick="checkpermintaan(this.value)" <?php if ($kategorix=="PREMIUM") echo "checked";?> />
						&nbsp;<font face="Roboto" color="black" style="font-size: 1.2em;">Premium</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input input type="radio" style="width:18px; height:18px;" id="radio1" name="radio1" value="3" onclick="checkpermintaan(this.value)" <?php if ($kategorix=="CORPORATE") echo "checked";?>/>
						&nbsp;<font face="Roboto" color="black" style="font-size: 1.2em;">Corporate</font>
					</td>
				</tr>
				<tr height="35px">
					<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
						<font face="Ubuntu" color="black">Ukuran</font>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
						<font face="Ubuntu" color="black">:</font>
					</td>
					<td style="padding-left: 10px; padding-top: auto; text-align: left;">
						<input style="font-size: 1.1em;" type="text" class="textboxwide" id="ukuran" name="ukuran" value="<?php echo $sizex;?>">
						<input type="hidden" id="harga" name="harga">
					</td>
				</tr>
				<tr valign="top" style="padding-right: auto; padding-top: auto;" height="90px">
					<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
						<font face="Ubuntu" color="black">Keterangan Lengkap</font>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
						<font face="Ubuntu" color="black">:</font>
					</td>
					<td style="padding-left: 10px; padding-right: 20px; padding-top: auto; text-align: left;">
							<textarea style="font-size: 1.1em;" class="form-control" rows="7" id="fullinfo" name="fullinfo"><?php echo $descriptionx;?></textarea>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
					</td>
				</tr>
				<tr height="35px">
					<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
						<font face="Ubuntu" color="black">Harga</font>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
						<font face="Ubuntu" color="black">:</font>
					</td>
					<td style="padding-left: 10px; padding-top: auto; text-align: left;">
						<input style="font-size: 1.1em;" type="text" class="textboxwide" id="harga0" name="harga0" value="<?php echo number_format($pricex,0);?>" onkeyup="formatnumber(this);">
						<input type="hidden" id="harga" name="harga">
						<input type="hidden" id="imagepath" name="imagepath" value="<?php echo $imagefilepathx;?>">
					</td>
				</tr>
				<tr height="35px">
					<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
						<font face="Ubuntu" color="black">Jumlah Stok</font>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
						<font face="Ubuntu" color="black">:</font>
					</td>
					<td style="padding-left: 10px; padding-top: auto; text-align: left;">
						<input style="font-size: 1.1em;" type="text" class="textboxwide" id="jmlstok" name="jmlstok" value="<?php echo number_format($jmlstokx,0);?>" onkeyup="formatnumber(this);">
					</td>
				</tr>
				<!--tr height="35px">
					<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
						<font face="Ubuntu" color="black">Harga Diskon</font>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
						<font face="Ubuntu" color="black">:</font>
					</td>
					<td style="padding-left: 10px; padding-top: auto; text-align: left;">
						<input style="font-size: 1.1em;" type="text" class="textboxwide" id="hargadisc" name="hargadisc" value="<?php echo $discpricex;?>">
					</td>
				</tr-->
				<tr height="30px">
						<td colspan="4" style="padding-left: 0px; padding-top: auto; text-align: center;">

						</td>
				</tr>
				<tr height="20px">
						<td colspan="4" style="padding-left: 0px; padding-top: auto; text-align: center;">
							<a class="large button blue" onClick="updateproducts();"> &nbsp;&nbsp;&nbsp;UPDATE & SAVE&nbsp;&nbsp;&nbsp; </a>
						</td>
				</tr>
				<tr height="30px">
						<td colspan="4" style="padding-left: 0px; padding-top: auto; text-align: center;">

						</td>
				</tr>

				<tr height="30px">
						<td colspan="4" style="padding-left: 0px; padding-top: auto; text-align: center;">
							<input type="hidden" id="useridedit" name="useridedit" value="<?php echo $useridku;?>">
							<input type="hidden" id="barangid" name="barangid" value="<?php echo $prodid;?>">
						</td>
				</tr>

			</table>
		</td>
		<td width="320px">
			<table style="valign: top; text-align: center; margin-left: auto; margin-right: auto; margin-top: auto;" width="320px" border="1" cellspacing="0" cellpadding="0">
				<tr valign="middle" height="30px">
					<td>
						File image harus dalam format jpg/jpeg
					</td>
				</tr>
				<tr valign="top" height="100px">
					<td>
						<img id="uploadPreview1" src="<?php echo $imagefilex;?>" height="80px" width="80px"/><br />
						<input id="uploadImage1" type="file" name="uploadImage1" onchange="PreviewImage(1);" />
						<a class="small button red" onClick="hapusimage(1,<?php echo $userid;?>,<?php echo $idx;?>);"> &nbsp;&nbsp;Hapus&nbsp;&nbsp; </a>
					</td>
				</tr>
				<tr valign="top" height="100px">
					<td >
						<img id="uploadPreview2" src="<?php echo $imagefile2x;?>" height="80px" width="80px"/><br />
						<input id="uploadImage2" type="file" name="uploadImage2" onchange="PreviewImage(2);" />
						<a class="small button red" onClick="hapusimage(2,<?php echo $userid;?>,<?php echo $idx;?>);"> &nbsp;&nbsp;Hapus&nbsp;&nbsp; </a>
					</td>
				</tr>
				<tr valign="top" height="100px">
					<td>
						<img id="uploadPreview3" src="<?php echo $imagefile3x;?>" height="80px" width="80px"/><br />
						<input id="uploadImage3" type="file" name="uploadImage3" onchange="PreviewImage(3);" />
						<a class="small button red" onClick="hapusimage(3,<?php echo $userid;?>,<?php echo $idx;?>);"> &nbsp;&nbsp;Hapus&nbsp;&nbsp; </a>
					</td>
				</tr>
			</table>
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
