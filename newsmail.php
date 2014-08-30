
<?php
// multiple recipients
/** Load the COC Environment. */
require( dirname(__FILE__) . '/coc-load.php' );


if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
echo ABSPATH;

// message
$message = file_get_contents(ABSPATH . 'coc-content/nieuwsbrief_content.html', true);
echo $message;

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_SCHEMA);
if (!$conn) {
	#echo "Could not connect to server\n";
	#trigger_error(mysqli_error(), E_USER_ERROR);
	$status="DBERR";
	$location = "/status.php?status=" . $status ;
	header( "Location: $location" );
	return;

} else {
	#echo "Connection established\n";
}
$query = "SELECT DISTINCT(email) from coc_registrations";

$rs = mysqli_query($conn,$query);
if (!$rs) {
	#echo "Could not execute query: $query\n";
	trigger_error(mysql_error(), E_USER_ERROR);
	$status="DBERR";
	$location = "/status.php?status=" . $status ;
	header( "Location: $location" );
	mysqli_close();
	return;
} else {
	#echo "Query: $query executed\n";
}

$bcc="";
while($row = mysqli_fetch_array($rs)) {
	$bcc .=  $row['email'] . ',';
}
	
$to  = 'brave.belgica@gmail.com' ; // note the comma


// subject
$subject = 'Nieuwsbrief Brave Belgica';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Brave Belgica leden <brave.belgica@gmail.com>' . "\r\n";
$headers .= 'From: Brave Belgica <brave.belgica@gmail.com>' . "\r\n";
$headers .= 'Bcc: ' . $bcc . "\r\n";

//echo $headers;

// Mail it
mail($to, $subject, $message, $headers);

?>
