<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP_TEST</title>
    </head>
    <body>
        <h1>データ受け取りプログラム</h1>
        <p>お名前を入力してください</p>
        <!-- <form action="" method="post"> -->
        <form  method="post">
            <select name="lunch[]" multiple>
            <option value="pork">BBQ Pork Bun</option>
            <option value="chicken">Chiken Bun</option>
            </select>
            <input type="submit" name="submit">
        </form>
		
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_form_errors = validate_form()) {
          show_form($_form_errors);
        } else {
          process_form();
        }
      } else {
        show_form();
      }

      function process_form() {
        print 'Hello, ' . $_POST['my_name']
      }
    ?>
    </body>
</html>

