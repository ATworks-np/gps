<?php
$POST = get_request();
$user_id = $POST["user_id"];
$widget_id = $POST["widget_id"];


$dbhost = 'database.cgbqtfdk1vhj.ap-northeast-1.rds.amazonaws.com';
$dbname = 'test_DB';
$dsn = 'mysql:host='.$dbhost.';dbname='.$dbname;
$user = 'admin';
$password = 'kvls1093SS';
try
{
  $dbh=new PDO($dsn, $user, $password);
  //$sql = "SELECT * FROM logdata WHERE user_id = $user_id";
  $sql = "SELECT * FROM logdata as d
          WHERE date = (
            SELECT max(date)
            FROM logdata
            WHERE widget_id = d.widget_id AND user_id = $user_id
          )" ;

  $res = $dbh->query($sql);

  header('Content-type: application/json');
  $data_json = json_encode($res)
  //echo data_json;
  foreach( $res as $value ) {
    echo $value[id].'|'.$value[date].'|'.$value[user_id].'|'.$value[widget_id].'|'.$value[lat].'|'.$value[lng];
     echo '<br>';
  }

}catch (Exception $e)
{
      print 'データーベース接続エラー発生';
      exit();
}
function get_request() {
    $content_type = explode(';', trim(strtolower($_SERVER['CONTENT_TYPE'])));
    $media_type = $content_type[0];

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $media_type == 'application/json') {
        // application/json で送信されてきた場合の処理
        $request = json_decode(file_get_contents('php://input'), true);
    } else {
        // application/x-www-form-urlencoded で送信されてきた場合の処理
        $request = $_REQUEST;
    }

    return $request;
}
?>
