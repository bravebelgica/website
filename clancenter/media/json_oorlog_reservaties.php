<?php 
$bStatus = true;
$bList = false;

## DB INSERT (registrations)
$db_host = "localhost";
$db_user = "bravebe1_laurent";
$db_pass = "bungee.7";
$db_schema   = "bravebe1_bravebelgica";


#onstruct query
$query = "SELECT ORS.tegenstander_nummer as nummer,ORS.tegenstander_level as level ,ORS.id_clanplayer as id ,ORS.aanvaltijdstip as aanval, CP.alias as alias FROM bravebe1_bravebelgica.cc_oorlog_reservaties ORS LEFT OUTER JOIN  cc_clanplayer CP   ON ORS.id_clanplayer =  CP.id_clanplayer  where ORS.id_oorlog=1"; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);
#$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_SCHEMA);
if (!$conn) {
	#echo "Could not connect to server\n";
	#trigger_error(mysqli_error(), E_USER_ERROR);
	$status="DBERR";
	return null;

} 
$rs = mysqli_query($conn,$query);



$return_arr = array();

if (!$rs) {
	#echo "Could not execute query: $query\n";
	trigger_error(mysql_error(), E_USER_ERROR);
	$status="DBERR";
	mysqli_close();
	return null;
} 

while($row = mysqli_fetch_array($rs)) {
	$row_array['nummer'] = $row['nummer'];
	$row_array['level'] = $row['level'];
	$row_array['id_clanplayer'] = $row['id'];
	$row_array['alias'] = $row['alias'];
	$row_array['aanval'] = $row['aanval'];
	
	 array_push($return_arr,$row_array);
}



echo json_encode($return_arr);

?>
