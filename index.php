<?php
$comment = $_GET[‘comment’];
echo $comment;
?>
<!DOCTYPE html>
<html lang = “ja”>
<head>
<meta charset = “UFT-8”>
<title>フォームからデータを受け取る</title>
</head>
<body>
<h1>フォームデータの送信</h1>
<form action = index.php method = “get”>
<input type = “text” name =“comment/“><br/>
<input type="submit" value="send">
</form>
</body>
</html>
