<?php
$con= mysqli_connect('localhost','shop','7941','shop'); //DB연결

  $name = ($_POST['name']);
  $comment = ($_POST['comment']);
	$price = ($_POST['price']);
	$classify = ($_POST['classify']);

  $uploads_dir = "./img";

  $imgname = $_FILES['img']['name'];
  move_uploaded_file($_FILES['img']['tmp_name'], "$uploads_dir/$imgname");


$query = "INSERT INTO product (name, comment, price, classify, img) VALUES ('$name', '$comment', '$price', '$classify', '$imgname')";
mysqli_query($con,$query);
mysqli_close($con);
header("Location: shop_add.php");
?>
