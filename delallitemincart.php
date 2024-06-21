<?php
//session_start();


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
//---------------------------------------------------------------------------------------------------
date_default_timezone_set("Asia/Jakarta");

$statusku = 0;
//Query dulu...apakah data sudah ada di database
$sql0 = "SELECT * FROM cart;";
$row_cnt = 0;
$i = 0;
$jmlx = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}
if ($row_cnt>0) {
	while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
		$i++;
		$chartidx[$i] = $row['ID'];
		$pidx[$i] = $row['productID'];
		$waktux[$i] = $row['createddatetime'];
		$qtyx[$i] = $row['qty'];
		$start = strtotime($waktux[$i]);
		//$start = strtotime('2018-08-23 00:00:00');
		$end   = time();		//strtotime('2017-08-11 11:07:33');
		$diff  = $end - $start;

		$hours[$i] = floor($diff / (60 * 60));
		//$minutes[$i] = $diff - $hours * (60 * 60);
		//echo 'Remaining time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';
	}
	$jmlx = $i;
}

if ($jmlx>0)
{
	for ($a=1; $a<=$jmlx; $a++)
	{
//echo $hours[$a] . "<br>";
		if ($hours[$a]>=3)
		{
			$sql = "UPDATE products SET jmlstok=jmlstok+" . $qtyx[$a] . " WHERE ID=" . $pidx[$a] . ";";
			$result = mysqli_query($link,$sql);
			$sql = "DELETE FROM cart WHERE ID=" . $chartidx[$a] . ";";
			$result = mysqli_query($link,$sql);
			$statusku = 1;
		}
	}
}

else
	//echo "Data tidak bisa diupdate !";

mysqli_close($link);

//echo $statusku;


?>