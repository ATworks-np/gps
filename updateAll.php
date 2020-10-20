<?php
$POST = json_decode(file_get_contents('php://input'), true);
$user_id = $POST["user_id"];
$widget_id = $POST["widget_id"];


$dbhost = 'database.cgbqtfdk1vhj.ap-northeast-1.rds.amazonaws.com';
$dbname = 'test_DB';
$dsn = 'mysql:host='.$dbhost.';dbname='.$dbname;
$user = 'admin';
$password = 'kvls1093SS';
try
{
  echo $user_id;
  $dbh=new PDO($dsn, $user, $password);
  $sql = "SELECT * FROM logdata WHERE user_id = 1";
  //$sql = "SELECT * FROM logdata as d WHERE date=(select max(date) from logdata where widjet_id = d.widjet_id)" ;

  $res = $dbh->query($sql);

  foreach( $res as $value ) {
    echo $value[id].'|'.$value[date].'|'.$value[user_id].'|'.$value[widget_id].'|'.$value[lat].'|'.$value[lng];
     echo '<br>';
  }

}catch (Exception $e)
{
      print 'データーベース接続エラー発生';
      exit();
}

?>
