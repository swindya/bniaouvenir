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
if (!isset($_POST["radio1"])) {
	$radio1="";
}
else
	$radio1=$_POST["radio1"];
//-------------------------------------------------
if (!isset($_POST["bahan"])) {
	$bahan="";
}
else
	$bahan=$_POST["bahan"];
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
if (!isset($_POST["harga0"])) {
	$harga=0;
}
else
	$harga=$_POST["harga0"];
//-------------------------------------------------
if (!isset($_POST["hargadisc"])) {
	$hargadisc="";
}
else
	$hargadisc=$_POST["hargadisc"];
//-------------------------------------------------
if (!isset($_POST["jmlstok"])) {
	$jmlstok="";
}
else
	$jmlstok=$_POST["jmlstok"];
//-------------------------------------------------
if (!isset($_POST["imagepath"])) {
	$imagepath="";
}
else
	$imagepath=$_POST["imagepath"];
//-------------------------------------------------
//-------------------------------------------------

$harga = intval(preg_replace('/[^\d.]/', '', $harga));
$jmlstok = intval(preg_replace('/[^\d.]/', '', $jmlstok));


$lenpath = strlen($imagepath);
$lenbb = $lenpath-2;
$imagepathlarge = substr($imagepath,2,$lenbb) . "large/";
$imagepathsmall = substr($imagepath,2,$lenbb) . "small/";
$imagepaththumb = substr($imagepath,2,$lenbb) . "thumb/";

$timecode = date('YmdHis');

//echo $imagepath . "==" . $imagepathlarge;

$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;
$file_name1=null;
$file_name2=null;
$file_name3=null;

if(isset($_FILES['uploadImage1'])){
	$file_name1 = $_FILES['uploadImage1']['name'];
	$file_size =$_FILES['uploadImage1']['size'];
	$file_tmp =$_FILES['uploadImage1']['tmp_name'];
	$file_type=$_FILES['uploadImage1']['type']; 
	$tipefile = pathinfo($file_name1, PATHINFO_EXTENSION);
	$abc = explode(".", $file_name1);
	$countarr = count($abc);
	$file_extension1 = $abc[$countarr-1];
	//Determine the path to which we want to save this file
	if (strlen($file_name1)>2)
	{
		$newname1 = $imagepath . "large/" . $file_name1;
		//$newname11 = $imagepath . "small/" . $file_name1;
		//$newname111 = $imagepath . "thumb/" . $file_name1;
		if (file_exists($newname1)) {
			$file_name1 = $timecode . $file_name1;
			$newname1 = $imagepath . "large/" . $file_name1;
		}
		if (!file_exists($newname1)) {
		//Attempt to move the uploaded file to its new place
			if ((move_uploaded_file($_FILES['uploadImage1']['tmp_name'],$newname1))) { 
//echo "OKE" . "<br>";
				createsmallerfile($file_name1,$imagepathlarge,$imagepathsmall,420);
				createsmallerfile($file_name1,$imagepathlarge,$imagepaththumb,80);
				$statusku = 1;
			} 
		}
	}
}
else {
	echo "Error3";
}
//------------------------------------------------------------------------

if(isset($_FILES['uploadImage2'])){
	$file_name2 = $_FILES['uploadImage2']['name'];
	$file_size =$_FILES['uploadImage2']['size'];
	$file_tmp =$_FILES['uploadImage2']['tmp_name'];
	$file_type=$_FILES['uploadImage2']['type']; 
	$tipefile = pathinfo($file_name2, PATHINFO_EXTENSION);
	$abc = explode(".", $file_name2);
	$countarr = count($abc);
	$file_extension2 = $abc[$countarr-1];
	//Determine the path to which we want to save this file
	if (strlen($file_name2)>2)
	{
		$newname2 = $imagepath . "large/" . $file_name2;
		if (file_exists($newname2)) {
			$file_name2 = $timecode . $file_name2;
			$newname2 = $imagepath . "large/" . $file_name2;
		}
		if (!file_exists($newname2)) {
		//Attempt to move the uploaded file to its new place
			if ((move_uploaded_file($_FILES['uploadImage2']['tmp_name'],$newname2))) { 
				createsmallerfile($file_name2,$imagepathlarge,$imagepathsmall,420);
				createsmallerfile($file_name2,$imagepathlarge,$imagepaththumb,80);
				$statusku = 1;
			} 
		}
	}
}
else {
	echo "Error3";
}


if ($file_name2==null)
	$filestr2 = "";
else
	$filestr2 = "', namafile='" . $file_name2;
//------------------------------------------------------------------------

if(isset($_FILES['uploadImage3'])){
	$file_name3 = $_FILES['uploadImage3']['name'];
	$file_size3 =$_FILES['uploadImage3']['size'];
	$file_tmp3 =$_FILES['uploadImage3']['tmp_name'];
	$file_type3 =$_FILES['uploadImage3']['type']; 
	$tipefile3 = pathinfo($file_name3, PATHINFO_EXTENSION);
	$abc = explode(".", $file_name3);
	$countarr = count($abc);
	$file_extension3 = $abc[$countarr-1];
	//Determine the path to which we want to save this file
	if (strlen($file_name3)>2)
	{
//echo "FILE: " . $file_name3 . "<br>";
		$newname3 = $imagepath . "large/" . $file_name3;
		if (file_exists($newname3)) {
			$file_name3 = $timecode . $file_name3;
			$newname3 = $imagepath . "large/" . $file_name3;
		}
		if (!file_exists($newname3)) {
		//Attempt to move the uploaded file to its new place
			if ((move_uploaded_file($_FILES['uploadImage3']['tmp_name'],$newname3))) { 
				createsmallerfile($file_name3,$imagepathlarge,$imagepathsmall,420);
				createsmallerfile($file_name3,$imagepathlarge,$imagepaththumb,80);
				$statusku = 1;
			} 
		}
	}
}
else {
	echo "Error3";
}


if ($file_name3==null)
	$filestr3 = "";
else
	$filestr3 = "', namafile='" . $file_name3;

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
$sql = "SELECT * FROM products WHERE (ID=" . $barangid . ");";
$row_cnt = 0;
$result = mysqli_query($link, $sql);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$levelidku = $row['ID'];
		$imagename1ku = $row['imagename'];
		$imagename2ku = $row['imagename2'];
		$imagename3ku = $row['imagename3'];
	}
}

if ($file_name1==null || strlen($file_name1)<2)
	$file_name1 = $imagename1ku;

if ($file_name2==null || strlen($file_name2)<2)
	$file_name2 = $imagename2ku;

if ($file_name3==null || strlen($file_name3)<2)
	$file_name3 = $imagename3ku;

$radio1str = "";
if ($radio1==1)
	$radio1str = "GENERIC";
if ($radio1==2)
	$radio1str = "PREMIUM";
if ($radio1==3)
	$radio1str = "CORPORATE";

//---------------------------------------------------------------------------------------------------
// UPDATE
//---------------------------------------------------------------------------------------------------
$sql0 = "UPDATE products SET name='" . $namaproduk . "', bahan='" . $bahan . "', price=" . $harga . ",jmlstok=" . $jmlstok . ", size='" . $ukuran . "', sku='" . $kodeproduk . 
		"', packaging='" . $packaging . "', price=" . $harga . ", description='" . $fullinfo . "', imagename='" . 
		$file_name1 . "', imagename2='" . $file_name2 . "', imagename3='" . $file_name3 . "', kategori='" . $radio1str . 
		"' WHERE (ID=" . $barangid . ");";
//echo "<br><br><br>-----------------------------------------" . $sql0 . "<br>";
$row_cnt = 0;
$result = mysqli_query($link, $sql0);


//---------------------------------------------------------------------------------------------------





//createThumbs("DOC/IMAGES/large/","DOC/IMAGES/small/",420);
//createThumbs("DOC/IMAGES/large/","DOC/IMAGES/thumb/",80);
//---------------------------------------------------------------------------------------------------

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.


//----------------------------------------------------------------------------------------------------
function createThumbs( $pathToImages, $pathToThumbs, $thumbWidth ) 
{
  // open the directory
  $dir = opendir( $pathToImages );

  // loop through it, looking for any/all JPG files:
  while (false !== ($fname = readdir( $dir ))) {
    // parse path for the extension
    $info = pathinfo($pathToImages . $fname);
//echo "<br><br><br>------" . $fname . "<br>";
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
//echo $pathfile . "<br>";
	if (!file_exists($pathfile)) 
	{

		// parse path for the extension
		$info = pathinfo($pathToImages . $filenameku);
		// continue only if this is a JPEG image
		$filearr = explode(".", $filenameku);
//echo $filearr[1];
//echo strtolower($info['extension']);
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


?>

<meta http-equiv="refresh" content="0; url=editproduct.php?userid=<?php echo $userid;?>&barangid=<?php echo $barangid;?>" />
