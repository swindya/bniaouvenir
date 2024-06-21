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
if (!isset($_POST["useridedit"])) {
	$userid=0;
}
else
	$userid=$_POST["useridedit"];
//-------------------------------------------------
if (!isset($_POST["barangid"])) {
	$barangid=0;
}
else
	$barangid=$_POST["barangid"];
//-------------------------------------------------
if (!isset($_POST["namaproduk"])) {
	$namaproduk="";
}
else
	$namaproduk=$_POST["namaproduk"];
//-------------------------------------------------
if (!isset($_POST["packaging"])) {
	$packaging="";
}
else
	$packaging=$_POST["packaging"];
//-------------------------------------------------
if (!isset($_POST["kodeproduk"])) {
	$kodeproduk="";
}
else
	$kodeproduk=$_POST["kodeproduk"];
//-------------------------------------------------
/*
if (!isset($_POST["warna"])) {
	$warna="";
}
else
	$warna=$_POST["warna"];
//-------------------------------------------------
if (!isset($_POST["bahan"])) {
	$bahan="";
}
else
	$bahan=$_POST["bahan"];
*/
//-------------------------------------------------
if (!isset($_POST["ukuran"])) {
	$ukuran="";
}
else
	$ukuran=$_POST["ukuran"];
//-------------------------------------------------
if (!isset($_POST["fullinfo"])) {
	$fullinfo="";
}
else
	$fullinfo=$_POST["fullinfo"];
//-------------------------------------------------
if (!isset($_POST["harga"])) {
	$harga="";
}
else
	$harga=$_POST["harga"];
//-------------------------------------------------
if (!isset($_POST["jmlstok"])) {
	$jmlstok="";
}
else
	$jmlstok=$_POST["jmlstok"];
//-------------------------------------------------
if (!isset($_POST["radio1"])) {
	$radio1="";
}
else
	$radio1=$_POST["radio1"];
//-------------------------------------------------

$harga = intval(preg_replace('/[^\d.]/', '', $harga));
$jmlstok = intval(preg_replace('/[^\d.]/', '', $jmlstok));


$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    //die ('Can't use database : ' . mysqli_error());
?>
<meta http-equiv="refresh" content="0; url=index.php" />
<?php
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";

die();
	
}

//---------------------------------------------------------------------------------------------------------
//Cek imagepathnumber utk melihat apakah perlu bikin folder baru utk file2 foto
//---------------------------------------------------------------------------------------------------------
$query = "SELECT MAX(imagepathnumber) AS impn FROM products;";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$impn = $row['impn'];
	}
}
//Cari sudah ada berapa data yg menyimpan foto di folder tsb
$query = "SELECT COUNT(ID) AS countme FROM products WHERE imagepathnumber=" . $impn . ";";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$nofinfolder = $row['countme'];
	}
}

$imp0 = 0;
if ($nofinfolder > 150)
{
	$imp0 = $impn + 1;
}
else
{
	$imp0 = $impn;
}
$impath0 = "./DOC/IMAGES/" . $imp0 . "/";
$impath = "./DOC/IMAGES/" . $imp0 . "/large/";

$impaththumb = "DOC/IMAGES/" . $imp0 . "/thumb/";
$impathsmall = "DOC/IMAGES/" . $imp0 . "/small/";
$impathlarge = "DOC/IMAGES/" . $imp0 . "/large/";

//Pastikan nama dari semua file image unik


//-------------------------------------------------------------------------------
$timecode = date('YmdHis');

$radio1str = "";
if ($radio1==1)
	$radio1str = "GENERIC";
if ($radio1==2)
	$radio1str = "PREMIUM";
if ($radio1==3)
	$radio1str = "CORPORATE";

$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;
$file_name=null;
if(isset($_FILES['uploadImage1'])){
	$file_name1 = $_FILES['uploadImage1']['name'];
	$file_size1 = $_FILES['uploadImage1']['size'];
	$file_tmp1 = $_FILES['uploadImage1']['tmp_name'];
	$file_type1 = $_FILES['uploadImage1']['type']; 
	$tipefile1 = pathinfo($file_name, PATHINFO_EXTENSION);
	$abc = explode(".", $file_name1);
	$countarr = count($abc);
	$file_extension = $abc[$countarr-1];
	//Determine the path to which we want to save this file
	if (strlen($file_name1)>3)
	{
		$newnamel = $impath . $file_name1;
		if (file_exists($newnamel)) {
			$file_name1 = $timecode . "1" . $file_name1;
			$newnamel = $impath . $file_name1;
		}
		if (!file_exists($newnamel)) {
		//Attempt to move the uploaded file to its new place
			if ((move_uploaded_file($_FILES['uploadImage1']['tmp_name'],$newnamel))) { 
				$statusku = 1;
			} 
		}
	}
	else {
		$file_name1 = "";
	}
	
}
else {
	echo "Error3";
}


if ($file_name1==null)
	$filestr = "";
else
	$filestr = "', namafile='" . $file_name1;

//-------------------------------------------------------------------------------------------------------
if(isset($_FILES['uploadImage2'])){
	$file_name2 = $_FILES['uploadImage2']['name'];
	$file_size2 =$_FILES['uploadImage2']['size'];
	$file_tmp2 =$_FILES['uploadImage2']['tmp_name'];
	$file_type2=$_FILES['uploadImage2']['type']; 
	$tipefile = pathinfo($file_name2, PATHINFO_EXTENSION);
	$abc = explode(".", $file_name2);
	$countarr = count($abc);
	$file_extension = $abc[$countarr-1];
	if (strlen($file_name2)>3)
	{
		$newname2 = $impath . $file_name2;
		if (file_exists($newname2)) {
			$file_name2 = $timecode . "2" . $file_name2;
			$newname2 = $impath . $file_name2;
		}
		if (!file_exists($newname2)) {
			if ((move_uploaded_file($_FILES['uploadImage2']['tmp_name'],$newname2))) { 
				$statusku = 1;
			} 
		}
	}
	else {
		$file_name2 = "";
	}
}
else {
	echo "Error3";
}
if ($file_name2==null)
	$filestr2 = "";
else
	$filestr2 = "', namafile='" . $file_name2;

//----------------------------------------------------------------------------------------------------
if(isset($_FILES['uploadImage3'])){
	$file_name3 = $_FILES['uploadImage3']['name'];
	$file_size3 =$_FILES['uploadImage3']['size'];
	$file_tmp3 =$_FILES['uploadImage3']['tmp_name'];
	$file_type3=$_FILES['uploadImage3']['type']; 
	$tipefile3 = pathinfo($file_name, PATHINFO_EXTENSION);
	$abc = explode(".", $file_name3);
	$countarr = count($abc);
	$file_extension = $abc[$countarr-1];
	if (strlen($file_name3)>3)
	{
		$newname3 = $impath . $file_name3;
		if (file_exists($newname3)) {
			$file_name3 = $timecode . "3" . $file_name3;
			$newname3 = $impath . $file_name3;
		}
		if (!file_exists($newname3)) {
			if ((move_uploaded_file($_FILES['uploadImage3']['tmp_name'],$newname3))) { 
				$statusku = 1;
			} 
		}
	}
	else {
		$file_name3 = "";
	}
}
else {
	echo "Error3";
}


if ($file_name3==null)
	$filestr3 = "";
else
	$filestr3 = "', namafile3='" . $file_name3;

//--------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------

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
// 
//---------------------------------------------------------------------------------------------------
/*
$sql0 = "UPDATE products SET name='" . $namaproduk . "', color='" . $warna . "', bahan='" . $bahan . "', size='" . $ukuran . "', sku='" . $kodeproduk . "', packaging='" . $packaging . 
		"', price=" . $harga . ", discountprice=" . $hargadisc . ", description='" . $fullinfo . "', imagename='" . $file_name . "', imagepath='./DOC/IMAGES/'" .
		" WHERE (ID=" . $barangid . ");";
*/
	
$sql0 = "INSERT INTO products(name, size, sku, packaging, price, description, jmlstok, imagepath, imagepathnumber, imagename, imagename2, 
		imagename3, kategori, createduser, createddatetime) VALUES('" . $namaproduk . "','" . $ukuran . "','" . $kodeproduk . "','" . $packaging . "'," . 
			$harga . ",'" . $fullinfo . "'," . $jmlstok . ",'" . $impath0 . "'," . $imp0 . ",'" . $file_name1 . "','" . $file_name2 . "','" . 
			$file_name3 . "','" . $radio1str . "'," . $userid . ", now())";
//echo $sql0 . "<br>";
$row_cnt = 0;
$result = mysqli_query($link, $sql0);

//createThumbs("DOC/IMAGES/large/","DOC/IMAGES/small/",420);
//createThumbs("DOC/IMAGES/large/","DOC/IMAGES/thumb/",80);

//createThumbs($impathlarge,$impathsmall,420);
//createThumbs($impathlarge,$impaththumb,80);

createsmallerfile($file_name1,$impathlarge,$impathsmall,420);
createsmallerfile($file_name1,$impathlarge,$impaththumb,80);

createsmallerfile($file_name2,$impathlarge,$impathsmall,420);
createsmallerfile($file_name2,$impathlarge,$impaththumb,80);

createsmallerfile($file_name3,$impathlarge,$impathsmall,420);
createsmallerfile($file_name3,$impathlarge,$impaththumb,80);

//---------------------------------------------------------------------------------------------------

mysqli_close($link);


//----------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------
function createThumbs( $pathToImages, $pathToThumbs, $thumbWidth ) 
{
  // open the directory
  $dir = opendir( $pathToImages );

  // loop through it, looking for any/all JPG files:
  while (false !== ($fname = readdir( $dir ))) {
    // parse path for the extension
    $info = pathinfo($pathToImages . $fname);
    // continue only if this is a JPEG image
    if ( strtolower($info['extension']) == 'jpg' ) 
    {
      //echo "Creating thumbnail for {$fname} <br />";

      // load image and get image size
      $img = imagecreatefromjpeg( "{$pathToImages}{$fname}" );
      $width = imagesx( $img );
      $height = imagesy( $img );

      // calculate thumbnail size
      $new_width = $thumbWidth;
      $new_height = floor( $height * ( $thumbWidth / $width ) );

      // create a new temporary image
      $tmp_img = imagecreatetruecolor( $new_width, $new_height );

      // copy and resize old image into new image 
      imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

      // save thumbnail into a file
      imagejpeg( $tmp_img, "{$pathToThumbs}{$fname}" );
    }
  }
  // close the directory
  closedir( $dir );
}
//----------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------
function createsmallerfile($filenameku, $pathToImages, $pathToThumbs, $thumbWidth ) 
{
	$pathfile = $pathToThumbs . $filenameku;
	if (!file_exists($pathfile)) 
	{

		// parse path for the extension
		$info = pathinfo($pathToImages . $filenameku);
		// continue only if this is a JPEG image
		if ( strtolower($info['extension']) == 'jpg' || strtolower($info['extension']) == 'jpeg') 
		{
		  // load image and get image size
		  $img = imagecreatefromjpeg( "{$pathToImages}{$filenameku}" );
		  $width = imagesx( $img );
		  $height = imagesy( $img );

		  // calculate thumbnail size
		  $new_width = $thumbWidth;
		  $new_height = floor( $height * ( $thumbWidth / $width ) );

		  // create a new temporary image
		  $tmp_img = imagecreatetruecolor( $new_width, $new_height );

		  // copy and resize old image into new image 
		  imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

		  // save thumbnail into a file
		  imagejpeg( $tmp_img, "{$pathToThumbs}{$filenameku}" );
		}
	}
}
//----------------------------------------------------------------------------------------------------

$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.

?>

<meta http-equiv="refresh" content="0; url=addproduct.php?userid=<?php echo $userid;?>" />
