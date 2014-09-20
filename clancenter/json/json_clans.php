

<?php 
require_once( dirname(__FILE__) . '/center-config.php' );
require_once( dirname(__FILE__) . '/center-connect.php' );

$bStatus = true;
$bList = false;

$query = "select clan.clanname as clanname from cc_clans clan;";
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
	 array_push($return_arr,$row_array);
}

echo json_encode($return_arr);

?>

