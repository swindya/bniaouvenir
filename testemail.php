<?php
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "admin@bnisouvenir.com";
	$nama = "Mas Bejo";
    $to = "swindya@gmail.com";    
    $subject = "Checking PHP mail";    
    //$message = "PHP mail berjalan dengan baik";   
    $headers = "From:" . $from;
	$headers = "From: " . strip_tags($from) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	$headers .= "CC: mbagong@gmail.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($nama) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $from . "</td></tr>";
$message .= "<tr><td><strong>Type of Change:</strong> </td><td>" . "" . "</td></tr>";
$message .= "<tr><td><strong>Urgency:</strong> </td><td>" . "Very Urgent" . "</td></tr>";
$message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . "www.detik.com" . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";
?>