
<header>
<script>
function viewme(userid, levelid, tipe)
{

var f = document.createElement("form");
f.setAttribute('name',"postme");
f.setAttribute('id',"postme");
f.setAttribute('method',"post");
if (levelid==1 || levelid==2)
{
	f.setAttribute('action',"set_shopping.php");
}
else {
	f.setAttribute('action',"shopping.php");
}
f.setAttribute('target',"");

var i1 = document.createElement("input");
i1.type = "hidden";
i1.name = "userid";
i1.id = "userid";
i1.value = userid;


var i2 = document.createElement("input");
i2.type = "hidden";
i2.name = "tipe";
i2.id = "tipe";
i2.value = tipe;

// add all elements to the form
f.appendChild(i2);
f.appendChild(i1);


// add the form inside the body
$("body").append(f);   //using jQuery or
document.getElementsByTagName('body')[0].appendChild(f); //pure javascript

document.forms["postme"].submit();
document.getElementById("postme").remove();
}
</script>

<script>
function viewshopping(userid, levelid, jenisshopping)
{
	if (levelid==1 || levelid==2)
	{
		document.getElementsByName("jenissethargabarang")[0].value = jenisshopping;
		document.forms["mysetshopping"].submit();
	}
	else
	{
		document.getElementsByName("jenishargabarang")[0].value = jenisshopping;
		document.forms["myshopping"].submit();		
	}
}
</script>

</header>


<?php

?>
<form name="myshopping" id="myshopping" action="shopping.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridshop" name="useridshop" value="<?php echo $useridku;?>">
	<input type="hidden" id="jenishargabarang" name="jenishargabarang">
</form>
<form name="mysetshopping" id="mysetshopping" action="set_shopping.php" method="post" enctype="multipart/form-data">
	<input type="hidden" id="useridsshop" name="useridsshop" value="<?php echo $useridku;?>">
	<input type="hidden" id="jenissethargabarang" name="jenissethargabarang">
</form>


<nav id='cssmenu'>
<div class="logo"></div>
<div id="head-mobile"></div>
<ul>
	<li>
		<a href='#' onclick="document.forms['myviewahome'].submit();" >HOME</a>
			<form name="myviewhome" id="myviewahome" action="main.php" method="post" enctype="multipart/form-data">
				<input type="hidden" id="userid" name="userid" value="<?php echo $useridku;?>">
			</form>
	</li>
	<li class='active'><a href='#'>MERCHANDIZE</a>
	   <ul>
		  <li><a href='#'>GENERIC</a>
			 <ul>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'less10k');"> Rp. 10.000</a>
				</li>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'10to50');">Rp. 10.001 - Rp. 50.000</a>
				</li>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'50to100');">Rp. 50.001 - Rp. 100.000</a>
				</li>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'100to200');">Rp. 100.001 - Rp. 200.000</a>
				</li>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'200more');">Rp. 200.001</a></li>
			 </ul>
		  </li>
		  <li><a href='#'>EXCLUSIVE</a>
			 <ul>
				<li><a href="" onclick="javascript:alert('OKE');">BNI EMERALD</a></li>
			 </ul>
		  </li>
		  <li><a href='#'>CLEARANCE</a>
			 <ul>
				<li><a href='#'>Sub Product</a></li>
				<li><a href='#'>Sub Product</a></li>
			 </ul>
		  </li>
	   </ul>
	</li>
<?php
if ($levelidku > 1)
{
?>
	<li><a href='#'>FAQ</a></li>
	<li><a href='#'>NEWS</a></li>
	<li><a href='#'>CONTACT</a></li>
	<li><a href='#'>TERMS & CONDITIONS</a></li>
<?php
}
else if ($levelidku==1)
{
?>
	<li><a href='#'>SETTING</a>
	   <ul>
		  <li><a href='#'>MERCHANDIZE</a>
			 <ul>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'less10k');">Category</a>
				</li>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'10to50');">Material</a>
				</li>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'50to100');">Color</a>
				</li>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'50to100');">Packaging</a>
				</li>
			 </ul>
		  </li>
		  <li><a href='#'>USER</a>
			 <ul>
				<li><a href="" onclick="javascript:alert('OKE');">New/Add</a></li>
				<li><a href="" onclick="javascript:alert('OKE');">List</a></li>
			 </ul>
		  </li>
	   </ul>
	</li>
	<li><a href='#'>REPORT</a>
	   <ul>
		  <li><a href='#'>SALE</a>
			 <ul>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'less10k');">Category</a>
				</li>
				<li><a href='#' onclick="viewshopping(<?php echo $useridku;?>,<?php echo $levelidku;?>,'10to50');">Material</a>
				</li>
			 </ul>
		  </li>
		  <li><a href='#'>REPORT</a>
			 <ul>
				<li><a href='#'>SALES</a></li>
			 </ul>
		  </li>
	   </ul>
	</li>
<?php
}
?>
</ul>
</nav>
</header>