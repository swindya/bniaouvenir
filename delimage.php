<?php
session_start();

include "koneksi.php";

$userid = 0;
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];

//-------------------------------------------------
if (!isset($_GET["aaa"])) {
	$jenisimage=0;
}
else
	$jenisimage=$_GET["aaa"];
//-------------------------------------------------
if (!isset($_GET["prodid"])) {
	$productid=0;
}
else
	$productid=$_GET["prodid"];
//-------------------------------------------------


if ($userid==0)
{
?>
<script>
alert("Data error/invalid");
window.top.location.href = "index.php"; 
</script>
<?php
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
//---------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------
$statusku = 0;
//Query dulu...apakah data sudah ada di database
if($jenisimage==1)
	$sql = "UPDATE products SET imagename='' WHERE ID=" . $productid . ";";
else if($jenisimage==2)
	$sql = "UPDATE products SET imagename2='' WHERE ID=" . $productid . ";";
else if($jenisimage==3)
	$sql = "UPDATE products SET imagename3='' WHERE ID=" . $productid . ";";
echo $sql;
$result = mysqli_query($link,$sql);
if ($result)
$statusku = 1;


mysqli_close($link);

if ($statusku==1)
{
	echo $statusku;
}


?>

