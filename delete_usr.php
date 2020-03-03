<?php
  $con= mysqli_connect('localhost','shop','7941','shop'); //DB연결
  $del=($_POST['deletenum']);
  $query= "DELETE FROM users WHERE no=$del"; //삭제 쿼리

  mysqli_query($con,$query);
  mysqli_close($con);
  header("Location: usr_admin_list.php");
?>
