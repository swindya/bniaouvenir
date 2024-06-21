
<?php
session_start();

include "koneksi.php";

//-------------------------------------------------

//-------------------------------------------------
$uname = "xxx";
if (!isset($_GET["uname"])) {
	$uname="xxx";
}
else
	$uname=$_GET["uname"];
//-------------------------------------------------



//Сheck that we have a file
$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;

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
$sql00 = "SELECT
		user.ID AS userid,
		user.nama AS nama,
		user.username AS username,
		user.levelid AS levelid,
		user.email AS email,
		userlevel.ID,
		userlevel.level AS level 
		FROM user
		INNER JOIN userlevel ON userlevel.ID = user.levelid 
		WHERE user.username='" . $uname . "';";

$sql = "SELECT * FROM user WHERE username='" . $uname . "';";		
		
$row_cnt = 0;
$statuscek = 0;
$result = mysqli_query($link, $sql00);
if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$statuscek = 1;
}

echo $statuscek;

mysqli_close($link);

$_SESSION['start'] = time(); // Taking now logged in time.

?>


