<?php
$con = mysqli_connect( 'localhost', 'shop', '7941', 'shop' );
      $sql = "SELECT * FROM product;";
      $result = mysqli_query( $con, $sql );
      while( $row = mysqli_fetch_array( $result ) ) {
        echo '<p> no: ' . $row['no'] . ' name: ' . $row[ 'name' ] . ' img :'. $row[ 'img' ] . ' price :' . $row[ 'price' ] . '</p>';
      }
 ?>

<form class="" action="delete.php" method="post">
<a>삭제할 컨텐츠 no :</a> <input type="text" name="deletenum" value="">
<input type="submit" name="" value="submit">
<input type="button" value="뒤로가기" onclick="location='adminpage.php'">

</form>
