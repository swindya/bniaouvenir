<head>
<script>
function addproduct(userid)
{
	document.forms["myaddproduct"].submit();
}
</script>

<script>
function viewuser(userid, levelid)
{
	document.forms["myuser"].submit();
}
</script>

<script>
function viewbanner(userid, levelid)
{
	document.forms["mybanner"].submit();
}
</script>

<script>
function listproduct(userid)
{
	document.forms["myuser"].submit();
}
</script>

<script>
function viewshopping(userid, levelid, jenisshopping)
{
	if (levelid==1 || levelid==2)
	{
		document.getElementsByName("jenissethargabarang1")[0].value = jenisshopping;
		document.forms["mysetshopping"].submit();
	}
	else
	{
		document.getElementsByName("jenishargabarang1")[0].value = jenisshopping;
		document.forms["myshopping"].submit();		
	}
}
</script>

<script>
function viewstok(userid, levelid, jenisshopping)
{
		document.forms["myviewstok"].submit();
}
</script>

<script>
function viewreportstok(userid, levelid)
{
		document.forms["myviewreportstok"].submit();
}
</script>

<script>
function viewreportorder(userid, levelid)
{
		document.forms["myviewreportorder"].submit();
}
</script>


</head>



<form name="myshopping" id="myshopping" action="shopping.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridshop" name="useridshop" value="<?php echo $useridku;?>">
	<input type="hidden" id="jenishargabarang1" name="jenishargabarang1">
</form>
<form name="mysetshopping" id="mysetshopping" action="liststok.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridsshop" name="useridsshop" value="<?php echo $useridku;?>">
	<input type="hidden" id="jenissethargabarang1" name="jenissethargabarang1">
</form>
<form name="myviewstok" id="myviewstok" action="liststok.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridstok" name="useridstok" value="<?php echo $useridku;?>">
</form>

<form name="myaddproduct" id="myaddproduct" action="addproduct.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridaddp" name="useridaddp" value="<?php echo $useridku;?>">
</form>

<form name="myuser" id="myuser" action="mainuser.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridusr" name="useridusr" value="<?php echo $useridku;?>">
	<input type="hidden" id="idusr" name="idusr" value="<?php echo $useridku;?>">
</form>

<form name="mylistproduct" id="mylistproduct" action="mainuser.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridusr" name="useridusr" value="<?php echo $useridku;?>">
</form>

<form name="mybanner" id="mybanner" action="mainbanner.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridbanner" name="useridbanner" value="<?php echo $useridku;?>">
</form>

<form name="myviewreportstok" id="myviewreportstok" action="mainreportstok.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridrepstok" name="useridrepstok" value="<?php echo $useridku;?>">
</form>

<form name="myviewreportorder" id="myviewreportorder" action="mainreportorder.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridrepstok" name="useridrepstok" value="<?php echo $useridku;?>">
</form>


<li class='active'><a href='#'>SETTING</a>
   <ul>
      <li><a href='#'>MERCHANDIZE</a>
         <ul>
            <li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'less10k');">Products</a>
				<ul>
				    <li><a href='#' onclick="addproduct(<?php echo $useridku;?>);">Add/New</a>
					</li>
				    <!--li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'sortaz');">List</a>
					</li-->
				    <li><a href='#' onclick="viewstok(<?php echo $useridku;?>,<?php echo $levelidku;?>,'sortaz');">List</a>
					</li>
				</ul>
			</li>
            <!--li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'10to50');">Material</a>
			</li>
            <li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'50to100');">Color</a>
			</li-->
         </ul>
      </li>
      <li><a href='#' onclick="viewuser(<?php echo $useridku;?>,<?php echo $levelidku;?>);">USER</a>
         <ul>
			<!--li><a href="" onclick="javascript:alert('OKE');">New</a></li-->
            <li><a href="" onclick="viewuser(<?php echo $useridku;?>);">List</a></li>
         </ul>
      </li>
      <li><a href='#' onclick="viewbanner(<?php echo $useridku;?>,<?php echo $levelidku;?>);">BANNER</a>
         <ul>
			<!--li><a href="" onclick="javascript:alert('OKE');">New</a></li-->
            <!--li><a href="" onclick="viewuser(<?php echo $useridku;?>);">Upload</a></li-->
         </ul>
      </li>
      <li><a href='#'>REPORT</a>
         <ul>
			<li><a href='#' onclick="viewreportstok(<?php echo $useridku;?>,<?php echo $levelidku;?>);">STOK</a></li>
            <li><a href='#' onclick="viewreportorder(<?php echo $useridku;?>,<?php echo $levelidku;?>);">ORDER</a></li>
         </ul>
      </li>
   </ul>
</li>