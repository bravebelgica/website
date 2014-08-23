<?php

$host = "localhost"; 
$user = "bravebe1_laurent"; 
$pass = "bungee.7"; 
$db   = "bravebe1_bravebelgica";

//$db bravebe1_bravebelgica

$conn = mysqli_connect($host, $user, $pass, $db);


if (!$conn) {
    echo "Could not connect to server\n";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Connection established\n"; 
}

echo mysql_get_server_info() . "\n"; 

$query = "SELECT count(*) from coc_registrations";

$rs = mysqli_query($conn,$query);

if (!$rs) {
    echo "Could not execute query: $query\n";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Query: $query executed\n"; 
}

$row = mysqli_fetch_row($rs);

echo "Version: $row[0]\n";

mysql_close();

mysql_close();

?>
