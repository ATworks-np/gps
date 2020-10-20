<?php
$id = $_POST["id"];
$name = $_POST["name"];

$dsn = 'database.cgbqtfdk1vhj.ap-northeast-1.rds.amazonaws.com';
$user = 'admin';
$password = 'kvls1093SS';

$link = mysqli_connect($dsn, $userm $password, 'test_DB');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
    echo "データベースの接続に成功しました。\n";
}
// INSERT文を変数に格納
//$sql = "INSERT INTO user (id, name) VALUES (:id, :name,)";
// 挿入する値は空のまま、SQL実行の準備をする
//$stmt = $dbh->prepare($sql);
// 挿入する値を配列に格納する
//$params = array(':id' => id, ':name' => name);
// 挿入する値が入った変数をexecuteにセットしてSQLを実行
//$stmt->execute($params);
//$mysqli->close();
?>
