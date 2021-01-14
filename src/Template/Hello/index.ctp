<!-- <!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP_TEST</title>
    </head>
    <body>
        <h1>データ受け取りプログラム</h1>
        <p>お名前を入力してください</p>
        <form action="" method="post">
            <input type="text" name="data">
            <input type="submit" name="datapost">
        </form>
		//$_POSTには送信されたデータが入っている
    <?php
      echo $_POST["data"];
    ?>
    </body>
</html> -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>エーオー</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    // 'Hello, world!'をechoする命令文
	// echo 'Hello, world!';
	
	for ($i = 1; $i <= 10; $i++) {
		echo $i;
	}

	
  ?>

</body>
</html>