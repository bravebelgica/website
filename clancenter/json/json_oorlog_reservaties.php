<?php 
require_once( dirname(__FILE__) . '/center-config.php' );
require_once( dirname(__FILE__) . '/center-connect.php' );

$bStatus = true;
$bList = false;
$query = "SELECT ORS.tegenstander_nummer as nummer,ORS.tegenstander_level as level ,ORS.id_clanplayer as id ,ORS.aanvaltijdstip as aanval, CP.alias as alias, ORS.reservatie_tijdstip reservatie FROM bravebe1_bravebelgica.cc_oorlog_reservaties ORS LEFT OUTER JOIN  cc_clanplayer CP   ON ORS.id_clanplayer =  CP.id_clanplayer  where ORS.id_oorlog=1"; 
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
	$row_array['reservatie'] = $row['reservatie'];
	
	array_push($return_arr,$row_array);
}

echo json_encode($return_arr);

?>
