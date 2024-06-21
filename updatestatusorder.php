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
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//-------------------------------------------------
//-------------------------------------------------
if (!isset($_POST["statusorderid"])) {
	$statusorderid="";
}
else
	$statusorderid=$_POST["statusorderid"];
//-------------------------------------------------
if (!isset($_POST["orderid"])) {
	$orderid="";
}
else
	$orderid=$_POST["orderid"];
//-------------------------------------------------
if (!isset($_POST["shipcost"])) {
	$shipcost="";
}
else
	$shipcost=$_POST["shipcost"];

$shipcost = intval(preg_replace('/[^\d.]/', '', $shipcost));
//-------------------------------------------------
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
$query = "SELECT * FROM orders WHERE ID=" . $orderid . ";";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$noorderxu = $row['orderno'];
		$tglxu = $row['tgl'];
		$namexu = $row['name'];
		$kodeoutletxu = $row['kodeoutlet'];
		$alamatxu = $row['alamat'];
		$telponxu = $row['telpon'];
		$emailxu = $row['email'];
		$soidxu = $row['statusorderID'];
		$kodeoutletxu = $row['kodeoutlet'];
		$ketxu = $row['keterangan'];
		$shipcostxu = $row['shipping_cost'];
		$useridxu = $row['createduser'];
	}
}
//---------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------
// Show product in cart for user
//---------------------------------------------------------------------------------------------------
$query = "SELECT
				products.name AS namaprod,
				products.sku AS sku,
				products.description AS ket,
				products.price AS price,
				products.jmlstok AS jmlstok,
				products.imagename AS imagename,
				products.imagepath AS imagepath,
				orderitem.qty AS qty,
				orderitem.unitprice AS unitprice
			FROM orderitem
				INNER JOIN products ON orderitem.productID = products.ID
			WHERE orderitem.orderID=" . $orderid . ";";

$row_cnt = 0;
$tot = 0;
$result = mysqli_query($link, $query);
if ($result) {
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$unitpricekuu[$i] = $row['unitprice'];
		$namaprodkuu[$i] = $row['namaprod'];
		$ketkuu[$i] = $row['ket'];
		$qtykuu[$i] = $row['qty'];
		$skukuu[$i] = $row['sku'];
		$imagename1kuu[$i] = $row['imagename'];
		$imagepathkuu[$i] = $row['imagepath'];
		$image1kuu[$i] = "DOC/IMAGES/thumb/" . $imagename1kuu[$i];
		$subtot[$i] = $qtykuu[$i] * $unitpricekuu[$i];
		$tot = $tot + ($qtykuu[$i] * $unitpricekuu[$i]);
	}
}
$jmldata = $i;
//---------------------------------------------------------------------------------------------------
// UPDATE
//---------------------------------------------------------------------------------------------------
$tglsaiki = date("Y-m-d");
if ($statusorderid==1)			//New Order
{
	$sql0 = "UPDATE orders SET statusorderID=" . $statusorderid . " WHERE (ID=" . $orderid . ");";
}
else if ($statusorderid==2)		//Confirm
{
	$sql0 = "UPDATE orders SET statusorderID=" . $statusorderid . ", tglconfirm='" . $tglsaiki . "', shipping_cost=" . $shipcost . 
			" WHERE (ID=" . $orderid . ");";
}
else if ($statusorderid==3)		//On Delivery
{
	$sql0 = "UPDATE orders SET statusorderID=" . $statusorderid . ", tglondelivery='" . $tglsaiki . "', shipping_cost=" . $shipcost . 
			" WHERE (ID=" . $orderid . ");";
}
else if ($statusorderid==4)		//Done
{
	$sql0 = "UPDATE orders SET statusorderID=" . $statusorderid . ", tgldone='" . $tglsaiki . "' WHERE (ID=" . $orderid . ");";
}
else if ($statusorderid==5)		//Cancel
{
	$sqlku = "SELECT * FROM orderitem WHERE orderID=" . $orderid . ";";
	$row_cnt = 0;
	$i = 0;
	$result = mysqli_query($link, $sqlku);
	if ($result) {
	 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$prodidmu[$i] = $row['productID'];
			$qtymu[$i] = $row['qty'];
		}
	}
	$jmlitem = $i;
	for ($c=1; $c<=$jmlitem; $c++)
	{
		$sqlx = "UPDATE products SET jmlstok=jmlstok+" . $qtymu[$c] . " WHERE ID=" . $prodidmu[$c] . ";";
		$result = mysqli_query($link, $sqlx);
	}
	
	$sql0 = "UPDATE orders SET statusorderID=" . $statusorderid . " WHERE (ID=" . $orderid . ");";
}

//echo "<br><br><br>-----------------------------------------" . $sql0 . "<br>";
$row_cnt = 0;
$result = mysqli_query($link, $sql0);

?>

<?php
//include "menu1.php";
//include "menu2home.php";

if ($statusorderid==2000)	//CONFIRM
{
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "admin@bnisouvenir.com";
	$nama = "Admin";
    $to = strip_tags($email);    
    $subject = "Verifikasi/Aktivasi akun anda pada bnisouvenir.com";    
	$headers = "From: " . strip_tags($from) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	$headers .= "CC: register@bnisouvenir.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$alamataktivasi = 'bnisouvenir.com/aktivasi.php?email='.$email.'&code='.$hash;
	
	$line0 = 'Dear ' . $name .  ',';
	$line1 = 'Permintaan Anda dengan nomor order #' . $noorderxu . ' telah kami konfirmasi. Berikut pesanan Anda:';
	$line2 = 'Segera kirimkan dokumen permintaan dalam bentuk Nota Intern/Memo/Surat yang mencantumkan:';
	$line3 = 'Scan dokumen (maksimum 3mb) dan diunggah/upload melalui link berikut paling lambat 5 hari kerja setelah email ini diterima. Jika tidak, pesanan akan dibatalkan. ';
	$line4 = 'Terima Kasih,';
	$line5 = 'BNI Merchandising';
	
	$message = '<html><body>';
	$message .= '<img src="bnisouvenir.com/images/logobnismallok.png" width="140px" height="40px" alt="Activation" /><br><br>';
	$message .= '<table style="border-color: #666;" width="800px" border="0" cellspacing="0" cellpadding="0">';
	$message .= '<tr height="30px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line0 . '</td></tr>';
	$message .= '<tr height="40px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . '</td></tr>';
	$message .= '<tr height="30px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line1 . '</td><tr>';
	for ($a=1; $a<=$jmldata; $a++)
	{
		$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px">' . $namaprodkuu[$a] . 
					", " . $qtykuu[$a] . ' item(s)</td>';
		$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px">' . 'Rp. ' . 
					number_format($subtot[$a],2) . '</td></tr>';
	}
	$message .= '<tr height="15px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . '<hr>' . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px"><i>Sub Total</i></td>';
	$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px">' . 'Rp. ' . 
				number_format($subtot[$a],2) . '</td></tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px">Shipping Cost</td>';
	$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px">' . 'Rp. ' . 
				number_format($shipcostxu,2) . '</td></tr>';
	$message .= '<tr height="15px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial"><hr></td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px"><b>Total</b></td>';
	$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px"><b>' . 'Rp. ' . 
				number_format($tot,2) . '</b></td></tr>';
	$message .= "</table>";
	$message .= '<table style="border-color: #666;" width="800px" border="0" cellspacing="0" cellpadding="0">';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line2 . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="30px"></td>';
	$message .= '<td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="30px">•</td>';
	$message .= '<td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="730px">Nomor order</td></tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="30px"></td>';
	$message .= '<td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="30px">•</td>';
	$message .= '<td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="730px">Nomor rekening pendebetan</td></tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="30px"></td>';
	$message .= '<td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="30px">•</td>';
	$message .= '<td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="730px">PIC yang dapat dihubungi</td></tr>';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line3 . '</td><tr>';
	$message .= '<tr colspan="3" height="40px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial"></td><tr>';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line4 . '</td><tr>';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line5 . '</td><tr>';
	$message .= "</table>";
	$message .= "</body></html>";

    //mail($to,$subject,$message, $headers);
}
else if ($statusorderid==3000)		//On DELIVERY
{
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "admin@bnisouvenir.com";
	$nama = "Admin";
    $to = strip_tags($email);    
    $subject = "Verifikasi/Aktivasi akun anda pada bnisouvenir.com";    
	$headers = "From: " . strip_tags($from) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	$headers .= "CC: register@bnisouvenir.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$alamataktivasi = 'bnisouvenir.com/aktivasi.php?email='.$email.'&code='.$hash;
	
	$line0 = 'Dear ' . $name .  ',';
	$line1 = 'Order nomor #' . $noorderxu . ' sudah dikirim. Berikut pesanan Anda:';
	$line2 = 'Pengiriman untuk area Jabodetabek lebih kurang 3-4 hari kerja dan di luar Jabodetabek paling cepat 7 hari kerja, tergantung jarak dan  dalam kondisi normal.';
	$line3 = 'Terima Kasih,';
	$line4 = 'BNI Merchandising';
	
	$message = '<html><body>';
	$message .= '<img src="bnisouvenir.com/images/logobnismallok.png" width="140px" height="40px" alt="Activation" /><br><br>';
	$message .= '<table style="border-color: #666;" width="800px" border="0" cellspacing="0" cellpadding="0">';
	$message .= '<tr height="30px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line0 . '</td></tr>';
	$message .= '<tr height="40px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . '</td></tr>';
	$message .= '<tr height="30px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line1 . '</td><tr>';
	for ($a=1; $a<=$jmldata; $a++)
	{
		$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px">' . $namaprodkuu[$a] . 
					", " . $qtykuu[$a] . ' item(s)</td>';
		$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px">' . 'Rp. ' . 
					number_format($subtot[$a],2) . '</td></tr>';
	}
	$message .= '<tr height="15px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . '<hr>' . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px"><i>Sub Total</i></td>';
	$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px">' . 'Rp. ' . 
				number_format($subtot[$a],2) . '</td></tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px">Shipping Cost</td>';
	$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px">' . 'Rp. ' . 
				number_format($shipcostxu,2) . '</td></tr>';
	$message .= '<tr height="15px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial"><hr></td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px"><b>Total</b></td>';
	$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px"><b>' . 'Rp. ' . 
				number_format($tot,2) . '</b></td></tr>';
	$message .= "</table>";
	$message .= '<table style="border-color: #666;" width="800px" border="0" cellspacing="0" cellpadding="0">';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line2 . '</td><tr>';
	$message .= '<tr colspan="3" height="40px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial"></td><tr>';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line3 . '</td><tr>';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line4 . '</td><tr>';
	$message .= "</table>";
	$message .= "</body></html>";

    //mail($to,$subject,$message, $headers);
}
else if ($statusorderid==4000)		//DONE
{
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "admin@bnisouvenir.com";
	$nama = "Admin";
    $to = strip_tags($email);    
    $subject = "Verifikasi/Aktivasi akun anda pada bnisouvenir.com";    
	$headers = "From: " . strip_tags($from) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	$headers .= "CC: register@bnisouvenir.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$alamataktivasi = 'bnisouvenir.com/aktivasi.php?email='.$email.'&code='.$hash;
	
	$line0 = 'Dear ' . $name .  ',';
	$line1 = 'Terima kasih telah menggunakan BNISouvenir.com untuk pemesanan merchandise. Silakan melakukan review terhadap merchandise yang Anda pesan.';
	$line2 = 'Anda dapat mengajukan kritik dan saran melalui email admin@bnisouvenir.com.';
	$line3 = 'Terima Kasih,';
	$line4 = 'BNI Merchandising';
	
	$message = '<html><body>';
	$message .= '<img src="bnisouvenir.com/images/logobnismallok.png" width="140px" height="40px" alt="Activation" /><br><br>';
	$message .= '<table style="border-color: #666;" width="800px" border="0" cellspacing="0" cellpadding="0">';
	$message .= '<tr height="30px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line0 . '</td></tr>';
	$message .= '<tr height="30px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . '</td></tr>';
	$message .= '<tr height="30px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line1 . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line2 . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial"></td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line3 . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial"></td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line4 . '</td><tr>';
	$message .= "</table>";
	$message .= "</body></html>";

    //mail($to,$subject,$message, $headers);
}
else if ($statusorderid==5000)		//CANCEL
{
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "admin@bnisouvenir.com";
	$nama = "Admin";
    $to = strip_tags($email);    
    $subject = "Verifikasi/Aktivasi akun anda pada bnisouvenir.com";    
	$headers = "From: " . strip_tags($from) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	$headers .= "CC: register@bnisouvenir.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$alamataktivasi = 'bnisouvenir.com/aktivasi.php?email='.$email.'&code='.$hash;
	
	$line0 = 'Dear ' . $name .  ',';
	$line1 = 'Order nomor #' . $noorderxu . ' telah dibatalkan. Berikut pesanan Anda:';
	$line2 = 'Kemungkinan pesanan Anda dibatalkan:';
	$line3 = 'Jika ada pertanyaan, Anda dapat mengirimkan email ke admin@bnisouvenir.com.';
	$line4 = 'Terima Kasih,';
	$line5 = 'BNI Merchandising';
	
	$message = '<html><body>';
	$message .= '<img src="bnisouvenir.com/images/logobnismallok.png" width="140px" height="40px" alt="Activation" /><br><br>';
	$message .= '<table style="border-color: #666;" width="800px" border="0" cellspacing="0" cellpadding="0">';
	$message .= '<tr height="30px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line0 . '</td></tr>';
	$message .= '<tr height="40px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . '</td></tr>';
	$message .= '<tr height="30px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line1 . '</td><tr>';
	for ($a=1; $a<=$jmldata; $a++)
	{
		$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px">' . $namaprodkuu[$a] . 
					", " . $qtykuu[$a] . ' item(s)</td>';
		$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px">' . 'Rp. ' . 
					number_format($subtot[$a],2) . '</td></tr>';
	}
	$message .= '<tr height="15px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . '<hr>' . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px"><i>Sub Total</i></td>';
	$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px">' . 'Rp. ' . 
				number_format($subtot[$a],2) . '</td></tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px">Shipping Cost</td>';
	$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px">' . 'Rp. ' . 
				number_format($shipcostxu,2) . '</td></tr>';
	$message .= '<tr height="15px"><td colspan="2" style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial"><hr></td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="500px"><b>Total</b></td>';
	$message .= '<td style="padding-left: auto;margin-right: 10px;text-align: right; font-size: 1.1em; font-family: Arial" width="300px"><b>' . 'Rp. ' . 
				number_format($tot,2) . '</b></td></tr>';
	$message .= "</table>";
	$message .= '<table style="border-color: #666;" width="800px" border="0" cellspacing="0" cellpadding="0">';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line2 . '</td><tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="30px"></td>';
	$message .= '<td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="30px">•</td>';
	$message .= '<td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="730px">Double order</td></tr>';
	$message .= '<tr height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="30px"></td>';
	$message .= '<td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="30px">•</td>';
	$message .= '<td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial" width="730px">Dokumen yang Anda upload tidak sesuai/rusak/melewati batas waktu.</td></tr>';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line3 . '</td><tr>';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial"></td><tr>';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line4 . '</td><tr>';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial"></td><tr>';
	$message .= '<tr colspan="3" height="30px"><td style="padding-left: auto;text-align: left; font-size: 1.1em; font-family: Arial">' . $line5 . '</td><tr>';
	$message .= "</table>";
	$message .= "</body></html>";

    //mail($to,$subject,$message, $headers);
}
?>

<?php


//---------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------
//echo $userid;

?>

<meta http-equiv="refresh" content="0; url=viewdetailorder.php?userid=<?php echo $userid;?>&orderid=<?php echo $orderid;?>" />
