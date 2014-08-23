<?php

$db_host = "localhost";
$db_user = "bravebe1_laurent";
$db_pass = "bungee.7";
$db_schema   = "bravebe1_bravebelgica";



## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "brave.belgica@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Inschrijving Clan Brave Belgica (vanuit Website  Brave Belgica) ";

# RESULT PAGE
$location = "http://www.bravebelgica.com/index.html";

## FORM VALUES ##
$subscriber .= $_REQUEST['Email'];
# SENDER - WE ALSO USE THE RECIPIENT AS SENDER
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
# SEE ALSO: How to protect a php Email Form using php mail or mb_send_mail against Mail Header Injection
$sender = $recipient;

# MAIL BODY claN
$body .= "wIJ HEBBEN EEN NIEUWE AANVRAAG ONTVANGEN VOOR EEN INSCHRIJVING";

$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email:".$_REQUEST['Email']." \n";


# MAIL BODY SUBSCRBER
$body_s .= "Beste,\n\n";

$body_s .= "Bedankt voor de aanvraag tot inschrijving in onze clan. Wij behandelen uw aanvraag zo snel als mogelijk: \n";
$body_s .= "Mocht u evenwel binnen een 2-tal dagen nog altijd geen nieuws hebben ontvangen van ons, dan vragen wij u om een herinneringsmail te sturen naar brave.belgica@gmail.com.  \n\n";
$body_s .= "Met vriendelijke groeten,\n\n";
$body_s .= "Brave Belgica Clan team\n\n";


#onstruct query
$query = "INSERT INTO coc_registrations(id,email,requestdate,requestinfo)VALUES(null,'" . $subscriber . "',current_timestamp,'some_info')";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

if (!$conn) {
	#echo "Could not connect to server\n";
	trigger_error(mysqli_error(), E_USER_ERROR);
} else {
	#echo "Connection established\n";
}

$rs = mysqli_query($conn,$query);

if (!$rs) {
	#echo "Could not execute query: $query\n";
	trigger_error(mysql_error(), E_USER_ERROR);
} else {
	#echo "Query: $query executed\n";
}
$row = mysqli_fetch_row($rs);
echo "Version: $row[0]\n";
mysqli_close();





# add more fields here if required

## SEND MESSGAE to CLAN##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SEND MESSGAE to SUBSCRIBER##

mail( $subscriber, $subject, $body_s, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );

?>

