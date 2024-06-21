<?php
session_start();

include "koneksi.php";

$userid = 0;
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];

if ($userid==0)
	$userid = $_SESSION["userid"];
//-------------------------------------------------
if (!isset($_GET["kode"])) {
	$kodeprod=0;
}
else
	$kodeprod=$_GET["kode"];
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
$sql0 = "SELECT * FROM products WHERE sku='" . $kodeprod . "';";

$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
    $row_cnt = $result0->num_rows;
}
if ($row_cnt>0) {
	$statusku = 1;
}
else
	//echo "Data tidak bisa ditambahkan. Cek/periksa kembali KODE data !";

mysqli_close($link);

if ($statusku==1)
{
	echo $statusku;
}


?>

