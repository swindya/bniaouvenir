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
if (!isset($_POST["useridbanner"])) {
	$userid=0;
}
else
	$userid=$_POST["useridbanner"];
//-------------------------------------------------
$url1="";
if (!isset($_POST["url1"])) {
	$url1="";
}
else
	$url1=$_POST["url1"];
//-------------------------------------------------
$url2="";
if (!isset($_POST["url2"])) {
	$url2="";
}
else
	$url2=$_POST["url2"];
//-------------------------------------------------
$url3="";
if (!isset($_POST["url3"])) {
	$url3="";
}
else
	$url3=$_POST["url3"];
//-------------------------------------------------

$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);

//echo $imagepath . "==" . $imagepathlarge;
//------------------------------------------------------------------------------------------------
$query = "SELECT * FROM banner;";

$row_cnt = 0;
$bannerfilepathy = "";
$j = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$idx = $row['ID'];
		$bannerfilepathy = $row['filepath'];
	}
}

//------------------------------------------------------------------------------------------------

$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;
$file_name1=null;
$file_name2=null;
$file_name3=null;

$lenpath = strlen($bannerfilepathy);
$lenbb = $lenpath-2;
$imagepathbanner = substr($bannerfilepathy,2,$lenbb);

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
	if (strlen($file_name1)>0)
	{
		$newname1 = $bannerfilepathy . $file_name1;
		$imagepathtemp = $bannerfilepathy . "temp/";
		$newname1temp = $bannerfilepathy . "temp/" . $file_name1;
		if (file_exists($newname1)) {
			unlink($newname1);
		}
		if (!file_exists($newname1)) {
		//Attempt to move the uploaded file to its new place
			if ((move_uploaded_file($_FILES['uploadImage1']['tmp_name'],$newname1temp))) { 
				createsmallerfile($file_name1,$imagepathtemp,$imagepathbanner,960);
				$statusku = 1;
			} 
		}
		if (file_exists($newname1temp)) {
			unlink($newname1temp);
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
	if (strlen($file_name2)>0)
	{
		$newname2 = $bannerfilepathy . $file_name2;
		$imagepathtemp = $bannerfilepathy . "temp/";
		$newname2temp = $bannerfilepathy . "temp/" . $file_name2;
		if (file_exists($newname2)) {
			unlink($newname2);
		}
		if (!file_exists($newname2)) {
		//Attempt to move the uploaded file to its new place
			if ((move_uploaded_file($_FILES['uploadImage2']['tmp_name'],$newname2temp))) { 
				createsmallerfile($file_name2,$imagepathtemp,$imagepathbanner,960);
				$statusku = 1;
			} 
		}
		if (file_exists($newname2temp)) {
			unlink($newname2temp);
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
	if (strlen($file_name3)>0)
	{
		$newname3 = $bannerfilepathy . $file_name3;
		$imagepathtemp = $bannerfilepathy . "temp/";
		$newname3temp = $bannerfilepathy . "temp/" . $file_name3;
		if (file_exists($newname3)) {
			unlink($newname3);
		}
		if (!file_exists($newname3)) {
		//Attempt to move the uploaded file to its new place
			if ((move_uploaded_file($_FILES['uploadImage3']['tmp_name'],$newname3temp))) { 
				createsmallerfile($file_name3,$imagepathtemp,$imagepathbanner,960);
				$statusku = 1;
			} 
		}
		if (file_exists($newname3temp)) {
			unlink($newname3temp);
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


//---------------------------------------------------------------------------------------------------
// UPDATE
//---------------------------------------------------------------------------------------------------
if ($file_name1)
{
	$sql0 = "UPDATE banner SET filename1='" . $file_name1 . "';";
	$result = mysqli_query($link, $sql0);
}
if ($file_name2)
{
	$sql0 = "UPDATE banner SET filename2='" . $file_name2 . "';";
	$result = mysqli_query($link, $sql0);
}
if ($file_name3)
{
	$sql0 = "UPDATE banner SET filename3='" . $file_name3 . "';";
	$result = mysqli_query($link, $sql0);
}
//---------------------------------------------------------------------------------------------------
if ($url1)
{
	$sql0 = "UPDATE banner SET tautan1='" . $url1 . "';";
	$result = mysqli_query($link, $sql0);
}
if ($url2)
{
	$sql0 = "UPDATE banner SET tautan2='" . $url2 . "';";
	$result = mysqli_query($link, $sql0);
}
if ($url3)
{
	$sql0 = "UPDATE banner SET tautan3='" . $url3 . "';";
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

<meta http-equiv="refresh" content="0; url=mainbanner.php?userid=<?php echo $userid;?>" />
