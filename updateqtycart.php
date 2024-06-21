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
if (!isset($_GET["cartid"])) {
	$cartid=0;
}
else
	$cartid=$_GET["cartid"];
//-------------------------------------------------
if (!isset($_GET["qty"])) {
	$qty=0;
}
else
	$qty=$_GET["qty"];
//-------------------------------------------------
//-------------------------------------------------
if (!isset($_GET["qtyold"])) {
	$qtyoldku=0;
}
else
	$qtyoldku=$_GET["qtyold"];
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

<?php
die();	
}


$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;

//------------------------------------------------------------------------
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

//---------------------------------------------------------------------------------------------------
// BACA DATA
//---------------------------------------------------------------------------------------------------
$sql = "SELECT * FROM cart WHERE (ID=" . $cartid . ");";
$row_cnt = 0;
$subtotprice = 0;
$result = mysqli_query($link, $sql);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$prodid = $row['productID'];
		$qtyold = $row['qty'];
		$unitpriceku = $row['unitprice'];
		$subtotprice = $qty * $unitpriceku;
	}
}

//---------------------------------------------------------------------------------------------------
// UPDATE
//---------------------------------------------------------------------------------------------------
$qtynew = $qtyold - $qty;
$sql0 = "UPDATE cart SET qty=" . $qty . ", totalprice=" . $subtotprice . " WHERE (ID=" . $cartid . ");";
//echo $sql0;
$result0 = mysqli_query($link, $sql0);

//$sql1 = "UPDATE products SET jmlcart=jmlcart-" . $qtyold . " WHERE ID=" . $prodid . ";";
$sql1 = "UPDATE products SET jmlstok=jmlstok+" . $qtynew . " WHERE ID=" . $prodid . ";";
//echo $sql1;
$result1 = mysqli_query($link, $sql1);

//$sql2 = "UPDATE products SET jmlcart=jmlcart+" . $qty . " WHERE ID=" . $prodid . ";";
//$result2 = mysqli_query($link, $sql2);

//$sql1 = "UPDATE cart SET totalprice = qty*unitprice WHERE userID=" . $userid . ";";
//$result1 = mysqli_query($link, $sql1);
//---------------------------------------------------------------------------------------------------

if ($result0 && $result1)
{
	$statusku = 1;
}

echo $statusku;

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.

?>

