<?php 


// The request is a JSON request.
// We must read the input.
// $_POST or $_GET will not work!
$data = file_get_contents("php://input");

error_log("Data ontvangen : " . $data);
$objData = json_decode($data, true);
error_log("Decode data : " . var_dump($objData));


// perform query or whatever you wish, sample:
/*
var changes = {
	'nummer' : nummer,
	'oorlogid' : id,
	'playerid' : 1
};
*/

$nummer =  $objData['nummer'];
error_log("Decode data nummer : " . $nummer);
$oorlog_id =  $objData['oorlogid'];
error_log("Decode oorlog id : " . $oorlog_id);
$player =  $objData['playerid'];
error_log("Decode plyer : " . $player);

$bStatus = true;
$bList = false;

## DB INSERT (registrations)
$db_host = "localhost";
$db_user = "bravebe1_laurent";
$db_pass = "bungee.7";
$db_schema   = "bravebe1_bravebelgica";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);
#$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_SCHEMA);
if (!$conn) {
	#echo "Could not connect to server\n";
	#trigger_error(mysqli_error(), E_USER_ERROR);
	$status="DBERR";
	return null;

} 
$sql = "UPDATE cc_oorlog_reservaties SET id_clanplayer = {$player}, reservatie_tijdstip=now() WHERE tegenstander_nummer={$nummer} AND id_oorlog={$oorlog_id}";
//update cc_oorlog_reservaties set id_clanplayer=1 where tegenstander_nummer=22 and id_oorlog=1;

if (!mysqli_query($conn,$sql)) {
	die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);

?>
