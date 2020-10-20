<?php
$id = $_POST["id"];
$name = $_POST["name"];

$dsn = 'database.cgbqtfdk1vhj.ap-northeast-1.rds.amazonaws.com';
$user = 'admin';
$password = 'kvls1093SS';
$mysqli = new mysqli(dsn, userm password, "test_DB");

if( $mysqli->connect_errno ) {
	echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
}

?>
