<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<style>
/*COLOR Rules */
@black:#231f20;
@white:#FFF;
@linkcolor:#0B8C8C;
@linkColor:#0B8C8C;
@success:#6caa2f;
@twitter:#00acee;
@facebook:#054886;
@google:#c93213;
@instagram:#beb8ac;
@flickr:#0059b3;
@soundcloud:#f7760e;
@vimeo:#1bb7ea;
@youtube:#eb1c24;
@tumblr:#365069;
@grayLight:lighten(@black,75%);
/**KULER BASE**/
//https://kuler.adobe.com/#themeID/2167235
@base:#0B8C8C;
@orange:#E7781B;
@brown:#4A3C33;
@lightblue:#C2D0D3;
@grey:#F0EEEF;
@lightgray:#f0f0f0;
@lightbrown:#ecece1;
.span(@space:1){
display:block;
 width:@space*100px;   
}
.text-shadow (@string: 0 1px 3px rgba(0, 0, 0, 0.25)) {
    text-shadow: @string;
}
.box-shadow (@string) {
	-webkit-box-shadow: @string;
	-moz-box-shadow:    @string;
	box-shadow:         @string;
}
.drop-shadow (@x: 0, @y: 1px, @blur: 2px, @spread: 0, @alpha: 0.25) {
	-webkit-box-shadow:	@x @y @blur @spread rgba(0, 0, 0, @alpha);
	-moz-box-shadow:	@x @y @blur @spread rgba(0, 0, 0, @alpha);
	box-shadow:		@x @y @blur @spread rgba(0, 0, 0, @alpha);
}
.inner-shadow (@x: 0, @y: 1px, @blur: 2px, @spread: 0, @alpha: 0.25) {
	-webkit-box-shadow: inset @x @y @blur @spread rgba(0, 0, 0, @alpha);
	-moz-box-shadow:    inset @x @y @blur @spread rgba(0, 0, 0, @alpha);
	box-shadow:         inset @x @y @blur @spread rgba(0, 0, 0, @alpha);
}

.box-sizing (@type: border-box) {
	-webkit-box-sizing: @type;
	-moz-box-sizing:    @type;
	box-sizing:         @type;
}

.border-radius (@radius: 5px) {
	-webkit-border-radius: @radius;
	-moz-border-radius:    @radius;
	border-radius:         @radius;

	-moz-background-clip:    padding;
	-webkit-background-clip: padding-box;
	background-clip:         padding-box;
}
.border-radiuses (@topright: 0, @bottomright: 0, @bottomleft: 0, @topleft: 0) {
	-webkit-border-top-right-radius:    @topright;
	-webkit-border-bottom-right-radius: @bottomright;
	-webkit-border-bottom-left-radius:  @bottomleft;
	-webkit-border-top-left-radius:     @topleft;

	-moz-border-radius-topright:        @topright;
	-moz-border-radius-bottomright:     @bottomright;
	-moz-border-radius-bottomleft:      @bottomleft;
	-moz-border-radius-topleft:         @topleft;

	border-top-right-radius:            @topright;
	border-bottom-right-radius:         @bottomright;
	border-bottom-left-radius:          @bottomleft;
	border-top-left-radius:             @topleft;

	-moz-background-clip:    padding; 
	-webkit-background-clip: padding-box; 
	background-clip:         padding-box; 
}

.opacity (@opacity: 0.5) {
	-webkit-opacity: 	@opacity;
	-moz-opacity: 		@opacity;
	opacity: 		@opacity;
}

.gradient (@startColor: #eee, @endColor: white) {
	background-color: @startColor;
	background: -webkit-gradient(linear, left top, left bottom, from(@startColor), to(@endColor));
	background: -webkit-linear-gradient(top, @startColor, @endColor);
	background: -moz-linear-gradient(top, @startColor, @endColor);
	background: -ms-linear-gradient(top, @startColor, @endColor);
	background: -o-linear-gradient(top, @startColor, @endColor);
}
.horizontal-gradient (@startColor: #eee, @endColor: white) {
 	background-color: @startColor;
	background-image: -webkit-gradient(linear, left top, right top, from(@startColor), to(@endColor));
	background-image: -webkit-linear-gradient(left, @startColor, @endColor);
	background-image: -moz-linear-gradient(left, @startColor, @endColor);
	background-image: -ms-linear-gradient(left, @startColor, @endColor);
	background-image: -o-linear-gradient(left, @startColor, @endColor);
}

.animation (@name, @duration: 300ms, @delay: 0, @ease: ease) {
	-webkit-animation: @name @duration @delay @ease;
	-moz-animation:    @name @duration @delay @ease;
	-ms-animation:     @name @duration @delay @ease;
}

.transition (@transition) {
	-webkit-transition: @transition;  
	-moz-transition:    @transition;
	-ms-transition:     @transition; 
	-o-transition:      @transition;  
}
.backface(){
backface-visibility:hidden;
-webkit-backface-visibility:hidden; /* Chrome and Safari */
-moz-backface-visibility:hidden; /* Firefox */
-ms-backface-visibility:hidden; /* Internet Explorer */
}
.transform(@string){
	-webkit-transform: @string;
	-moz-transform: 	 @string;
	-ms-transform: 		 @string;
	-o-transform: 		 @string;
}
.scale (@factor) {
	-webkit-transform: scale(@factor);
	-moz-transform: 	 scale(@factor);
	-ms-transform: 		 scale(@factor);
	-o-transform: 		 scale(@factor);
}
.rotate (@deg) {
	-webkit-transform: rotate(@deg);
	-moz-transform: 	 rotate(@deg);
	-ms-transform: 		 rotate(@deg);
	-o-transform: 		 rotate(@deg);
}
.skew (@deg, @deg2) {
	-webkit-transform:       skew(@deg, @deg2);
	-moz-transform: 	 skew(@deg, @deg2);
	-ms-transform: 		 skew(@deg, @deg2);
	-o-transform: 		 skew(@deg, @deg2);
}
.translate (@x, @y:0) {
	-webkit-transform:       translate(@x, @y);
	-moz-transform: 	 translate(@x, @y);
	-ms-transform: 		 translate(@x, @y);
	-o-transform: 		 translate(@x, @y);
}
.translate3d (@x, @y: 0, @z: 0) {
	-webkit-transform:       translate3d(@x, @y, @z);
	-moz-transform: 	 translate3d(@x, @y, @z);
	-ms-transform: 		 translate3d(@x, @y, @z);
	-o-transform: 		 translate3d(@x, @y, @z);
}
.perspective (@value: 1000) {
	-webkit-perspective: 	@value;
	-moz-perspective: 	@value;
	-ms-perspective: 	@value;
	perspective: 		@value;
}
.transform-origin (@x:center, @y:center) {
	-webkit-transform-origin: @x @y;
	-moz-transform-origin:    @x @y;
	-ms-transform-origin:     @x @y;
	-o-transform-origin:      @x @y;
}

.box-sizing (@type: border-box) {
-webkit-box-sizing: @type;
-moz-box-sizing:    @type;
box-sizing:         @type;
}
.placeholder(@color: @placeholderText) {
            :-moz-placeholder {
            color: @color;
        }
        ::-webkit-input-placeholder {
            color: @color;
        }
    }
    
// For desktops
.visible-phone { display: none !important; }
.visible-tablet { display: none !important; }
.hidden-phone { }
.hidden-tablet { }
.hidden-desktop { display: none !important; }
.visible-desktop { display: inherit !important; }
// Tablets & small desktops only
@media (min-width: 768px) and (max-width: 979px) {
  // Hide everything else
  .hidden-desktop { display: inherit !important; }
  .visible-desktop { display: none !important ; }
  .navbar{overflow:visible;}
  // Show
  .visible-tablet { display: inherit !important; }
  // Hide
  .hidden-tablet { display: none !important; }
}

// Phones only
@media (max-width: 767px) {
  // Hide everything else
  .hidden-desktop { display: inherit !important; }
  .visible-desktop { display: none !important; }
  .navbar{overflow:visible;}
  // Show
  .visible-phone { display: inherit !important; } // Use inherit to restore previous behavior
  // Hide
  .hidden-phone { display: none !important; }
}html{ background:#FFFFFF;}
body{
  padding:0;margin:0;font-family: 'Open Sans', sans-serif;  
font-weight:300;}
*,*:after,*::before {
.box-sizing();
}
.navbar{
position:fixed;
z-index:99;
width:100%;
min-width:920px;
top: 0px;
height:50px;
max-height:50px;
background-color: white;

.gradient (@base,darken(@base,1%));
border-bottom:2px solid lighten(@base,2%);
.drop-shadow(0,2px,2px,0,.2);
}
.brand{
 float:left;
 padding:10px 10px;margin:10px;
 padding:1px 5px;
 display:inline-block;
 background-color: white;
}
.nav{
padding:0;margin:0;
display:block;
float: right;
}
.nav li{
position:relative;
height:40px;
color:white;
display:block;
//vertical-align:middle;
list-style:none;
 float:left;
 padding:6px 15px;//Change on media queries
 a{color:white;text-decoration:none;}
}
.nav li:first-child{border-left:1px solid darken(@base,5%);}
.nav li:nth-last-child(3){border-right:1px solid darken(@base,5%);}
.nav li:hover,.active-drop{background:lighten(@base,5%);
ul.dropdown-menu{
 padding:0;margin:0;
border:none;
background:@base;
 position:absolute;
 z-index:98;
 top:40px;
 right:0;
 display:block;
 width:250px;   
}
ul.dropdown-menu li{
    width:100%;
    line-height:20px;
    border:none;margin:0;}
}
.nav li.admin{float:right;}
//handle Search
.nav li.search{
    width:45px;
    border-right:1px solid darken(@base,5%);
    overflow:hidden;
    .transition(all .5s ease-in-out);
  .backface();
}
.nav li.search:hover,.active-search{
 width:250px;   
}
.navbar-search{position:absolute; top:5px; left:45px;
input{font-weight:300;font-size:1em;
border:none;
background:darken(@base,10%);
color:white;
.border-radius (5px);
}//input
}//search
.icon-angle-down{padding-left:3px;}
ul.dropdown-menu{
display:none;
}


</style>
<script>
function mylogout()
{
	document.forms["mylogout"].submit();
}
</script>

<script>
function myaccount()
{
	document.forms["myviewacc"].submit();
}
</script>
<script>
function logout()
{
	document.forms["mylogout"].submit();
}
</script> 

<script>

</script>

</head>


<?php

/*
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
*/
//----------------------------------------------------------------

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
			
//echo "<br><br><br><br>menu-1--------------------------" . $query;

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
?>


	<div class="navbar">
	<a class="brand" href="#"><img src="./images/logobnismall.png"  width="120" height="40"/></a>
	<!--MOBILE-->

	<div class="navbar-inner visible-desktop">
		<ul class="nav">
			<!--li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Create<span class="icon-angle-down"></span></a>
				<ul class="dropdown-menu">
					<li><a href="/createStream">Create Stream</a></li>
					<li><a href="/createAlbum">Create Album</a></li>
					<li><a href="/createGroup">Create Group</a></li>
				</ul>
			</li-->
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-folder-open" style="color: #007A71; font-size: 1.4em"> </i><font color="#333" size="2">Order</font> </a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-shopping-cart" style="color: #007A71; font-size: 1.4em"></i>  &nbsp;<font color="red" size="2"> 2 </font></a>
			</li>
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-user" style="color: #007A71; font-size: 1.4em"></i><?php echo "   " . $namaku . "  ";?><span class="icon-angle-down"></span></a>
				<ul class="dropdown-menu">
					<li><a href="myprofile.php">Profile</a></li>
					<li><a href="index.php" onclick="logout();">Log Out</a></li>
				</ul>
			</li>
		</ul>

		
	</div>
	</div>
	
	<form name="mylogout" id="mylogout" action="index.php" method="post" enctype="multipart/form-data">
		<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
	</form>

	<!--jquery-->
	<script src="https://codeorigin.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/navigation.js" type="text/javascript"></script>
 
