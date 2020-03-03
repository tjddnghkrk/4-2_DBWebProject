<?php session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="hey.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  </head>
  <body>

    <?php
    if(!isset($_SESSION['login'])){
    	echo "You are Guest";
    	echo "<a class=top href=registration.php>  SIGN UP　　</a>";
    	echo "<a class=top href=login.php>SIGN IN　　</a>";
    }else{
    	echo $_SESSION['login']."　　";
    	echo "<a class=top href=logout.php>로그아웃</a>";
    }
    ?>


<div class="" style="text-align:center;">

    <a href="shop.php"><img src="img/shop.png" ></a>
    <a ><img src="img/golf.png" ></a>
    <a href="flag.php"><img src="img/flag.png" ></a>


    </div>

    <div class="">
      <img src="img/fw1.jpeg" width = "100%" alt="">
      <img src="img/fw2.jpg" width = "100%" alt="">
    </div>


<footer style="height : 50px">
  <a href="adminpage.php" style=" text-align: 'center'; font-family: 'Josefin Sans', sans-serif;">>>ADMIN<<</a></li>

</footer>

  </body>
</html>
