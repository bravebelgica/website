<?php

# Check if valid email
$subscriber .= $_REQUEST['Email'];

if (filter_var($subscriber, FILTER_VALIDATE_EMAIL)) {
	$location = "/status.php?status=" . $status . "&email=" . $subscriber;
} else {
	$status="INVALID";
	$location = "/status.php?status=" . $status . "&email=" . $subscriber;
	header( "Location: $location" );
	return;
}


/** Load the COC Environment. */
require( dirname(__FILE__) . '/coc-load.php' );


$err = '';
$status = 'VALID';
# RESULT PAGE
$location = "/index.html";

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_ip = $_SERVER['REMOTE_ADDR'];
$info = $user_agent . '/' . $user_ip;

#onstruct query
$query = "INSERT INTO coc_registrations(id,email,requestdate,requestinfo)VALUES(null,'" . $subscriber . "',current_timestamp,'" . $info ."')";
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
$row = mysqli_fetch_row($rs);
echo "Version: $row[0]\n";







# LIST EMAIL ADDRESS
$recipient = "brave.belgica@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Nieuwe Inschrijving Clan Brave Belgica (vanuit Website  Brave Belgica) ";

## FORM VALUES ##
# SENDER - WE ALSO USE THE RECIPIENT AS SENDER
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
# SEE ALSO: How to protect a php Email Form using php mail or mb_send_mail against Mail Header Injection
$sender = $recipient;

# MAIL BODY claN
$body .= "Er is een nieuwe aanvraag voor een inschrijving";
$body .= "\nEmail:". $subscriber ." \n";


# MAIL BODY SUBSCRBER
$body_s .= "Beste,\n\n";
$body_s .= "Bedankt voor de aanvraag tot inschrijving in onze clan. Wij behandelen uw aanvraag zo snel als mogelijk: \n";
$body_s .= "Mocht u evenwel binnen een 2-tal dagen nog altijd geen nieuws hebben ontvangen van ons, dan vragen wij u om een herinneringsmail te sturen naar brave.belgica@gmail.com.  \n\n";
$body_s .= "Met vriendelijke groeten,\n\n";
$body_s .= "Brave Belgica Clan team\n\n";
$body_s .= "\n\n\n";
$body_s .= "Dear subscriber,\n\n";
$body_s .= "Many thanks for your interest in joining our clan. We do the best we can to proceed with your request asap. \n";
$body_s .= "In case you did not receive any feedback from us within 2 days, please feel free to send us a reminder (brave.belgica@gmail.com).  \n\n";
$body_s .= "Best regards,\n\n";
$body_s .= "Brave Belgica Clan team\n\n";



## SEND MESSGAE to CLAN##
mail($recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SEND MESSGAE to SUBSCRIBER##
mail( $subscriber, $subject, $body_s, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );

?>

