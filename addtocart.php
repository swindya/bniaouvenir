<?php
session_start();


include "koneksi.php";

//-------------------------------------------------
$userid = 0;
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];

if ($userid==0)
{
	if (!isset($_POST["useridcart"])) {
		$userid=0;
	}
	else
		$userid=$_POST["useridcart"];
}

if ($userid==0)
{
	$_SESSION['userid'];
}
//-------------------------------------------------
$prodid = 0;
if (!isset($_GET["productid"])) {
	$prodid=0;
}
else
	$prodid=$_GET["productid"];

if ($prodid==0)
{
	if (!isset($_POST["prodcartid"])) {
		$prodid=0;
	}
	else
		$prodid=$_POST["prodcartid"];
}
//-------------------------------------------------
if (!isset($_GET["qty"])) {
	$qty=0;
}
else
	$qty=$_GET["qty"];
//-------------------------------------------------
if (!isset($_GET["unitprice"])) {
	$unitprice=0;
}
else
	$unitprice= round($_GET["unitprice"],0);
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

$statusku = 0;
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
		$uname = $row['username'];
		$userid = $row['ID'];
	}
}
$useridku = $userid;
//---------------------------------------------------------------------------------------------------
$query = "SELECT * FROM products WHERE ID=" . $prodid . ";";
//echo "<br><br><br>---------------------" . $query . "<br>";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$namaku = $row['name'];
		$priceku = $row['price'];
		$jmlstokku = $row['jmlstok'];
		$descriptionku = $row['description'];
	}
}
if ($unitprice==0)
	$unitprice = $priceku;
//---------------------------------------------------------------------------------------------------
//
//---------------------------------------------------------------------------------------------------
$tglsaiki = date('Y-m-d');
//---------------------------------------------------------------------------------------------------
$query = "SELECT * FROM cart WHERE productID=" . $prodid . " AND userID=" . $userid . ";";
//echo "<br><br><br>---------------------" . $query . "<br>";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$namaku = $row['name'];
		$priceku = $row['unitprice'];
		$descriptionku = $row['keterangan'];
	}
}
else if ($row_cnt==0)
{	
	$jmlnewstok = $jmlstokku - $qty;
	$totprice = $qty * $unitprice; 
	$sql0 = "INSERT INTO cart(productID, name, tgl, qty, unitprice, totalprice, userID, keterangan, createduser, createddatetime) 
				VALUES(" . $prodid . ",'" . $namaku . "','" . $tglsaiki . "'," . $qty . "," . round($priceku,0) . "," . round($totprice,0) . "," . $userid . 
				",'" . $descriptionku . "'," . 	$userid . ", now())";
//echo "<br><br><br>-----------------------------------------" . $sql0 . "<br>";
	$row_cnt = 0;
	$result = mysqli_query($link, $sql0);
	$statusku = 1;
	
	$sql1 = "UPDATE products SET jmlcart=jmlcart+" . $qty . " WHERE ID=" . $prodid . ";";
//echo $sql1;
	$result1 = mysqli_query($link, $sql1);
	
	$sql2 = "UPDATE products SET jmlstok=" . $jmlnewstok . " WHERE ID=" . $prodid . ";";
//echo $sql1;
	$result2 = mysqli_query($link, $sql2);	
	
}

echo $statusku;

//---------------------------------------------------------------------------------------------------

mysqli_close($link);



//*******************************************************************************************************

	$_SESSION['userid'] = $userid;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;

//*******************************************************************************************************

?>
