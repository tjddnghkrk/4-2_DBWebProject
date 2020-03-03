<?php
session_start();
$session_id = session_id();
$con = mysqli_connect('localhost', 'shop', '7941', 'shop' );

 $name = ($_POST['name']);
 $no = ($_POST['no']);
 $price = ($_POST['price']);
 $count = ($_POST['count']);
 $regdate = time();
 $money = $count * $price;

 $query = "INSERT INTO bucket(session_id, parent, name, price, count, money, regdate) VALUES ('$session_id', '$no', '$name', '$price', '$count', '$money', '$regdate')";
 mysqli_query($con,$query);//이름 쿼리결과 할당
 mysqli_close($con);
?>

<script type="text/javascript">
  alert("장바구니에 넣었습니다.");
  history.back();
</script>
