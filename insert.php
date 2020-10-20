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

// INSERT文を変数に格納
$sql = "INSERT INTO user (id, name) VALUES (:id, :name,)";
// 挿入する値は空のまま、SQL実行の準備をする
$stmt = $dbh->prepare($sql);
// 挿入する値を配列に格納する
$params = array(':id' => id, ':name' => name);
// 挿入する値が入った変数をexecuteにセットしてSQLを実行
$stmt->execute($params);
$mysqli->close();

?>
