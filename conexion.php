<?php
	function conexion(){

	$host = "host=containers-us-west-95.railway.app";
	$port = "port=7237";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=mLz8apXQIjFTnKnGb3Aj";

	$db = pg_connect("$host $port $dbname $user $password");
	
    return $db;
}
?>