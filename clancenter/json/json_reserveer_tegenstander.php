<?php 
require_once( dirname(__FILE__) . '/center-config.php' );
require_once( dirname(__FILE__) . '/center-connect.php' );

$bStatus = true;
$bList = false;

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


$sql = "UPDATE cc_oorlog_reservaties SET id_clanplayer = {$player}, reservatie_tijdstip=now() WHERE tegenstander_nummer={$nummer} AND id_oorlog={$oorlog_id}";
//update cc_oorlog_reservaties set id_clanplayer=1 where tegenstander_nummer=22 and id_oorlog=1;

if (!mysqli_query($conn,$sql)) {
	die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);

?>
