
<table style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 35px;" width="900px" border="0" cellspacing="0" cellpadding="0">
		<tr height="100px">
			<td style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>	
		</tr>
		<tr height="50px">
			<td style="padding-left: 0px; padding-top: auto; text-align: center;">
				<h2><font face="Ubuntu" color="#555555" size="6"><b>
				AKUN ANDA BELUM AKTIF
				</b></font></h2>
			</td>
		</tr>
		<tr height="50px">
			<td style="padding-left: 0px; padding-top: auto; text-align: center;">
				<h2><font face="Ubuntu" color="#555555" size="6"><b>
				PERIKSA EMAIL ANDA ATAU BUAT/REGISTER AKUN BARU
				</b></font></h2>
			</td>
		</tr>
		<tr height="30px">
			<td style="padding-left: 0px; padding-top: auto; text-align: center;">
				<h2><font face="Ubuntu" color="#04AF55" size="6"><b></b></font></h2>
			</td>
		</tr>
		<tr height="30px">
			<td style="padding-left: 0px; padding-top: auto; text-align: center;">
			</td>	
		</tr>
		<tr height="30px">
			<td style="padding-left: 0px; padding-top: auto; text-align: center;">
				<button type="button" class="btn btn-success btn-lg" onclick="logout(<?php echo $userid;?>);">Register</button>
			</td>
		</tr>
</table>

<form name="mylogout" id="mylogout" action="index.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
</form>

<?php


//*******************************************************************************************************

	$_SESSION['userid'] = $userid;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;



//*******************************************************************************************************

?>

