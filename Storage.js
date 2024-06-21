function SaveItem() {
//alert("OKE");
	var kodename = document.forms.BarangEntry.kodename.value;
	var name = document.forms.BarangEntry.name.value;
	var qty = document.forms.BarangEntry.qty.value;
	var satuan = document.forms.BarangEntry.satuan.value;
	var harga = document.forms.BarangEntry.harga.value;
	localStorage.setItem(kodename, JSON.stringify([name, qty, satuan, harga]));
//localStorage.setItem("kodebarang", "A000");
//localStorage.setItem("name", "AMPLOP BESAR");
//localStorage.setItem("qty", "20");
//localStorage.setItem("satuan", "LBR");
//localStorage.setItem("harga", "5000");
	localStorage.setItem('A000', JSON.stringify(['Surat', '20', 'BUAH', '12000']));
	doShowAll();
	
}

function ModifyItem() {
	var kodename = document.forms.BarangEntry.kodename.value;
	var name = document.forms.BarangEntry.name.value;
	document.forms.BarangEntry.data.value = localStorage.getItem(kodename);
	doShowAll();
}

function RemoveItem(kodename) {
	localStorage.removeItem(kodename);
	doShowAll();
}

function ClearAll() {
	localStorage.clear();
	doShowAll();
}

// dynamically draw the table

function doShowAll() {

	if (CheckBrowser()) {
		var key = "";
		var list = "";
		var totharga = 0;
		var tothargaa = "";
		var i = 0;
		for (i = 1; i <= localStorage.length - 1; i++) {
			key = localStorage.key(i);
			var storedArray = localStorage.getItem(key);
			ourArray = JSON.parse(storedArray);
			if (i%2 === 0)
			{
				list += '<tr height="30px" STYLE="background-color: #FCFCCC;"><td STYLE="text-align: center; width: 50px;">' + (i) + '</td>\n<td STYLE="text-align: center; width: 100px;">' + key + 
					'</td>\n<td STYLE="text-align: center; width: 360px">'
					+ ourArray[0] + '</td>\n<td STYLE="text-align: center; width: 80px">'
					+ ourArray[1] + '</td>\n<td STYLE="text-align: center; width: 100px">'
					+ ourArray[2] + '</td>\n<td STYLE="text-align: center; width: 100px">' 
					+ ourArray[3].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '</td>\n<td STYLE="text-align: center; width: 100px">' +
					'<font face="arial" size="1" color="black"><a href="#popup" class="small button blue" onclick="filleditdata(&quot;' + key + '&quot;);">Edit</a></font>' 
					+ '</td>\n<td STYLE="text-align: center; width: 100px"><font face="arial" size="1" color="black"><a href="" class="small button red" onclick="deldata(&quot;' + key + '&quot;)">Hapus</a></font>' + '</td></tr>\n';
			}
			else if (i%2 === 1)
			{
				list += '<tr height="30px" STYLE="background-color: #FFFFFF;"><td STYLE="text-align: center; width: 50px;">' + (i) + '</td>\n<td STYLE="text-align: center; width: 100px;">' + key + 
					'</td>\n<td STYLE="text-align: center; width: 360px">'
					+ ourArray[0] + '</td>\n<td STYLE="text-align: center; width: 80px">'
					+ ourArray[1] + '</td>\n<td STYLE="text-align: center; width: 100px">'
					+ ourArray[2] + '</td>\n<td STYLE="text-align: center; width: 100px">'
					+ ourArray[3].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '</td>\n<td STYLE="text-align: center; width: 100px">' +
					'<font face="arial" size="1" color="black"><a href="#popup" class="small button blue" onclick="filleditdata(&quot;' + key + '&quot;);">Edit</a></font>' 
					+ '</td>\n<td STYLE="text-align: center; width: 100px"><font face="arial" size="1" color="black"><a href="" class="small button red" onclick="deldata(&quot;' + key + '&quot;)">Hapus</a></font>' + '</td></tr>\n';
				
			}
//alert(Number(ourArray[1] + "---" + Number(ourArray[3]));
			totharga = totharga + (Number(ourArray[1]) * Number(ourArray[3].replace(/\,/g,'')));

		}
		if (list == "<tr><th>Code Name</th><th>Name</th><th>Qty</th><th>Satuan</th></tr>\n") {
			list += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td>\n<td><i>empty</i></td>\n<td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
		}
		document.getElementById('list').innerHTML = list;
		totharga = totharga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		document.getElementById('totalharga').innerHTML = '<font face="arial" color="black">&nbsp;&nbsp;&nbsp;' + 'Rp. ' + totharga + '</font>';
	} else {
		alert('Cannot store shopping list as your browser do not support local storage');
	}
}

/*
 * Checking the browser compatibility.
 * 
 * Alternately can use Modernizr scripts- JavaScript library that helps us to
 * detect the browser support for HTML5 and CSS features Example - <script
 * type="text/javascript" src="modernizr.min.js"></script>
 * 
 * if (Modernizr.localstorage) { //use localStorage object to store data } else {
 * alert('Cannot store user preferences as your browser do not support local
 * storage'); }
 */
function CheckBrowser() {
	if ('localStorage' in window && window['localStorage'] !== null) {
		// we can use localStorage object to store data
		return true;
	} else {
			return false;
	}
}