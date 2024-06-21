<?php
session_start();

include "koneksi.php";


//-------------------------------------------------
if (!isset($_POST["useridnew"])) {
	$userid=0;
}
else
	$userid=$_POST["useridnew"];
//-------------------------------------------------
if (!isset($_POST["namanew"])) {
	$nama="";
}
else
	$nama=$_POST["namanew"];
//-------------------------------------------------
if (!isset($_POST["usernamenew"])) {
	$username="";
}
else
	$username=$_POST["usernamenew"];
//-------------------------------------------------
if (!isset($_POST["passwdnew"])) {
	$passwd="";
}
else
	$passwd=$_POST["passwdnew"];
//-------------------------------------------------
if (!isset($_POST["passwd1new"])) {
	$passwd1="";
}
else
	$passwd1=$_POST["passwd1new"];
//-------------------------------------------------
if (!isset($_POST["levelnew"])) {
	$levelid=0;
}
else
	$levelid=$_POST["levelnew"];
//-------------------------------------------------
if (!isset($_POST["emailnew"])) {
	$email=0;
}
else
	$email=$_POST["emailnew"];
//-------------------------------------------------
if (!isset($_POST["useridnew"])) {
	$usid=0;
}
else
	$usid=$_POST["useridnew"];
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

$status = 0;
//---------------------------------------------------------------------------------------------------
// Get user
# query the users table for name and surname 
$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
//echo $query . "<br>";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
		$unameku = $row['username'];
	}
}
//---------------------------------------------------------------------------------------------------

//Query dulu...apakah data sudah ada di database
$sql0 = "SELECT * FROM user WHERE username='" . $username . "';";

$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}
if ($row_cnt==0) {
	$sql = "INSERT INTO user (nama, username, passwd, pwd, levelid, email, statusactive, createduser, createddate) VALUES('" . $nama . "','" . 
			$username . "','" . $passwd . "',PASSWORD('" . $passwd . "')," . $levelid . ",'" . $email . "',1," . $userid . ",now());";
//echo $sql . "<br>";
	$result = mysqli_query($link,$sql);
	if ($result)
		$status = 1;

// Log trail -------------------------------
	$passwdx = md5($passwd);
	$dataku = "user|" . $nama . "|" . $username . "|" . $passwdx . "|" . $levelid . "|" . $email;;
	$sql1 = "INSERT INTO mylog (userid, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",'" . $username .
			"',now(),'add user', '" . $dataku . "');";
//echo $sql1 . "<br>";
	$res = mysqli_query($link,$sql1);
//------------------------------------------
}



	if ($result) {
		//echo "Data sudah ditambahkan";
	}
	else
		//echo "Data tidak bisa ditambahkan. Mungkin data udah ada. Cek kembali data !";


mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.


if ($status==1)
{


?>

<script type="text/javascript">
	alert("User sudah ditambahkan.");
	window.location.href = "mainuser.php";
</script>

<?php
}
?>

<meta http-equiv="refresh" content="0; url=mainuser.php?userid=<?php echo $userid;?>" />
