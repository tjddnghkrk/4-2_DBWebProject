<?php
if (!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo '사용자가 취소 버튼을 눌렀을 때 전송되는 텍스트';
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br><br>
    <a href="usr_admin_list.php" style=" text-align: 'center'; font-family: 'Josefin Sans'">>> USER LIST</a>
    <br><br>
    <a href="admin_list.php" style=" text-align: 'center'; font-family: 'Josefin Sans'">>> PRODUCT LIST</a>
    <br><br>
    <a href="shop_add.php" style=" text-align: 'center'; font-family: 'Josefin Sans'">>> PRODUCT ADD</a>
    <br><br>

  </body>
</html>
