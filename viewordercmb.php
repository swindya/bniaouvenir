<?php

if (!isset($_GET["mystr"])) {
	$strku=0;
}
else
	$strku=$_GET["mystr"];
//---------------------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];
//---------------------------------------------------------

include "koneksi.php";

$link = mysqli_connect($db_hostname, $db_username, $db_password);

if (!$link) {
    die('Could not connect: ' . mysqli_error($con));
}

$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    //die ('Can't use database : ' . mysqli_error());
?>
<meta http-equiv="refresh" content="0; url=index.php" />
<?php
die();	
}

#mysql_connect("localhost",$uname,$pwd);
# query the users table for name and surname 
$query = "SELECT userlevel.ID AS userlevelid,
			userlevel.level AS level,
			user.ID AS userid,
			user.nama AS namauser,
			user.username AS username,
			user.pwd AS password,
			user.levelid AS levelid,
			user.kodeoutlet AS kodeoutlet
			FROM user
			INNER JOIN userlevel ON user.levelid = userlevel.ID
			WHERE user.ID=" . $userid . ";";
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
	}
}



$row_cnt = 0;

if ($strku===0 || $strku==="" || $strku===null || strlen($strku)==0)
{
	$sql="SELECT * FROM outlet ORDER BY namaoutlet;";
	echo '<option value="0">All...</option>';
}
else
{
	if ($levelidku==1 || $levelidku==2)		//admin/monitor
	{
		$sql="SELECT * FROM outlet WHERE (kodeoutlet LIKE '%{$strku}%' OR namaoutlet LIKE '%{$strku}%') ORDER BY namaoutlet ASC;";
		//if ($strku==0 || $strku==null || $strku=="")
		//{
		//	$sql="SELECT * FROM outlet;"
		//	echo '<option value="0">All...</option>';
		//}	
	}
	else if ($levelidku==3)					//user
	{
		$sql="SELECT * FROM outlet WHERE ((kodeoutlet LIKE '%{$strku}%' OR namaoutlet LIKE '%{$strku}%'));";
	}
}

//echo '<option value="0">All...</option>';
$result = mysqli_query($link,$sql);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$IDku = $row['ID'];
		$kodeoutletku = $row['kodeoutlet'];
		$namaoutletku = $row['namaoutlet'];
		$jenisoutletku = $row['jenisoutlet'];
		echo '<option value="'.$IDku .'">' . $namaoutletku . " - " . $kodeoutletku . '</option>';
	}
}

mysqli_close($link);
?>