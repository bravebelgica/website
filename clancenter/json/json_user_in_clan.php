

<?php 
require_once( dirname(__FILE__) . '/center-config.php' );
require_once( dirname(__FILE__) . '/center-connect.php' );

$bStatus = true;
$bList = false;

$clan_id =  1;

$query = "select P.id_clanplayer, P.alias, C.clanname, CR.role, R.email 
from 
	cc_clanplayer P, 
	cc_clans C,
	cc_clanroles CR, 
	coc_registrations R
where C.id_clan = {$clan_id}   
AND P.id_role = CR.id_clanrole 
AND P.id_player = R.registration_id
AND R.registration_id = 1";

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
	 $row_array['clan'] = $row['clanname'];
	 $row_array['alias'] = $row['alias'];
	 $row_array['id_clanplayer'] = $row['id_clanplayer'];
	 $row_array['role'] = $row['role'];
	 
	 array_push($return_arr,$row_array);
}

echo json_encode($return_arr);

?>

