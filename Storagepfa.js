function SaveItem() {

	var kodename = document.forms.BarangEntryPFA.kodename.value;
	var name = document.forms.BarangEntryPFA.name.value;
	var qty = document.forms.BarangEntryPFA.qty.value;
	var satuan = document.forms.BarangEntryPFA.satuan.value;
	var harga = document.forms.BarangEntryPFA.harga.value;
	var serialbasic = document.forms.BarangEntryPFA.serialbasic.value;
	var serialmulai = document.forms.BarangEntryPFA.serialmulai.value;
	var serialsd = document.forms.BarangEntryPFA.serialsd.value;


	localStorage.setItem(kodename, JSON.stringify([name, qty, satuan, harga, serialbasic, serialmulai, serialsd]));
//localStorage.setItem("kodebarang", "A000");
//localStorage.setItem("name", "AMPLOP BESAR");
//localStorage.setItem("qty", "20");
//localStorage.setItem("satuan", "LBR");
//localStorage.setItem("harga", "5000");
	//localStorage.setItem('A000', JSON.stringify(['Surat', '20', 'BUAH', '12000']));
	doShowAll();
	
}

function ModifyItem() {
	var kodename = document.forms.BarangEntryPFA.kodename.value;
	var name = document.forms.BarangEntryPFA.name.value;
	document.forms.BarangEntryPFA.data.value = localStorage.getItem(kodename);
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
		for (i = 0; i <= localStorage.length - 1; i++) {
			key = localStorage.key(i);
			var storedArray = localStorage.getItem(key);
			ourArray = JSON.parse(storedArray);
			if (i%2 === 0)
			{
				list += '<tr height="30px" STYLE="background-color: #FCFCCC; font-size: 1.1em"><td STYLE="text-align: center; width: 50px;">' + (i+1) + '</td>\n<td STYLE="text-align: center; width: 100px;">' + key + 
					'</td>\n<td STYLE="text-align: center; width: 300px">'
					+ ourArray[0] + '</td>\n<td STYLE="text-align: center; width: 80px">'
					+ ourArray[1] + '</td>\n<td STYLE="text-align: center; width: 100px">'
					+ ourArray[2] + '</td>\n<td STYLE="text-align: center; width: 100px">' 
					+ ourArray[3].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '</td>\n<td STYLE="text-align: center; width: 160px">' 
					+ ourArray[4] + ' ' + ourArray[5] + ' - ' + ourArray[6] + '</td>\n<td STYLE="text-align: center; width: 100px">' +
					'<font face="arial" size="1" color="black"><a href="#popup" class="small button blue" onclick="filleditdata(&quot;' + key + '&quot;);">Edit</a></font>' 
					+ '</td>\n<td STYLE="text-align: center; width: 100px"><font face="arial" size="1" color="black"><a href="" class="small button red" onclick="deldata(&quot;' + key + '&quot;)">Hapus</a></font>' + '</td></tr>\n';
			}
			else if (i%2 === 1)
			{
				list += '<tr height="30px" STYLE="background-color: #FFFFFF; font-size: 1.1em"><td STYLE="text-align: center; width: 50px;">' + (i+1) + '</td>\n<td STYLE="text-align: center; width: 100px;">' + key + 
					'</td>\n<td STYLE="text-align: center; width: 300px">'
					+ ourArray[0] + '</td>\n<td STYLE="text-align: center; width: 80px">'
					+ ourArray[1] + '</td>\n<td STYLE="text-align: center; width: 100px">'
					+ ourArray[2] + '</td>\n<td STYLE="text-align: center; width: 100px">'
					+ ourArray[3].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '</td>\n<td STYLE="text-align: center; width: 160px">' 
					+ ourArray[4] + ' ' + ourArray[5] + ' - ' + ourArray[6] + '</td>\n<td STYLE="text-align: center; width: 100px">' +
					'<font face="arial" size="1" color="black"><a href="#popup" class="small button blue" onclick="filleditdata(&quot;' + key + '&quot;);">Edit</a></font>' 
					+ '</td>\n<td STYLE="text-align: center; width: 100px"><font face="arial" size="1" color="black"><a href="" class="small button red" onclick="deldata(&quot;' + key + '&quot;)">Hapus</a></font>' + '</td></tr>\n';				
			}

			totharga = totharga + (Number(ourArray[1]) * Number(ourArray[3]));
		}
		if (list == "<tr><th>Code Name</th><th>Name</th><th>Qty</th><th>Satuan</th></tr>\n") {
			list += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td>\n<td><i>empty</i></td>\n<td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
		}

		document.getElementById('list').innerHTML = list;
		totharga = totharga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		document.getElementById('totalharga').innerHTML = '<font face="arial" size="2" color="black">&nbsp;&nbsp;&nbsp;' + 'Rp. ' + totharga + '</font>';
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