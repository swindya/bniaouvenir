<!DOCTYPE HTML>
<html>
<?php
session_start();
if (isset($_SESSION['statuslogin'])){
}
else {
	$_SESSION['statuslogin'] = 1;
}
?>
<head>
<title>Simple Login Form</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">

<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">

<link rel="stylesheet" type="text/css" href="css/structure.css">
<link rel="stylesheet" href="css/loginstyle.css">

<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anaheim|Cabin|Cantarell|Dosis|Lato|Khula|Kanit|Rajdhani|Jura|Assistant|Merriweather+Sans|Montserrat|Mukta+Mahee|Mukta+Malar|Muli|Noto+Sans|Nunito|Nunito+Sans|Open+Sans|Oxygen|PT+Sans|PT+Sans+Narrow|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Slab|Slabo+27px|Titillium+Web|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ABeeZee|Abel|Amaranth|Arimo|Armata|Assistant|Barlow|Barlow+Semi+Condensed|Boogaloo|Cabin|Cabin+Condensed|Cambay|Cantarell|Caveat|Chivo|Cinzel|Contrail+One|Courgette|Cuprum|Didact+Gothic|Dosis|Economica|Electrolize|Fira+Sans|Gudea|Hammersmith+One|Hind|Hind+Madurai|Hind+Siliguri|Hind+Vadodara|Itim|Jaldi|Josefin+Slab|Kalam|Kanit|Khand|Khula|Maven+Pro|Merriweather+Sans|Molengo|Montserrat+Alternates|Mukta+Mahee|Muli|News+Cycle|Orbitron|Overpass|PT+Sans+Caption|PT+Sans+Narrow|Pavanam|Play|Playball|Poiret+One|Quattrocento+Sans|Questrial|Quicksand|Rajdhani|Righteous|Rokkitt|Ropa+Sans|Sacramento|Sarala|Scada|Share|Signika|Tangerine|Titillium+Web|Ubuntu+Condensed|Varela+Round|Yanone+Kaffeesatz|Yantramanav" rel="stylesheet">

	  
<style>
body {
    background-image:url("images/signinbg.jpg");
    background-position:center top;
    background-repeat: no-repeat;
    background-size: 100%;
}
</style>

<script>
function cekregisterdata() {

	var uname = document.getElementsByName("registeruname")[0].value;
	var pwd = document.getElementsByName("registerpwd")[0].value;
	var email = document.getElementsByName("registeremail")[0].value;
	
	if (email===null || email==="" || email.indexOf("@") ==-1 || email.length < 4)
	{
		alert("Harap isi alamat email dengan benar");
		return false;
	}
	if (uname.length < 3 || uname===null)
	{
		alert("Username terlalu pendek. Username minimal 4 huruf");
		return false;		
	}

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
				var a = xmlhttp.responseText;
				if (a==1 || a=="1")
				{
					alert("Username sudah ada. Harap ganti/gunakan username lain.");
					return false;
				}
				else if (a==0 || a=="0")
				{
					document.forms["myregister"].submit();
				}
			}
		}
		var linkget = "cekuname.php?uname=" + uname;
		xmlhttp.open("GET", linkget, true);
		xmlhttp.send();
	
}
</script>

<script>
function loadme()
{
	//document.getElementsByName("registeruname")[0].value = "";
	//document.getElementsByName("registerpwd")[0].value = "";
	history.pushState({}, null, 'index.php');
}
</script>


</head>

<body onload="loadme();">

<?php
$errku=0;
if (!isset($_GET["err"])) {
	$errku=0;
}
else
	$errku=$_GET["err"];
//----------------------------------------------------------------

include "koneksi.php";
include "delallitemincart.php";


session_unset(); // need to be called before session_destroy()
session_destroy();




?>

<table id="totalhargatab" align="center" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr height="20px">
        <td style="padding-left: auto; text-align: center; font-size: 1.1em; width: 500px">

		</td>
	</tr>
	<tr height="30px">
        <td style="padding-left: auto; text-align: center; font-size: 2.4em; width: 500px">
		<b></b>
		</td>
	</tr>
	<tr height="30px">
        <td style="padding-left: auto; text-align: left; font-size: 1.1em; width: 500px">
			<div class="login-page">
				<div class="form">
					<form class="register-form" name="myregister" id="myregister" action="register.php" method="post" enctype="multipart/form-data">
						<input id="registername" name="registername" type="text" placeholder="name"/>
						<input id="registeruname" name="registeruname" type="text" placeholder="Username"/>
						<input id="registerpwd" name="registerpwd" type="password" placeholder="password"/>
						<input id="registeremail" name="registeremail" type="text" placeholder="email address"/>
						<button onclick="cekregisterdata(); return false;">create</button>
						<p style="font-family: Roboto; font-size: 0.8em" class="message">Already registered? <a href="#">Sign In</a></p>
					</form>
					<form autocomplete="off" class="login-form" name="mylogin" id="mylogin" action="main.php" method="post" enctype="multipart/form-data">
					<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="250px" border="0" cellpadding="0" cellspacing="0">
						<tr height="20px">
							<td style="padding-left: auto; text-align: center; color: #FA5351; font-size: 1.1em;">
								Sign in
							</td>
						</tr>
						<tr height="20px">
							<td style="padding-left: auto; text-align: center; color: #FA5351; font-size: 1.1em;">
								to continue to BNI Souvenir
							</td>
						</tr>
						<tr height="20px">
							<td style="padding-left: auto; text-align: center; color: #FA5351; font-size: 1.1em;">
							</td>
						</tr>
					</table>
						<input id="uname" name="uname" type="text" placeholder="username" onfocus="" AutoCompleteType="Disabled"/>
						<input id="pwd" name="pwd" type="password" placeholder="password"/>
						<button>login</button>
						<p style="font-family: Roboto; font-size: 0.8em" class="message">Not registered? <a href="#" onclick="document.getElementById("errormsg").style.display='none';">Create an account</a></p>
						<p style="font-family: Roboto; font-size: 0.8em;" class="message">Lupa Password? <font color="red">Hubungi Admin</font></p>
					</form>
<?php
				if ($errku==1002)
				{
?>
					<div id="errormsg" style="font-family: Arimo;font-size: 0.7em; color: #FF2222">Username/password anda salah. Periksa kembali data anda</div>
<?php
				}
				else
				{
					
				}
?>
				</div>
			</div>
		</td>
	</tr>
</table>

<footer id="main">

</footer>

  <script src='jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>

<?php

	$_SESSION['start'] = time(); // Taking now logged in time.
	$_SESSION['userid'] = 0;
            // Ending a session in 30 minutes from the starting time.
    //$_SESSION['expire'] = $_SESSION['start'] + (2 * 60);
	//session_destroy();
?>
