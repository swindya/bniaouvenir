<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="logobnilogo.jpg" />
<title>Menu Persediaan</title>
 <meta charset="UTF-8">
<?php
//session_start();
?>

<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anaheim|Cabin|Cantarell|Dosis|Lato|Khula|Kanit|Rajdhani|Jura|Assistant|Merriweather+Sans|Montserrat|Mukta+Mahee|Mukta+Malar|Muli|Noto+Sans|Nunito|Nunito+Sans|Open+Sans|Oxygen|PT+Sans|PT+Sans+Narrow|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Slab|Slabo+27px|Titillium+Web|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ABeeZee|Abel|Amaranth|Arimo|Armata|Assistant|Barlow|Barlow+Semi+Condensed|Boogaloo|Cabin|Cabin+Condensed|Cambay|Cantarell|Caveat|Chivo|Cinzel|Contrail+One|Courgette|Cuprum|Didact+Gothic|Dosis|Economica|Electrolize|Fira+Sans|Gudea|Hammersmith+One|Hind|Hind+Madurai|Hind+Siliguri|Hind+Vadodara|Itim|Jaldi|Josefin+Slab|Kalam|Kanit|Khand|Khula|Maven+Pro|Merriweather+Sans|Molengo|Montserrat+Alternates|Mukta+Mahee|Muli|News+Cycle|Orbitron|Overpass|PT+Sans+Caption|PT+Sans+Narrow|Pavanam|Play|Playball|Poiret+One|Quattrocento+Sans|Questrial|Quicksand|Rajdhani|Righteous|Rokkitt|Ropa+Sans|Sacramento|Sarala|Scada|Share|Signika|Tangerine|Titillium+Web|Ubuntu+Condensed|Varela+Round|Yanone+Kaffeesatz|Yantramanav" rel="stylesheet">

<link rel="stylesheet" href="http://localhost/bnisouvenir/css/w3.css">

<link rel="stylesheet" type="text/css" href="cssmenu.css" />


		
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
font-weight: normal;
line-height: 1;
text-shadow: 0 -1px 1px rgba(0,0,0,0.25); 
} 
.medium.button, .medium.button:visited {
font-size: 15px;
padding: 8px 18px 8px;
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
    width:1100px; 
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
    max-width: 840px;
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
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

<style>
input.search-query {
    padding-left:26px;
	height: 30px;
}

form.form-search {
    position: relative;
}

form.form-search:before {
    content:'';
    display: block;
    width: 14px;
    height: 14px;
    background-image: url(./images/glyphicons-halflings.png);
    background-position: -48px 0;
    position: absolute;
    top:8px;
    left:8px;
    opacity: .5;
    z-index: 1000;
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
function viewshopme(userid, levelid, jenisshopping, jenissort)
{

	if (levelid==1 || levelid==2)
	{
		document.getElementsByName("jenissethargabarang")[0].value = jenisshopping;
		document.getElementsByName("seturut")[0].value = jenissort;
		document.forms["mesetshopping"].submit();
	}
	else
	{
		document.getElementsByName("jenishargabarang")[0].value = jenisshopping;
		document.getElementsByName("urut")[0].value = jenissort;
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
function viewsearchme(userid, levelid, jenisshopping, jenissort, statuscari)
{
	var stringcari = document.getElementsByName("searchstring")[0].value;
	if (levelid==1 || levelid==2)
	{
		document.getElementsByName("jenissethargabarang")[0].value = jenisshopping;
		document.getElementsByName("seturut")[0].value = jenissort;
		document.getElementsByName("statussearch2")[0].value = statuscari;
		document.getElementsByName("caristringadmin")[0].value = stringcari;
		document.forms["mesetshopping"].submit();
	}
	else
	{
		document.getElementsByName("jenishargabarang")[0].value = jenisshopping;
		document.getElementsByName("urut")[0].value = jenissort;
		document.getElementsByName("statussearch1")[0].value = statuscari;
		document.getElementsByName("caristring")[0].value = stringcari;
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
//$userid=0;
if (!isset($_POST["userid"])) {
	$userid = 0;
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

//----------------------------------------------------------------
if ($userid==0)
{
	if (!isset($_SESSION["userid"])) {
		$userid=0;
	}
	else
		$userid=$_SESSION["userid"];
}

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

# query the users table for name and surname
if ($userid==0)
{
	$query = "SELECT * FROM user WHERE (username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "'));";
}
else
{
	$query = "SELECT * FROM user WHERE (ID=" . $userid . ");";
}
//echo "<br><br><br>------" . $userid . "++" . $sortharga . "==" . $query;
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
		$userid = $row['ID'];
		$statusaktif = $row['statusactive'];
	}
}
if ($row_cnt == 0)
{
?>
<meta http-equiv="refresh" content="0; url=index.php?err=1002" />
<?php
	
}
else if ($row_cnt > 0)
{

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
 /* determine number of rows result set */
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

	if ($sortharga===0)
	{
		$sql = "SELECT * FROM products ORDER BY ID ASC;";
	}
	else if (strtoupper($sortharga)==="MURAH")
	{
		$sql = "SELECT * FROM products ORDER BY price DESC;";
	}
	else if (strtoupper($sortharga)==="MAHAL")
	{
		$sql = "SELECT * FROM products ORDER BY price ASC;";
	}
	//echo "<br><br><br><br>" . $sortharga . "--" . $sql;
	$row_cnt = 0;
	$result = mysqli_query($link, $sql);
	if ($result) {
	 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		$i = 0;
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$idku[$i] = $row['ID'];
			$nameku[$i] = $row['name'];
			$skuku[$i] = $row['sku'];
			$colorku[$i] = $row['color'];
			$priceku[$i] = $row['price'];
			$discountku[$i] = $row['discount'];
			$discountpriceku[$i] = $row['discountprice'];
			$imagepathnumberku[$i] = $row['imagepathnumber'];
			$imagename1ku[$i] = $row['imagename'];
			$imagename2ku[$i] = $row['imagename2'];
			$imagename3ku[$i] = $row['imagename3'];
			$imagepathku[$i] = $row['imagepath'];
			$image1ku[$i] = $imagepathku[$i] . "large/" . $imagename1ku[$i];
			$image2ku[$i] = $imagepathku[$i] . "large/" . $imagename2ku[$i];
			$image3ku[$i] = $imagepathku[$i] . "large/" . $imagename3ku[$i];
		}
	}
	$jmldata = $i;
	
//-----------------------------------------------------------------------------------------------------
$query = "SELECT * FROM banner;";
//echo "<br><br><br>---------------------" . $query;

$row_cnt = 0;
$imagefile1y = "";
$imagefile2y = "";
$imagefile3y = "";
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
		$bannerfile1y = $row['filename1'];
		$bannerfile2y = $row['filename2'];
		$bannerfile3y = $row['filename3'];
		$bannerfilepathy = $row['filepath'];
		$url1 = $row['tautan1'];
		$url2 = $row['tautan2'];
		$url3 = $row['tautan3'];
		$imagefile1y = $bannerfilepathy . $bannerfile1y;
		$imagefile2y = $bannerfilepathy . $bannerfile2y;
		$imagefile3y = $bannerfilepathy . $bannerfile3y;
	}
}
//-----------------------------------------------------------------------------------------------------

?>

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


	<div align="center">
	<table class="center" style="margin-top: 30px;" width="1160px" border="0" cellspacing="0" cellpadding="0">
		<!--tr height="20px">
			<td style="padding-left: 200px;text-align: left; font-size: 2.0em; font-family: Assistant">
				<b>Produk Baru</b>
			</td>
		</tr-->
		<tr height="50px">
			<td style="padding-left: auto; text-align: center; font-size: 2.0em; font-family: Assistant" width="115px">
			</td>
			<td style="padding-left: auto; text-align: center; font-size: 2.0em; font-family: Assistant" width="900px">
				<div class="w3-content w3-display-container">
<?php
				$ax = 0;
				$bx = 0;
				$cx = 0;
				if (strlen($bannerfile1y)>3)
				{
					$ax = 1;
?>
					<a href="<?php echo "http://" . $url1;?>" target="_blank"><img class="mySlides" src="<?php echo $imagefile1y;?>"></a>
<?php
				}
				if (strlen($bannerfile2y)>3)
				{
					$bx = 1;
?>
					<a href="<?php echo "http://" . $url2;?>" target="_blank"><img class="mySlides" src="<?php echo $imagefile2y;?>"></a>
<?php
				}
				if (strlen($bannerfile3y)>3)
				{
					$cx = 1;
?>
					<a href="<?php echo "http://" . $url3;?>" target="_blank"><img class="mySlides" src="<?php echo $imagefile3y;?>"></a>
<?php
				}
?>
					  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
						<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
						<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
<?php
					if ($ax==1)
					{
?>
						<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
<?php
					}
					if ($bx ==1)
					{
?>
						<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
<?php
					}
					if ($cx ==1)
					{
?>
						<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
<?php
					}
?>
					  </div>
				</div>
			</td>
			<td style="padding-left: auto; text-align: center; font-size: 2.0em; font-family: Assistant" width="115px">
			</td>
		</tr>
	</table>

	<table class="center" style="margin-top: auto;" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr height="20px">
			<td style="padding-left: 200px;text-align: left; font-size: 2.0em; font-family: Assistant">
				
			</td>
		</tr>
		<tr height="20px" valign="middle">
			<td style="padding-left: 130px; padding-top: 0px;text-align: left; font-family: Assistant">
					<form class="form-search form-inline">
						<div class="input-append">
							<input type="text; font-size: 1.2em;" class="search-query" id="searchstring" name="searchstring" placeholder="Search..." onchange="viewsearchme(<?php echo $userid;?>,<?php echo $levelidku;?>,'urut',0,1)"/>
							<a class="button blue medium" onclick="viewsearchme(<?php echo $userid;?>,<?php echo $levelidku;?>,'urut',0,1)">Search</a>
						</div>
					</form>
			</td>
		</tr>
	</table>
	
	<table class="center" style="margin-top: 10px;" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr height="0px">
			<td style="padding-left: 200px;text-align: left; font-size: 2.0em; font-family: Assistant">
				
			</td>
		</tr>
		<tr>
			<td style="padding-left: auto;text-align: right; font-size: 1.1em; font-family: Assistant">
				<div style="font-size: 1.1em; font-family: Assistant" class="container">  
						<select class="selectpicker" id="mysort" name="mysort" onchange="viewshopme(<?php echo $userid;?>,<?php echo $levelidku;?>,'urut', this.value);">
						<!--select class="selectpicker" id="mysort" name="mysort" onchange="alert('OKE');"-->
							<option value="0">Urutkan</option>
							<option value="1">Harga Termurah s/d Tertinggi</option>
							<option value="2">Harga Tertinggi s/d Termurah</option>
							<option value="3">A - Z</option>
						</select>
				</div>
			</td>
		</tr>
		<tr>
			<td style="text-align: center">
				<div class="container">
					<div class="row">
						<div class="row">
							<div class="col-md-9">
							</div>
							<div class="col-md-3">
								<!- Controls ->
								<div class="controls pull-right hidden-xs">
									<a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
										data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
											data-slide="next"></a>
								</div>
							</div>
						</div>
						<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
							<!- Wrapper for slides ->
							<div class="carousel-inner">
								<div class="item active">
									<div class="row">
										<div class="col-sm-4">
											<div class="col-item">
												<div class="photo">
													<img src="<?php echo $image1ku[$jmldata];?>" onclick="viewproduct(<?php echo $idku[$jmldata];?>,<?php echo $levelidku;?>);" width="200px" height="200px" alt="a"></a>
												</div>
												<div class="info">
													<div class="row">
														<div class="price col-md-8">
															<h5><?php echo $nameku[$jmldata];?></h5>
															<h5 class="price-text-color"><?php echo "Rp. " . "&nbsp;" . number_format($priceku[$jmldata],0);?></h5>
														</div>
														<div>
															<h5><?php echo $skuku[$jmldata];?></h5>
														</div>
													</div>
													<div class="separator clear-left">
														<p class="btn-add">
<?php
														if ($levelidku==3)
														{
?>
															<i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm" onclick="addtocart(<?php echo $userid;?>,<?php echo $idku[$jmldata];?>);">Add to cart</a></p>
<?php
														}
?>
														<p class="btn-details">
<?php
														if ($levelidku==1 || $levelidku==2)
?>														{
															<i class="fa fa-list"></i><a href="#" class="hidden-sm" onclick="viewproduct(<?php echo $idku[$jmldata];?>,<?php echo $levelidku;?>);">Details</a></p>
<?php
														}
														else if ($levelidku==2)
														{
?>														
															<i class="fa fa-list"></i><a href="#" class="hidden-sm" onclick="viewproduct(<?php echo $idku[$jmldata];?>,<?php echo $levelidku;?>);">Details</a></p>
<?php
														}
?>

													</div>
													<div class="clearfix">
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="col-item">
												<div class="photo">
													<img src="<?php echo $image1ku[$jmldata-1];?>" onclick="viewproduct(<?php echo $idku[$jmldata-1];?>,<?php echo $levelidku;?>);" width="200px" height="200px" alt="a"></a>
												</div>
												<div class="info">
													<div class="row">
														<div class="price col-md-8">
															<h5><?php echo $nameku[$jmldata-1];?></h5>
															<h5 class="price-text-color"><?php echo "Rp. " . "&nbsp;" . number_format($priceku[$jmldata-1],0);?></h5>
														</div>
														<div>
															<h5><?php echo $skuku[$jmldata-1];?></h5>
														</div>												
													</div>
													<div class="separator clear-left">
														<p class="btn-add">
<?php
														if ($levelidku==3)
														{
?>
															<i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm" onclick="addtocart(<?php echo $userid;?>,<?php echo $idku[$jmldata-1];?>);">Add to cart</a></p>
<?php
														}
?>
														<p class="btn-details">
															<i class="fa fa-list"></i><a href="#" class="hidden-sm" onclick="viewproduct(<?php echo $idku[$jmldata-1];?>,<?php echo $levelidku;?>);">Details</a></p>
													</div>
													<div class="clearfix">
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="col-item">
												<div class="photo">
													<img src="<?php echo $image1ku[$jmldata-2];?>" onclick="viewproduct(<?php echo $idku[$jmldata-2];?>,<?php echo $levelidku;?>);" width="200px" height="200px" alt="a"></a>
												</div>
												<div class="info">
													<div class="row">
														<div class="price col-md-8">
															<h5><?php echo $nameku[$jmldata-2];?></h5>
															<h5 class="price-text-color"><?php echo "Rp. " . "&nbsp;" . number_format($priceku[$jmldata-2],0);?></h5>
														</div>
														<div>
															<h5><?php echo $skuku[$jmldata-2];?></h5>
														</div>												
													</div>
													<div class="separator clear-left">
														<p class="btn-add">
<?php
														if ($levelidku==3)
														{
?>
															<i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm" onclick="addtocart(<?php echo $userid;?>,<?php echo $idku[$jmldata-2];?>);">Add to cart</a></p>
<?php
														}
?>
														<p class="btn-details">
															<i class="fa fa-list"></i><a href="#" class="hidden-sm" onclick="viewproduct(<?php echo $idku[$jmldata-2];?>,<?php echo $levelidku;?>);">Details</a></p>
													</div>
													<div class="clearfix">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row">
										<div class="col-sm-4">
											<div class="col-item">
												<div class="photo">
													<img src="<?php echo $image1ku[$jmldata];?>" onclick="viewproduct(<?php echo $idku[$jmldata];?>,<?php echo $levelidku;?>);" width="200px" height="200px" alt="a"></a>
												</div>
												<div class="info">
													<div class="row">
														<div class="price col-md-8">
															<h5><?php echo $nameku[$jmldata];?></h5>
															<h5 class="price-text-color"><?php echo "Rp. " . "&nbsp;" . number_format($priceku[$jmldata],0);?></h5>
														</div>
														<div>
															<h5><?php echo $skuku[$jmldata];?></h5>
														</div>												
													</div>
													<div class="separator clear-left">
														<p class="btn-add">
<?php
														if ($levelidku==3)
														{
?>
															<i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm" onclick="addtocart(<?php echo $userid;?>,<?php echo $idku[$jmldata];?>);">Add to cart</a></p>
<?php
														}
?>
														<p class="btn-details">
															<i class="fa fa-list"></i><a href="#" class="hidden-sm" onclick="viewproduct(<?php echo $idku[$jmldata];?>,<?php echo $levelidku;?>);">Details</a></p>
													</div>
													<div class="clearfix">
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="col-item">
												<div class="photo">
													<img src="<?php echo $image1ku[$jmldata-1];?>" onclick="viewproduct(<?php echo $idku[$jmldata-1];?>,<?php echo $levelidku;?>);" width="200px" height="200px" alt="a"></a>
												</div>
												<div class="info">
													<div class="row">
														<div class="price col-md-8">
															<h5><?php echo $nameku[$jmldata-1];?></h5>
															<h5 class="price-text-color"><?php echo "Rp. " . "&nbsp;" . number_format($priceku[$jmldata-1],0);?></h5>
														</div>
														<div>
															<h5><?php echo $skuku[$jmldata-1];?></h5>
														</div>												
													</div>
													<div class="separator clear-left">
														<p class="btn-add">
<?php
														if ($levelidku==3)
														{
?>
															<i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm" onclick="addtocart(<?php echo $userid;?>,<?php echo $idku[$jmldata-1];?>);">Add to cart</a></p>
<?php
														}
?>
														<p class="btn-details">
															<i class="fa fa-list"></i><a href="#" class="hidden-sm" onclick="viewproduct(<?php echo $idku[$jmldata-1];?>);">Details</a></p>
													</div>
													<div class="clearfix">
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="col-item">
												<div class="photo">
													<img src="<?php echo $image1ku[$jmldata-2];?>" onclick="viewproduct(<?php echo $idku[$jmldata-2];?>,<?php echo $levelidku;?>);" width="200px" height="200px" alt="a"></a>
												</div>
												<div class="info">
													<div class="row">
														<div class="price col-md-8">
															<h5><?php echo $nameku[$jmldata-2];?></h5>
															<h5 class="price-text-color"><?php echo "Rp. " . "&nbsp;" . number_format($priceku[$jmldata-2],0);?></h5>
														</div>
														<div>
															<h5><?php echo $skuku[$jmldata-2];?></h5>
														</div>													
													</div>
													<div class="separator clear-left">
														<p class="btn-add">
<?php
														if ($levelidku==3)
														{
?>
															<i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm" onclick="addtocart(<?php echo $userid;?>,<?php echo $idku[$jmldata-2];?>);">Add to cart</a></p>
<?php
														}
?>
														<p class="btn-details">
															<i class="fa fa-list"></i><a href="#" class="hidden-sm" onclick="viewproduct(<?php echo $idku[$jmldata-2];?>);">Details</a></p>
													</div>
													<div class="clearfix">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</td>
		</tr>
		<tr valign="middle" height="40px">
			<td style="padding-left: auto;text-align: right; font-size: 1.1em; font-family: Assistant">
				<div class="container">                                        
					<a href="#" onclick="viewshopmemore(<?php echo $userid;?>,<?php echo $levelidku;?>,'nourut');" class="hidden-sm"><b>See more</b></a>
				</div>
			</td>
		</tr>
	</table>
	</div>
	
<script>
var myIndex = 0;
carousel();

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

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
		<input type="hidden" id="statussearch1" name="statussearch1">
		<input type="hidden" id="caristring" name="caristring">
	</form>
	<form name="mesetshopping" id="mesetshopping" action="set_shopping.php" method="post" enctype="multipart/form-data">
		<input type="hidden" id="useridsshop" name="useridsshop" value="<?php echo $useridku;?>">
		<input type="hidden" id="jenissethargabarang" name="jenissethargabarang">
		<input type="hidden" id="seturut" name="seturut">
		<input type="hidden" id="statussearch2" name="statussearch2">
		<input type="hidden" id="caristringadmin" name="caristringadmin">
	</form>

	<form method="post" name="myviewcart" id="myviewcart" action="viewtocart.php" enctype="multipart/form-data">
		<input type="hidden" id="useridvc" name="useridvc" value="<?php echo $useridku;?>">
	</form>

	<form name="meeditproduct" id="meeditproduct" action="editproduct.php" method="post" enctype="multipart/form-data">
		<input type="hidden" id="useridedit" name="useridedit" value="<?php echo $useridku;?>">
		<input type="hidden" id="barangid" name="barangid">
		<input type="hidden" id="seturut" name="seturut">
	</form>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
<?php


//*******************************************************************************************************

	$_SESSION['userid'] = $userid;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;


//echo "<br><br><br>--------------------" . $userid;
//*******************************************************************************************************

?>
</html>
