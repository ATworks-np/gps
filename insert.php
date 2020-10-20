<?php
$id = $_POST["id"];
$name = $_POST["name"];
print($id,$name)
$dbhost = 'database.cgbqtfdk1vhj.ap-northeast-1.rds.amazonaws.com';
$dbname = 'test_DB';
$dsn = 'mysql:host='.$dbhost.';dbname='.$dbname;
$user = 'admin';
$password = 'kvls1093SS';
try
{
  $dbh=new PDO($dsn, $user, $password);
  $sql = "INSERT INTO user (id, name) VALUES (:id, :name,)";
  $stmt = $dbh->prepare($sql);
  $params = array(':id' => $id, ':name' => $name);
  $stmt->execute($params);
  if ($stmt){
    print('データの追加に成功しました<br>');
  }else{
    print('データの追加に失敗しました<br>');
  }
}
catch (Exception $e)
{
      print 'データーベース接続エラー発生';
      exit();
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
