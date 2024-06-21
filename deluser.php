<?php
session_start();

include "koneksi.php";


if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];
if ($userid==0)
{
	if (!isset($_SESSION["userid"])) {
		$userid=0;
	}
	else
		$userid=$_SESSION["userid"];	
}
//-------------------------------------------------
if (!isset($_GET["userdihapusid"])) {
	$idku=0;
}
else
	$idku=$_GET["userdihapusid"];
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
// Get user
# query the users table for name and surname 
$query = "SELECT userlevel.ID AS userlevelid,
			userlevel.level AS level,
			user.ID AS userid,
			user.nama AS namauser,
			user.username AS username,
			user.pwd AS password,
			user.levelid AS levelid,
			user.kodeoutlet AS kodeoutlet,
			outlet.kodecabang AS kodecabang,
			outlet.sandicabang AS sandicabang,
			outlet.namaoutlet AS namaoutlet,
			outlet.jenisoutlet AS jenisoutlet,
			outlet.wilayah AS wilayah
			FROM user
			INNER JOIN userlevel ON user.levelid = userlevel.ID
			INNER JOIN outlet ON outlet.kodeoutlet = user.kodeoutlet WHERE user.ID=" . $userid . ";";
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
		$levelidku = $row['levelid'];
		$levelku = $row['level'];
		$namaku = $row['namauser'];
		$usernameku = $row['username'];
		$kodeoutletku = $row['kodeoutlet'];
		$jenisoutletku = $row['jenisoutlet'];
		$namaoutletku = $row['namaoutlet'];
	}
}
//---------------------------------------------------------------------------------------------------
$sqlku = "SELECT * FROM user WHERE ID=" . $idku . ";";
$row_cnt = 0;
$result = mysqli_query($link, $sqlku);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$levelidxu = $row['levelid'];
		$namaxu = $row['nama'];
		$usernamexu = $row['username'];
	}
	
	
	$sqldel = "DELETE FROM user WHERE ID=" . $idku . ";";
//echo $sql . "<br>";
	$resultdel = mysqli_query($link,$sqldel);
	if ($resultdel)
		$status=1;
//----------------------------------------------------

// Log trail -------------------------------
	$dataku = $namaxu . "|" . $usernamexu . "|" . $levelidxu;
	$sql1 = "INSERT INTO mylog (userid, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",now(),'DELETE', '" . $dataku . "');";
	$res = mysqli_query($link,$sql1);
//------------------------------------------

}
echo $status;

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.

?>
