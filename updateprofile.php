<style>
body {
    background-image: url("images/bni3low.jpg");
	background-size: repeat;
}
</style>
<?php
session_start();

include "koneksi.php";

//-------------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];
//-------------------------------------------------
if (!isset($_GET["email"])) {
	$email=0;
}
else
	$email=$_GET["email"];
//-------------------------------------------------
if (!isset($_GET["nama"])) {
	$nama="";
}
else
	$nama=$_GET["nama"];
//-------------------------------------------------
if (!isset($_GET["unitkerja"])) {
	$unitkerja="";
}
else
	$unitkerja=$_GET["unitkerja"];
//-------------------------------------------------
if (!isset($_GET["namaunit"])) {
	$namaunit="";
}
else
	$namaunit=$_GET["namaunit"];
//-------------------------------------------------
if (!isset($_GET["alamat"])) {
	$alamat="";
}
else
	$alamat=$_GET["alamat"];
//-------------------------------------------------
if (!isset($_GET["kota"])) {
	$kota="";
}
else
	$kota=$_GET["kota"];
//-------------------------------------------------
if (!isset($_GET["kodepos"])) {
	$kodepos="";
}
else
	$kodepos=$_GET["kodepos"];
//-------------------------------------------------
if (!isset($_GET["negara"])) {
	$negara="";
}
else
	$negara=$_GET["negara"];
//-------------------------------------------------
if (!isset($_GET["telpon"])) {
	$telpon="";
}
else
	$telpon=$_GET["telpon"];
//-------------------------------------------------

//-------------------------------------------------

//$harga = intval(preg_replace('/[^\d.]/', '', $harga));
//$jmlstok = intval(preg_replace('/[^\d.]/', '', $jmlstok));


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


//---------------------------------------------------------------------------------------------------
// BACA DATA
//---------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------
// UPDATE
//---------------------------------------------------------------------------------------------------
$sql0 = "UPDATE user SET nama='" . $nama . "', email='" . $email . "', unitkerja='" . $unitkerja . "',namaunit='" . $namaunit . 
		"', alamat='" . $alamat . "', kota='" . $kota . "', negara='" . $negara . "', kodepos='" . $kodepos . "', telpon='" . $telpon . 
		"' WHERE (ID=" . $userid . ");";
echo "<br><br><br>-----------------------------------------" . $sql0 . "<br>";
$row_cnt = 0;
$result = mysqli_query($link, $sql0);
$status = 1;
if ($result)
	echo $status;



//----------------------------------------------------------------------------------------------------


?>

