<?php
$id = $_GET[‘id’];
echo $id;
?>

<!DOCTYPE html>
<html lang = “ja”>
<head>
<meta charset = “UFT-8”>
<title>フォームからデータを受け取る</title>
</head>
<body>
<h1>フォームデータの送信</h1>
<form action = “index.php” method = “get”>
<input type = “text” name =“id/“><br/>
<input type = “submit” value =“a/“>
</form>
</body>
</html>
