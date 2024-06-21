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

<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anaheim|Cabin|Cantarell|Dosis|Lato|Khula|Kanit|Rajdhani|Jura|Assistant|Merriweather+Sans|Montserrat|Mukta+Mahee|Mukta+Malar|Muli|Noto+Sans|Nunito|Nunito+Sans|Open+Sans|Oxygen|PT+Sans|PT+Sans+Narrow|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Slab|Slabo+27px|Titillium+Web|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ABeeZee|Abel|Amaranth|Arimo|Armata|Assistant|Barlow|Barlow+Semi+Condensed|Boogaloo|Cabin|Cabin+Condensed|Cambay|Cantarell|Caveat|Chivo|Cinzel|Contrail+One|Courgette|Cuprum|Didact+Gothic|Dosis|Economica|Electrolize|Fira+Sans|Gudea|Hammersmith+One|Hind|Hind+Madurai|Hind+Siliguri|Hind+Vadodara|Itim|Jaldi|Josefin+Slab|Kalam|Kanit|Khand|Khula|Maven+Pro|Merriweather+Sans|Molengo|Montserrat+Alternates|Mukta+Mahee|Muli|News+Cycle|Orbitron|Overpass|PT+Sans+Caption|PT+Sans+Narrow|Pavanam|Play|Playball|Poiret+One|Quattrocento+Sans|Questrial|Quicksand|Rajdhani|Righteous|Rokkitt|Ropa+Sans|Sacramento|Sarala|Scada|Share|Signika|Tangerine|Titillium+Web|Ubuntu+Condensed|Varela+Round|Yanone+Kaffeesatz|Yantramanav" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="css/menuresponsive.css" />

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
    height: 16px; 
    width: 220px; 
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
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 80px; 
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
.navbar.navbar-default {
    min-height: 30px;
    padding-top: 0px;
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
    font-size: 87px;
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
function updateacc(userid) {

	var email = document.getElementsByName("email")[0].value;
	var nama = document.getElementsByName("nama")[0].value;
	var unitkerja = document.getElementsByName("unitkerja")[0].value;
	var namaunit = document.getElementsByName("namaunit")[0].value;
	var alamat = document.getElementsByName("alamat")[0].value;
	var kota = document.getElementsByName("kota")[0].value;
	var kodepos = document.getElementsByName("kodepos")[0].value;
	var negara = document.getElementsByName("negara")[0].value;
	var telpon = document.getElementsByName("telpon")[0].value;

	
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
                if (this.responseText==1 || this.responseText=="1")
				{
					alert("Data sudah di-upadate.");
					location.reload();
				}
            }
        };

		var strku = "updateprofile.php?userid="+userid+"&email="+email+"&nama="+nama+"&unitkerja="+unitkerja+"&namaunit="+namaunit+
				"&alamat="+alamat+"&kota="+kota+"&kodepos="+kodepos+"&negara="+negara+"&telpon="+telpon;
//alert(strku);
        xmlhttp.open("GET",strku,true);
        xmlhttp.send();
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
$('.nav-main .dropdown-submenu > a:not(a[href="#"])').on('click', function() {
    self.location = $(this).attr('href');
});
</script>

<script>
function updateaccount()
{
	document.forms["mystokperbarang"].submit();
}
</script> 

<script>
function updatemyacc()
{
	document.forms["myinfo"].submit();
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
	$userid=0;
}
else
	$userid=$_POST["userid"];
//----------------------------------------------------------------
if ($userid===0)
{
	if (!isset($_POST["useridacc"])) {
		$userid=0;
	}
	else
		$userid=$_POST["useridacc"];
}
if ($userid==0)
{
	if (!isset($_SESSION["userid"])) {
		$userid=0;
	}
	else
		$userid=$_SESSION["userid"];
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
<meta http-equiv="refresh" content="10; url=index.php" />
<?php
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";

die();
	
}

# query the users table for name and surname 
$query = "SELECT * FROM user WHERE (ID=" . $userid . ");";
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
		$useridku = $row['ID'];
		$usernamaku = $row['username'];
		$namaku = $row['nama'];
		$unitkerjaku = $row['unitkerja'];
		$namaunitku = $row['namaunit'];
		$levelidku = $row['levelid'];
		$emailku = $row['email'];
		$alamatku = $row['alamat'];
		$kotaku = $row['kota'];
		$kodeposku = $row['kodepos'];
		$telponku = $row['telpon'];
		$negaraku = $row['negara'];
		
	}
}

//echo "<br><br><br><br>++++++++++++++++++++" . $query . $namaku;
 
$now = time(); // Checking the time now when home page starts.
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
if (isset($_SESSION['expire'])) {
	if ($now > $_SESSION['expire']) {
		unset($_SESSION['username']); 
		unset($_SESSION['passwd']); 
		$_SESSION['statuslogin'] = 7;//session expired
?>
<meta http-equiv="refresh" content="0; url=index.php" />
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


<?php
//include "allmenu.php";
//include "topbar.php";

?>

 <script type="text/javascript" src="jquery.min.js"></script>


 
<?php
include "menu1.php";
include "menu2home.php";
?>



<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 35px;" width="900px" border="0" cellspacing="0" cellpadding="0">

		<tr height="30px">
			<td colspan="3" style="padding-left: 0px; padding-top: 70px; text-align: center; width: 900px">
				<b><font face="Ubuntu" color="#058181" size="6">My Account</font></b>
			</td>
		</tr>
		<tr height="10px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center; width: 900px">

			</td>
		</tr>
</table>
<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="630px" border="0" cellspacing="0" cellpadding="0">
		<tr height="30px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.8em">
				<font face="Ubuntu" color="black">My Info</font>
			</td>
			<td colspan="2" style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>			
		</tr>
		<tr height="20px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">

			</td>
		</tr>
		
	<form class="register-form" name="myinfo" id="myinfo" method="post" action="updateprofile.php" enctype="multipart/form-data">		
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em; width: 200px">
				<font face="Ubuntu" color="black">Email</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em; width: 20px">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left; width: 410px">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="email" name="email" value="<?php echo $emailku;?>">
			</td>
		</tr>
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
				<font face="Ubuntu" color="black">Nama</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="nama" name="nama" value="<?php echo $namaku;?>">
			</td>
		</tr>
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
				<font face="Ubuntu" color="black">Unit Kerja</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="unitkerja" name="unitkerja" value="<?php echo $unitkerjaku;?>">
			</td>
		</tr>		
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
				<font face="Ubuntu" color="black">Nama Unit</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="namaunit" name="namaunit" value="<?php echo $namaunitku;?>">
			</td>
		</tr>
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
				<font face="Ubuntu" color="black">Alamat</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="alamat" name="alamat" value="<?php echo $alamatku;?>">
			</td>
		</tr>
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
				<font face="Ubuntu" color="black">Kota</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="kota" name="kota" value="<?php echo $kotaku;?>">
			</td>
		</tr>
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
				<font face="Ubuntu" color="black">Kode Pos</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="kodepos" name="kodepos" value="<?php echo $kodeposku;?>">
			</td>
		</tr>
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
				<font face="Ubuntu" color="black">Negara</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="negara" name="negara" value="<?php echo $negaraku;?>">
			</td>
		</tr>
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
				<font face="Ubuntu" color="black">Telpon</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="telpon" name="telpon" value="<?php echo $telponku;?>">
			</td>
		</tr>
		<tr height="10px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">

			</td>
		</tr>
		<tr height="20px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: right;">
				<input type="hidden" id="useridacc" name="useridacc" value="<?php echo $useridku;?>">
				<a class="medium button orange" onClick="updateacc(<?php echo $userid;?>);"> &nbsp;&nbsp;&nbsp;SAVE&nbsp;&nbsp;&nbsp; </a>
			</td>
		</tr>
	</form>
		<tr height="30px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">

			</td>
		</tr>

	<form class="register-form" name="mypwd" id="mypwd" method="post" enctype="multipart/form-data">
		<tr height="30px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.8em">
				<font face="Ubuntu" color="black">Password</font>
			</td>
			<td colspan="2" style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>	
		</tr>
		<tr height="20px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">

			</td>
		</tr>
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
				<font face="Ubuntu" color="black">Password</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="password" name="password">
			</td>
		</tr>
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;">
				<font face="Ubuntu" color="black">Password Baru</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="passwordbaru" name="passwordbaru">
			</td>
		</tr>
		<tr height="40px">
			<td style="padding-right: 20px; padding-top: auto; text-align: right; font-size: 1.2em;x">
				<font face="Ubuntu" color="black">Konfirmasi Password</font>
			</td>
			<td style="padding-left: 0px; padding-top: auto; text-align: center; font-size: 1.2em;">
				<font face="Ubuntu" color="black">:</font>
			</td>
			<td style="padding-left: 10px; padding-top: auto; text-align: left;">
				<input style="font-size: 1.2em;" type="text" class="textboxwide" id="confirmpwd" name="confirmpwd">
			</td>
		</tr>
		<tr height="10px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
				<input type="hidden" id="useridpwd" name="useridpwd" value="<?php echo $useridku;?>">
			</td>
		</tr>
		<tr height="20px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: right;">
				<a class="medium button orange" onClick="simpanbansos();"> &nbsp;&nbsp;&nbsp;CHANGE PASSWORD&nbsp;&nbsp;&nbsp; </a>
			</td>
		</tr>
	</form>
		<tr height="30px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">

			</td>
		</tr>
		<tr height="30px">
			<td colspan="3" style="padding-left: 0px; padding-top: auto; text-align: center;">
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
