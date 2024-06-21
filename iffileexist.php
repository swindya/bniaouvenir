<?php

echo "Cek apakah file ada" . "<br>";
$newname= "./DOC/IMAGES/1/large/noimage.png";

if (!file_exists($newname)) {
echo "TIDAK ADA";	
}

if (file_exists($newname)) {
echo "ADA";	
}

?>