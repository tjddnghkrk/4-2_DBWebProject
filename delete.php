<?php
  $con= mysqli_connect('localhost','shop','7941','shop'); //DB연결
  $del=($_POST['deletenum']);
  $query= "DELETE FROM product WHERE no=$del"; //삭제 쿼리

  mysqli_query($con,$query);
  mysqli_close($con);
  header("Location: admin_list.php");
?>
