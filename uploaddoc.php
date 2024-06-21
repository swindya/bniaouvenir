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
if (!isset($_POST["useriddoc"])) {
	$userid=0;
}
else
	$userid=$_POST["useriddoc"];
//-------------------------------------------------
$orderiddoc=0;
if (!isset($_POST["orderiddoc"])) {
	$orderiddoc=0;
}
else
	$orderiddoc=$_POST["orderiddoc"];
//-------------------------------------------------
$noorderdoc="";
if (!isset($_POST["noorderdoc"])) {
	$noorderdoc="";
}
else
	$noorderdoc=$_POST["noorderdoc"];
//-------------------------------------------------


$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);

//echo $imagepath . "==" . $imagepathlarge;
//------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------------

$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;
$file_name1=null;
$file_name2=null;
$file_name3=null;


if(isset($_FILES['myfile'])){
	$file_name1 = $_FILES['myfile']['name'];
	$file_size =$_FILES['myfile']['size'];
	$file_tmp =$_FILES['myfile']['tmp_name'];
	$file_type=$_FILES['myfile']['type']; 
	$tipefile = pathinfo($file_name1, PATHINFO_EXTENSION);
	$abc = explode(".", $file_name1);
	$countarr = count($abc);
	$file_extension1 = $abc[$countarr-1];
	$newnametemp = "";
	//Determine the path to which we want to save this file
	if (strlen($file_name1)>0 && (strtoupper($file_extension1)=='PDF' || strtoupper($file_extension1)=='JPG' || strtoupper($file_extension1)=='JPEG'))
	{
		$newname = $noorderdoc . "." . $abc[$countarr-1];
		$newnametemp = "DOC/ORDER/" . $noorderdoc . "." . $abc[$countarr-1];
		if (file_exists($newnametemp)) {
			unlink($newnametemp);
		}
		if (!file_exists($newnametemp)) {
		//Attempt to move the uploaded file to its new place
			if ((move_uploaded_file($_FILES['myfile']['tmp_name'],$newnametemp))) { 
				$statusku = 1;
			} 
		}
	}
}
else {
	echo "Error3";
}
//------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------
// UPDATE
//---------------------------------------------------------------------------------------------------
if ($newnametemp)
{
	$sql0 = "UPDATE orders SET document_name='" . $newname . "' WHERE ID=" . $orderiddoc . ";";
	$result = mysqli_query($link, $sql0);
}

//---------------------------------------------------------------------------------------------------




//createThumbs("DOC/IMAGES/large/","DOC/IMAGES/small/",420);
//createThumbs("DOC/IMAGES/large/","DOC/IMAGES/thumb/",80);
//---------------------------------------------------------------------------------------------------

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.


//----------------------------------------------------------------------------------------------------


?>

<meta http-equiv="refresh" content="0; url=viewdetailorder.php?userid=<?php echo $userid;?>&orderid=<?php echo $orderiddoc;?>" />
